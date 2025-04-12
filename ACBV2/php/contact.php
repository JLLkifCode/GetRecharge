
<?php 
$array = array("firstname" => "","nom" => "","email" => "","telephone" => "","message" => "","firstnameError " => "","nomError" => "","telephoneError" => "","messageError" => "","emailError" => "","isSuccess" => false,);

$emailTo = "jeanlouisloliya@acreditbusiness.com";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $array["firstname"]  = verifyInput($_POST["firstname"]);
    $array["nom"]  = verifyInput($_POST["nom"]);
    $array["email"]  = verifyInput($_POST["email"]);
    $array["telephone"] = verifyInput($_POST["telephone"]);
    $array["message"]  = verifyInput($_POST["message"]);
    $array["isSuccess"]  = true;
    $emailText = "";

    if (empty($array["firstname"])) {
        $array["firstnameError"]  = "Veuillez renseigner votre prénom s'il vous plait!";
        $array["isSuccess"] = false;
    }
    else {
        $emailText .="Firstname: {$array["firstname"]}\n";
    }

    if (empty($array["nom"])) {
        $array["nomError"]  = "Veuillez renseigner votre nom s'il vous plait!";
        $array["isSuccess"] = false;
    }
    else {
        $emailText .="Nom: {$array["nom"]}\n";
    }


    if (empty($array["telephone"])) {
        $array["telephoneError"]  = "Veuillez renseigner votre numéro de telephone s'il vous plait!";
        $array["isSuccess"] = false;
    }
    else {
        $emailText .="Telephone: {$array["telephone"]}\n";
    }

    if(!isEmail($array["email"])){
        $array["emailError"]  = "Veuillez renseigner une adresse e-mail valide s'il vous plait!";
        $array["isSuccess"] = false;
    }
    else {
        $emailText .="Email: {$array["email"]}\n";
    }

    if(!isPhone($array["telephone"])){
        $array["telephoneError"]  = "Veuillez renseigner un numéro de téléphone valide s'il vous plait!";
        $array["isSuccess"] = false;
    }
    else {
        $emailText .="Telephone: {$array["telephone"]}\n";
    }

    if (empty($array["message"])) {
        $array["messageError"]  = "Que voulez vous nous dire s'il vous plait?!";
        $array["isSuccess"] = false;
    }
    else {
        $emailText .="Message: $message \n";
    }

    if ($array["isSuccess"]) {
        $headers = "From: {$array["firstname"]} {$array["nom"]} <{$array["email"]}>\r\nReply-To:{$array["email"]}";
        mail($emailTo, "message de votre CV en ligne", $emailText, $headers);
    }
    echo json_encode($array);
}

function isPhone($var)
{
    return preg_match("/^[0-9]*$/", $var);
}


function isEmail($var)
{
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}


function verifyInput($var)
{   
    $var = trim($var);
    $var = stripcslashes($var);
    $var = htmlspecialchars($var);

    return $var;


}


?>