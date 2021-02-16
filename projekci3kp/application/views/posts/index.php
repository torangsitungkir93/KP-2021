<div class="container">
    <div class="row">
        <div class="col-md-4 d-flex justify-content-between ">
            <h1>Artikel</h1>
            <a href="<?= base_url(); ?>post/tambah" class="btn btn-primary align-self-center">Tambah Post</a>
        </div>
    </div>
    <?= $this->pagination->create_links(); ?>
    <div class="row mt-3">
        <?php foreach ($posts as $post) : ?>
        <div class="col-md-4 mb-3">
            <h3 class="text-truncate"><?= $post['judul']; ?></h3>
            <p
                style="-webkit-line-clamp:4; overflow:hidden; text-overflow:ellipsis; display: -webkit-box; -webkit-box-orient:vertical;">
                <?= $post['isi']; ?>
            </p>
            <a role="button" href="<?= base_url(); ?>posts/artikel <?= $post['judul'] ?>" class="btn btn-primary">Lihat
                &raquo;
            </a>
            <a role="button" href="<?= base_url(); ?>post/update/<?= $post['id_post']; ?>"
                class="btn btn-success">Update</a>
            <a href="<?= base_url() ?>post/hapus/<?= $post['id_post'] ?>" class="btn btn-danger"
                onclick="return confirm ('Yakin ingin menghapus post ini?')">Hapus</a>
            <hr>
        </div>
        <?php endforeach; ?>
    </div>
</div>