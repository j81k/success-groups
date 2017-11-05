<form class="tabs-form" data-type="travel">
    <div id="main-travel" class="main">
        <div class="row">
            <div class="section25">
                  <input type="text" placeholder="No.of Days" name="no_of_days">
            </div>

            <div class="section25">
                  <input type="text" placeholder="Pickup Place"  class="mapLocate pickup-place" name="pickup_place">
            </div>

            <div class="section25">
                  <input type="text" placeholder="Drop Place" class="mapLocate drop-place" name="drop_place">
            </div>

            <div class="section25">
                <select class="vehicle-type" name="vechile_type">
                    <option value="">-- Vehicle Type --</option>
                    <?php foreach($vechiles as $k => $vechile) :?>
                            <option value="<?= $vechile['id']; ?>" data-fare="<?= $vechile['vechile_fare']; ?>" ><?= $vechile['vechile_name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="section25 input-append date datetimepicker" style="margin-left: 25px;">
                <input type="text" placeholder="Date & Time" value="<?= date("d/m/Y H:i:s"); ?>" name="date"></input>
                <span class="add-on">
                  <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                </span>

            </div>

            <div class="section25" style="float: right;"> 
                <div class="distance-info">
                    <div>Distance (km): <span class="total-km">0</span></div>
                    <div>Rate per km (Rs): <span class="rate-per-km">0.00</span></div>
                    <div>Approx. Rate (Rs): <span class="total-rate">0.00</span></div>
                    <div class="distance-info-more">* Driver food, bata and Toll charges are extra.</div> 
                </div>
                &nbsp;
            </div>
        </div>

        <div class="row">
            <div class="section25 section_rt">
                <input type="submit">
            </div>
        </div>
    </div>

    <div id="sub-travel" class="none">
        <div class="row_hd">Approximate Amount</div>
        <div class="tab_content_div">
            <h1 class="subhd">Rs. 0.00 (0 KM)</h1>
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
    </div>
</form>