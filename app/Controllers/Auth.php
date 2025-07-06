<?php
// Auth.php
namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController {
  public function login() {
    return view('auth/login');
  }

  public function loginPost() {
    $model = new UserModel();
    $user = $model->where('username', $this->request->getPost('username'))
                  ->where('password', md5($this->request->getPost('password')))
                  ->first();

    if ($user) {
      session()->set($user);
      return redirect()->to($user['role'] == 'admin' ? '/admin' : '/game/level1');
    }

    return redirect()->to('/login');
  }

  public function logout() {
    session()->destroy();
    return redirect()->to('/');
  }
}
