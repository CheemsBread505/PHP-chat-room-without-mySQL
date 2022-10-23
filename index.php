<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat room with out mySQL</title>
</head>
<body>
    <button onClick="window.location.reload();">Refresh</button>
    <br>
    <br>
    <form action="post.php" method="POST">
        <label for="uname">User name:</label><br>
        <input type="text" id="fname" name="uname"><br>
        <br>
        <textarea id="textBox" name="textBox" rows="4"></textarea>
        <input type="submit" value="Submit">
    </form> 

    <br>
    
    <?php
        $fh = fopen('chat.txt','r');
        while ($line = fgets($fh)) {
        echo($line);
        }
        fclose($fh);
    ?>
</body>
</html>