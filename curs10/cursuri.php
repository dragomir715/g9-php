<?php
 require_once "Curs.php";
 require_once "JavaCurs.php";

 echo Curs::$curs;
 echo '<br>';
 Curs::$curs = 'PHP';
 $curs1 = new Curs();
 Curs::$curs = 'Java';
 echo $curs1->getName();
 echo '<br>';
 echo Curs::getCurs();
 $curs2 = new JavaCurs();
echo '<br>';
 echo $curs2->getCursName();
 echo '<br>';