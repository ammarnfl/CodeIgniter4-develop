<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use App\Models\Foodmart;

class FoodmartAPI extends ResourceController
{
    public function index(){
        $model = model(Foodmart::class);
        $data = [ 'message' => 'success', 'foodmart' => $model->getDataFoodmart()];
        return $this->respond($data,200);
    }
}
