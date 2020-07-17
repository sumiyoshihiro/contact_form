<?php
$nickname = $_POST['nickname'];
$email = $_POST['email'];
$content = $_POST['content'];
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