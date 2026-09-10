<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class LoginController extends Controller {

    public function index() {

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
            header('Location: /products');
            exit;
        }

        $this->call->view('login');
    }

    public function login() {

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        if ($username === 'admin' && $password === 'admin123') {

            $_SESSION['logged_in'] = true;
            $_SESSION['username'] = $username;

            header('Location: /products');
            exit;

        } else {

            $this->call->view('login', [
                'error' => 'Invalid username or password.'
            ]);
        }
    }

    public function logout() {

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        session_unset();
        session_destroy();

        header('Location: /login');
        exit;
    }

}
?>