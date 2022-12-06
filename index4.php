<?php 

$password = '123';
$cost = [
    'cost' => 12
];

// echo "<hr>";
// echo "Método Crypt: " . crypt($password, 'perro');
// echo "<hr>";
// echo "Método MD5: " .  md5($password);
// echo "<hr>";
echo "<hr>";
$start = microtime(true);
for($i = 0; $i <= 50; $i++){ 
    echo "Método HASH -> PASSWORD_BCRYPT : " . password_hash(rand(4,10), PASSWORD_BCRYPT, $cost);
    echo "<hr>";
}
$end = microtime(true);
echo "Tiempo total: " . ($end - $start);
// echo "<hr>";
// echo "Método HASH -> PASSWORD_ARGON2I : " . password_hash($password, PASSWORD_ARGON2I);
// echo "<hr>";
