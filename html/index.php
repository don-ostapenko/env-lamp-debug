<html>
<head>
    <title>Hello...</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container">
    <?php
    $dbOption = require('conf.php');

    $pdo = new \PDO(
        'mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME,
        DB_USER,
        PASS
    );

    $pdo->exec('SET NAMES UTF8');
    $sql = 'select * from person;';
    $sth = $pdo->prepare($sql);
    $result = $sth->execute();
    $result_db = $sth->fetchAll(PDO::FETCH_ASSOC);
    var_dump($result_db);

    ?>
</div>
</body>
</html>
