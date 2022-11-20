<?php

class Course
{
    private $name;
    private $category;
    private $description;

    public function connection()
    {
        $pdo = new PDO();
        return $pdo;
    }

    public function createCategory()
    {
        $this->connection()->insert($this->category);
    }

    public function createCourse()
    {
        $this->connection()->insert($this->name);
    }

    public function getName()
    {
        return $this->name;
    }
}
