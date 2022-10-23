<?php
    $fh = fopen('chat.txt','r');
    while ($line = fgets($fh)) {
    echo($line);
    }
    fclose($fh);
?>

<html>
    <script language="javascript">
        setTimeout(function(){
        window.location.reload(1);
        }, 3000);
    </script>
</html>