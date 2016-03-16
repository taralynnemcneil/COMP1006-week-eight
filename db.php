<?php
// connecting to the database
$conn = new PDO('mysql:host=sql.computerstudi.es;dbname=gc200197303', 'gc200197303', '');
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>