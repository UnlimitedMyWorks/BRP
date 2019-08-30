<?php
  include("config.php");
  if (isset($_POST) & !empty($_POST))
  {
    $username = mysql_real_escape_string($mysqli ,$_POST['username']);
    $sql="SELECT * FROM login WHERE username = '$username'";
    $result=mysqli_query($mysqli, $sql);
    $count = mysqli_num_rows($result);
    if ($count>0)
    {
      echo '<div style="color:red;"<b>'.$username.'</b> is not available</div>';
    }
    {
      echo '<div style="color:green;"<b>'.$username.'</b>available</div>'
    }
  }
?>
