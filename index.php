<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Distance Calculator</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <h1>Distance Calculator</h1>
    <img src="./images/distance-between-2-points.jpg" alt="Triangle Diagram">
    <form action="./index.php" method="$_GET">
        <p>Point 1</p>
        <input type="number" name="x1" placeholder="x1">
        <input type="number" name="y1" placeholder="y1">
        <p>Point 2</p>
        <input type="number" name="x2" placeholder="x2">
        <input type="number" name="y2" placeholder="y2">
        <br>
        <button type="submit">Submit</button>
    </form>

</body>

</html>

<?php
$keys = ["x1", "y1", "x2", "y2"];
$arrLength = count($_GET);

for ($i = 0; $i < $arrLength; $i++) {
    if (isset($_GET[$keys[$i]])) {
        echo " is set";
    }
}

// extract($_GET);
// echo $x1;

?>