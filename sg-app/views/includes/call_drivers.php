<form class="tabs-form" data-type="call-drivers">
    <div id="main-call-drivers" class="main">
        <div class="row">
            <div class="section30">
                <div class="one">
                  <div class="button-wrap">
                    <div class="button-bg">
                      <div class="button-out">Local</div>
                      <div class="button-in">Outstation</div>
                      <div class="button-switch"></div>
                    </div>
                  </div>
                </div>
            </div>
            <div class="section30">
                    <input type="text" placeholder="No.of Days" name="no_of_days">
            </div>
            <div class="section30">
                    <input type="text" placeholder="Pickup Place" name="pickup_place" class="mapLocate pickup-place">
            </div>
        </div>
        
        <div class="row">
            <div class="section30">
                    <input type="text" placeholder="Estimate Usage in Hrs" name="est_in_hrs">
            </div>

            <div class="input-append date section30 datetimepicker">
                <span class="add-on">
                  <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                </span>
                <input type="text" placeholder="Date & Time" name="date" value="<?= date("d/m/Y H:i:s"); ?>" ></input>
            </div>

            <div class="section30">
                <select class="vehicle-type" name="vechile_type">
                    <option value="">-- Vehicle Type --</option>
                    <?php foreach($vechiles as $k => $vechile) :?>
                                <option value="<?= $vechile['id']; ?>" data-fare="<?= $vechile['vechile_fare']; ?>" ><?= $vechile['vechile_name']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        
        <div class="row">
            <div class="section30 text_left">
                <input type="checkbox" name="night_journey"> Night Journey<br><br>
                <input type="checkbox" checked class="drop_place_chk" name="drop_as_same"> Drop as Same Location
            </div>
            
            <div class="section30" id="drop_place">
                <input type="text" placeholder="Drop Place" class="mapLocate drop-place" name="drop_place">
                &nbsp;
            </div>
            
            <div class="section30"  style=""> 
                <div class="distance-info">
                    <div>Distance (km): <span class="total-km">0</span></div>
                    <div>Rate per km (Rs): <span class="rate-per-km">0.00</span></div>
                    <div>Approx. Rate (Rs): <span class="total-rate">0.00</span></div>
                    <div class="distance-info-more">* Driver food, bata and Toll charges are extra.</div> 
                </div>
                &nbsp;
            </div>
            
            <div class="section30 section_rt">
                <input type="submit">
            </div>
            
        </div>    
        
        
    </div>

    <div id="sub-call-drivers" class="none">
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