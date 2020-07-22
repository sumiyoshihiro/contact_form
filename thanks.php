<?php
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$content = $_POST['content'];

//１ データベースに接続する

$host = 'localhost';
$dbname = 'phpkiso';
$charset = 'utf8mb4';
$user = 'root';
$password = '';

$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$dbh = new PDO($dsn,$user,$password);


//2 SQL文を実行する
// ニックネーム、イーメイル、コンテントはcolumn
$sql = 'INSERT INTO `survey`(`nickname`,`email`,`content`)VALUES ("'. $nickname.'","'.$email.'", "'.$content.'")';

$stmt = $dbh->prepare($sql);
$stmt->execute();


// 3 データベースを切断する
// null は空っぽという意味
$dbh = null;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送信完了</title>
</head>
<body>
    <h1>お問い合わせありがとうございました</h1>
    <div>
    <h3>お問い合わせ内容詳細</h3>
    <P>ニックネーム:<?php echo $nickname; ?></P>
    <P>メールアドレス :<?php echo $email; ?></P>
    <P>お問い合わせ内容 :<?php echo $content; ?></P>
    </div>
</body>
</html>