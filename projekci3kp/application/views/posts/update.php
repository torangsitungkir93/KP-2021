<div class="container">
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header">Update Post</h5>
                <div class="card-body">

                    <form action="<?= base_url(); ?>post/prosesUpdate/<?= $post['id_post']; ?>" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Judul</label>
                            <input name="judul" class="form-control" id="judul" aria-describedby="emailHelp"
                                value="<?= $post['judul']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Isi</label>
                            <textarea name="isi" id="isi" class="form-control" cols="30" rows="10"
                                required><?= $post['isi']; ?></textarea>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="<?= base_url(); ?>" class="btn btn-seecondary"></a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>