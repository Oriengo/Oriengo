<?php

namespace Oriengo\Core;

class Controller
{
    public function view($view, $data = [])
    {
        extract($data);
        require "src/Views/{$view}.php";
    }
}
