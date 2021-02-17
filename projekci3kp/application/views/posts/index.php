<!-- Page Content -->
<div class="container">
    <!-- Portfolio Section -->
    <h2 class="text-center">Kumpulan Artikel</h2>
    <form class="form-inline my-2 my-lg-0" action="<?= base_url('post'); ?>" method="post">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
        <button class="btn btn-info my-2 my-sm-0" type="submit" name="submit">Search</button>
        <a href="<?= base_url(); ?>post/tambah/" class="btn btn-primary align-self-center" style="margin-left: 40px;"
            role="button" data-toggle="modal" data-target="#tambahModal">Tambah
        </a>
    </form>
    <br>
    <?= $this->pagination->create_links(); ?>

    <?= $this->session->flashdata('message'); ?>
    <div class="row">
        <?php foreach ($posts as $post) : ?>
        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
                <img class="card-img-top" src="<?= base_url(); ?>assets/img/404.jpg" alt="">
                <div class="card-body">
                    <h4 class="card-title text-center">
                        <a href="<?= base_url(); ?>post/lihat/<?= $post['id_post']; ?>"><?= $post['judul']; ?></a>
                    </h4>
                    <div class="card-text"
                        style=" text-indent: 35px; -webkit-line-clamp:7; overflow:hidden; text-overflow:ellipsis; display: -webkit-box; -webkit-box-orient:vertical;">
                        <?= $post['isi']; ?>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url(); ?>post/lihat/<?= $post['id_post']; ?>" class="btn btn-primary"
                        role="button">Lihat
                    </a>
                    <?php if (logged_in()) { ?>
                    <a href="<?= base_url(); ?>post/update/<?= $post['id_post']; ?>" class="btn btn-success"
                        role="button">Update
                    </a>
                    <a href="<?= base_url(); ?>post/hapus/<?= $post['id_post']; ?>" class="btn btn-danger"
                        onclick="return confirm ('Yakin ingin menghapus post ini?')">Hapus
                    </a>
                    <?php } else { ?>
                    <a href="<?= base_url(); ?>post/update/<?= $post['id_post']; ?>" class="btn btn-secondary disabled"
                        role="button">Update
                    </a>
                    <a href="<?= base_url(); ?>post/hapus/<?= $post['id_post']; ?>"
                        class="btn btn-secondary disabled">Hapus
                    </a>
                    <?php } ?>
                </div>

            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <!-- /.container -->
</div>


<!-- Modal -->
<div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="tambahModalLabel">Tambah Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('post/tambah/') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="" class="form-control" id="isi" aria-describedby="emailHelp"
                            placeholder="Masukkan Judul" name="judul">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Isi</label>
                        <textarea name="isi" id="isi" class="form-control" cols="30" rows="10"
                            placeholder="Masukkan Isi"></textarea>
                    </div>
                </div>
                <div class="modal-footer border-top-0 d-flex justify-content-center">
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>