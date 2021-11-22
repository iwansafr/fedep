<div class="section first-section">

</div>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="page-wrapper">
                    <div class="blog-top clearfix">
                        <h4 class="pull-left">UMKM <a href="#"><i class="fa fa-rss"></i></a></h4>
                    </div><!-- end blog-top -->

                    <div class="blog-list clearfix">
                        <div class="row">
                            <?php if (!empty($data)) : ?>
                                    <div class="col-md-12">
                                        <div class="card card-default">
                                            <div class="card-body">
                                                <div class="blog-meta big-meta col-md-12">
                                                    <h4><a href="<?php echo base_url('web/umkm_detail/'.$data['id'].'/'.str_replace(' ','_',$data['nama'])); ?>" title="" target="_blank"><?php echo $data['nama'] ?></a></h4>
                                                    <img src="<?php echo base_url('assets/images/user/'.str_replace(' ','_',$data['img']))?>" class="img img-responsive img-fluid" style="object-fit: contain; height: 250px; width: 100%;" alt="">
                                                    <p>
                                                        <?php echo word_limiter($data['alamat'], 70); ?>
                                                    </p>
                                                    <small class="firstsmall">
                                                        <a class="bg-orange" href="#" title="">
                                                            umkm
                                                        </a>
                                                    </small>
                                                    <small><a href="#" title=""><?php echo date("j F Y | g:i a", strtotime($data['created'])) ?></a></small></a></small>
                                                </div><!-- end meta -->
                                            </div>
                                        </div>
                                    </div>
                            <?php endif ?>
                        </div>
                    </div><!-- end blog-list -->
                </div><!-- end page-wrapper -->

                <hr class="invis">

            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>