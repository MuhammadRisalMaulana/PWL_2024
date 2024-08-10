<?php
class HomeController {
    public function index() {
        $userModel = new User();
        $users = $userModel->getAllUsers();

        // Pastikan $users adalah iterable, jika tidak, beri default nilai array kosong
        if (!is_iterable($users)) {
            $users = [];
        }

        // Load the view and pass the data
        $view = 'home';
        require '../app/views/layout.php';
    }
}
