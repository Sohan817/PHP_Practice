<?php

ini_set('session.use_only_cokkies', 1);
ini_set('session.use_strict_mode', 1);

//change cookie parameter
session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'locathost',
    'path' => '/',
    'secure' => true,
    'httponly' => true
]);
session_start();

//session_regenerate_id(true)
//session_create_id(true)
if (!isset($_SESSION['last_regenerate'])) {
    session_regenerate_id(true);
    $_SESSION['last_regenerate'] = time();
} else {
    $interval = 60 * 30;
    if (time() - $_SESSION['last_regenerate'] >= $interval) {
        session_regenerate_id(true);
        $_SESSION['last_regenerate'] = time();
    }
}
