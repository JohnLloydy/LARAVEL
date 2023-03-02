<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use illuminate\Database\Eloquent\Model;

class HomeModel extends Model
{
    use HasFactory;

    public function content(){
        $content = [
            'title'     => 'Welcome to StuffedToys',
            'p1'        => 'ON SALE!!!',
            'btn'       => 'Get Yours Now'
        ];
        return $content;
    }
    public function product_list(){
        $product_list = [
        [
            'product1'  => 'VERMONT TEDDY BEAR COMPANY',
            'desc'      => '450K ORDERS'
        ],
        [
            'product2'  => 'BEDTIME ORIGINALS',
            'desc'      => '300K ORDERS'
        ],
        [
            'product3'  => 'MORISMOS',
            'desc'      => '249K ORDERS'
        ]

        ];
        return $product_list;
    }
    public function profile(){
        $profile = [
            'title'     => 'John Lloyd Sagrado',
            'desc'      => 'Take Advantage in every Opportunity',
            'btn'       => 'Follow'
        ];
        return $profile;
    }
}
