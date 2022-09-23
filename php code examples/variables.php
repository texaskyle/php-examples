<form method="get">
    <input type="text" name="person">
    <button>submit</button>

</form>

<?php
$name = $_GET['person'];
echo $name." how are you";
?>