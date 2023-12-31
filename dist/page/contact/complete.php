<?php
//直リンクされた場合index.phpにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header("Location: index.php");
	exit();
}

//メールの日本語設定
mb_language("Japanese");
mb_internal_encoding("UTF-8");

//送信先アドレス
$to = $_POST['email'];
$to.= ', ' .'info@template.xyz';
$to.= ', ' .'info@template.com';
//メール件名
$subject = "お申し込み内容のご確認";
//メッセージ本文を視覚的に見やすく格納（ヒアドキュメント）
$message = <<< EOM
お問い合わせいただきありがとうございました。

2営業日以内には返答させていただきます。

よろしくお願いいたします。

以下の内容で承りました。
━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
【 ご来場モデルハウス 】
{$_POST["model"]}

【 希望日時 】
{$_POST["date"]}
{$_POST["time"]}

【 お客様名 】
{$_POST["name"]}

【 郵便番号 】
{$_POST["postalNumber"]}

【 ご住所 】
{$_POST["address__pre"]}{$_POST["address__region"]}{$_POST["address__house"]}{$_POST["address__building"]}

【 お電話 】
{$_POST["phone__first"]}{$_POST["phone__second"]}{$_POST["phone__third"]}

【 メール 】
{$_POST["email"]}

━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━
EOM;
//送信元
$headers = "From: template<info@template.xyz>";
//メール送信
mb_send_mail($to, $subject, $message, $headers); 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/vnd.microsoft.icon" href="./../img/favicons/favicon.ico">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="icon" href="./../img/favicons/favicon.ico">
        <link rel="stylesheet" href="../../css/contact/complete.css">
        <title>完了画面</title>
    </head>
    <body class="complete-body">
        <div class="complete-form">
            <h2>お問い合わせいただきありがとうございます</h2>
            <div class="complete-btn">
                <a href="../../index.php">トップページへ戻る</a>
            </div>
        </div>
    </body>
</html>