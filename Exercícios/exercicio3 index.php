
<html>
<head>
    <title>Ex 3</title>
</head>
<body>
    <h1>Exercicio 3</h1>


 <!-- Código do float -->
 <?php

$a = "teste teste tudo pelo valmir";
$b = 22.9;

if(is_float($a)) {
  echo "Sera que é o resultado? é o resultado 1! <br>";
}

if(is_float($b)) {
  echo " Sera que é o resultado? é o resultado 2! <br>";
}

// Código do string

$str = "Kawan Uzumaki porra";
$num = 007;

if(is_string($str)) {
 echo "$str é o mais lindo <br>";
}

if(is_string($num)) {
 echo "$num não, é o cristiano <br>";
}

// Código do booleano

$a = true;

if(is_bool($a)) {
  echo "E o mais gostosao chora agora ri depois <br>";
}

if(is_bool(0)) {
  echo "É o Roger Guedes <br>";
}

// Código do array

echo "<p> Sintaxe NORMAL : Eu sou filho do mato, eu venho da roça, o meu pai foi vaqueiro, minha mao é grossa. </p>";
$a = array(6, 7, 6, 5);

print_r($a); 
echo "<br>";