
	        </div>
	    </div>
	    <div class="container">
	    	<div class="row_grey">
	        	<div class="wrapper">
	            	<h2 class="row_hd">More Services from Success</h2>
	                <div class="more_services_div">
	                	<div class="more_services_hd">Call Drivers</div>
	                    <div class="more_services_txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
	                    <a href="success_calldrivers.html" class="more_services_anchor">Book Now</a>
	                </div>
	                <div class="more_services_div">
	                	<div class="more_services_hd">Travels</div>
	                    <div class="more_services_txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
	                    <a href="tour_package.html" class="more_services_anchor">Book Now</a>
	                </div>
	                <div class="more_services_div">
	                	<div class="more_services_hd">Tours</div>
	                    <div class="more_services_txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
	                    <a href="success_tour.html" class="more_services_anchor">Book Now</a>
	                </div>
	                <div class="more_services_div">
	                	<div class="more_services_hd">Temple Pooja</div>
	                    <div class="more_services_txt">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
	                    <a href="#" class="more_services_anchor">Book Now</a>
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
	                	<input type="text" placeholder="Name">
	                    <input type="text" placeholder="Email">
	                    <input type="text" placeholder="Mobile No.">
	                    <textarea placeholder="Comments"></textarea>
	                    <input type="submit" class="ft_enq_btn">
	                </form>
	            </div>
	        </div>
	    </div>
	    <div class="footer_bottom"><p>All Rights Reserves by Success Group</p></div>
	</body>

	<script type="text/javascript">
		$(document).ready(function(e) {
		    $('.button-wrap').on("click", function(){
			  $(this).toggleClass('button-active');
			});
			
			$(".popup_id").click(function(e) {
				$("#popup1").addClass("overlay_active");
		        $("#popup1").show();
		    });
			$(".close").click(function(e) {
				$("#popup1").removeClass("overlay_active");
		        $("#popup1").hide();
		    });
			$(".popup_id2").click(function(e) {
				$("#popup2").addClass("overlay_active");
		        $("#popup2").show();
		    });
			$(".close2").click(function(e) {
				$("#popup2").removeClass("overlay_active");
		        $("#popup2").hide();
		    });
			// For Responsive Menu
			$(".res_menu").click(function(e) {
		        $(".menu").slideToggle();
		    });
			
			$("#drop_place").hide();
			$(".drop_place_chk").click(function() {
				if($(this).is(":checked")) {
					$("#drop_place").hide(300);
				} else {
					$("#drop_place").show(200);
				}
			});
		});
	</script>
</html>