<?php
class Device{
    
    // I assume the cookies are stored in associated array
    // This data could be loaded from server
    public static $cookies = array('BLOOMBERG_COOKIE'=>'y7ojoofdXXfdsafdsafdsafdsaFDXs2',
                             'BLUEBITE_COOKIE'=>'3YcyE9oOsKm9W49smJWSIYQoGsbIveO',
                             'BBQS_COOKIE'=>'dUEe901oOsKm9W49smJWSIYQoGsbIveO');

    public static function getCookie($cookie_name='BLUEBITE_COOKIE'){

        if( array_key_exists($cookie_name, SELF::$cookies) )
            return SELF::$cookies[$cookie_name];
        else
            return 'Cookie does not exist.';

    }

}

$cookie = Device::getCookie();
echo 'Cookie is : ' .$cookie;
echo "\n";
?>
