<?php

namespace App\Controllers;
use App\Models\Customer;
use CodeIgniter\RESTful\ResourceController;

class CustomerController extends ResourceController
{
    protected $customer;

    public function __construct()
    {
        $this->customer = new Customer();
    }

    /**
     * Menampilkan form input di localhost.
     */
    public function form()
    {
        return view('customer_search'); // Menampilkan form input
    }

    /**
     * Menangani input pencarian customer dan menampilkan hasil.
     */
    public function search()
    {
        $input = $this->request->getPost('input'); // Ambil input dari form (POST)

        // Validasi input (hanya huruf dan spasi yang diperbolehkan)
        if (!preg_match('/^[a-zA-Z\s]+$/', $input)) {
            return $this->response->setStatusCode(400)->setJSON([
                'message' => 'Input tidak valid. Hanya huruf dan spasi yang diperbolehkan.'
            ]);
        }

        // Panggil model untuk mencari data customer
        $data = $this->customer->getDataCustomer($input);

        if (empty($data)) {
            return $this->response->setStatusCode(404)->setJSON([
                'message' => 'Tidak ada data yang cocok.'
            ]);
        }

        // Tampilkan hasil pencarian dalam format JSON
        return $this->response->setStatusCode(200)->setJSON($data);
    }
}
