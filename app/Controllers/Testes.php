<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\I18n\Time;

class Testes extends BaseController
{
    public function index()
    {
        return print_r(encrypt('ababa'));
    }
}
