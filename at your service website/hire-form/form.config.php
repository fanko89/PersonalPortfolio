<?php namespace JF;
/**

Copyright 2018 JQueryForm.com
License: http://www.jqueryform.com/license.php

FormID:  jqueryform-ba8ee4
Date:    2018-07-09 23:08:21
Version: v2.1.3
Generated by http://www.jqueryform.com

PHP 5.3+ is required.
If mailgun is used AND the form has file upload field, PHP 5.5+ is required.

*/

class Config {
	private static $config;

    public static function getConfig( $decode = true ){
    	self::$config = self::_getConfig( $decode );
    	self::overwriteConfig();
    	return self::$config;
    }

    private static function _getConfig( $decode = true ){
        ob_start();
        // ---------------------------------------------------------------------
        // JSON format config
        // Note: please make a copy before you edit config manually
        // ---------------------------------------------------------------------

/**JSON_START**/ ?>
{
    "formId": "jqueryform-ba8ee4",
    "email": {
        "to": "office@yourservicepros.us",
        "cc": "",
        "bcc": "",
        "subject": "Hire request from {f1}",
        "template": "",
        "sendmail_from": "info@yourservicepros.us"
    },
    "admin": {
        "users": "admin:689fa",
        "dataDelivery": "emailAndFile"
    },
    "thankyou": {
        "url": "http:\/\/atyourservicepros.us\/career.html",
        "message": "Your request has been sent. Thank You!",
        "seconds": "10"
    },
    "seo": {
        "trackerId": "UA-77468084-1",
        "title": "At Your Service Pros",
        "description": "Hire form for future employees ",
        "keywords": "Hire form",
        "author": "At Your Service Pros"
    },
    "mailer": "smtp",
    "smtp": {
        "host": "gator4052.hostgator.com",
        "user": "info@yourservicepros.us",
        "password": "precision",
        "security": "ssl"
    },
    "mailgun": {
        "domain": "",
        "apiKey": "",
        "fromEmail": "",
        "fromName": ""
    },
    "styles": {
        "iCheck": {
            "enabled": true,
            "skin": "flat",
            "colorScheme": "black"
        },
        "Select2": {
            "enabled": true
        }
    },
    "logics": [],
    "fields": [
        {
            "label": "Your Name",
            "field_type": "name",
            "field_options": {
                "size": "small",
                "sender": "fullname",
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true
                    }
                },
                "placeholder": "",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                }
            },
            "cid": "c1",
            "id": "f1"
        },
        {
            "label": "Email",
            "field_type": "email",
            "field_options": {
                "size": "small",
                "sender": true,
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "email": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-envelope",
                    "leftText": ""
                }
            },
            "cid": "c2",
            "id": "f2"
        },
        {
            "label": "Phone",
            "field_type": "phone",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "sender": false,
                "placeholder": "xxx-xxx-xxxx",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-earphone"
                },
                "validators": {
                    "pattern": {
                        "enabled": true,
                        "val": "[0-9]{3,4}[ -.]*[0-9]{3,4}[ -.]*[0-9]{4}",
                        "msg": "Invalid phone number"
                    }
                }
            },
            "phone": {
                "validationMethod": "simple",
                "simpleFormat": "xxx-xxx-xxxx",
                "usePhoneLib": "N"
            },
            "cid": "c30",
            "id": "f30"
        },
        {
            "label": "Work History Information",
            "field_type": "paragraph",
            "field_options": {
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": false
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-edit"
                }
            },
            "cid": "c3",
            "id": "f3"
        },
        {
            "label": "Resume Upload",
            "field_type": "file",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                },
                "file": {
                    "showPreview": true,
                    "showRemove": true
                }
            },
            "cid": "c52",
            "id": "f52"
        },
        {
            "label": "Google reCaptcha",
            "field_type": "recaptcha",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "style": [],
                    "slideshow": false
                }
            },
            "labelHide": true,
            "recaptcha": {
                "theme": "light",
                "siteKey": "6LcbWHEUAAAAAJ1F0pJNNx1Dn4B6jlJmdNTzTmDF",
                "secretKey": "6LcbWHEUAAAAAJbzTqdCfG7DWRtwg-fwjCTwPTxY",
                "language": ""
            },
            "cid": "c57",
            "id": "f57"
        },
        {
            "label": "Submit Button",
            "field_type": "submit",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "page": {
                    "title": "Last Step",
                    "labelPrev": "< Back",
                    "isButtonPrev": false,
                    "showPageNumnber": false,
                    "pageNumberText": "{page} \/ {total}"
                }
            },
            "labelHide": true,
            "submit": {
                "label": "",
                "icon": "",
                "checkRequiredFields": ""
            },
            "cid": "c100",
            "id": "f100"
        }
    ],
    "autoResponse": {
        "subject": "At Your Service Pros Job hire",
        "template": "Dear {sender.fullname},\n\nThank you for filling out your job application. \nWe will contact you shortly.\n\nBest Regards,\nAt Your Service Pros\n\n\n"
    },
    "twilio": {
        "toPhone": "8013724514",
        "toTemplate": "{sender.fullname} just submitted a web form.\n\nThe web form data:\n{dataText}\n\nReference ID: {AutoID}\nIP: {IP}\nDate: {Date}\nTime: {Time}\nWebsite: {HTTP_HOST}\nReferer: {HTTP_REFERER}\n",
        "autoResponseTemplate": "Dear {sender.fullname},\n\nThank you for filling out your job application. \nWe will contact you shortly.\n\nBest Regards,\nAt Your Service Pros"
    }
}
<?php /**JSON_END**/

        $json = ob_get_clean() ;

        return $decode ? json_decode( trim($json), true ) : $json;
    } // end of getConfig()

    private static function getValue( $fieldId, $default = NULL ){
        return isset( $_POST[$fieldId] ) ? $_POST[$fieldId] : $default ;
    }

    private static function overwriteConfig(){
    	//self::get_to();
    }

    private static function get_to(){
    	$value = self::getValue( 'c25' );
    	$to = array(
    		'Option 1' => 'a@a.com',
    		'Option 2' => 'b@b.com',
    		'Option 3' => 'c@c.com',
    	);

    	if( isset( $to[$value] ) ){
    		self::$config['email']['to'] = $to[ $value ];
    	};
    }

} // end of Config class