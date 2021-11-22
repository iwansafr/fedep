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
                        <?php if (!empty($data['data'])) : ?>
                            <?php foreach ($data['data'] as $key => $value) : ?>
                                <div class="blog-box row">
                                    <div class="blog-meta big-meta col-md-12">
                                        <h4><a href="<?php echo base_url('web/umkm_detail/'.$value['id'].'/'.urlencode($value['nama'])); ?>" title="" target="_blank"><?php echo $value['nama'] ?></a></h4>
                                        <img src="<?php echo base_url('assets/images/user/'.str_replace(' ','_',$value['img']))?>" class="img img-responsive img-fluid" alt="">
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
                                </div><!-- end blog-box -->
                            <?php endforeach ?>
                        <?php endif ?>
                    </div><!-- end blog-list -->
                </div><!-- end page-wrapper -->

                <hr class="invis">


            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>