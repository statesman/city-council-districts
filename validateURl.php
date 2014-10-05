// Strip out any leading http:// or https:// 
// if other protocols such as ftp are present, 
// the intention is they'll fail regex further down
$url = trim($_GET['url']);
if (stripos($url, 'http://') === 0)
    $url = substr($url, 7);
else if (stripos($url, 'https://') === 0)
    $url = substr($url, 8);
 
// Get the string index of the first forward slash
// if there is none, add one at the end
$slashIdx = strpos($url, '/');
if ($slashIdx === false) {
    $slashIdx = strlen($url);
    $url .= '/';
}
 
// Regex validation of URL string
if (!preg_match('/^[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,4}\/?([a-zA-Z0-9\-\._\?\,\'\/\\\+&%\$#\=~\(\)])*$/i', $url))
    echo '20 invalid URL string';
else {
    // Prepare for fsocketopen call
    // Split the URL into domain and path
    $domain = substr($url, 0, $slashIdx);
    $path   = substr($url, $slashIdx);
    $portno = 80;
    $method = "HEAD"; // HEAD request is more efficient
    $http_response = "";
    $http_request .= $method ." ". $path ." HTTP/1.0\r\n";
    $http_request .= "User-Agent: Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0)\r\n";
    $http_request .= "\r\n";
 
    // Attempt to connect to this domain
    $fp = @fsockopen($domain, $portno, $errno, $errstr);
    if ($fp) {    
        fputs($fp, $http_request);
        // Read first 64 bytes of response
        $http_response = fgets($fp, 64);    
        fclose($fp);
 
        // regex out the HTTP status code
        // then validate whether the code is a 200 OK or 301/302 redirect
        preg_match('/HTTP\/\d\.\d (\d{3})/', $http_response, $matches);
        if (in_array(intval($matches[1]), array(200, 301, 302)))
            echo '10 valid';
        else
            echo '30 http error';
    }
    else 
        echo '40 unknown host';
}