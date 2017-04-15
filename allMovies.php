<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List of all Marvel Movies</title>
</head>
<body>
<header>
    <h1>All Marvel Moivies From 1944</h1>
</header>
<main>
    <section>
        <h2>List of all Marvel Movies</h2>
        <?php
        //Establish connection with database
        include 'dbConnect.php';
        // create a SQL query as a string
        $sql_query = "SELECT * FROM marvelmovies";
        // execute the SQL query
        $result = $link ->query($sql_query);
        // iterate over $result object one $row at a time
        // use fetch_array() to return an associative array
        while ($row = $result ->fetch_array()){
            // print out fields from row of data
            echo "<p>".$row ['marvelMovieID']. $row ['yearReleased']. $row ['title']. "</p>";
        }
        $result ->close();
        $link;
        ?>
    </section>
</main>
</body>
</html>