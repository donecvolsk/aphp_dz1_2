<?php

declare(strict_types=1);

class Car
{
    public string $carBrand; //марка машины

    public string $colorCar; // цвет машины

    public int $numberCar; // номер машины

    public array $listCars = []; // Массив списка машин

    //метод добавления машин в массив
    public function addListCars(string $carBrand, string $colorCar, int $numberCar): void
    {
        $this->carBrand = $carBrand;

        $this->colorCar = $colorCar;

        $this->numberCar = $numberCar;

       $this->listCars[] = ['Марка' => $this->carBrand, 'Цвет' => $this->colorCar, 'Номер' => $this->numberCar,];
    }

    //метод вывода списка машин в консоль
    public function getListCars(): void
    {
        foreach ($this->listCars as $listCar) {
        echo 'Автомобиль ' . $listCar['Марка'] . ', ' . $listCar['Цвет'] . ', регистрационный номер: ' . $listCar['Номер'] . PHP_EOL;
        }
    }
}