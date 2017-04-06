<?php define('ACCESS', true);

    include_once 'function.php';

    $path = isset($_GET['path']) && !empty($_GET['path']) ? rawurldecode($_GET['path']) : null;

    if (isset($_SESSION[SESS]) && is_file($path) && getimagesize($path) !== false)
        readfile($path);
    else
        die ('Not read image');

?>
