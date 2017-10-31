/* 
 * script.js
 */

function calculateApprxRate()
{
    var rate = 0
    ,   km   = 0
    ,   pickupPlace = $('#content2 .pickup-place').val() || "";
    
    var perKm = 10;
    
    if (pickupPlace != '') {
        var dropPlace = $('#content2 .drop-place').val() || "";
        
        if (dropPlace != '') {
            
            var request = {
                origin      : pickupPlace,
                destination : dropPlace,
                travelMode  : google.maps.DirectionsTravelMode.DRIVING
            };

            directionsService.route(request, function(response, status) {
                if ( status == google.maps.DirectionsStatus.OK ) {
                    km = Math.round(response.routes[0].legs[0].distance.value/1000); // the distance in metres
                    rate = parseFloat(perKm * km).toFixed(2);
                    
                    // Show Rate
                    $('#distance-info > div:nth-child(2) span').html(perKm.toFixed(2));
                    $('#distance-info > div:nth-child(3) span').html(rate);
                    $('#distance-info').slideDown('slow');
                }
                else {
                    
                    $('#distance-info').slideUp('slow', function(){
                        $('#distance-info > div span').not(':first').html('0.00');
                    });
                }
                
                $('#distance-info > div:first span').html(km);
            });
            
            
        }
    }
}

function mapInit() {
    var input = document.getElementById('mapLocate');
    var autocomplete = new google.maps.places.Autocomplete(input);
}

// Google Search Place
//google.maps.event.addDomListener(window, 'load', mapInit);
var directionsService = new google.maps.DirectionsService();

$(document).on('ready', function(){
  
    $('#content2 .pickup-place, #content2 .drop-place').on('change', function(){
        if ($('#content2 .vehicle-type').val() != '') {
            setTimeout(function(){
                console.log('Getting ..');
                calculateApprxRate();
            }, 300);
        }
    });
  
    $('#content2 .vehicle-type').on('change', function(){
        
        calculateApprxRate();
    });
    
    $('.mapLocate').on('focus', function(){
        $('#mapLocate').removeAttr('id');
        $(this).attr('id', 'mapLocate');
        mapInit();
    });
    
    /** Predefined: START **/
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


