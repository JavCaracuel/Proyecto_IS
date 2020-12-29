<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    /* 
     * session_start();
     * Starting a new session before clearing it
     * assures you all $_SESSION vars are cleared 
     * correctly, but it's not strictly necessary.
     */
    session_destroy();
    session_unset();
    /* Or whatever document you want to show afterwards */
?>
    </body>
</html>
