<?php
$csv_string = 'C:\wamp64\www\2001new\Data\Data2001.csv';

$open = fopen($csv_string, 'r');

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
<div id = "Json">



            <?php
            $file = $csv_string;
            $csv = file_get_contents($file);

            $content = array_map("str_getcsv", explode("\n", $csv));

            $headers = $content[0];

            $json = [];

            foreach ($content as $row_index => $row_data) {
                if($row_index === 0) continue;

                foreach ($row_data as $col_idx => $col_val) {
                    $label = $headers[$col_idx];
                    $json[$row_index][$label] = $col_val;
                }
            }

            //write to JSON file
            $fp = fopen('Data.json', 'w');
            fwrite($fp, json_encode($json, JSON_PRETTY_PRINT));
            fclose($fp);

            $key = fgetcsv($open,"1024",",");
            $json = array();
            while ($row = fgetcsv($open,"1024",",")) {
                $json[] = array_combine($key, $row);
            }
            fclose($open);
            $json1 = json_encode($json);
            print_r($json1);
            ?>
</div>
</body>
</html>
