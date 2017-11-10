<!DOCTYPE HTML>
<html lang="en">
<!--<![endif]-->
<head>
	<?= $this->load->view('templates/head', ['controller_name' => $this->controller_name], true); ?>
        <script type="text/javascript">
            var baseUrl = '<?= BASE_URL; ?>';
        </script>
</head>
<body id="<?= $this->controller_name; ?>-page" >
    <div id="popup1" class="overlay">
        <div class="popup">
            <span class="close">&times;</span>
            <div class="popup_content">
                <img src="<?= asset_url(); ?>images/tariff.png">
            </div>
        </div>
    </div>
    <div id="popup2" class="overlay">
        <div class="popup">
            <span class="close2">&times;</span>
            <div class="popup_content">
                <input type="text" placeholder="Name" class="name">
                <input type="text" placeholder="Mobile Number" class="contact-no">
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
                <img src="<?= asset_url(); ?>images/logo.png">
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
                <li><a href="<?= BASE_URL; ?>" <?= $this->controller_name == 'home' ? 'class="menuactive"' : ''; ?> >Home</a></li>
                <li><a href="<?= BASE_URL; ?>about-us"  <?= $this->controller_name == 'about-us' ? 'class="menuactive"' : ''; ?> >About us</a></li>
                
                <li class="dropdown"><a href="javascript: void();" <?= $this->controller_name == 'services' ? 'class="menuactive"' : ''; ?> >Services</a>
                    <ul class="dropdown_menu">
                    	<li><a href="<?= BASE_URL; ?>services/success_call_drivers">Call Drivers</a></li>
                        <li><a href="<?= BASE_URL; ?>services/success_travels">Travels</a></li>
                        <li><a href="<?= BASE_URL; ?>services/tour_packages">Tours</a></li>
                        <li><a href="<?= BASE_URL; ?>services/package/temple-pooja-package">Temple Pooja</a></li>
                    </ul>
                </li>
                
                <li><a href="javascript:void(0);" class="popup_id">Tariff</a></li>
                <li><a href="<?= BASE_URL; ?>attachments" <?= $this->controller_name == 'attachments' ? 'class="menuactive"' : ''; ?> >Attachments</a></li>
                <li><a href="<?= BASE_URL; ?>gallery" <?= $this->controller_name == 'gallery' ? 'class="menuactive"' : ''; ?> >Gallery</a></li>
                <li><a href="<?= BASE_URL; ?>contact-us" <?= $this->controller_name == 'contact-us' ? 'class="menuactive"' : ''; ?> >Contact Us</a></li>
            </ul>
    	</div>
    </div>


    <div class="banner">
        <?php if (IS_HOME): ?>
            <iframe src="<?= asset_url(); ?>slider/index.html" scrolling="no" frameborder="0" class="iframe_banner"></iframe>
        <?php 
            else : 
                $title = get_friendly_name($this->page_name);//$this->controller_name);        
        ?>
            <div id="inner-banner" class="inner-banner-bg-4">
                <div class="container">
                    <h1><?= $this->controller_name == 'services' ? 'Services' : $title; ?></h1>
                    <ol class="breadcrumb">
                        <li><a href="<?= BASE_URL; ?>">Home</a></li>
                        <li class="active"><?= $title; ?></li>
                    </ol>
                </div>
            </div>
        <?php endif; ?>    
    </div>

    <div class="container">
    	<div class="wrapper">


