<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Petugas
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $petugas['id']; ?>">
                        <div class="form-group">
                            <label for="id_petugas">id_petugas</label>
                            <input type="text" name="id_petugas" class="form-control" id="id_petugas" value="<?= $petugas['id_petugas']; ?>">
                            <small class="form-text text-danger"><?= form_error('id_petugas'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="username">username</label>
                            <input type="text" name="username" class="form-control" id="username" value="<?= $petugas['username']; ?>">
                            <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="text" name="password" class="form-control" id="password" value="<?= $petugas['password']; ?>">
                            <small class="form-text text-danger"><?= form_error('password'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_petugas">nama_petugas</label>
                            <input type="text" name="nama_petugas" class="form-control" id="nama_petugas" value="<?= $petugas['nama_petugas']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_petugas'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="level">level</label>
                            <input type="text" name="level" class="form-control" id="level" value="<?= $petugas['level']; ?>">
                            <small class="form-text text-danger"><?= form_error('level'); ?></small>
                        </div>
                       
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>