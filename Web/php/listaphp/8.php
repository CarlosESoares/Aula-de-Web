<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>8</title>
</head>
<body>
    <form action="" method="get">
        <label for="string">Insira um texto: </label>
        <input type="text" name="string" id="string">
        <input type="submit" value="OK">
    </form>
    <?php
    $string = $_REQUEST["string"];
    echo "Tamanho: " . $string.ob_get_length;
    echo"
    <script>
            function ehPalindromo(str){
            str = str.toUpperCase(str);
            let rts = str.split('').reverse().join('');
            if(rts == str){
                return true;
            }else{
                return false;
            }
        }
    </script>
    ";
    echo "Palindromo: " . "";

    ?>
</body>
</html>