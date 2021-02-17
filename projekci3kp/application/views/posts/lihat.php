<div class="container">
    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3"><?= $post['judul']; ?>
    </h1>

    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="<?= base_url(); ?>post">Post</a>
        </li>
        <li class="breadcrumb-item active">Lihat Post</li>
    </ol>

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Preview Image -->
            <img class="img-fluid rounded" src="<?= base_url() ?>assets/img/poster1.jpg" alt="">

            <hr>

            <!-- Date/Time -->
            <p>Posted on Februay 17, 2021 at 19:45 PM</p>

            <hr>

            <!-- Post Content -->
            <p class="" style="text-indent: 35px;"><?= $post['isi']; ?></p>

            <blockquote class="blockquote">
                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                </p>
                <footer class="blockquote-footer">Someone famous in
                    <cite title="Source Title">Source Title</cite>
                </footer>
            </blockquote>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat
                totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam
                tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae?
                Qui,
                necessitatibus, est!</p>

            <hr>

            <!-- Comments Form -->
            <div class="card my-4">
                <h5 class="card-header">Tinggalkan Komentar </h5>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <!-- Single Comment -->
            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0">Michael</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                    purus
                    odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                    fringilla. Donec lacinia congue felis in faucibus.
                </div>
            </div>

            <!-- Comment with nested comments -->
            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-body">
                    <h5 class="mt-0">Putri</h5>
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras
                    purus
                    odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                    fringilla. Donec lacinia congue felis in faucibus.

                    <div class="media mt-4">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">Super Admin</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                            Cras
                            purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                            nisi
                            vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>

                    <div class="media mt-4">
                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                        <div class="media-body">
                            <h5 class="mt-0">Putri</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin.
                            Cras
                            purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac
                            nisi
                            vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>

                </div>
            </div>

        </div>


        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">Categories</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#"><span class="badge badge-pill badge-info">Adventure</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="badge badge-pill badge-warning">Mistery</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="badge badge-pill badge-primary">Horror</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#"><span class="badge badge-pill badge-danger">Survival</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="badge badge-pill badge-success">Arcade</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="badge badge-pill badge-dark">MMORPG</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#"><span class="badge badge-pill badge-danger">Action</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="badge badge-pill badge-secondary">Role-Playing</span></a>
                                </li>
                                <li>
                                    <a href="#"><span class="badge badge-pill badge-primary">Simulation</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">Side Widget</h5>
                <div class="card-body">
                    You can put anything you want inside of these side widgets. They are easy to use, and feature the
                    new
                    Bootstrap 4 card containers!
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->