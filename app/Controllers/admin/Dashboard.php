<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController 
{
    function index()
    {
        $this->data['PageTitle'] = 'Dasboard';
        return $this->renderView('admin/dashboard/index', $this->data);
    }
}
