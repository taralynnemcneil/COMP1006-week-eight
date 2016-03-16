<?php ob_start();

try {
// identity the record the user wants to delete
    $beer_id = null;
    $beer_id = $_GET['beer_id'];

    if (is_numeric($beer_id)) {
        // connecting to the database
        require('db.php');

        // set up SQL Delete command
        $sql = "DELETE FROM beers WHERE beer_id = :beer_id";

        // execute deletion
        $cmd = $conn->prepare($sql);
        $cmd->bindParam(':beer_id', $beer_id, PDO::PARAM_INT);
        $cmd->execute();

        // disconnect from db
        $conn = null;

        // redirect to updated beers page
        header('location:beers.php');
    }
}
catch (Exception $e) {
    // send ourselves the error
    mail('taralynnemcneil@gmail.com', 'Beer Store App Error'. $e);

    // redirect to error page
    header('location:error.php');
}

ob_flush(); ?>