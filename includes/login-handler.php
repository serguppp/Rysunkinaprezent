<?php
session_start();

class LoginHandler{
    private $login;
    private $password;

    public function __construct($login = null, $password = null){
        $this->login = $login;
        $this->password = $password;
    }

    private function isValidCredentials(){
        return $this->login ==="login" && $this->password ==="admin";
    }
    public function login(){
        if ($this->isValidCredentials()){
            $_SESSION['logged_in'] = htmlspecialchars($this->login);
            return ['success' => true];
        } else {
            return ['success' => false, 'message' => 'Nieprawidłowy login lub hasło'];
        }
    }

    public function logout()
    {
        if (isset($_SESSION['logged_in'])) {
            unset($_SESSION['logged_in']);
            session_destroy();
            return ['success' => true, 'message' => 'Wylogowano pomyślnie'];
        } else {
            return ['success' => false, 'message' => 'Nie było aktywnej sesji do wylogowania'];
        }
    }
}

?>