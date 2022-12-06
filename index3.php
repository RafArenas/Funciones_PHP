<?php 
//Cookie::set

// setcookie('rambo', 'Aun vive', time()+60*60, '/user', 'http://localhost:8000/index3.php', false);
// setcookie('ADSI', 2341240, time()+60*60, '/user', 'http://localhost:8000/index3.php', false);
$tel = base64_encode(3132653515);
setcookie('cel', $tel, time()+60*60*365, '/user');
var_dump($_COOKIE );
// echo time();
// echo microtime();
// http://*.localhost:8000/index3.php