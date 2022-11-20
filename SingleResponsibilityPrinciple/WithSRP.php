<?php

// Principle of Single Responsibility - A class must have one, and only one, reason to change.

class Category
{
    private $category;

    public function createCategory()
    {
        $this->connection()->insert($this->category);
    }
}

class Course
{
    private $name;

    public function createCourse()
    {
        $this->connection()->insert($this->name);
    }
}
