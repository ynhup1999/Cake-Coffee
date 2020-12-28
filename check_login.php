<?php
session_start();
$con = mysqli_connect("localhost", "root", "","storedb");
//$con=mysqli_connect("localhost","awebthgj_yt","awebthgj_yt","awebthgj_yt");
$name=mysqli_real_escape_string($con,$_POST['name']);
$id=mysqli_real_escape_string($con,$_POST['id']);

$res=mysqli_query($con,"select * from users where fb_id='$id'");
$_SESSION['FB_ID']=$id;
$_SESSION['FB_NAME']=$name;
if(mysqli_num_rows($res)>0){

}else{
	mysqli_query($con,"insert into users(name, fb_id) values('$name','$id')");
	
}
?>