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


    public function update()
    {
        $id = $this->request->getPost('id');
        $value = $this->request->getPost('value');

        if (!$id || !$value) {
            return redirect()->back()->with('error', 'ID and Value are required for update');
        }

        $db = \Config\Database::connect();
        $builder = $db->table('coba');

        // Update data
        $builder->where('id', $id)->update(['value' => $value]);

        return redirect()->back()->with('success', 'Value updated successfully');
    }

    public function delete()
    {
        $id = $this->request->getPost('id');

        if (!$id) {
            return redirect()->back()->with('error', 'ID is required for delete');
        }

        $db = \Config\Database::connect();
        $builder = $db->table('coba');

        // Delete data
        $builder->where('id', $id)->delete();

        return redirect()->back()->with('success', 'Value deleted successfully');
    }

    public function show()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('coba');
        $query = $builder->get();

        return $this->response->setJSON($query->getResult());
    }
}
