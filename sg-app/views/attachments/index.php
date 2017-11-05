            <label class="row_hd">Attachments Form</label>
            <form class="attachments_form" id="attachment-form">
            	<div class="attachments_form_div">
                    <div class="attachments_div">
                        <label>Vehicle Owner Name</label>
                        <input type="text" name="name">
                    </div>
                    <div class="attachments_div">
                        <label>Mobile No.</label>
                        <input type="text" name="contact_no">
                    </div>
                    <div class="attachments_div">
                        <label>Address</label>
                        <input type="text" name="address">
                    </div>
                    <div class="attachments_div">
                        <label>Area</label>
                        <input type="text" class="mapLocate" name="location" >
                    </div>
                    <div class="attachments_div">
                        <label>Vehicle Type</label>
                        <select class="vehicle-type" name="vechile_type">
                            <option value="">-- Vehicle Type --</option>
                            <?php foreach($vechiles as $k => $vechile) :?>
                                        <option value="<?= $vechile['id']; ?>" data-fare="<?= $vechile['vechile_fare']; ?>" ><?= $vechile['vechile_name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="attachments_div">
                        <label>Vehicle Year</label>
                        <input type="text" name="vechile_year">
                    </div>
                    <div class="attachments_div">
                        <label>Vehicle No.</label>
                        <input type="text" name="vechile_no">
                    </div>
                    <div class="attachments_div">
                        <label>Type</label>
                        <select name="driver_type">
                            <option value="1">Owner Come Driver</option>
                            <option value="2">Other Driver</option>
                        </select>
                    </div>
                    <div class="attachments_div">
                        <label>Documents Available</label>
                        <div class="document_chk">
                            <input type="checkbox" name="doc_rc_book"> &nbsp; RC Book<br>
                            <input type="checkbox" name="doc_all_permit"> &nbsp; All India Permit<br>
                            <input type="checkbox" name="doc_state_permit"> &nbsp; State Permit<br>
                        </div>
                        <div class="document_chk">
                            <input type="checkbox" name="insurance"> &nbsp; Insurance<br>
                            <input type="checkbox" name="driving_license"> &nbsp; Driving License<br>
                    	</div>
                    </div>
                    <div class="attachments_div">
                    	<label>&nbsp;</label>
                        <input type="reset">
                        <input type="submit">
                    </div>
                    <div class="attachments_div">
                    	<p><strong>Note:</strong> <i>All of them should carry with Driving licence copy, Voter ID, Adhaar card, Ration card copy, 2 Photos (Driver &amp; Owner)</i></p>
                    </div>
            	</div>
            </form>