<?php


namespace App\OOP\PHP\Relationship;


class Student
{
    private string $name;

    private string $homeWork;

    private int $homeWorkScore = 50;

    /**
     * Student constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function assignATempTeacher(Teacher $teacher)
    {
        $this->homeWork = $teacher->assignAHomeWork();
    }

    public function getHomeWorkScore()
    {
        return $this->homeWorkScore;
    }

    public function doHomeWork()
    {
        $this->homeWorkScore = 60;
    }
}