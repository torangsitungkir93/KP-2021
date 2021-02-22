<header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <?php
        $link1 = base_url() . 'assets/img/poster1.jpg';
        $link2 = base_url() . 'assets/img/poster2.jpg';
        $link3 = base_url() . 'assets/img/poster3.jpg';

        $carousel1 = base_url() . 'assets/img/carousel1.jpg';
        $carousel2 = base_url() . 'assets/img/carousel2.png';
        $carousel3 = base_url() . 'assets/img/carousel3.jpg';

        $about = base_url() . 'assets/img/about.gif';
        ?>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            <div class="carousel-item active" style="background-image: url('<?= $carousel1; ?>') ">
                <div class="carousel-caption d-none d-md-block">
                    <h3>First Slide</h3>
                </div>
            </div>
            <!-- Slide Two - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('<?= $carousel2; ?>')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Second Slide</h3>
                </div>
            </div>
            <!-- Slide Three - Set the background image for this slide in the line below -->
            <div class="carousel-item" style="background-image: url('<?= $carousel3; ?>')">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Third Slide</h3>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<div>
    <br><br>
</div>

<!-- Intro Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <img class="img-fluid rounded mb-4" src="<?= $about; ?>" alt="">
        </div>
        <div class="col-lg-6">
            <h2 style="margin-left: 35px;"> Tentang MyBlog </h2>
            <p style="margin-left: 35px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil
                eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit
                voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
            <p style="margin-left: 35px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni,
                aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet.
                Odit, temporibus reprehenderit dolorum!
            </p>
            <p style="margin-left: 35px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur,
                modi mollitia corporis ips
                voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus
                perspiciatis quis?</p>
        </div>
    </div>
    <!-- /.row -->

    <!-- Team Members -->
    <h2>Post Terbaru</h2>

    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="card h-100 ">
                <img class="card-img-top" src="<?= $link1; ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title" text-center>Fortnite Hadir di Konsol Nintendo Switch</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Position</h6>

                    <p class="card-text"
                        style=" text-indent: 35px; -webkit-line-clamp:7; overflow:hidden; text-overflow:ellipsis; display: -webkit-box; -webkit-box-orient:vertical;">
                        Kabar gembira bagi gamer pengguna konsol Nintendo Switch. Game Fortnite
                        bergenre battle royale resmi diumumkan dapat dimainkan di Nintendo Swich setelah sebelumnya
                        hanya merupakan rumor.

                        Dilansir dari CNet, pengembang Fortnite, Epic Games juga mengatakan game survival ini sudah bisa
                        diunduh hari ini. Informasi ini disampaikan pada Epic Games dalam acara tahun Electronic
                        Entertaiment Expo pada Selasa (12/6).

                        Kendati demikian, Sony tetap tidak mengizinkan para gamer Fortnite dari konsol lain selain PS4
                        untuk bermain online. Jadi pengguna Switch tidak dapat bermain Fortnite secara online dengan
                        temannya yang menggunakan PS4.

                        Padahal banyak orang berharap Sony bisa menghapus pelarangan ini sehingga bisa bermain antar
                        konsol. Faktanya akan muncul eror apabila gamer memilik akun Fortnite di PS4 dan berusaha untuk
                        login di Switch.

                        Permainan Fortnite PS 4 antar konsol hanya bisa dilakukan dengan PC, MAC, dan iOS. Sedangkan
                        untuk Switch bisa dimainkan dengan PC, Mac, iOS, dan Xbox One.

                        Fortnite di konsol Switch akan memiliki komunikasi online lebih baik dibandingan game Switch
                        lainnya. Pasalnya berbeda game lain di konsol Switch yang mengharuskan untuk mengetik chat,
                        komunikasi Fortnite di Switch bisa dilakukan dengan headset yang memiliki microphone. Artinya
                        komunikasi bisa secara lebih efektif dilakukan.</p>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url(); ?>post/">Post</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 ">
                <img class="card-img-top" src="<?= $link2; ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title text-center">Hari gini belum tau game Among Us ?</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                    <p class="card-text"
                        style=" text-indent: 35px; -webkit-line-clamp:7; overflow:hidden; text-overflow:ellipsis; display: -webkit-box; -webkit-box-orient:vertical;">
                        Halo Sobat My Blog ! Kamu tentu sudah tau dong tentang game yang sedang menjadi
                        perbincangan utama para gamer dunia? Ya, Among Us! Among Us menjadi game yang banyak banget
                        dibahas. Siapa sih yang sekarang nggak tau game Among Us? Hampir semua orang pasti tau permainan
                        ini. Nggak cuma gamer profesional, orang awam juga suka memainkan game hits 2020 yang bikin
                        ingin main lagi dan lagi.

                        Among Us jadi game yang paling banyak diunduh saat ini. Bukan hanya karena gratis, tapi karena
                        game ini memang sedang hits. Hampir semua orang pasti tau permainan yang satu ini. Kalau ada
                        yang belum tau tentang Among Us, wah parah banget sih.</p>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url(); ?>post/">Post</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 ">
                <img class="card-img-top" src="<?= $link3; ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title text-center">Valorant First Strike,Turname Pertama dari Riot Games</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                    <p class="card-text"
                        style=" text-indent: 35px; -webkit-line-clamp:7; overflow:hidden; text-overflow:ellipsis; display: -webkit-box; -webkit-box-orient:vertical;">
                        Setelah VALORANT Ignition Series yang melibatkan komunitas, Riot Games akhirnya
                        turun tangan dan selenggarakan VALORANT First Strike secara mandiri.

                        Setelah rilis tanggal 2 Juni 2020 lalu, VALORANT terbilang mendapat penerimaan yang cukup
                        positif, baik secara internasional ataupun lokal. Merupakan game tactical FPS yang bersifat
                        kompetitif, tidak heran jika esports jadi bagian yang melekat dari VALORANT. Sebelumnya Riot
                        Games pernah mengatakan bahwa mereka tidak akan menangani esports VALORANT secara langsung untuk
                        sementara waktu. Maka dari itu mereka membuat inisiatif bernama Ignition Series, sebuah seri
                        turnamen besutan komunitas yang terselenggara di berbagai regional di dunia, yang di dukung oleh
                        Riot Games.

                        Tetapi melihat antusiasme atas esports yang begitu tinggi, Riot Games sepertinya tidak ingin
                        menunggu lebih lama untuk mencoba mengurus esports VALORANT secara langsung. Maka dari itu, pada
                        video Dev Diaries yang terbit tanggal 23 September 2020 lalu, Riot Games mengumumkan VALORANT
                        First Strike.</p>
                </div>
                <div class="card-footer">
                    <a href="<?= base_url(); ?>post/">Post</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>