<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1 style="color: red;">Its Working</h1>
    <p>url: <?= env('BASEURL') ?></p>
    <p>path: <?= public_path() ?></p>
</body>

</html>