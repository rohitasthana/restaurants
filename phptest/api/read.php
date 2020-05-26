<?php
header('Access-Control-Allow-Origin: *');
header("Content-type:application/json; charset=utf8");
//echo "1";
//exit(0);
include_once('../includes/config.php');
include_once('../core/post.php');

$post = new Post($db);

$result = $post->read();
$num = $result->rowCount();
if($num>0)
{
	$post_arr 	      = array();
	$post_arr['data'] = array();
	while($row=$result->fetch(PDO::FETCH_ASSOC))
	{
		extract($row);
		$post_item = array(
		'id'     => $id,
		'name'   => $name,
		'mobile' => $mobile,
		'branch' => $branch,
		'date'   => $date);
		array_push($post_arr['data'],$post_item);
	}
	echo json_encode($post_arr);
}else
{
	echo json_encode(array('message' => 'No Posts Found'));
}
?>