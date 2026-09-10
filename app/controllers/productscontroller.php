<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class ProductsController extends Controller {

    private function checkLogin() {

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
            header('Location: /login');
            exit;
        }
    }

    public function index() {

        $this->checkLogin();

        $products = $this->call->model('ProductsModel')->get_all();

        $this->call->view('products/index', [
            'products' => $products
        ]);
    }

    public function create() {

        $this->checkLogin();

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $data = [
                'product_name' => $_POST['product_name'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity']
            ];

            $this->call->model('ProductsModel')->create($data);

            header('Location: /products');
            exit;
        }

        $this->call->view('products/create');
    }

    public function edit($id) {

        $this->checkLogin();

        $model = $this->call->model('ProductsModel');

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $data = [
                'product_name' => $_POST['product_name'],
                'description' => $_POST['description'],
                'price' => $_POST['price'],
                'quantity' => $_POST['quantity']
            ];

            $model->update($id, $data);

            header('Location: /products');
            exit;
        }

        $product = $model->get_by_id($id);

        $this->call->view('products/edit', [
            'product' => $product
        ]);
    }

    public function delete($id) {

        $this->checkLogin();

        $this->call->model('ProductsModel')->delete($id);

        header('Location: /products');
        exit;
    }

}
?>