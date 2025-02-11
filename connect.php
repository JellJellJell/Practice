<?
    session_start();
    $conn = new mysqli('localhost','root','','cultcars');

    function pre($i)
    {
        echo "<pre>";
        var_dump($i);
        echo "</pre>";
    }

?>