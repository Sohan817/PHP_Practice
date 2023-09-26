<?php
$sensitiveData = "Sohan";
$salt = bin2hex(random_bytes(16));
echo "<br>" . $salt;
$pepper = "ASecretPaperString";

$data = $sensitiveData . $salt . $pepper;

$hash = hash('sha256', $data);
echo "<br>" . $hash;
echo "<br>";
//Verification hashing
$sensitiveData1 = "Sohan";
$storedHash = $hash;
$storedSalt = $salt;
$pepper = "ASecretPaperString";
$verificationData = $sensitiveData1 . $storedSalt . $pepper;
$verificationHash = hash('sha256', $verificationData);

if ($storedHash === $verificationHash) {
    echo "Two data are same";
} else {
    echo "Two data are not same";
}

//Password Hashing 
$pwdSignup = "Sohan";
$option = [
    'cost' => 12
];
$signup = password_hash($pwdSignup, PASSWORD_BCRYPT, $option);

$pwdLogin = "Sohan";

if (password_verify($pwdLogin, $signup)) {
    echo "They are same";
} else {
    echo "They are not same";
}
