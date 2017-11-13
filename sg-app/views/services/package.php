<div class="row_hd" id="pkg-title"><?= $package['package_name']; ?></div>
<div class="package_img"><img src="<?= empty($package['package_image']) != false ? asset_url() . 'images/package.jpg' : base_url(UPLOAD_DIR) .'/' . $package['package_image']; ?>"></div>

<div class="package_content_div">
    <h2><?= $package['package_name']; ?></h2>
    <span style="width: 100%;"><?= $package['package_days']; ?> Days<?= empty($package['package_nights']) == false ? ' / ' . $package['package_nights'] . ' Nights' : ''; ?>  <span style="text-align:right; float: right;"><?= empty($package['package_price']) == false ? 'Rs. ' . $package['package_price'] . ' /-' : ''; ?></span></span>
    <p><strong>Short Description : </strong><?= $package['package_desc']; ?></p>
</div>

<form id="package-form">
    <div class="tab_content_div" style="margin-top:50px;">
        <div class="section30">
            <input type="text" placeholder="Name" name="name" class="name">
        </div>
        <div class="section30">
            <input type="text" placeholder="Mobile no." name="contact_no" class="contact-no">
        </div>
        <div class="section30">
            <input type="text" placeholder="Email ID" name="email" class="email">
        </div>
        <div class="section30">
            <input type="text" placeholder="Address 1" name="address_1" class="address">
        </div>
        <div class="section30">
            <input type="text" placeholder="Address 2" name="address_2" class="address">
        </div>
        <div class="section30">
            <input type="text" placeholder="Location" name="location" class="mapLocate">
        </div>
        <div class="section30 section_rt">
            <input type="submit" value="Book Now">
        </div>
    </div>
</form>

