<?php





//Your authentication key
// $authKey = "YourAuthKey";

//Multiple mobiles numbers separated by comma
$mobileNumber = "8722445700";

//Sender ID,While using route4 sender id should be 6 characters long.
$senderId = "SERVER";

//Your message to send, Add URL encoding here.
$message = urlencode("Test message");

//Define route 
$route = "default";
//Prepare you post parameters
$postData = array(
    //'authkey' => $authKey,
    'mobiles' => $mobileNumber,
    'message' => $message,
    'sender' => $senderId,
    'route' => $route
);

//API URL
$url="http://193.105.74.159/api/v3/sendsms/plain?user=wolotech&password=FBXM0Fv4&&sender=EATSAP&SMSText=BIGPERL+SERVER+IS+LIVE!!!&type=longsms&GSM=91".$mobileNumber."";

// init the resource
$ch = curl_init();
curl_setopt_array($ch, array(
    CURLOPT_URL => $url,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => $postData
    //,CURLOPT_FOLLOWLOCATION => true
));


//Ignore SSL certificate verification
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


//get response
$output = curl_exec($ch);

//Print error if any
if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
}

curl_close($ch);

echo $output;
?>