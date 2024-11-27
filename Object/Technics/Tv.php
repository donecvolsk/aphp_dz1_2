<?php

declare(strict_types=1);

class Tv
{
    public string $tvBrand; //марка телевизора

    public int $screenDiagonal; // диагональ экрана

    public int $price; // цена

    public array $listTv = []; // Массив списка телевизоров

    //метод добавлнгия телевизоров в массив
    public function addListTv(string $tvBrand, int $screenDiagonal, int $price): void
    {
        $this->tvBrand = $tvBrand;

        $this->screenDiagonal = $screenDiagonal;

        $this->price = $price;

       $this->listTv[] = ['Марка' => $this->tvBrand, 'Диагональ' => $this->screenDiagonal, 'Цена' => $this->price,];
    }

    //метод вывода списка телевизоров в консоль
    public function getListTv(): void
    {
        foreach ($this->listTv as $tv) {
        echo 'Телевизор ' . $tv['Марка'] . ', с диагональю ' . $tv['Диагональ'] . ', продается по цене: ' . $tv['Цена'] . ' руб.' . PHP_EOL;
        }
    }
}