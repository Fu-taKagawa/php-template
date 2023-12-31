<?php
//直リンクされた場合index.phpにリダイレクト
if($_SERVER["REQUEST_METHOD"] != "POST"){
	header("Location: index.html");
	exit();
}
//各項目を内容を取得
$model = $_POST['model'];
$date = $_POST['date'];
$time = $_POST['time'];
$postalNumber = $_POST['postalNumber'];
$address__pre = $_POST['address__pre'];
$address__region = $_POST['address__region'];
$address__house = $_POST['address__house'];
$address__building = $_POST['address__building'];
$name = $_POST['name'];
$phone__first = $_POST['phone__first'];
$phone__second = $_POST['phone__second'];
$phone__third = $_POST['phone__third'];
$email = $_POST['email'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/vnd.microsoft.icon" href="../img/favicons/favicon.ico">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <link rel="icon" href="../img/favicons/favicon.ico">
        <link rel="stylesheet" href="../../css/contact/confirm.css">
        <title>確認画面</title>
    </head>
    <body class="confirm-body">
        <form action="complete.php" method="post" class="confirm-form">
            <h1>確認画面</h1>

            <div class="contactFlow">
                <img src="../../img/contactFlow-second.jpg" alt="">
            </div>

            <div class="input-area">
                <div class="input-area__content">
                    <p>ご来場モデルハウス</p>
                </div>
                <?php echo $model;?>
            </div>

            <div class="input-area">
                <div class="input-area__content">
                    <p>希望日時</p>
                </div>
                <?php echo $date;?>
                <?php echo $time;?>
            </div>

            <div class="input-area">
                <div class="input-area__content">
                    <p>お客様名</p>
                </div>
                <?php echo $name;?>
            </div>

            <div class="input-area">
                <div class="input-area__content">
                    <p>郵便番号</p>
                </div>
                <?php echo $postalNumber;?>
            </div>

            <div class="input-area">
                <div class="input-area__content">
                    <p>ご住所</p>
                </div>
                <?php echo $address__pre;?>
                <?php echo $address__region;?>
                <?php echo $address__house;?>
                <?php echo $address__building;?>
            </div>

            <div class="input-area">
                <div class="input-area__content">
                    <p>電話番号</p>
                </div>
                <?php echo $phone__first;?>
                -
                <?php echo $phone__second;?>
                -
                <?php echo $phone__third;?>
            </div>

            <div class="input-area">
                <div class="input-area__content">
                    <p>メールアドレス</p>
                </div>
                <?php echo $email;?>
            </div>
            <div class="confirm-button">
                <input type='button' onclick='history.back()' value='戻る' class="confirm-button__btn">
                <input type="submit" name="submit" value="入力内容を確認し送信する" class="confirm-button__btn">
                <input type="hidden" name="model" value="<?php echo $model;?>">
                <input type="hidden" name="date" value="<?php echo $date;?>">
                <input type="hidden" name="time" value="<?php echo $time;?>">
                <input type="hidden" name="postalNumber" value="<?php echo $postalNumber;?>">
                <input type="hidden" name="address__pre" value="<?php echo $address__pre;?>">
                <input type="hidden" name="address__region" value="<?php echo $address__region;?>">
                <input type="hidden" name="address__house" value="<?php echo $address__house;?>">
                <input type="hidden" name="address__building" value="<?php echo $address__building;?>">
                <input type="hidden" name="name" value="<?php echo $name;?>">
                <input type="hidden" name="phone" value="<?php echo $phone;?>">
                <input type="hidden" name="email" value="<?php echo $email;?>">
            </div>
        </form>
    </body>
</html>