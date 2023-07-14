<?php

use App\Controllers\Komik;
?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<br>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2>Form Ubah Data</h2>


            <form action="/komik/update/<?= $komik['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $komik['slug']; ?>">
                <input type="hidden" name="sampulLama" value="<?= $komik['sampul']; ?>">

                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">judul</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= (session('validation')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" value="<?= old('judul',$komik['judul']); ?>" aria-describedby="validationServer03Feedback" autofocus>
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?php if (session('validation')) : ?>
                                <div class="alert alert-danger alert-dismissible">
                                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                    <?php foreach (session('validation')->getErrors() as $error) : ?>
                                        <li><?= esc($error) ?></li>
                                    <?php endforeach ?>
                                </div>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penulis" class="col-sm-2 col-form-label">penulis</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penulis" name="penulis" value="<?= old('penulis',$komik['penulis']); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penerbit" class="col-sm-2 col-form-label">penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= old('penerbit',$komik['penerbit']); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sampul" class="col-sm-2 col-form-label">sampul</label>
                    <div class="col-sm-2">
                        <img src="/img/<?= $komik['sampul']; ?>" class="img-thumbnail img-preview" >
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="sampul" name="sampul" onchange="previewImg()">
                            <label class="custom-file-label" for="sampul"><?= $komik['sampul']; ?></label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Ubah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>