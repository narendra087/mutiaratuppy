<html>
<head>
     <title>
        Mutiara Tuppy | Tupperware Addict
    </title>

<style>
/* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}

/*mulai img modal*/

#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}

</style>

</head>

<body>

<div id="all">

        <div id="content">

            <div class="container">
                <div class="col-md-12">
                    <div id="main-slider">
                        <div class="item">
                            <img src="<?=base_url()?>assets/img/main-slider1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?=base_url()?>assets/img/main-slider2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?=base_url()?>assets/img/main-slider3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="<?=base_url()?>assets/img/main-slider4.jpg" alt="">
                        </div>
                    </div>
                    <!-- /#main-slider -->
                </div>
            </div>

            <!-- *** ADVANTAGES HOMEPAGE ***
 _________________________________________________________ -->

            <div id="hot">
                
                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>Ready Stock</h2>
                        </div>
                    </div>
                    <div id="product">
                </div>
                <!-- <?php foreach ($query->result() as $a){ ?>
                    <center><a data-toggle="modal" href="#myModal" class="btn btn-primary btn-lg">Details</a></center>
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close"
                                        data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title">Detail Product</h4>
                                    </div>
                                    <div class="modal-body">
                                    <?php echo $a->details; ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }?> -->
                <div class="container">
                    <div class="product-slider">
                    <!-- Produk Baru -->
                    <?php foreach ($query->result() as $a){ ?>
                        <div class="item">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                                <img src="<?=base_url()?>assets/uploads/<?php echo $a->gambar; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                                <img src="<?=base_url()?>assets/uploads/<?php echo $a->gambar2; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a class="invisible">
                                    <img src="<?=base_url()?>assets/uploads/<?php echo $a->gambar; ?>" alt="" class="img-responsive">
                                </a>
                                <div class="text">
                                    <h3><?php echo $a->nama; ?></h3>            
                                    <p class="price"><?php echo $a->harga; ?></p>
                                   <center><a href="#order" class="btn btn-primary btn-s scroll-to">Order</a></center>
                                    <p></p>

                                </div>
                                <!-- /.text -->
                            </div>

                            <!-- /.product -->
                        </div>
                        <?php } ?>
                        <!-- <script>
                                // When the user clicks on div, open the popup
                                function myFunction() {
                                    var popup = document.getElementById("myPopup");
                                    popup.classList.toggle("show");
                                }
                        </script> -->

                    </div>
                    </div>

                    <!-- /.product-slider -->
                </div>
                <!-- /.container -->
            </div>

                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close"
                                data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title">Detail Product</h4>
                            </div>
                            <div class="modal-body">
                                <span id="iya"></span>
                            </div>
                            <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- /#hot -->

            <!-- *** HOT END *** -->

            <!-- *** GET INSPIRED ***


 _________________________________________________________ -->
 <div id="hot">

                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2 id="order">How To Order</h2>

                        </div >
                        <center>
                    <div></div>
                    <div class="text"><p class="lead">1. Lihat dan pilih <strong><a href="#product" class="scroll-to">Product</a></strong> yang di inginkan</div>   
                    <div class="text"><p class="lead">2. Hubungi <strong><a href="#footer" class="scroll-to">Contact Person</a></strong> kami dibawah</div>
                    <div class="text"><p class="lead">3. Tanyakan detail barang yang akan dipesan harga maupun stock barang (Karena Harga dapat berubah-rubah setiap hari/Promo)</div>
                    <div  class="text"><p class="lead">4. Kami akan memberikan detail barang sesuai yang di pesan beserta foto apabila chat via Whatsapp/BBM/Line</div>
                    <div class="text"><p class="lead">5. Transfer ke rekening yang akan di beritahu setelah melakukan konfirmasi pemesanan</div>
                    <div class="text"><p class="lead">6. Kirim kan bukti transfer, dan barang akan segera diantar ke alamat yang di tuju</div>
                    <div class="text"><p class="lead">7. Jangan lupa untuk meminta nomor Resi kepada kami.</div></center><center><div class="col-md-12">
                    <img src="<?=base_url()?>assets/img/ts.jpg" width="100px" height="100px">
                    <img src="<?=base_url()?>assets/img/tuppy.png" width="100px" height="50px">
                    <img src="<?=base_url()?>assets/img/qac.jpg" width="100px" height="100px"></div>
                </center>
                    </div>
                </div>
                </div>
            
            <!-- *** GET INSPIRED END *** -->
            <div id="hot">
                <div class="box">
                        <div class="col-md-12">
                            <h2 id="faq">Frequently asked questions</h2>
                        </div>
                        <p class="lead">Are you curious about something? Do you have some kind of problem with our products?</p>
                        <p>This is the list of Frequently Asked Question to our Store</p>


                        <hr>

                        <div class="panel-group" id="accordion">

                            <!-- panel -->
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                        <a data-toggle="collapse" data-parent="#accordion" href="#faq1">

                        1. Warranty?

                        </a>

                    </h4>
                                </div>
                                <div id="faq1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p class="lead">Yes, of course.</p> <br>
                                        <p>We are from Mutiara Tuppy representing Tupperware to give <a>Lifetime Warranty</a> for the products you buy here.<br>
                                        This is the list of Conditions for claiming the <a>Lifetime Warranty.</a>
                                        </p>
                                        <center>
                                            <div class="col-md-4"><img id="myImg" alt="Tersayat" src="<?=base_url()?>assets/img/lw/1.jpg"></div>
                                            <div class="col-md-4"><img id="myImg" alt="Bekas Gigitan" src="<?=base_url()?>assets/img/lw/2.jpg"></div>
                                            <div class="col-md-4"><img id="myImg" alt="Meleleh" src="<?=base_url()?>assets/img/lw/3.jpg"></div>
                                            <div class="col-md-4"> 
                                            <img id="myImg" alt="Melengkung" src="<?=base_url()?>assets/img/lw/4.jpg"></div>
                                            <div class="col-md-4"><img id="myImg" alt="Noda" src="<?=base_url()?>assets/img/lw/5.jpg"></div>
                                            <div class="col-md-4"><img id="myImg" alt="Tergores" src="<?=base_url()?>assets/img/lw/6.jpg"></div></center>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel -->


                        <!-- panel -->
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                        <a data-toggle="collapse" data-parent="#accordion" href="#faq2">

                        2. What to do if I have still not received the order?

                        </a>

                    </h4>
                                </div>
                                <div id="faq2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>You can contact us via sms / call or by whatsapp.</p>
                                        <p>You can also email us by filling out our <a href="#contact" class="scroll-to">"Contact Us"</a> form below</p>
                                            
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel -->

                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                        <a data-toggle="collapse" data-parent="#accordion" href="#faq3">

                        3. What are the meaning of "By Call" in the Price of the Product?

                        </a>

                    </h4>
                                </div>
                                <div id="faq3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        The meaning is that you have to ask first the price of products and the details on us, <br>
                                        because the products have some type such as the large of the products (1 liter, 500 liter, etc)
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel -->


                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                        <a data-toggle="collapse" data-parent="#accordion" href="#faq4">

                        4. What is (2) (4) (*) in the name of Product?

                        </a>

                    </h4>
                                </div>
                                <div id="faq4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>For (2) that means you get two products with the price listed, for (4) same as (2). <br>
                                        While for (*), you can buy all of a full set of tupperware products or you can buy units from that set. </p>
                                        <p>For details can be directly inquired to us.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel -->

                        <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                        <a data-toggle="collapse" data-parent="#accordion" href="#faq5">

                        5. Delivery?

                        </a>

                    </h4>
                                </div>
                                <div id="faq5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Yes, currently we use delivery via <a>JNE</a> and via <a>trusted</a> local delivery service provider</p>
                                        <center>
                                            <div class="col-md-12"><img id="myImg" alt="Tersayat" height="300px" width="400px" src="<?=base_url()?>assets/img/jne.jpg"></div></center>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel -->
                            <hr>
                            <p>Can't find your <a>Answer</a>? Don't worry, you can <a href="#contact" class="scroll-to">CONTACT US.</a></p>

                        </div>

                        <!-- /.panel-group -->


                    </div>










            <!-- END -->

            <!-- <div id="hot">

                <div class="box" id="lw">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>Lifetime Warranty</h2>
                        </div>
                        <center>
                            <div class="col-md-12"><img id="myImg" alt="Tersayat" src="<?=base_url()?>assets/img/lw/1.jpg">
                            <img id="myImg" alt="Bekas Gigitan" src="<?=base_url()?>assets/img/lw/2.jpg">
                            <img id="myImg" alt="Meleleh" src="<?=base_url()?>assets/img/lw/3.jpg"></div></center>
                            <center>
                            <div class="col-md-12"> 
                            <img id="myImg" alt="Melengkung" src="<?=base_url()?>assets/img/lw/4.jpg">
                            <img id="myImg" alt="Noda" src="<?=base_url()?>assets/img/lw/5.jpg">
                            <img id="myImg" alt="Tergores" src="<?=base_url()?>assets/img/lw/6.jpg"></div></center>

                    </div>
                </div>
            </div> -->

             <div id="hot">

                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2 id="contact">Contact Us</h2>
                        </div>
                        <p class="lead">You have something to say?</p>
                        <p>Please feel free to contact us, our customer service center is working for you 24/7.</p>
                        <form method="POST" action="<?php echo base_url()."p_control/message"; ?>">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="firstname">Firstname</label>
                                        <input type="text" name="fname" class="form-control" id="fname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="lastname">Lastname</label>
                                        <input type="text" name="lname" class="form-control" id="lname">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="subject">Subject</label>
                                        <input type="text" name="subj" class="form-control" id="subj">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="message">Message</label>
                                        <textarea id="pesan" name="pesan" class="form-control"></textarea>
                                    </div>
                                </div>

                                <div class="col-sm-12 text-center">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send Message</button>

                                </div>
                            </div>
                            <!-- /.row -->
                        </form>
                    </div>
                </div>
                </div>

<!--<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>-->

            </div>

    </body>
    </html>