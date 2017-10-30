<?php
	//defined('BASE_URL') OR define('BASE_URL', base_url('/')); 
?>

<!DOCTYPE HTML>
<html lang="en">
<!--<![endif]-->
<head>
	<?= $this->load->view('templates/head', [], true); ?>
</head>
<body>
    <div id="popup1" class="overlay">
        <div class="popup">
            <span class="close">&times;</span>
            <div class="popup_content">
                <img src="images/tariff.png">
            </div>
        </div>
    </div>
    <div id="popup2" class="overlay">
        <div class="popup">
            <span class="close2">&times;</span>
            <div class="popup_content">
                <input type="text" placeholder="Name" >
                <input type="text" placeholder="Mobile Number">
                <input type="submit">
            </div>
        </div>
    </div>
	<div class="newsstrip">
    	<div class="wrapper">
            <div class="newsstrip_div">
                <marquee onMouseOver="this.stop()" onMouseOut="this.start()">To the loving attention of drivers</marquee>
            </div>
    	</div>
    </div>
    <div class="header">
    	<div class="wrapper">
            <div class="logo_div">
                <img src="images/logo.png">
                <!--<h1>Success Call Drivers</h1>-->
            </div>
            <div class="header_rt">
                <div class="tel_txt">
                	<i class="fa fa-phone" aria-hidden="true"></i>
                    <span>4959 6666</span>
                </div>
                <div class="request_link"><a href="javascript:voic(0);" class="popup_id2">Request Callback</a></div>
            </div>
    	</div>
    </div>
    <div class="menu_div">
    	<div class="wrapper">
        	<span class="res_menu">Menu</span>
            <ul class="menu">
                <li><a href="index.html" class="menuactive">Home</a></li>
                <li><a href="aboutus.html">About us</a></li>
                <li><a href="javascript:void(0);">Services</a></li>
                <li><a href="javascript:void(0);">Tariff</a></li>
                <li><a href="attachments.html">Attachments</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
            </ul>
    	</div>
    </div>
    <div class="banner">
        <iframe src="slider/index.html" scrolling="no" frameborder="0" class="iframe_banner"></iframe>
    </div>
    <div class="container">
    	<div class="wrapper">


