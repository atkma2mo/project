<?php
$server = 'localhost';
$user = 'test';
$pass = 'Fukuda6047';
$dbname = 'arduino';
$my = new MySQLi($server, $user, $pass, $dbname);
$my->set_charset('utf8');
$sql = "SELECT * FROM `connect_arduino` LIMIT 0 , 30";
$result = $my->query($sql);
// データベースの中身を取得
  while($row = $result->fetch_assoc() ){
    echo $row['timestanp'] ."\t" .$row['Temperature'] . "\n";
}
// DB接続を閉じる
$my->close();
?>
