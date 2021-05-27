<?php
$con = mysqli_connect("localhost", "root", "1234", "NsqlDB") or die("MySQL connect error");

$sql = "
    create table usertbl
    (
        userID char(8) not null primary key,
        name varchar(10) not null,
        birthYear int not null,
        addr char(2) not null,
        mobile1 char(3),
        mobile2 char(8),
        height smallint,
        mDate date
    )
";

$ret = mysqli_query($con, $sql);

if($ret)
{
  echo "userTBL create success", "<br>";
}
else {
  echo "userTBL create fail", "<br>";
  echo "because of : ".mysqli_error($con);
}

mysqli_close($con);
 ?>
