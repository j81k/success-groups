	<div class="container">
    	<div class="wrapper">
	        <main>
                <input id="tab1" type="radio" name="tabs" checked>
                <label for="tab1" class="tab_label">Success Call Drivers ( <a href="javascript:void(0);" class="popup_id">Tariff</a> )</label>
                
                <input id="tab2" type="radio" name="tabs">
                <label for="tab2" class="tab_label">Success Travel ( <a href="javascript:void(0);" class="popup_id">Tariff</a> )</label>
                
                <section id="content1">
                	<div class="tab_content_div">
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
                        	<input type="text" placeholder="No.of Days">
                        </div>
                        <div class="section30">
                        	<input type="text" placeholder="Pickup Place" class="mapLocate">
                        </div>
                        <div class="section30">
                        	<input type="text" placeholder="Estimate Usage in Hrs">
                        </div>
                        <div class="section30">
                        	<input type="text" placeholder="Date & Time">
                        </div>
                        <div class="section30">
                            <select>
                            	<option value="">Vehicle Type</option>
                                <option value="1">Hatch Back</option>
                                <option value="1">Sedan</option>
                                <option value="1">Suu</option>
                                <option value="1">luxury</option>
                                <option value="1">Tata Ace</option>
                                <option value="1">407</option>
                                <option value="1">Heavy Vehicle</option>
                            </select>
                        </div>
                        <div class="section30 text_left">
                        	<input type="checkbox"> Night Jounery<br><br>
                            <input type="checkbox" checked class="drop_place_chk"> Drop as Same Location
                        </div>
                        <div class="section30" id="drop_place">
                        	<input type="text" placeholder="Drop Place">
                        </div>
                        <div class="section30 section_rt">
                        	<input type="submit" onclick="location.href = 'success_calldrivers_amt.html';">
                        </div>
                    </div>
                </section>
                
                <section id="content2">
                    <div>
                        <div class="section25">
                        	<input type="text" placeholder="No.of Days">
                        </div>
                        
                        <div class="section25">
                        	<input type="text" placeholder="Pickup Place" class="mapLocate pickup-place">
                        </div>
                        
                        <div class="section25">
                        	<input type="text" placeholder="Drop Place"  class="mapLocate drop-place">
                        </div>
                        
                        <div class="section25">
                        	<select class="vehicle-type">
                            	<option value="">Vehicle Type</option>
                                <option value="1">Hatch Back</option>
                                <option value="1">Sedan</option>
                                <option value="1">Suu</option>
                                <option value="1">luxury</option>
                                <option value="1">Tata Ace</option>
                                <option value="1">407</option>
                                <option value="1">Heavy Vehicle</option>
                            </select>
                        </div>
                        
                        <div class="section25" id="distance-info">
                                <div>Distance (km): <span>0</span></div>
                                <div>Rate per km (Rs): <span>0.00</span></div>
                                <div>Approx. Rate (Rs): <span>0.00</span></div>
                        </div>
                        
                        <div class="section25 section_rt">
                        	<input type="submit" onclick="location.href = 'success_tour_amt.html';">
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
