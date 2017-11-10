<label class="row_hd">Tour Packages</label>

<?php foreach($packages as $k => $package) : ?>
        <div class="tour_package_div">
            <div class="package_img"><img src="<?= empty($package['package_image']) != false ? asset_url() . 'images/package.jpg' : base_url(UPLOAD_DIR) .'/' . $package['package_image']; ?>"></div>
            <div class="package_content_div">
                <span style="text-align:right;"><?= empty($package['package_price']) == false ? 'Rs. ' . $package['package_price'] . ' /-' : ''; ?></span>
                <a href="<?= BASE_URL; ?>services/package/<?= $package['package_slug']; ?>">Book Now</a>
                <h2><?= $package['package_name']; ?></h2>
                <span><?= $package['package_days']; ?> Days<?= empty($package['package_nights']) == false ? ' / ' . $package['package_nights'] . ' Nights' : ''; ?></span>
                <p><strong>Short Description : </strong><?= $package['package_excerpt']; ?> <a href="<?= BASE_URL; ?>services/package/<?= $package['package_slug']; ?>">Read More..</a></p>
            </div>
        </div>
<?php endforeach; ?>
