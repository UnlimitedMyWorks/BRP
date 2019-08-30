<?php
  $db = mysqli_connect('localhost', 'root', '', 'dummy_db');
  if (isset($_POST['username_check'])) {
  	$username = $_POST['username'];
  	$sql = "SELECT * FROM login WHERE username='$username'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "taken";
  	}else{
  	  echo 'not_taken';
  	}
  	exit();
  }
  if (isset($_POST['save'])) {
  	$username = $_POST['username'];
  	$password = $_POST['password'];
  	$sql = "SELECT * FROM login WHERE username='$username'";
  	$results = mysqli_query($db, $sql);
  	if (mysqli_num_rows($results) > 0) {
  	  echo "exists";
  	  exit();
  	}else{
  	  $query ="INSERT INTO `login`(`username`, `password`) VALUES ('$username','".md5($password)."')";
  	  $results = mysqli_query($db, $query);
  	  echo "Saved!";
  	  exit();
  	}
  }

?>
