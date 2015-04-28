<html>
<meta http-equiv="refresh" content="5">
<head>
<style type="text/css">

body{
	font-family: "Helvetica Neue";
}

</style>
</head>

<?php
$con=mysqli_connect("mysql.taptics.co","pfishbein","computer1","taptics_quo");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM Post");
$post = mysqli_num_rows($result);
$result2 = mysqli_query($con,"SELECT * FROM User");
$user = mysqli_num_rows($result2);
$result3 = mysqli_query($con,"SELECT * FROM `Like`");
$like = mysqli_num_rows($result3);

mysqli_close($con);
?>

<h1 style="float:left"><span  style="font-size:400px;"><?php echo $post; ?></span>Posts</h1>
<h1 style="float:left"><span  style="font-size:400px;"><?php echo $user; ?></span>Users</h1>
<h1 style="float:left"><span  style="font-size:400px;"><?php echo $like; ?></span>Likes</h1>
</html>