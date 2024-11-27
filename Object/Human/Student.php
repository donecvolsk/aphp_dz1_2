<?php
declare(strict_types=1);

class Student
{
    public string $name; //Имя студента

    public string $surname; // Фамилия студента

    public string $course; // Название курса

    public array $listStudents = []; // Массив списка студентов

    //метод добавлнгия студента в массив
    public function addListStudents(string $name, string $surname, string $course): void
    {
        $this->name = $name;

        $this->surname = $surname;

        $this->course = $course;

       $this->listStudents[] = ['Имя' => $this->name, 'Фамилия' => $this->surname, 'Курс' => $this->course,];
    }

    //метод вывода списка студентов в консоль
    public function getListStudents(): void
    {
        foreach ($this->listStudents as $listStudent) {
        echo $listStudent['Имя'] . ' ' . $listStudent['Фамилия'] . ', является студентом курса: ' . $listStudent['Курс'] . PHP_EOL;
        }
    }
}