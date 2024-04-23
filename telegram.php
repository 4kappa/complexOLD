<?php

/* https://api.telegram.org/bot7175661817:AAFNsWjtSo5aK09tPpiqWaQWhqKnHCDlbto/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];

$token = "7175661817:AAFNsWjtSo5aK09tPpiqWaQWhqKnHCDlbto";
$chat_id = "-1002016312744";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('location: app.jsx');
} else {
  header('location: app.jsx');
}
?>;