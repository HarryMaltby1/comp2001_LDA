<?php
$csv_string = 'Data/Data2001.csv';

$open = fopen($csv_string, 'r');

$data = fgetcsv($open, 1000, ',');

$dataArray = [];

while (($data = fgetcsv($open, 1000, ',')) !== FALSE)
{
    $dataArray[] = $data;
}fclose($open);
?>
<html lang="en-us">
<head>
    <link href ="style.css" rel="stylesheet" type = "text/css">
    <meta charset="UTF-8">
    <title>Plymouth Local Nature Reserves</title>
</head>

<body>
<header>
    <div class="container">
        <h1 id = upper>Plymouth Local Nature Reserves</h1>
        <nav>
            <ul>
                <li><a href ="index.php">Home</a></li>
                <li><a href ="DataRead.php">Human Readable</a></li>
                <li><a href ="MachineRead.php">Machine Readable</a></li>
            </ul>
        </nav>
    </div>
</header>
<table>
            <thead>
            <th>Site</th><th>Area</th><th>Ownership</th>
            </thead>
            <tbody>
            <?php foreach($dataArray as $rec){ ?>
                <tr><td><?=$rec[0]?></td><td><?=$rec[1]?></td><td><?=$rec[2]?></td></tr>
            <?php } ?>
            </tbody>
        </table>
</body>
</html>


