<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2</title>
</head>
<body>

    <form action="" method="get">
        <label for="i1">Num1: </label>
        <input type="number" name="num1" id="i1">
        <label for="i2">Num2: </label>
        <input type="number" name="num2" id="i2">
        <input type="submit" value="soma">
    </form>
    <?php 
        //var_dump($_REQUEST);
        if(!isset($_REQUEST["num1"]) || !isset($_REQUEST["num2"])){
            echo"<script>
                alert('O');
            </script>
            ";
            die();
        }
        $num1 = $_REQUEST["num1"];
        $num2 = $_REQUEST["num2"];
    ?>
    <p>Soma <?php echo $num1+$num2;?></p>

</body>
</html>