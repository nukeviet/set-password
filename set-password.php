<?php

define( 'NV_SYSTEM', true );

require NV_ROOTDIR . '/includes/mainfile.php';

$username = 'vuthao'; // Tên tài khoản cần reset mật khẩu
$newpassword = 'xxyyzz'; // Mật khẩu mới

$client_ip = '113.190.237.5';// IP của máy tính reset mật khẩu, có thể lấy thông số này qua trang http://checkip.dyndns.org hoặc checkip.org
$sitekey = 'sitekey-sitekey-sitekey-sitekey'; //sitekey của site, lấy từ file config.php

if( NV_CLIENT_IP == $client_ip and $global_config['sitekey'] == $sitekey )
{
	$newpassword = trim( $newpassword );
	$password = ( isset( $global_config['hashprefix'] ) ) ? $crypt->hash_password( $newpassword, $global_config['hashprefix'] ) : $crypt->hash( $newpassword );
	if( $db->exec( "UPDATE " . NV_USERS_GLOBALTABLE . " SET password=" . $db->quote( $password ) . " WHERE md5username='" . nv_md5safe( trim( $username ) ) . "'" ) )
	{
		nv_insert_logs( NV_LANG_DATA, 'users', 'Tool Reset Password: ' . $username, 'Client IP: ' . $client_ip, 0 );
		die( 'Reset password success. Delete this file immediately' );
	}
	else
	{
		die( 'No Reset password' );
	}
}
else
{
	die( 'Error sitekey or client_ip: ' . NV_CLIENT_IP );
}
