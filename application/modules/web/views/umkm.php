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
                            <?php if (!empty($data['data'])) : ?>
                                <?php foreach ($data['data'] as $key => $value) : ?>
                                    <div class="col-md-3">
                                        <div class="card card-default">
                                            <div class="card-body">
                                                <div class="blog-meta big-meta col-md-12">
                                                    <h4><a href="<?php echo base_url('web/umkm_detail/'.$value['id'].'/'.str_replace(' ','_',$value['nama'])); ?>" title="" target="_blank"><?php echo $value['nama'] ?></a></h4>
                                                    <img src="<?php echo base_url('assets/images/user/'.str_replace(' ','_',$value['img']))?>" class="img img-responsive img-fluid" style="object-fit: contain; height: 250px; width: 100%;" alt="">
                                                    <p>
                                                        <?php echo word_limiter($value['alamat'], 70); ?>
                                                    </p>
                                                    <small class="firstsmall">
                                                        <a class="bg-orange" href="#" title="">
                                                            umkm
                                                        </a>
                                                    </small>
                                                    <small><a href="#" title=""><?php echo date("j F Y | g:i a", strtotime($value['created'])) ?></a></small></a></small>
                                                </div><!-- end meta -->
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach ?>
                            <?php endif ?>
                        </div>
                    </div><!-- end blog-list -->
                </div><!-- end page-wrapper -->

                <hr class="invis">
                <?php echo $data['pagination'] ?>

            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>