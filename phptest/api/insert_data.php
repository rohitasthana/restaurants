<?php
header('Access-Control-Allow-Origin: *');
header("Content-type:application/json; charset=utf8");
header('Access-Control-Allow-Methods: POST');
//header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-type,Access-Control-Allow-Methods,Authorization,X-Reuested-With');
//echo "1";
//exit(0);
include_once('../includes/config.php');
include_once('../core/post.php');

$post = new Post($db);

$data = json_decode(file_get_contents("php://input"));
$post->name = $data->name;
$post->mobile = $data->mobile;
$post->branch = $data->branch;

if($post->insert_data())
{
	echo json_encode( array('message' =>'data inserted!!'));
}
else
{
	echo json_encode( array('message' =>'data not inserted!!'));
}
?>