<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<h1>Hello World</h1>

<header>
    <h1>Marvel Movies</h1>
</header>
<main>
    <section>
        <h2>Connect to  database</h2>
        <?
        include 'dbConnect.php';
        print " dbhost - ".$connectstr_dbhost."<br>";
        print " dbname- ".$connectstr_dbname."<br>";
        print " dbusername- ".$connectstr_dbusername."<br>";
        print " dbpassword- ".$connectstr_dbpassword."<br>";
        ?>
        <p><a href="allMovies.php">All Marvel Movies</a></p>
        <p><a href="xmen.php">All X-MEN Movies</a></p>
        <p><a href="dbConnect.php">dbC34Aonnect</a></p>

    </section>

</body>
</html>