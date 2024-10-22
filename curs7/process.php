<form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
    First Name: <input type="text" name="first_name"> <br>
    Last Name: <input type="text" name="last_name"> <br>
    Age: <input type="number" name="age"> <br>
    <input type="submit" value="Send">

</form>
<?php
$firstName = $_POST['first_name'] ??'';
$lastName = $_POST['last_name'] ??'';
$age = $_POST['age'] ?? '';

if (!is_numeric($age)){
    die('Age must be numeric');
}

echo $firstName . ' ' . $lastName . ' ' . $age;
