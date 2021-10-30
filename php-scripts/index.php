<?php

$urlBase="https://script.googleusercontent.com/macros/echo?user_content_key=fvq829NMZ9RbXFQ7t7m_RT7w-iywKmYPfeWl5RlgWPjEPVSCIav3atBQpBEuuRQreTAkL5wpB8NSjwG7sg2IXekSRbmbCxP8m5_BxDlH2jW0nuo2oDemN9CCS2h10ox_1xSncGQajx_ryfhECjZEnPeMU4XeZhIgjwzWIg7MV_ozxqZ3TdkotSWo44GbF27RobTyfuW0SrzoJcPnTyBLBbsdYVYZnDvw&lib=MBum8aWEZLT_kO3nze8ITRedfpu_zzUS7";
$urlBase="https://quotes-theta.vercel.app";
//$event=$_GET["e"];

function get_web_page( $url ) {
    $res = array();
    $options = array( 
        CURLOPT_RETURNTRANSFER => true,     // return web page 
        CURLOPT_HEADER         => false,    // do not return headers 
        CURLOPT_FOLLOWLOCATION => true,     // follow redirects 
        CURLOPT_USERAGENT      => "spider", // who am i 
        CURLOPT_AUTOREFERER    => true,     // set referer on redirect 
        CURLOPT_CONNECTTIMEOUT => 120,      // timeout on connect 
        CURLOPT_TIMEOUT        => 120,      // timeout on response 
        CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects 
    ); 
    $ch      = curl_init( $url ); 
    curl_setopt_array( $ch, $options ); 
    $content = curl_exec( $ch ); 
    $err     = curl_errno( $ch ); 
    $errmsg  = curl_error( $ch ); 
    $header  = curl_getinfo( $ch ); 
    curl_close( $ch ); 

    $res['content'] = $content;     
    $res['url'] = $header['url'];
    return $res; 
}  

$resp=get_web_page($urlBase) ; 
print $resp['content'];