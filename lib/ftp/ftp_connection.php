<?php
	//require 'path/to/ftp.php';

	$config = array(
    'passive_mode' => true, // true | false
    'transfer_mode' => FTP_BINARY, // FTP_ASCII | FTP_BINARY
    'reattempts' => 3, // Number of time to re-attempt connection
    'log_path' => '/logs', // Path to log file
    'verbose' => true, //true | false
    'create_mask' => '0755' // default: 0777
);

$ftp = new ftp($config);

//Connect to FTP server
$ftp->conn('ftp.server.tld', 'username', 'password');

/*You should enable passive mode if server is behind NAT and doesn't have a public IP address.

Use methods put() and get() for handling files - put() for uploading files to server and get() for downloading files from ftp server.

You can download entire directories thanks the recursive() method.

This class requires PHP5 with FTP extension installed.
*/
?>