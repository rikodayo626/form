<?php
    if (!isset($_POST["name"])) {
        
    }
    // 送信内容の取得
    $name = isset($_POST["name"]) ? $_POST["name"] : null;
    $mail = isset($_POST['mail']) ? $_POST['mail'] : null;
    $message = isset($_POST['message']) ? $_POST['message'] : null;

    // 入力チェック

    // メール設定
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");

    $to = "r.kojima@rutla.jp";
    $subject = "お問い合わせ";
    $message = $name."様";
    $headers = "From: r.kojima@rutla.jp";
    mb_send_mail($to, $subject, $message, $headers);
?>