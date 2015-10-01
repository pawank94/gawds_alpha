<?php
file_put_contents('log.txt', $_POST['FullName'] . '|' . $_POST['Email'] . '|' . $_POST['Message'] . '\n', FILE_APPEND);
?>