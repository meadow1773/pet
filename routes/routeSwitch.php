<?php

namespace Routes;

abstract class RouteSwitch
{
    protected function home()
    {
        require 'public/home.php';
    }
    protected function sobre()
    {
        require 'public/pages/sobre.php';
    }
    protected function integrantes()
    {
        require 'public/pages/atuais.php';
    }
    protected function colaboradores()
    {
        require 'public/pages/colab.php';
    }
    protected function egressos()
    {
        require 'public/pages/egressos.php';
    }
    protected function galeria()
    {
        require 'public/pages/galeria.php';
    }
    protected function espacoCultural()
    {
        require 'public/pages/espaco-cultural.php';
    }
    protected function roteiros()
    {
        require 'public/pages/roteiros.php';
    }
    protected function oficinas()
    {
        require 'public/pages/oficinas.php';
    }
    protected function contato()
    {
        require 'public/pages/contato.php';
    }
    public function __call($name, $arguments)
    {
        http_response_code(404);
        require 'public/not-found.php';
    }
}
