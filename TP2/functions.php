<?php
function getHeader($startSession,$title)
{
    if ($startSession === true) {
        echo "<!DOCTYPE html>
            <html>
            <head>
                <meta charset='UTF-8'>
                <title>$title</title>
                <link  rel='stylesheet' href='./../CSS/bootstrap.min.css'
            </head>";
    }
}

?>

<?php
function getFooter(){
    echo"</body> </html>";
}
?>

