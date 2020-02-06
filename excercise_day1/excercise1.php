<form action="excercise1.php" method="get">
    <input type="text" name="name" value="">
    <button type="submit">Submit</button>
</form>

<?php

    if (isset($_GET['name']))
    {
        $name = $_GET['name'];
        echo "hello, ".$name;
    }



