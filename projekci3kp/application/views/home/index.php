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
            <div class="card h-100 text-center">
                <img class="card-img-top" src="<?= $link1; ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title">Fortnite</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia
                        eum
                        ipsum fugiat odio officiis odit.</p>
                </div>
                <div class="card-footer">
                    <a href="#">Fortnite@example.com</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 text-center">
                <img class="card-img-top" src="<?= $link2; ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title">Among Us</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia
                        eum
                        ipsum fugiat odio officiis odit.</p>
                </div>
                <div class="card-footer">
                    <a href="#">amongUs@example.com</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-4">
            <div class="card h-100 text-center">
                <img class="card-img-top" src="<?= $link3; ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title">Valorant</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Position</h6>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus aut mollitia
                        eum
                        ipsum fugiat odio officiis odit.</p>
                </div>
                <div class="card-footer">
                    <a href="#">valorant@example.com</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>