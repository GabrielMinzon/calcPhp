<?php
require_once __DIR__.'/../vendor/autoload.php';

use APP\model\Calculadora;

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$op = $_POST['op'];

$calc = new Calculadora();

switch ($op) {
    case '+':
        $result = $calc->soma($num1, $num2);
        break;
    case '-':
        $result = $calc->subtracao($num1, $num2);
        break;
    case '*':
        $result = $calc->multiplicacao($num1, $num2);
        break;
    case '/':
        $result = $calc->divisao($num1, $num2);
        break;
    default:
        $result = 'Operação Inválida!';
}

echo "Resultado: $result<br>";
echo "<br><button><a href=\"..\index.php\">Voltar</a></button>";
