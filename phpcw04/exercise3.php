<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="exercise3.php" method="post">
        Number of Star:<input type="text" name="userinput">
        <input type="submit">
    </form>
    <?php
            function triangle()
            {
                $numberOfStar = $_POST["userinput"];
                for($i=1;$i<=$numberOfStar; $i++)
                {
                    for($j=1;$j<=$i;$j++)
                    {
                        echo "*";
                    }
                    echo "<br>";
                }
            }

            echo triangle();

    ?>
</body>
</html>