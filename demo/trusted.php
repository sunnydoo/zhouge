<?php

// This file demonstrated how to authenticate a user with 'Trusted Ticket' 
// of Tableau Server. 
//
// Author:  Wang Robin
// Email :  wang.robin@frunto.com
// All Rights researved by http://www.frunto.com
//

function get_user() {
    return "cneast";
}

function get_server() {
    return "47.92.82.6";
}

function get_trusted_ticket($server, $user) {
       
    $url = "http://$server/trusted";
    $post_data = array ("username" => $user);
    
    $ch = curl_init();
    if( $ch === FALSE ) 
        throw new Exception("Server Configuration Error: Unable to Initialize cURL."); 

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);

    $output = curl_exec($ch);

    if( $output === FALSE or $output == "-1" )
         throw new Exception("Tableau Server reported authentication error, please find Tableau Support for assistance.");

    curl_close($ch);
    return $output;
}

function get_trusted_url( $server, $user, $view_url) {
    $params = ':embed=yes&:toolbar=yes';

    $ticket = get_trusted_ticket($server, $user);
    if (strcmp($ticket, "-1") != 0) {
        return "http://$server/trusted/$ticket/$view_url?$params";
    }
    else 
        return 0;
}

?>

<p>An embedded view appears below:</p>

<div> 
<iframe src="<?php echo get_trusted_url(get_server(), get_user(),'views/SuperStore/sheet0')?>"
        width="100%" height="100%">
</iframe>
</div>

<p>
This was created using trusted authentication.
</p>