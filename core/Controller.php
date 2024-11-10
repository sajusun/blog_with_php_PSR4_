<?php

namespace Core;

class Controller {
    protected function view($view, $data = []) {
        extract($data);
        include "../app/Views/$view.php";
    }
    public static function not_found() {
       (new Controller)->view("404");

    }
}
