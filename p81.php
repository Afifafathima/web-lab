
<!DOCTYPE html>
<head>
    <title>Visitor Counter</title>
    <style>
        body {
font-family: Arial, sans-serif;
padding: 20px;
background-color: #f4f4f9;
align-items: center;
}
.container {
max-width: 600px;
text-align: center;
background: pink;
padding: 20px;

}



    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome <br>to<br> Cambridge Institute of Technology!</h1>
<?php
$count = 'counter.txt';

if (!file_exists($count)) 
{
    file_put_contents($count, 0); 
}

$visitorCount = (int)file_get_contents($count);

$visitorCount++;

file_put_contents($count, $visitorCount);
?>
        <p>You are visitor number: <strong><?php echo $visitorCount; ?></strong></p>
    </div>
</body>
</html>
