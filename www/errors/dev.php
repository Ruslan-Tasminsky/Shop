<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
</head>
<body>
    <h1>Error</h1>
    <p><b>Code: </b><?= $errno; ?></p>
    <p><b>Message: </b><?= $errstr; ?></p>
    <p><b>File: </b><?= $errfile; ?></p>
    <p><b>Line: </b><?= $errline; ?></p>
</body>
</html>