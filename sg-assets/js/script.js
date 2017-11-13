/* 
 * script.js
 */

function calculateApprxRate($parent)
{
    var rate = 0
    ,   km   = 0
    ,   parentId = $parent.attr('data-type') == 'call-drivers' || typeof $parent == 'undefined' ? '#content1' : '#content2'
    ,   pickupPlace = $(parentId + ' .pickup-place').val() || "";
    
    $('#sub-call-drivers .subhd, #sub-travel .subhd').html('');
    var perKm = parseFloat($(parentId + ' .vehicle-type option:selected').attr('data-fare')) || 0;
    
    if (pickupPlace != '' && !isOffline) {
        var dropPlace = $(parentId + ' .drop-place').val() || "";
        
        if (dropPlace != '') {
            
            var request = {
                origin      : pickupPlace,
                destination : dropPlace,
                travelMode  : google.maps.DirectionsTravelMode.DRIVING
            };

            $('#sub-call-drivers .subhd, #sub-travel .subhd').html('Calculating ...').slideDown('slow');
            
            directionsService.route(request, function(response, status) {
                if ( status == google.maps.DirectionsStatus.OK ) {
                    isOffline = false;
                    if (perKm > 0) {
                        km = Math.round(response.routes[0].legs[0].distance.value/1000); // the distance in metres
                        rate = parseFloat(perKm * km).toFixed(2);
                        
                    }
                    
                    // Show Rate
                    $(parentId + ' .distance-info > div:nth-child(2) span').html(perKm > 0 ? perKm.toFixed(2) : 'N/A');
                    $(parentId + ' .distance-info > div:nth-child(3) span').html(rate > 0 ? rate : 'N/A');
                    $(parentId + ' .distance-info').slideDown('slow');
                }
                else {
                    
                    $(parentId + ' .distance-info').slideUp('slow', function(){
                        $(parentId + ' .distance-info > div span').not(':first').html('0.00');
                    });
                }
                
                $(parentId + ' .distance-info > div:first span').html(km);
                $('#sub-call-drivers .subhd, #sub-travel .subhd').html('Rs. '+ rate + ' ('+ km +' KM)');
            });
            
        }
    }
}

function mapInit() {
    if (!isOffline) {
        var input = document.getElementById('mapLocate');
        var autocomplete = new google.maps.places.Autocomplete(input);
    }
}

var isOffline = typeof google != 'undefined' ? false : true;
if (!isOffline) {
    var directionsService = new google.maps.DirectionsService();
} else {
    alert("Warning: It seems to be you are not connected to the Internet. \nSome functionalities may fail to work properly!\n\nThank you for your patient.");
}

function showForm(type, isMain){
    var isMain = typeof isMain != "undefined" ? isMain : !$('#main-'+type).is(':visible');
    
    if (isMain) {
        $('#main-'+type).removeAttr('submit-form');
        $('#sub-'+type).fadeOut('slow');
        $('#main-'+type+', .wrapper > .row_hd, .tab_content_div:first > .subhd').slideDown('slow');
        
    }else {
        // Main Form Submitted
        $('#main-'+type+', .wrapper > .row_hd, .tab_content_div:first > .subhd').fadeOut('slow');
        $('#sub-'+type).slideDown('slow');
        return false;
    }
        
}

$(document).on('ready', function(){

    $('#attachment-form').on('submit', function(event){
        event.preventDefault();
        
        var $name = $(this).find('.name');
        if ($name.val() != '') {
            
            var $this = $(this)
            ,   $sbmtBtn = $this.find('input[type="submit"]')
            ,   data = {
                packageName: $('#pkg-title').text(),
                'data': $this.serialize()
            }

            $sbmtBtn.prop('disabled', true).val('Please wait ...');
            $.post(baseUrl + 'ajax/submit/package', data, function(results){
                $sbmtBtn.prop('disabled', false).val('Book Now');
                
                results= JSON.parse(results);
                alert(results.message);

                if (results.status != -1) {
                    $this[0].reset();
                }
            });
        
        } else {
            alert('Error: Please enter all the required fields!');
            $name.focus();
        }
       
        return false;
    });

    $('#package-form').on('submit', function(event){
        event.preventDefault();
        
        var $name = $(this).find('.name');
        if ($name.val() != '') {
            
            var $this = $(this)
            ,   $sbmtBtn = $this.find('input[type="submit"]')
            ,   data = {
                packageName: $('#pkg-title').text(),
                'data': $this.serialize()
            }

            $sbmtBtn.prop('disabled', true).val('Please wait ...');
            $.post(baseUrl + 'ajax/submit/package', data, function(results){
                $sbmtBtn.prop('disabled', false).val('Book Now');
                
                results= JSON.parse(results);
                alert(results.message);

                if (results.status != -1) {
                    $this[0].reset();
                }
            });
        
        } else {
            alert('Error: Please enter all the required fields!');
            $name.focus();
        }
       
        return false;
    });

    $('#popup2 input[type="submit"]').on('click', function(){
        var name = $('#popup2 .name').val()
        ,   contactNo = $('#popup2 .contact-no').val();
        
        if (name != "" && contactNo != "") {
            var data = {
                data: {
                    name: name,
                    contact_no: contactNo
                } 
            };
            
            $.post(baseUrl + 'ajax/submit/request', data, function(results){
                results= JSON.parse(results);
                alert(results.message);
                
                if (results.status != -1) {
                    $('#popup2 .close2').trigger('click');
                    $('#popup2 .name').val('');
                    $('#popup2 .contact-no').val('');
                };
            });
        } else {
            alert('Error: Please enter all the required fields!');
            $('#popup2 .name').focus();
        }
    });

    $('.drop_place_chk').on('click', function(){
        var $parent = $(this).parent().closest('.tabs-form');
        if ($(this).is(':checked')) {
            $parent.find('.drop-place').val('');
            $parent.find('.distance-info').slideUp('slow');
        } 
    })

    $('#tab1, #tab2').on('click', function(){
        var type = $(this).attr('id') == "tab1" ? "call-drivers" : "travel";
        showForm(type, true);
    });
    
    $('.tabs-form').on('submit', function(event){
        //event.preventDefault();
        
        var type = $(this).attr('data-type') || "";
        if(type == '') {
            alert("Oops: Unable to determine the type of the form!\nReloading the page may solve the problem.");
            return false;
        }
        
        if ($('#main-'+type).attr('submit-form')) {
            return false;
        }
        
        if (!$('#main-'+type).is(':visible')) {
            // Submit the form
            $('input[type="submit"]').prop('disabled', true).val('Please wait ...');
            $('#main-'+type).attr('submit-form', 'true');
            var $parent = $('#main-'+type).parent().closest('.tabs-form')
            ,   data    = {
                type : type,
                vechileName: $('#main-'+type+' .vehicle-type option:selected').text(),
                distanceInfo: {
                    totalKm: $('#main-'+type+' .total-km').text(),
                    ratePerKm: $('#main-'+type+' .rate-per-km').text(),
                    totalRate: $('#main-'+type+' .total-rate').text()
                },
                data : $parent.serialize()
            };
            
            if (data.type == 'call-drivers') {
                data.isOutstation = $('#main-'+type+' .button-wrap').hasClass('button-active') ? true : false;
            }
            
            $.post(baseUrl + 'ajax/submit/main', data, function(results){
                results= JSON.parse(results);
                alert(results.message);

                if (results.status != -1) {
                    window.location.reload();
                };
            });
            
        } else {
            showForm(type);
        }
        
        return false;
    });

     $('.datetimepicker').datetimepicker({
        format: 'dd/MM/yyyy hh:mm:ss',
        language: 'en',
        pick12HourFormat: true,
        pickSeconds: false
      });
      
    $('form.ft_enq_form, form.contact_form').on('submit', function(event){
        event.preventDefault();
        
        var $name = $(this).find('.name'); 
        if ($name.val() != "") {
            var $this = $(this)   
            ,   data = {
                'data': $this.serialize()
            }

            $.post(baseUrl + 'ajax/submit/contact', data, function(results){
                results= JSON.parse(results);
                alert(results.message);

                if (results.status != -1) {
                    $this[0].reset();
                }
            });
        
        } else {
            alert('Error: Please enter all the required fields!');
            $name.focus();
        }
        
        return false;
    });
    
    $('.pickup-place, .drop-place').on('change', function(){
        var $parent = $(this).parent().closest('.tabs-form');
        
        if ($parent.find('.vehicle-type').val() != '') {
            setTimeout(function(){
                calculateApprxRate($parent);
            }, 300);
        }
    });
  
    $('.vehicle-type').on('change', function(){
        var $parent = $(this).parent().closest('.tabs-form');
        calculateApprxRate($parent);
    });
    
    $('body').on('focus', '.mapLocate', function(){
        $('#mapLocate').removeAttr('id');
        $(this).attr('id', 'mapLocate');
        mapInit();
    });
    
    /** Predefined: START **/
    
    /* Basic Gallery */
    if ($( '.swipebox' ).length > 0) {
        $( '.swipebox' ).swipebox();
    }
    
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
    
    //Service Menu DropDown
    $(".dropdown").mouseover(function(e) {
        $(".dropdown_menu").slideDown(100);
    });
    
    $(".dropdown").mouseleave(function(e) {
        $(".dropdown_menu").slideUp(100);
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


