<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="containerForm">
            <form method="post" action="main.php">
                <div class="formInput">
                    <label for="num1">Número 1:</label>
                    <input type="number" name="num1" id="num1" value="0">
                    <br><br>
                    <label for="num1">Número 2:</label>
                    <input type="number" name="num2" id="num2" value="0">
                    <br><br>
                    <label for="op">Operação:</label>
                <select name="op" id="op">
                    <option value="+">Somar</option>
                    <option value="-">Subtrair</option>
                    <option value="*">Multiplicar</option>
                    <option value="/">Dividir</option>
                </select>
                </div>
                <br>
                <div class="btn">
                    <button type="submit">Calcular</button>
                </div>
            </form>
            </div>
    </body>
</html>