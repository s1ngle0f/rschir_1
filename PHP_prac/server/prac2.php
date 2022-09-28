<?php
    $number = $_GET['num'];
    echo decbin($number) . "<br>";
    echo decbin($number & 01);
    $image = imageCreateTrueColor(800, 800);

    // Цвет фона
    $background = imagecolorallocate($image, 223, 243, 255);

    // Добавить линию
    $lineColor = imagecolorallocate($image, 111, 258, 88);  // Цвет линии
    imagesetthickness($image, 16);  // Толщина линии
    imageline($image, 20, 25, 350, 45, $lineColor);

    // Рисуем окружность
    $circleColor = imagecolorallocate($image, 111, 251, 88);
    $circleBgColor = imagecolorallocate($image, 254, 92, 21);
    imagearc($image, 200, 210, 200, 200,  0, 360, $circleColor);

    // Прямоугольник
    $rectBackColor = imagecolorallocate($image, 254, 174, 21);
    $rectBorderColor = imagecolorallocate($image, 251, 21, 254);
    imagefilledrectangle($image, 285, 100, 530, 200, $rectBackColor);  // Фон
    imagesetthickness($image, 5);
    imagerectangle($image, 285, 100, 530, 200, $rectBorderColor);

    // Текст
    $bg = imagecolorallocate($image, 255, 255, 255);
    $textcolor = imagecolorallocate($image, 0, 0, 255);
    imagestring($image, 5, 150, 200, 'Hello world!', $textcolor);

    // Отобразить рисунок, а затем удалить из памяти
    header("Content-type: image/png");
    imagepng($image);
    imagedestroy($image);
