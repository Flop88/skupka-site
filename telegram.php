<?php

/* https://api.telegram.org/bot1417577775:AAFV7qbBN9_MoYgWLjxavL7TpENyJGGyQMU/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$device = $_POST['user_device'];
$token = "1417577775:AAFV7qbBN9_MoYgWLjxavL7TpENyJGGyQMU";
$chat_id = "-1001328122118";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Продают:' => $device
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};


$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: index.html');
} else {
  echo "Error";
}

?>