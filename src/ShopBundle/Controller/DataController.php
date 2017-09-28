<?php

namespace ShopBundle\Controller;

class DataController {
    
    static public $data = [
        'categories' => [
            [
                'id' => 1,
                'title' => 'Computers',
            ], 
            [
                'id' => 2,
                'title' => 'Cell phones',
            ],
            [
                'id' => 3,
                'title' => 'Laptops',
            ],
            [
                'id' => 4,
                'title' => 'Accessories',
            ],
            [
                'id' => 5,
                'title' => 'Software',
            ],
        ],
        
        'products' => [
            [
                'id' => 1,
                'category_id' => 2,
                'title' => 'iPhone 7',
                'description' => '',
                'price' => 650,
            ], 
            [
                'id' => 2,
                'category_id' => 2,
                'title' => 'iPhone 7 Plus',
                'description' => '',
                'price' => 750,
            ], 
            [
                'id' => 3,
                'category_id' => 2,
                'title' => 'iPhone 8',
                'description' => '',
                'price' => 800,
            ], 
        ]
    ];
    
}