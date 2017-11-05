
            </div>
        </div>
        <div class="container">
            <div class="row_grey">
                    <div class="wrapper">
                    <h2 class="row_hd">More Services from Success</h2>
                    <div class="more_services_div">
                        <div class="more_services_hd">Call Drivers</div>
                        <div class="more_services_txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                        <a href="<?= BASE_URL; ?>services/success_call_drivers" class="more_services_anchor">Book Now</a>
                    </div>
                    <div class="more_services_div">
                        <div class="more_services_hd">Travels</div>
                        <div class="more_services_txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                        <a href="<?= BASE_URL; ?>services/success_travels" class="more_services_anchor">Book Now</a>
                    </div>
                    <div class="more_services_div">
                        <div class="more_services_hd">Tours</div>
                        <div class="more_services_txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                        <a href="<?= BASE_URL; ?>services/tour_packages" class="more_services_anchor">Book Now</a>
                    </div>
                    <div class="more_services_div">
                        <div class="more_services_hd">Temple Pooja</div>
                        <div class="more_services_txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                        <a href="<?= BASE_URL; ?>services/package/temple-pooja" class="more_services_anchor">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="wrapper">
                    <div class="ft_addr_div">
                    <h3>Contact</h3>
                    <p>
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                            <span>73389 10666 / 73388 70666</span>
                    </p>
                    <p>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>4959 6666</span>
                    </p>
                    <p>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span><a href="mailto:successcalldriver@gmail.com">successcalldriver@gmail.com</a></span>
                    </p>
                    <p>
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span><a href="www.successtaxi.com">www.successtaxi.com</a></span>
                    </p>
                </div>
                <div class="ft_enquiry_div">
                    <h3>Enquiry</h3>
                    <form class="ft_enq_form">
                        <input type="text" placeholder="Name" name="enq_name">
                        <input type="text" placeholder="Email"  name="enq_email">
                        <input type="text" placeholder="Mobile No."  name="enq_contact_no">
                        <textarea placeholder="Comments"  name="enq_desc"></textarea>
                        <input type="submit" class="ft_enq_btn">
                    </form>
                </div>
            </div>
        </div>
        <div class="footer_bottom"><p>All Rights Reserves by Success Group</p></div>
    </body>
    
    <script type="text/javascript" src="<?= asset_url(); ?>js/jquery-1.8.3.min.js"></script> 
    <script type="text/javascript" src="<?= asset_url(); ?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= asset_url(); ?>js/bootstrap-datetimepicker.min.js"></script>
    
    <?php if ($controller_name == 'gallery'): ?>
        <script type="text/javascript" src="<?= asset_url(); ?>js/jquery.swipebox.js"></script>
    <?php endif; ?>
    
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=<?= GOOGLE_MAP_API_KEY; ?>&libraries=places"></script>
    <script type="text/javascript" src="<?= asset_url(); ?>js/script.js"></script>
    
    
</html>