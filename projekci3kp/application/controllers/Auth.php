<?php

class Auth extends CI_Controller
{
    public function  __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('email');
    }

    public function index()
    {
        if ($this->session->userdata('email')) {
            redirect('home');
        }

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['title'] = "Halaman Login";
            $this->load->view('auth/templates/header', $data);
            $this->load->view('auth/login');
            $this->load->view('auth/templates/footer');
        } else {
            //Validasi Sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        if ($user) {
            //Usernya ada
            if ($user['is_active'] == 1) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email']
                    ];
                    $this->session->set_userdata($data);
                    redirect('home');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show"
                    role="alert">
                    <strong>Failed!</strong> wrong password !
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show"
                role="alert">
               <strong>Failed!</strong> This Email has not been activated !
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show"
             role="alert">
            <strong>Failed!</strong> Email is not Registered !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');
            redirect('auth');
        }
    }

    public function register()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }

        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email already registered'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]
                                            |matches[password2]', [
            'matches' => 'Password tidak cocok !',
            'min_length' => 'Password terlalu pendek !'
        ]);

        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Halaman Registrasi';
            $this->load->view('auth/templates/header', $data);
            $this->load->view('auth/register');
            $this->load->view('auth/templates/footer');
        } else {
            $email = $this->input->post('email', true);
            //Siapkan Token 
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];

            $this->User_model->register();
            $this->User_model->createVerification($user_token);

            $this->_sendEmail($token);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show"
             role="alert">
            <strong>Congratulation!</strong> Your account has been created.Please Activate your Account !
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>');

            redirect('auth');
        }
    }

    public function _sendEmail($token)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'ci3kp2021@gmail.com',
            'smtp_pass' => 'azsx@ci3kp',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"

        ];

        $this->load->library('email', $config);
        $this->email->initialize($config);  //tambahkan baris ini

        $this->email->from('ci3kp2021@gmail.com', 'CI3KP ');
        $this->email->to($this->input->post('email'));

        $this->email->subject('Account Verification');
        $this->email->message('
            Click this link to verify you account : 
             <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '">
            Activate</a>
        ');

        if ($this->email->send()) {
            echo "Registrasi berhasil dikirim";
            return true;
        } else {
            echo $this->email->print_debugger();
            die('PROGRAM BERHENTILAH');
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->User_model->getUserByEmail($email);

        if ($user) {
            $user_token = $this->User_model->getUserToken($token);

            if ($user_token) {
                if (time() - $user_token['date_created'] < (60 * 4)) {
                    $this->User_model->activate($email);
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show"
                    role="alert">
                   <strong></strong> ' . $email . ' Has been activated ! Please Login :)
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>');
                    redirect('auth');
                } else {
                    $this->User_model->deleteUserToken($email);

                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show"
                    role="alert">
                   <strong> Token Expired </strong>Account Activation Failed!
                   <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show"
                role="alert">
               <strong></strong> Token Invalid !
               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
               </button>
             </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show"
        role="alert">
       <strong>Wrong Email</strong> Data Activation Failed !
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show"
        role="alert">
       <strong></strong> You Have Been Logout !
       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         <span aria-hidden="true">&times;</span>
       </button>
     </div>');
        redirect('auth');
    }
}