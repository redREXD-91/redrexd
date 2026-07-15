<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/plain; charset=utf-8");
$inputUser = $_POST["user"];
$inputPwd = md5($_POST["password"]);

$jsonText = file_get_contents("userdata.json");
$accountArr = json_decode($jsonText, true);
$output = "0";

foreach($accountArr as $acc)
{
    if($acc["username"] == $inputUser && $acc["password"] == $inputPwd)
    {
        $output = $acc["username"].",".$acc["avatar"].",".$acc["playerType"];
        break;
    }
}
echo $output;
?>
