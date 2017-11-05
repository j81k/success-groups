<div class="row_hd" id="pkg-title"><?= $title; ?> Package</div>
<div class="package_img"><img src="<?= asset_url(); ?>slider/img/1.jpg"></div>

<div class="package_content_div">
    <h2><?= $title; ?> Package</h2>
    <span>4 Days / 3 Nights</span>
    <p><strong>Short Description : </strong>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
</div>

<form id="package-form">
    <div class="tab_content_div" style="margin-top:50px;">
        <div class="section30">
            <input type="text" placeholder="Name" name="name">
        </div>
        <div class="section30">
            <input type="text" placeholder="Mobile no." name="contact_no">
        </div>
        <div class="section30">
            <input type="text" placeholder="Email ID" name="email">
        </div>
        <div class="section30">
            <input type="text" placeholder="Address 1" name="address_1">
        </div>
        <div class="section30">
            <input type="text" placeholder="Address 2" name="address_2">
        </div>
        <div class="section30">
            <input type="text" placeholder="Location" class="mapLocate" name="location">
        </div>
        <div class="section30 section_rt">
            <input type="submit" value="Book Now">
        </div>
    </div>
</form>

