<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mutiara Tuppy | Admin Page</title>
<link rel="shortcut icon" href="<?=base_url()?>assets/img/tuppy.png">
<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/styles.css" />
<script type="text/javascript" src="<?=base_url()?>assets/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>
<script src="<?=base_url()?>assets/jquery.jclock-1.2.0.js.txt" type="text/javascript"></script>
<script type="text/javascript" src="<?=base_url()?>assets/jconfirmaction.jquery.js"></script>
<script type="text/javascript">
	
	$(document).ready(function() {
		$('.ask').jConfirmAction();
	});
	
</script>
<script type="text/javascript">
$(function($) {
    $('.jclock').jclock();
});
</script>

<script language="javascript" type="text/javascript" src="<?=base_url()?>assets/niceforms.js"></script>
<link rel="stylesheet" type="text/css" media="all" href="<?=base_url()?>assets/niceforms-default.css" />

</head>
<body>
<div id="main_container">

	<div class="header">
    <div class="logo"><a href="#"><img src="<?=base_url()?>assets/img/tuppy-white.png" alt="" title="" border="0" /></a></div>
    
    <div class="right_header">Welcome Admin, <a href="#">Visit site</a> | <a href="<?php echo base_url()."p_control/logout"; ?>" class="logout">Logout</a></div>
    <div class="jclock"></div>
    </div>
    
    <div class="main_content">
    
                    <div class="menu">
                    <ul>
                    <li><a class="current" href="index.html">Admin Home</a></li>
                    
                    </ul>
                    </div> 
                    
                    
                    
                    
    <div class="center_content">  
    
    
    
    <div class="left_content">
            
                    <div class="sidebar_box">
                <div class="sidebar_box_top"></div>
                <div class="sidebar_box_content">
                <h3>Admin Help Desk</h3>
                <img src="<?=base_url()?>assets/images/info.png" alt="" title="" class="sidebar_icon_right" />
                <ul>
                <li>1. Untuk Menambah Produk, Isi <strong><a href="#add">Form</a></strong> yang ada di bawah.</li>
                 <li>2. Upload Foto Produk pada tabel yang ada di kanan dengan menekan Tulisan Upload</li>
                  <li>3. Jangan Lupa meng-upload 3 gambar sekaligus.</li>
                   <li>4. Selesai.</li>
                    <li>NB :<br>
                    Jika mau Edit barang tekan Gambar Edit pada tabel di kanan.</li>
                     <li>Jika mau Delete atau menghapus barang, tekan tombol delete dan tekan YES.</li>
                </ul>                
                </div>
                <div class="sidebar_box_bottom"></div>
            </div>      
            
            
            <div class="sidebar_box">
                <div class="sidebar_box_top"></div>
                <div class="sidebar_box_content">
                <h4>Important notice</h4>
                <img src="<?=base_url()?>assets/images/notice.png" alt="" title="" class="sidebar_icon_right" />
                <p>
Untuk Upload, Upload 3 file langsung.
Tidak masalah jika foto tersebut sama.
                </p>                
                </div>
                <div class="sidebar_box_bottom"></div>
            </div>
            
            
            

              
    
    </div>   
    
    <div class="right_content">            
        
    <h2>Database Product</h2> 
                    
                    
<table id="rounded-corner" summary="2007 Major IT Companies' Profit">
    <thead>
    	<tr>
            <th colspan="2" scope="col" class="rounded-company">Id</th>
            <th colspan="7" scope="col" class="rounded">Product</th>
            <th colspan="2" scope="col" class="rounded">Price</th>
            <th colspan="2" scope="col" class="rounded">Stock</th>
            <th colspan="2" scope="col" class="rounded">Categories</th>
            <th colspan="10" scope="col" class="rounded">Details</th>
            <th colspan="7" scope="col" class="rounded">Images</th>
            <th colspan="2" scope="col" class="rounded">Edit</th>
            <th colspan="2" scope="col" class="rounded-q4">Delete</th>
        </tr>
    </thead>
        <tfoot>
    	<tr>
        	<td colspan="34" class="rounded-foot-left"><em></em></td>
        	<td class="rounded-foot-right">&nbsp;</td>

        </tr>
    </tfoot>
    <tbody >
        <?php foreach ($query->result() as $a){ ?>
    	<tr>
            <td colspan="2"><?php echo $a->id; ?></td>
            <td colspan="7"><?php echo $a->nama; ?></td>
            <td colspan="2"><?php echo $a->harga; ?></td>
            <td colspan="2"><?php echo $a->stock; ?></td>
            <td colspan="2"><?php echo $a->kategori; ?></td>
            <td colspan="10"><?php echo $a->details; ?></td>
            <td colspan="7"><a href="<?php echo base_url()."p_control/upload/".$a->id; ?>">Uploads</a> || <?php echo $a->gambar; ?> , <?php echo $a->gambar2; ?> , <?php echo $a->gambar3; ?></td></td>

            <td colspan="2"><a href="<?php echo base_url()."p_control/update/".$a->id; ?>"><img src="<?=base_url()?>assets/images/user_edit.png" border="0" /></a></td>
            <td colspan="2"><a href="<?php echo base_url()."p_control/delete/".$a->id; ?>" class="ask"><img src="<?=base_url()?>assets/images/trash.png" alt="Delete" title="" border="0" /></a></td>
        </tr>
        <?php } ?>
    	
        
    </tbody>
</table>

        <div>
        <?php
            echo $this->pagination->create_links();
        ?>
        </div>
        
     <h2 id="add">Add Product</h2>
     
         <div class="form">
         <form action="<?php echo base_url().'p_control/insert'?>" method="post" class="niceform" enctype="multipart/form-data">
         
                <fieldset>
                    <dl>
                        <dt><label for="id">Id:</label></dt>
                        <dd><input type="text" name="id" id="id" placeholder="Product id.." size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="nama">Product Name:</label></dt>
                        <dd><input type="text" name="nama" id="nama" placeholder="Product name.." size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="harga">Prices:</label></dt>
                        <dd><input type="text" name="harga" id="harga" placeholder="Product price.." size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="stock">Stock:</label></dt>
                        <dd><input type="text" name="stock" id="stock" placeholder="Product stock.." size="54" /></dd>
                    </dl>
                    <dl>
                        <dt><label for="kategori">Categories:</label></dt>
                        <dd>
                            <select size="1" name="kategori" id="kategori">
                                <option value="">...</option>
                                <option value="Bottle Collection">Bottle Collection</option>
                                <option value="Kitchen Collection">Kitchen Collection</option>
                                <option value="Fridge Collection">Fridge Collection</option>
                                <option value="Lunch Box Collection">Lunch Box Collection</option>
                            </select>
                        </dd>
                    </dl>                   
                    <dl>
                        <dt><label for="details">Details:</label></dt>
                        <dd><textarea name="details" id="details" rows="5" placeholder="Product details.." cols="36"></textarea></dd>
                    </dl>
                     <dl class="submit">
                    <input type="submit" name="submit" id="submit" value="Submit" />
                     </dl>
                     
                     
                    
                </fieldset>
                
         </form>
         </div>  
      
     
     </div><!-- end of right content-->
            
                    
  </div>   <!--end of center content -->               
                    
                    
    
    
    <div class="clear"></div>
    </div> <!--end of main content-->
	
    
    <div class="footer">
    
    	<div class="left_footer">Mutiara Tuppy ADMIN PANEL</a></div>
    
    </div>

</div>		
</body>
</html>