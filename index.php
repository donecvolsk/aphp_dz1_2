<?php

include 'autoloader.php';
spl_autoload_register('autoloader');

$student = new Student();
$student->addListStudents('Алексей', 'Донец', 'PHP');
$student->addListStudents('Иван', 'Иванов', 'JS');
$student->addListStudents('Бобик', 'Бобиков', 'Дрессировка');
$student->getListStudents();//вывод спсика в консоль

$car = new Car();
$car->addListCars('Жигули', 'Красный', 535);
$car->addListCars('BMW', 'Белый', 444);//вывод спсика в консоль

$car->getListCars();
$tv = new Tv();
$tv->addListTv('Samsung', 24, 28000);
$tv->addListTv('Электроник', 124, 10000);
$tv->getListTv(); //вывод спсика в консоль