<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>
</head>
<body>
    <form action="exercise4.php" method="post">
        <p>Type any words and submit;
            You'll get the number of Words.</p>
        Phrase:<input type="text" name="phrase">
        <input type="submit">
        
    </form>

    <?php

        function word_count()
        {
            
            $noOfWords = $_POST["phrase"];

            echo str_word_count($noOfWords);

       
        }

        echo word_count();
       echo"<br>";
    
    ?>  
</body>
</html>