<?php

namespace App\Models;

class Post
{
    public $name;
    public $publishedYear;

    public function __construct($name, $publishedYear)
    {
        $this->name = $name;
        $this->publishedYear = $publishedYear;
    }
}
