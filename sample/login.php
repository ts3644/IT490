<?php
require_once('/home/talha/git/rabbitmqphp_example/testRabbitMQClient.php');
#$_POST['username'] = $argv[1];
$username = $_POST['username'];
$_POST['password'] = $argv[2];

if (!isset($_POST))
{
	$msg = "NO POST MESSAGE SET, POLITELY FUCK OFF $username";
	echo json_encode($msg);
	exit(0);
}
$request = $_POST;
$response = "unsupported request type, politely FUCK OFF $username";
#echo $_POST['username']
switch ($request["type"])
{
	case "login":
		$response = "login, yeah we can do that $username";
	break;
}
echo json_encode($response);
exit(0);

?>

