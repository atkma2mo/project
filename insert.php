<!DOCTYPE html>
<html lang="ja">
<head>
<p>form</p>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="description" content="insert php">
  <title>insert php</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
<?php
try{
$server = 'localhost';
$user = 'test';
$pass = 'Fukuda6047';
$dbname = 'arduino';
$my = new MySQLi($server, $user, $pass, $dbname);
if( $my->connect_errno ) {
        echo $my->connect_errno . ' : ' . $my->connect_error;
}
$my->set_charset('utf8');
$timestanp = $_POST['timestanp'];
$Temperature = $_POST['Temperature'];
$sql = "INSERT INTO connect_arduino (timestanp,Temperature) VALUES ('$timestanp','$Temperature')";

//$sql = "INSERT INTO test_table (id,memo) VALUES (:id,:memo)";
//$stmt = $my->prepare($sql);
//$params = array(':id' => $id, ':memo' => $memo,);
//$stmt->execute($params);

$res=$my->query($sql);
echo 'OK';
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。' . $e->getMessage());
  }
// DB接続を閉じる
$my->close();
?>
</body>
</html>
