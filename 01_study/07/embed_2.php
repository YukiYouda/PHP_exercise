<?php

$age = 20;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>
<body>
    <?php if ($age >= 20): ?>
        <h2>成人です</h2>
    <?php else: ?>
        <h2>未成年です</h2>
    <?php endif; ?>
</body>
</html>