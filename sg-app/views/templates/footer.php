            </div>
        </div>
        <div class="container">
            <div class="row_grey">
                    <div class="wrapper">
                    <h2 class="row_hd">More Services from Success</h2>
                    <div class="more_services_div">
                        <div class="more_services_hd">Call Drivers</div>
                        <div class="more_services_txt">At Drivers On Call we rent professional chauffeurs to drive for you at 24 hours, in the luxury of your own car. The concept is Simple, we drive to your home or office, and drive you, in your car, anywhere you please. We are the more reliable, personal, and trustworthy alternative to limousine service. However we do provide service to outside areas as well.</div>
                        <a href="<?= BASE_URL; ?>services/success_call_drivers" class="more_services_anchor">Book Now</a>
                    </div>
                    <div class="more_services_div">
                        <div class="more_services_hd">Travels</div>
                        <div class="more_services_txt">Do you like traveling around the world? Do you wish to see the south of our Incredible India? If you want to make your dream a reality, come with us because we are going to provide you the best and world class experience you would have ever thought of.We give the assurance of giving you the cheapest and satisfactory journey that you would have not imagined ever. </div>
                        <a href="<?= BASE_URL; ?>services/success_travels" class="more_services_anchor">Book Now</a>
                    </div>
                    <div class="more_services_div">
                        <div class="more_services_hd">Tours</div>
                        <div class="more_services_txt">Tour packages are many. You just need to click the one that you like the most and by the click of finger our service is there for you. Some of the holiday tour packages are written: â€“ Kodaikanal tour packages and Ooty tour packages. The hill station tour packages and honeymoon tour packages are also quite famous in our agencies. They too have a great demand.</div>
                        <a href="<?= BASE_URL; ?>services/tour_packages" class="more_services_anchor">Book Now</a>
                    </div>
                    <div class="more_services_div">
                        <div class="more_services_hd">Temple Pooja</div>
                        <div class="more_services_txt">â€˜Pariharaâ€™ is a Sanskrit word which means â€˜Solutionâ€™. Specifically it is the act of performing a pooja or making an offering as a remedy to oneâ€™s problems. We specialize in E-seva services covering many famous Indian Temples & places of worship. Our team constantly works to provide the best-in-class user experience to our users and we would continue to do that.</div>
                        <a href="<?= BASE_URL; ?>services/package/temple-pooja-package" class="more_services_anchor">Book Now</a>
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
                            <span>73387 00666 / 73389 10666</span>
                    </p>
                    <p>
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span>044 - 4214 1666</span>
                    </p>
                    <p>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <span><a href="mailto:info@successgrouptravel.com">info@successgrouptravel.com</a></span>
                    </p>
                    <p>
                            <i class="fa fa-globe" aria-hidden="true"></i>
                            <span><a href="www.successtaxi.com">Plot No 41, 4th Cross Street, Sri Ambal Nagar, Pallikaranai. Chennai - 600 100</a></span>
                    </p>
                </div>
                <div class="ft_enquiry_div">
                    <h3>Enquiry</h3>
                    <form class="ft_enq_form">
                        <input type="text" placeholder="Name" name="enq_name" class="name">
                        <input type="text" placeholder="Email"  name="enq_email"  class="email">
                        <input type="text" placeholder="Mobile No."  name="enq_contact_no"  class="contact-no">
                        <textarea placeholder="Comments"  name="enq_desc"  class="desc"></textarea>
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