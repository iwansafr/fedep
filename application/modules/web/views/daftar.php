<div class="section first-section">

</div>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-top clearfix">
                        <h4 class="pull-left">UMKM <a href="#"><i class="fa fa-rss"></i></a></h4>
                        <?php if (!empty($data['msg'])) : ?>
                            <?php echo alert($data['status'], $data['msg']) ?>
                            <?php if (!empty($data['msgs'])) : ?>
                                <?php foreach ($data['msgs'] as $key => $value) : ?>
                                    <?php echo alert($data['status'], $value) ?>
                                <?php endforeach ?>
                            <?php endif ?>
                        <?php endif ?>
                    </div><!-- end blog-top -->
                    <div class="blog-list clearfix">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="card card-default">
                                <div class="card-header">
                                    Form Pendaftaran UMKM
                                </div>
                                <div class="card-body p-3">
                                    <div class="form-group">
                                        <label for="">Nama Usaha</label>
                                        <input type="text" name="nama_usaha" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">email</label>
                                        <input type="email" class="form-control" name="email" placeholder="email" value="<?php echo @$data['user']['email'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">username</label>
                                        <input type="username" class="form-control" name="username" placeholder="username digunakan untuk login">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">password</label>
                                        <input type="password" class="form-control" name="password" placeholder="password digunakan untuk login">
                                    </div>
                                    <div class="form-group">
                                        <label for="nama">nama</label>
                                        <input type="text" class="form-control" name="nama" placeholder="nama" value="<?php echo @$data['user_profile']['nama'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="photo">photo (max file size 3Mb)</label>
                                        <input type="file" name="img" class="form-control" id="photo" accept=".jpg,.jpeg,.png">
                                    </div>
                                    <div class="form-group">
                                        <label for="no_telephone">no tlp</label>
                                        <input type="number" class="form-control" name="no_tlp" placeholder="no tlp" value="<?php echo @$data['user_profile']['no_tlp'] ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">alamat</label>
                                        <textarea type="text" class="form-control" rows="3" name="alamat" placeholder="alamat" value="<?php echo @$data['user_profile']['alamat'] ?>" required><?php echo @$data['user_profile']['alamat'] ?></textarea>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-sm btn-primary">Daftar</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- end blog-list -->
                </div><!-- end page-wrapper -->

                <hr class="invis">

            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>