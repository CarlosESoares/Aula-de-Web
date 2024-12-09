<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7</title>
    <style>
        *{border-collapse: collapse;}
        table{border: 1px solid black;}
        td{border: 1px solid black;}
        tr{border: 1px solid black;}
    </style>
</head>
<body>
    <form action="" method="get">
        <label for="n1">Insira um numero: </label>
        <input type="number" name="num" id="n1">
        <input type="submit" value="OK">
    </form>
    <?php
    $num = $_REQUEST["num"];
    echo "
        <table>
        <tr>
            <td>1</td>
            <td>".$num*1 ."</td>
        </tr>
        <tr>
            <td>2</td>
            <td>".$num*2 ."</td>
        </tr>
        <tr>
            <td>3</td>
            <td>".$num*3 ."</td>
        </tr>
        <tr>
            <td>4</td>
            <td>".$num*4 ."</td>
        </tr>
        <tr>
            <td>5</td>
            <td>".$num*5 ."</td>
        </tr>
        <tr>
            <td>6</td>
            <td>".$num*6 ."</td>
        </tr>
        <tr>
            <td>7</td>
            <td>".$num*7 ."</td>
        </tr>
        <tr>
            <td>8</td>
            <td>".$num*8 ."</td>
        </tr>
        <tr>
            <td>9</td>
            <td>".$num*9 ."</td>
        </tr>
        <tr>
            <td>10</td>
            <td>".$num*10 ."</td>
        </tr>
    </table>
    ";
    ?>
</body>
</html>