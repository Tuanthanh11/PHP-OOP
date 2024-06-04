<?php

namespace Thanh\XuongOop\Controllers\Client;

use Thanh\XuongOop\Commons\Controller;
use Thanh\XuongOop\Commons\Helper;
use Thanh\XuongOop\Models\User;

class LoginController extends Controller
{

    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }
    public function showFormLogin()
    {
        auth_check();

        $this->renderViewClient('login');
    }

    public function login()
    {
        auth_check();
        try {
            $user = $this->user->findByEmail($_POST['email']);

            if (empty($user)) {
                throw new \Exception('Khong ton tai email ' . $_POST['email']);
            }

            $flag = password_verify($_POST['password'], $user['password']);
            if ($flag) {

                $_SESSION['user'] = $user;

                header('Location:' . url('admin/'));
                exit;
            }
            throw new \Exception('Password khong dung!');
        } catch (\Throwable $th) {
            $_SESSION['error'] = $th->getMessage();

            header('Location:' . url('login'));
            exit;
        }
    }

    public function logout()
    {
        unset($_SESSION['user']);
        header('Location:' . url('/'));
        exit;
    }
}
