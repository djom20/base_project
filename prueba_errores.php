<?php
function is_http_error($url){
    switch($status_code) {
        case 200:
                $error_status="200: Success";
                break;
        case 401:
                $error_status="401: Login failure.  Try logging out and back in.  Password are ONLY used when posting.";
                break;
        case 400:
                $error_status="400: Invalid request.  You may have exceeded your rate limit.";
                break;
        case 404:
                $error_status="404: Not found.  This shouldn't happen.  Please let me know what happened using the feedback link above.";
                break;
        case 500:
                $error_status="500: Twitter servers replied with an error. Hopefully they'll be OK soon!";
                break;
        case 502:
                $error_status="502: Twitter servers may be down or being upgraded. Hopefully they'll be OK soon!";
                break;
        case 503:
                $error_status="503: Twitter service unavailable. Hopefully they'll be OK soon!";
                break;
        default:
                $error_status="Undocumented error: " . $status_code;
                break;
    }
?>