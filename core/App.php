<?php

namespace Core;

use Core\Route;

class App {
    public function __construct() {
        Route::dispatch();
    }
}
