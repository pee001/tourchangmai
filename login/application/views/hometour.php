
<!DOCTYPE html>
<html lang="en">

<head>



    <title><?php echo $this->lang->line('home_shining'); ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('css/bootstrap.min.css" rel="stylesheet');?>">


    <!-- Custom CSS -->
    <link href="<?php echo base_url('css/business-casual.css');?>" rel="stylesheet">

    <link href="<?php echo base_url('css/lightbox.css');?>" rel="stylesheet">
    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>




    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top " >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" >
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="<?php echo base_url('index.php');?>"><?php echo $this->lang->line('home_home'); ?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    <li>
                        <a href="#homes"><?php echo $this->lang->line('home_home'); ?></a>
                    </li>
                    <li>
                        <a href="#trip"><?php echo $this->lang->line('home_trip'); ?></a>
                    </li>

                    <li>
                        <a href="#contact"><?php echo $this->lang->line('home_contect'); ?></a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

 <div id="homes" class="brand"><?php echo $this->lang->line('home_shining'); ?></div>
    <div class="container">
        <div class="row">
            <div class="box">
                <div class="col-lg-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="<?php echo base_url('img/img-2.jpg');?>" alt="">
                            </div>
                            <div class="item">
                                <img  class="img-responsive img-full"  src="<?php echo base_url('img/img-3.jpg');?>" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="<?php echo base_url('img/img-4.jpg');?>" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div>
                    <h2 class="brand-before">
                        <small><?php echo $this->lang->line('home_welcome'); ?></small>
                    </h2>
                     <p class="brand-name"><?php echo $this->lang->line('home_shining'); ?></p>
                    <hr class="tagline-divider">

                </div>
            </div>
        </div>
      </div>
      <section id="trip">
        <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">
                        <strong><?php echo $this->lang->line('home_trip'); ?></strong>
                    </h2>
                    <hr>
                </div>

            <div class="container">

            <div class="row">
              <?php foreach($promotion->result() as $pro)
                {?>
                <div class="col-sm-6 portfolio-item ">
                    <a href="#<?php echo  $pro->proId;	?>" class="portfolio-link" data-toggle="modal">
                        <div class="caption">

                        </div>
                      <?php printf('<img src="%s"width="100px" height="100px" class="img-circle"> ',base_url().'/'.$pro->proImg);	?>
                      <p><strong> <?php echo $this->lang->line('home_destination'); ?> :<?php echo  $pro->derection;	?><br>
                                <?php echo $this->lang->line('home_duration'); ?> : <?php echo  $pro->duration;	?><br>
                                <?php echo $this->lang->line('home_start'); ?> :<?php echo  $pro->star;	?> TB</strong></p>
                    </a>
						<a href="<?php echo base_url('index.php/Addhometour/changeToEng');?>">English</a> | <a href="<?php echo base_url('index.php/Addhometour/changeToTha');?>">Thai</a> | <a href="<?php echo base_url('index.php/Addhometour/changeToBum');?>">Bumma</a>
                </div>
                <?php }

                ?>




            </div>
        </div>

            </div>
        </div>


    </div>
    </section>
    <!-- /.container -->
    <section id="contact">
    <div class="container">

     <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center"><?php echo $this->lang->line('home_contect'); ?>

                    </h2>
                    <hr>
                    <p><?php echo $this->lang->line('home_phone'); ?>:
                        <strong>1111111111</strong>
                    </p>
                    <p><?php echo $this->lang->line('home_email'); ?>:
                        <strong><a href="mailto:name@example.com">peeoa.001@gmail.com</a></strong>
                    </p>
                    <p><?php echo $this->lang->line('home_address'); ?>:
                        <strong>2332255222
                            <br>555555555555</strong>
                    </p>
                    <form role="form" method="post" action="<?php echo base_url('index.php/addhometour/addcontent');?>">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label><?php echo $this->lang->line('home_name'); ?></label>
                                <input type="text" class="form-control" name="name" required="required">
                            </div>
                            <div class="form-group col-lg-4">
                                <label><?php echo $this->lang->line('home_address'); ?></label>
                                <input type="email" class="form-control" name="email" required="required" ><?php echo validation_errors(); ?>
                            </div>
                            <div class="form-group col-lg-4">
                                <label><?php echo $this->lang->line('home_phone'); ?></label>
                                <input type="tel" class="form-control" name="phone" required="required">
                            </div>
                            <div class="clearfix"></div>
                            <div class="form-group col-lg-12">
                                <label><?php echo $this->lang->line('home_message'); ?></label>
                                <textarea class="form-control" rows="6" name="message" ></textarea>
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact" >
                                <button type="submit" class="btn btn-default"><?php echo $this->lang->line('home_submit'); ?></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
         </section>
         </div>
     <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                      <ul class="list-inline item-details">
                                <li>
                                    <strong><a href="https://www.facebook.com/pee.trop"> <img src="<?php echo base_url('img/images.png');?>" width="20%" height="12%"></a>
                                        <a href="https://plus.google.com/108406988356145910416/posts"> <img src="<?php echo base_url('img/GooglePlus-Blue-Logo.png');?>" width="20%" height="10%"></a>
                                    </strong>
                                </li>


                            </ul>

                </div>
            </div>
        </div>
    </footer>
    <?php foreach($promotion->result() as $pro)
      {?>
     <div class="portfolio-modal modal fade" id="<?php echo  $pro->proId;?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body " >
                            <center><p class="brand-name"><?php echo $this->lang->line('home_shining'); ?></p></ceenter>
                            <hr class="star-primary">
                            <div class="gallery">
                              <div class="row">
                                <div class="col-lg-12">
                                  <a href="<?php echo base_url().'/'.$pro->proImg;?> "
                                    data-title="My fircst caption" data-lightbox="vacation">
                                   <?php printf ('<img src="%s"width="300px" height="300px" class="img-rounded">',base_url().'/'.$pro->proImg);	?>
                                 </a>
                                  <a href="<?php echo base_url('img/IMG_5835 (1).JPG');?>"
                                    data-title="My fircst caption" data-lightbox="vacation">
                                 </a>
                                 <a href="<?php echo base_url('img/IMG_5836.JPG');?>"
                                    data-title="My fircst caption" data-lightbox="vacation">
                                 </a>
                                 <a href="<?php echo base_url('img/IMG_5838.JPG');?>"
                                    data-title="My fircst caption" data-lightbox="vacation">
                                 </a>
                                 <a href="<?php echo base_url('img/IMG_5844.JPG');?>"
                                    data-title="My fircst caption" data-lightbox="vacation">
                                 </a>
                                 <a href="<?php echo base_url('img/IMG_5845.JPG');?>"
                                    data-title="My fircst caption" data-lightbox="vacation">
                                 </a>
                                 <a href="<?php echo base_url('img/IMG_5856.JPG');?>"
                                    data-title="My fircst caption" data-lightbox="vacation">
                                 </a>
                                </div>
                              </div>
                          </div>


                            <p><?php echo $this->lang->line('home_destination'); ?>:
                        <strong><?php echo  $pro->derection;	?></strong>
                            </p>
                            <p><?php echo $this->lang->line('home_activity'); ?>:
                                <strong><?php echo $this->lang->line('home_activityd'); ?></strong>
                            </p>
                            <p><?php echo $this->lang->line('home_duration'); ?>:
                                <strong><?php echo  $pro->duration;	?></strong>
                            </p>

                                    <?php echo  $pro->proTex;	?><br><br>

                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> <?php echo $this->lang->line('home_close'); ?></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php }

    ?>

    <!-- jQuery -->
    <script src="<?php echo base_url('js/jquery.js');?>"></script>


    <!-- Bootstrap Core JavaScript -->
  <script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
    <script src="<?php echo base_url('js/lightbox.js');?>"></script>



</body>

</html>
