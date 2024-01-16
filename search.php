<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.result{
    color: #000;
    cursor: pointer;
    padding: 10px;
    color:white;
    font-size:1rem;
    font-weight:600;
}  
.result:hover{
    cursor: pointer;
background-color: #f9d714;

}      
    </style>
</head>
<body>
    
</body>
</html>
<?php
// Establish database connection
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'fetch';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Process search query
if (isset($_GET['search'])) {
    $searchTerm = mysqli_real_escape_string($conn, $_GET['search']);

    // Query to fetch names based on search term
    $query = "SELECT name FROM stream WHERE name LIKE '%$searchTerm%'";
    $result = mysqli_query($conn, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='result'>" . $row['name'] . "</div>";
        }
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
