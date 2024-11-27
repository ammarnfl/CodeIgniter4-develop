<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use App\Models\Foodmart;
use App\Models\FoodmartAuth;

class FoodmartAPI extends ResourceController{
    public function index($seg1 = null, $seg2 = null){
        // if (session()->get('num_user') == '') {
        //     return redirect()->to('/login');
        // }    
        $model = model(FoodmartAuth::class);
        $username = $seg1;
        $password = md5($seg2);
        $cek = $model->getDataAuthentication($username, $password);
        if ($cek == 0) {
            return $this->respond(['message' => 'Wrong Authentication!'], 401);
        } else {
            $model1 = model(Foodmart::class);
            $data = ['message' => 'success',
                    'foodmart' => $model1->getDataFoodmart()];
            return $this->respond($data,200);
        }
    }
}
