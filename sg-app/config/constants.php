<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


/*** START - Custom Constants ***/
define('TIMEZONE',              'Asia/Calcutta'); # Asia/Calcutta
define('SITE_NAME',		'Success Group');

// Mail
define('SEND_MAIL',             false);
define('MAIL_SUBJECT',          'Mail from: ' . SITE_NAME); # Default Mail Subject
define('MAIL_ENQ_ADDR',         'support@successgrouptravel.com'); # From address for enquiry etc
define('MAIL_ADMIN_DRIVERS',    'nazeer2mail@gmail.com');  # Admin mail address, for "Call Drivers"
define('MAIL_ADMIN_TRAVELS',    MAIL_ADMIN_DRIVERS);       # Admin mail address, for "Travels"
define('MAIL_ADMIN_TOURS',      MAIL_ADMIN_DRIVERS);       # Admin mail address, for "Tours"

// SMS
define('SEND_SMS',              false);
define('MOBILE_NO_PREFIX',      '+91');
define('SMS_GATEWAY_URL',       'http://sms.glg.co.in/sendsms?uname=selfie&pwd=selfie&senderid=SELFIE&route=T');
define('MOBILE_ADMIN_DRIVERS',  '9842566392');          # Admin mobile no, for "Call Drivers"
define('MOBILE_ADMIN_TRAVELS',  MOBILE_ADMIN_DRIVERS);  # Admin mobile no, for "Travels"
define('MOBILE_ADMIN_TOURS',    MOBILE_ADMIN_DRIVERS);  # Admin mobile no, for "Tours"


// API
define('GOOGLE_MAP_API_KEY',    'AIzaSyAUKXpv0EroPCs6SoQEXrX_jZpAjg6IYP0');

// Tables
define('TBL_PREFIX',            'sg_');
define('TBL_VECHILES_MASTER',   TBL_PREFIX . 'vechiles_master');
define('TBL_CUSTOMER_MASTER',   TBL_PREFIX . 'customers_master');
define('TBL_CUSTOMER_DETAILS',  TBL_PREFIX . 'customer_details');
define('TBL_CONTACT',           TBL_PREFIX . 'contact_us');
define('TBL_REQUEST_CALLBACK',  TBL_PREFIX . 'request_callback');
define('TBL_SUCCESS_BOOKING',   TBL_PREFIX . 'success_bookings');
define('TBL_SERVICE_BOOKING',   TBL_PREFIX . 'service_bookings');
define('TBL_ATTACHMENTS',       TBL_PREFIX . 'attachments');
define('TBL_PACKAGES',          TBL_PREFIX . 'packages');