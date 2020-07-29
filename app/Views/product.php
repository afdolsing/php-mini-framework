<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home MVC</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <pre>
        <h1>Daftar product</h1>
        <?php foreach ($data['products'] as $product){ ?>
            <p>
                <?= $product['name']; ?>
            </p>
        <?php } ?>
    </pre>
</body>
</html>