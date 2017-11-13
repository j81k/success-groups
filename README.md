# success-groups

[Sample DB]
* /<assets-folder>/database/sg_db.sql

[Mail Templates]
* /views/templates/mail
        
        - <enquiry.html>
            Params: 
                * {name}        # Name of the customer
                * {desc}        # Actual comment sent by customer   

            [Admin]
                * {email}       # Email Address of the customer
                * {contact_no}  # Contact No of the customer

        - <success_booking.html>
            Same for: Package Booking 
            Params: 
                * {name}    # Name of the customer
                * {module}  # Submitted Module Name
                * {ref_id}  # Unique reference ID for future use.
                
                * {contact_no}
                * {email}
                * {address_1}
                * {address_2}
                * {location}
                
                [For "Call Drivers" & "Travels"]
                --------------------------------
                * {no_of_days}
                * {vechile_type}
                * {pickup_place}
                * {drop_place}
                * {travel_date}

                * {total_km}
                * {rate_per_km}
                * {total_amount}

                [For "Call Drivers"]
                --------------------------------
                * {station_type}
                * {est_usage_hrs}
                * {is_night_journey}
                * {is_drop_same_location}
         

* /views/templates/sms
        - <enquiry.html>
            Params: 
                * {name}    # Name of the customer
                    
         - <attachments.html>
            Params: 
                * {name}    # Name of the customer

         - <req_callback.html>
            Params: 
                * {name}    # Name of the customer

         - <success_booking.html>
            Params: 
                * {name}    # Name of the customer
                * {module}  # Submitted Module Name
                * {ref_id}  # Unique reference ID for future use.
    
                



# Change log:
------------
[OK] * Date picker
[OK] * Remove "round trip" field from success Travel
[OK] * All Form Submit
[OK] * Send mail for "Request Demo, Attachment, success Call drive & success Travel"
[OK] * Set Approx. amount page for km & Price
[OK] * Integrate the New HTML design

* Change the Single Success Travel as, two tabs with "International & Domestic" 
