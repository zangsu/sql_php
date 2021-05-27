<?php
$con = mysqli_connect("localhost", "root", "1234", "NsqlDB") or die("fail to connect");

$sql = "select * form usertbl";

$ret = mysqli_query($con, $sql);
if($ret)
{
  $count = mysqli_num_rows($ret);
}
else {
  echo "can't search data"."<br>";
  echo "by ".mysqli_error($con);
  exit();
}

echo "<h1> 회원 조회 결과 </h1>";
echo "<table border=1>";
echo "<tr>";
echo "<th>아이디</th><th>이름</th>"
 ?>
