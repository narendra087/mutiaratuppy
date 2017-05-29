<html>

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">


    <meta name="keywords" content="">

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="<?=base_url()?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/owl.carousel.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <?php 
    $a=array("green", "blue", "pink", "violet", "lightgreen");
    $random_keys=array_rand($a);
    ?>
    <link href="<?=base_url()?>assets/css/style<?php
    echo ".".$a[$random_keys].".";?>css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="<?=base_url()?>assets/css/custom.css" rel="stylesheet">

    <script src="<?=base_url()?>assets/js/respond.min.js"></script>

    <link rel="shortcut icon" href="<?=base_url()?>assets/img/tuppy.png">
    <link href="<?=base_url()?>assets/css/btntop.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/js/btntop.css" rel="stylesheet">


</head>

<body>
<style>
#myBtn {
    display: none; /* Hidden by default */
    position: fixed; /* Fixed/sticky position */
    bottom: 20px; /* Place the button at the bottom of the page */
    right: 30px; /* Place the button 30px from the right */
    z-index: 99; /* Make sure it does not overlap */
    border: solid;
    border-color: <?php echo $a[$random_keys];?>;
    outline-width: 0.5px; /* Remove borders */
    background-color: transparent; /* Set a background color */
    font-style: bold;
    color: gray; /* Text color */
    cursor: pointer; /* Add a mouse pointer on hover */
    padding: 5px; /* Some padding */
    border-radius: 10px; /* Rounded corners */
}

#myBtn:hover {
    font-style: bold;
    background-color: transparent; /* Add a dark-grey background on hover */
    color: <?php echo $a[$random_keys];?>;

}
</style>
<a href="#top"  class="scroll-to"><button  id="myBtn" title="Go to top">Top</button></a>
<script>
    // When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
</script>
<div id="top">
        <div class="container">
            <div class="col-md-8" data-animate="fadeInDown">
                <ul class="menu">
                    <li style="color: white">Assalamu'alaikum | Welcome to Mutiara Tuppy | Fell free to Contact Us...
                    </li>
                </ul>
            </div>
        </div>
        
    </div>

    <!-- *** TOP BAR END *** -->

    <!-- *** NAVBAR ***
 _________________________________________________________ -->

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand home" href="#" data-animate-hover="bounce">
                    <img src="<?=base_url()?>assets/img/tuppy.png" alt="Mutiara Tuppy logo" class="hidden-xs">
                    <img src="<?=base_url()?>assets/img/tuppy.png" alt="Mutiara Tuppy logo" class="visible-xs"><span class="sr-only">Mutiara Tuppy - go to homepage</span>
                </a>
                <div class="navbar-buttons">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-align-justify"></i>
                    </button>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <!--/.navbar-header -->

            <div class="navbar-collapse collapse" id="navigation">

                <ul class="nav navbar-nav navbar-left">
                    <li class="active"><a href="#">Home</a>
                    </li>
                    <li class="">
                        <a href="#product" class="scroll-to" data-toggle="" data-hover="" data-delay="200">product <b class=""></b></a>
                        <ul class="dropdown-menu">
                            <li>
                            <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h5 align="center">LIST PRODUCT</h5>
                                        </div>
                                        <?php $z=count($kategori); ?>
                                        <?php for ($i=0; $i<=$z-1; $i++) { ?>
                                <div>
                                    <div>
                                        <div class="col-sm-3">
                                            <h5><?= $kategori[$i]['nama_kategori']; ?></h5>
                                            <?php $w=count($nama[$kategori[$i]['nama_kategori']]); ?>
                                            <?php for($j=0; $j<=$w-1; $j++){ ?>
                                            <ul>
                                                <li><?php 
                                            foreach ($query->result() as $a){

                                                ?> <a href="#product" class="scroll-to" ><?php }; ?><?= $nama[$kategori[$i]['nama_kategori']][$j]['nama']; ?></a>
                                                </li>
                                            </ul>
                                            <?php }; ?>                                     
                                        </div>
                                        <?php }; ?>
                                        
                                    </div>
                                </div>
                                <!-- /.yamm-content -->
                            </li>

                        </ul>
                    </li>
                    <li><a href="#order" class="scroll-to">How to order</a>
                    </li>
                    <li><a href="#faq" class="scroll-to">FAQ</a>
                    </li>
                    <li><a href="#contact" class="scroll-to">Contact Us</a>
                    </li>

            </div>
            <!--/.nav-collapse -->

            <div class="navbar-buttons">

                <div class="navbar-collapse collapse right" id="search-not-mobile">
                    <button type="button" class="btn navbar-btn btn-primary" data-toggle="collapse" data-target="#search">
                        <span class="sr-only">Toggle search</span>
                        <i class="fa fa-search"></i>
                    </button>
                </div>

            </div>

            <div class="collapse clearfix" id="search">

                <form class="navbar-form" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-btn">

			<button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>

		    </span>
                    </div>
                </form>

            </div>
            <!--/.nav-collapse -->

        </div>
        <!-- /.container -->
    </div>
    </html>
    </body>