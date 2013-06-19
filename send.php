<?
if ($_POST["send"]) {
    include_once "sms2me_api.php";

    $r = send_sms($_POST["phone"], $_POST["message"],
                $_POST["translit"], $_POST["time"], 0,
                $_POST["flash"], $_POST["sender"]);

    // $r = array(<id>, <количество sms>, <стоимость>, <баланс>) или array(<id>, -<код ошибки>)

    if ($r[1] > 0)
        echo "Сообщение отправлено";
    else
        echo "Произошла ошибка № ", -$r[1];
}
?>
