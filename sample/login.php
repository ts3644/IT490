<?php
require_once('/home/talha/git/ITproj/rabbitmqphp_example/testRabbitMQClient.php');
#require_once('/home/talha/git/rabbitmqphp_example/sample/index.html')
#$_POST['username'] = $argv[1];
$username = $_GET["username"];
$_POST['password'] = $argv[2];

if (!isset($_POST))
{
	$msg = "NO POST MESSAGE SET, POLITELY FUCK OFF $username";
	echo json_encode($msg);
	exit(0);
}
$request = getData($_GET['type'], $_GET['username'], $_GET['password']);
$response = "unsupported request type, politely FUCK OFF: $username";
#echo $_POST['username']
switch ($request)
{
	case "1":
		$response = "login, yeah we can do that:(Req:$request) $username";
	break;
	case "0":
		$response = "Login, we cant do that ja feels";
	break;
	
}
echo json_encode($response);
exit(0);

?>

