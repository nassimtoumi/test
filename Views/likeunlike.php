<?php

include "../config.php";
session_start();
$userid = $_SESSION['id'];
$postid = $_POST['postid'];
$type = $_POST['type'];

//$userid = 60;
//$postid = 1;
//$type = 0;

// Check entry within table
$sql = "SELECT COUNT(*) AS cntpost FROM like_unlike WHERE postid=".$postid." and userid=".$userid;
$con= config::getConnexion();
$query = $con->prepare($sql);
$query->execute();							
$fetchdata = $query->fetch();

//$result = mysqli_query($con,$query);
//$fetchdata = mysqli_fetch_array($result);
$count = $fetchdata['cntpost'];


if($count == 0){
    $insertquery = "INSERT INTO like_unlike(userid,postid,type) values(".$userid.",".$postid.",".$type.")";
    $con->exec($insertquery);
    //$query = $con->prepare($insertquery);
    //$query->exec();
  //  mysqli_query($con,$insertquery);
}else {
    $updatequery = "UPDATE like_unlike SET type=" . $type . " where userid=" . $userid . " and postid=" . $postid;
    $con->exec($updatequery);
    //mysqli_query($con,$updatequery);
}


// count numbers of like and unlike in post
// count numbers of like and unlike in post
$like_query = "SELECT COUNT(*) AS cntLikes FROM like_unlike WHERE type=1 and postid=".$postid;
$db2 = config::getConnexion();
$query = $db2->prepare($like_query);
$query->execute();							
$like_row = $query->fetch();
$total_Likes = $like_row['cntLikes'];

$unlike_query = "SELECT COUNT(*) AS cntUnlikes FROM like_unlike WHERE type=0 and postid=".$postid;
$db3 = config::getConnexion();
$query = $db3->prepare($unlike_query);
$query->execute();							
$unlike_row = $query->fetch();
$total_Unlikes = $unlike_row['cntUnlikes'];


//$return_arr = array("likes"=>$totalLikes,"unlikes"=>$totalUnlikes);
$return_arr = array("likes"=>$total_Likes,"unlikes"=>$total_Unlikes);
//var_dump($return_arr);
echo json_encode($return_arr);

?>