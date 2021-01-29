<html>

<head>
    <title>Тестируем PHP</title>
</head>

<body>
    <?php echo '<p>Привет, мир!</p>', "<br>" ?>
    <?php echo $_SERVER['HTTP_USER_AGENT'], "<br>"; ?>
    <?php
    echo '25', "<br>";
    echo 25, "<br>";
    echo gettype(25), "<br>";
    echo gettype('25'), "<br>";
    echo ceil(87.123), "<br>";

    $mail = 'test@test.ru';
    var_dump('Vasya'); // string(5) "Vasya"
    var_dump(''); // string(0) ""
    $title = 'это переменная title';
    $content = 'это переменная content';
    ?>
    <h1><?php echo $title ?></h1>
    <?php $title = 'это новая переменная title'; ?>
    <div><?php echo $content ?></div>
    <div><?php echo $title ?></div>
    <?php unset($title) ?>
    <p>Для связи с нами используйте следующий адрес: <?php echo $mail ?></p>

    <?php $price = 1500; ?>
    <?php $shipping = 200; ?>
    <?php $name = 'Автомат АК47'; ?>
    <div><?php echo 'Название товара: ', $name, "<br>Стоимость товара равна: ", $price, "<br> Стоимость товара с доставкой равна: ", $shipping + $price; ?></div>
    <?php
    $salary_vasya = 25000;
    $salary_petya = 30000;
    echo 'Зарплата Васи в 2020 году составила: ', $salary_vasya, ' руб. Зарплата Васи в 2021 году составит: ', $salary_vasya * 1.20, ' руб.<br>';
    echo 'Зарплата Пети в 2020 году составила: ', $salary_petya, ' руб. Зарплата Пети в 2021 году составит: ', $salary_petya * 1.15, ' руб.<br><br>';
    ?>

    <?php
    $shareAll = 1000;
    $shareJohn = 100;
    $shareStollerman = 150;
    $shareIvan = 235;
    $shareTrade = $shareJohn + $shareStollerman + $shareIvan;
    echo 'У Джона: ', $shareJohn / $shareAll * 100,'% акций. <br>У Столермана: ', $shareStollerman / $shareAll * 100,'% акций. <br>У Ивана: ', $shareIvan / $shareAll * 100,'% акций. <br>';
    echo 'Всего продано ', $shareTrade,' акций или ', $shareTrade / $shareAll * 100,'% от общего числа акций.<br>';
    echo 'Не продано ', $shareAll - $shareTrade,' акций или ', ($shareAll - $shareTrade) / $shareAll * 100,'% от общего числа акций.<br>';
    ?>

</body>

</html>