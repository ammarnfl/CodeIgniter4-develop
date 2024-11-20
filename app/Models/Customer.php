<?php

namespace App\Models;
use CodeIgniter\Model;

class Customer extends Model{
    protected $table = 'customer';
    protected $allowedFields = ['fname', 'lname', 'mi']; // kolom yang digunakan
    protected $primaryKey = 'customer_id';
    public function getDataCustomer($input){
        $db = \Config\Database::connect();

        // Query mentah
        $sql = 'SELECT * FROM customer 
                WHERE fname LIKE ? OR lname LIKE ? OR mi LIKE ?
                LIMIT 10';

        // Jalankan query dengan bind parameter untuk mencegah SQL Injection
        $query = $db->query($sql, ["%$input%", "%$input%", "%$input%"]);

        return $query->getResultArray(); // Mengembalikan hasil sebagai array
    }
}



        // Using Query Builder
        // return $this->select('*')
        //             ->groupStart() // Memulai grup kondisi
        //                 ->like('fname', $input)
        //                 ->orLike('lname', $input)
        //                 ->orLike('mi', $input)
        //             ->groupEnd()   // Menutup grup kondisi
        //             ->limit(10)    // Membatasi hasil hingga 10 baris
        //             ->findAll();

        // Manual   