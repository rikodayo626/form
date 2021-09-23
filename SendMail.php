<?php
    // 入力チェック
    //if (!isset($_POST["name"])) {
    //    return;
    //}
    // 送信内容の取得
    $name = isset($_POST["name"]) ? $_POST["name"] : null;
    $mail = isset($_POST['mail']) ? $_POST['mail'] : null;
    $message = isset($_POST['message']) ? $_POST['message'] : null;

    // メール設定
    mb_language("Japanese");
    mb_internal_encoding("UTF-8");
    $to = "r.kojima@rutla.jp";
    $subject = "お問い合わせ";
    $honbun = "お名前:".$name."様\r\n";
    $honbun .= "本文：\r\n";
    $honbun .= $message;
    $headers = "From: ".$mail;
    mb_send_mail($to, $subject, $honbun, $headers);
?>
