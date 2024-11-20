<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class CobaController extends Controller
{
    public function index()
    {
        return view('coba_form'); // Load view untuk form
    }

    public function create()
    {
        $value = $this->request->getPost('value');

        if (!$value) {
            return redirect()->back()->with('error', 'Value is required');
        }

        $db = \Config\Database::connect();
        $builder = $db->table('coba');
        $builder->insert(['value' => $value]);

        return redirect()->back()->with('success', 'Value added successfully');
    }

    public function show()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('coba');
        $query = $builder->get();

        return $this->response->setJSON($query->getResult());
    }
}
