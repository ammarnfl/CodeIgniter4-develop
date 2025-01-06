<?php

namespace App\Controllers;

use App\Models\Vendor;

class VendorController extends BaseController
{
    public function index()
    {
        $model = new Vendor();
        $data['vendors'] = $model->findAll();
        return view('vendorlist', $data);
    }
}
