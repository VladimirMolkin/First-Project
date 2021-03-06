<?php
namespace Core;
use Core\Helper;

class View {

    protected function getHeader($path) {
        if ($this->isAdmin($path)){
            return require_once VIEWS.'partials/admin/_head.php';
        }
        return require_once VIEWS.'partials/_head.php';
    }

    protected function getFooter($path) {
        if ($this->isAdmin($path)){
            return require_once VIEWS.'partials/admin/_footer.php';
        }
        return require_once VIEWS.'partials/_footer.php';
    }

    protected function renderContent($path, $data, $error) {
        extract($data);
        return require VIEWS."/{$path}.php";
    }

    protected function isAdmin($path) {
        $admin = explode('/', $path);
        return (array_shift($admin)=='admin')? true : false;
    }

    public function renderView($path, $data = [], $error = false) {
        return $this->getHeader($path).$this->renderContent($path, $data, $error).$this->getFooter($path);
    } 

    public function render($path, $data = [], $error = false)
    {
        extract($data);
        return require VIEWS."/{$path}.php";
    }

    public function auth($path, $data = [], $error = false)
    {
        extract($data);
        return require VIEWS."/{$path}.php";
    }
}
