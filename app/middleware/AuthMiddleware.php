<?php

class AuthMiddleware {
    public function handle() {
        session_start();
        if (!isset($_SESSION['user_id'])) {
            echo "Access Denied. Please log in.";
            return false;
        }
        return true;
    }
}
