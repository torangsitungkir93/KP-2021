<form action="<?= base_url(); ?>post/prosesTambah" method="POST">
    <div class="container">
        <div class="form-group">
            <label for="exampleInputEmail1">Judul</label>
            <input name="judul" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Isi</label>
            <textarea name="isi" id="isi" class="form-control" cols="30" rows="10"></textarea>
        </div>
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>