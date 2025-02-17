<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {

        $posts = [
            new Post('Clean Architecture', 'Follows best practices and MVC principles.'),
            new Post('Lightweight', 'Fast and efficient, with minimal overhead.'),
            new Post('Comprehensive Documentation', 'Detailed guides and examples to help you get started.')
        ];

        $this->render('index', ['posts' => $posts]);
    }
}
