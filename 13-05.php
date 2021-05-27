<?php
$con = mysqli_connect("localhost", "root", "1234", "NsqlDB") or die("connect fail");

$sql = "
  select * from usertbl
  ";

$ret = mysqli_query($con, $sql);

if($ret)
{
  echo mysqli_num_rows($ret), "건이 조회됨, <br><br>";
}
else {
  echo "fail by".mysqli_error($con);
  exit();
}

while($row = mysqli_fetch_array($ret))
{
  echo $row['userID'], " ", $row['name'], " ", $row['height'], " ", "<br>";
}

mysqli_close($con);
 ?>
