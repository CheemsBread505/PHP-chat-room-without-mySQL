<?php
if(isset($_POST['uname']) && isset($_POST['textBox'])) {
    $data = $_POST['uname']. ":" . '  ' . $_POST['textBox'] . '<br>' ."\r\n";
    $ret = file_put_contents('chat.txt', $data, FILE_APPEND | LOCK_EX);
    if($ret === false) {
        die('There was an error writing this file');
    }
    else {
        echo "$ret bytes written to file";
    }
}
else {
   die('no post data to process');
}
?>

<html>
    <script type="text/javascript">location.href = '/';</script>
</html>