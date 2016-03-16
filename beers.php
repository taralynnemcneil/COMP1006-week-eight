<?php ob_start();

// set title
$pageTitle = 'Beer Listings';
require('header.php');
?>

<h1>Beer Listing</h1>

<?php

try {
    // connecting to the database
    require('db.php');

    // set up an SQL query
    $sql = "SELECT * FROM beers ORDER BY name";
    $cmd = $conn->prepare($sql);

    // execute the query and store the results
    $cmd->execute();
    $result = $cmd->fetchAll();

    // disconnect
    $conn = null;

    // start the table and add the headings
    echo '<table class="table table-striped"><thead><th>Name</th><th>Alcohol              Content</th><th>Domestic</th><th>Light</th><th>Price</th><th>Edit</th><th>Delete</th></thead><tbody>';

    // loop through the query result
    foreach ($result as $row) {
        //display - create a new row and 3 columns for each record
        echo '<tr><td>' . $row['name'] . '</td>
		    <td>' . $row['alcohol_content'] . '</td>
		    <td>' . $row['domestic'] . '</td>
		    <td>' . $row['light'] . '</td>
		    <td>' . $row['price'] . '</td>
		    <td><a href="beer.php?beer_id=' . $row['beer_id'] . '" title="Edit">Edit</a></td>
		    <td><a href="delete-beers.php?beer_id=' . $row['beer_id'] . '"
		    onclick="return confirm(\'Are you sure you want to delete this?\');">Delete</a></td></tr>';
    }

    // close table body and the table itself
    echo '</tbody></table>';

}
catch (Exception $e) {
    // send ourselves the error
    mail('taralynnemcneil@gmail.com', 'Beer Store App Error'. $e);

    // redirect to error page
    header('location:error.php');
}

// footer
require('footer.php');
ob_flush(); ?>

