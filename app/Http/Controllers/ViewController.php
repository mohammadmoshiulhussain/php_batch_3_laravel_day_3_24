<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    private $city;
    private $mobile;
    private $data=[];
    private $products;

    public function index()
    {
        return view('test');
    }
    public function bitm()
    {
        $this->city   = 'Dhaka';
        $this->mobile ='01712812980';
//        $this->data   =[10, 20, 30, 'BITM', 12.5, true];
        $this->data   =[
            0 => [
                'name'   => 'Moshiul',
                'city'   => 'Dhaka',
                'mobile' => '01712812980'
            ],
            1 => [
                'name'   => 'samiul',
                'city'   => 'Lalbag',
                'mobile' => '01913555588'
            ],
            2 => [
                'name'   => 'Hasan Ali',
                'city'   => 'Nowakhali',
                'mobile' => '01472558899'
            ],
        ];

        return view('demo',[
            'a' => $this->city,
            'b' => $this->mobile,
            'c' => $this->data
        ]);
    }
    public function about()
    {
        $this->products = Product::getAllProduct();
        return view('about', ['products' => $this->products]);
    }
    public function contact()
    {
        return view('contact');
    }

    public function detail($id)
    {
        $this->products = Product::getAllProduct();
        foreach ($this->products as $item)
        {
            if ($item['id'] == $id)
            {
                return view('detail', ['data' => $item]);
            }
        }
    }
}
