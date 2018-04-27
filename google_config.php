
<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("
859617552709-pma02qmg54eh6i3vmrd9qakuqn61akts.apps.googleusercontent.com
");
	$gClient->setClientSecret("
L5FZltNRojQPq59yxogkfseX
");
	$gClient->setApplicationName("testproject");
	$gClient->setRedirectUri("http://localhost/testproject/g_callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>

