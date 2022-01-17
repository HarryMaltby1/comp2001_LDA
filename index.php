<?php ?>
<html>
<head>
    <link href ="style.css" rel="stylesheet" type = "text/css">
    <meta charset="UTF-8">
    <title>Plymouth Local Nature Reserves</title>
</head>

<body>
<header>
    <div class="container">
        <h1 id ="upper">Plymouth Local Nature Reserves</h1>
        <nav>
            <ul>
                <li><a href ="index.php">Home</a></li>
                <li><a href ="DataRead.php">Human Readable</a></li>
                <li><a href ="MachineRead.php">Machine Readable</a></li>
            </ul>
        </nav>
    </div>
</header>
</body>
<div class = "img">
    <img src = "Data/105_1420.jpg">

</div>
<div>
    <h1 id = "welcome">Welcome!<h2>
    <p id = "OpenParagraph">
        This Webpage shows a dataset of the Plymouth Nature reserves. In the Human-Readable page you can find the Table of all local Sites, the Area of these sites and the Site Owner.
        The Machine Readable page displays the data in the converted JSON format, so that this data can be read by machines if needed.
    </p>
</div>
</html>
