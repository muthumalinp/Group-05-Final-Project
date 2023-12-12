<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rating;

class RatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $ratingRecords = [
            ['id'=>1,
            'user_id'=>6,
            'product_id'=>1,
            'review'=>'really bad',
            'rating'=>5,
            'status'=>1,
        ],

            ['id'=>2,
            'user_id'=>6,
            'product_id'=>1,
            'review'=>'bad',
            'rating'=>4,
            'status'=>1,
        ],

            ['id'=>3,
            'user_id'=>6,
            'product_id'=>1,
            'review'=>'normal',
            'rating'=>3,
            'status'=>1,
        ],

            ['id'=>4,
            'user_id'=>6,
            'product_id'=>1,
            'review'=>'good',
            'rating'=>2,
            'status'=>1,
        ],

            ['id'=>5,
            'user_id'=>6,
            'product_id'=>1,
            'review'=>'very good',
            'rating'=>1,
            'status'=>1,
        ],




        ];
        Rating::insert($ratingRecords);
    }
}
