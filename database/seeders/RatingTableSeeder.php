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
            'product_ID'=>1,
            'name'=>'AA',
            'review'=>'really bad',
            'rating'=>5,
            'status'=>1,
        ],

            ['id'=>2,
            'user_id'=>4,
            'product_ID'=>1,
            'name'=>'BB',
            'review'=>'bad',
            'rating'=>4,
            'status'=>1,
        ],

            ['id'=>3,
            'user_id'=>4,
            'product_ID'=>1,
            'name'=>'CC',
            'review'=>'normal',
            'rating'=>3,
            'status'=>1,
        ],

            ['id'=>4,
            'user_id'=>1,
            'product_ID'=>1,
            'name'=>'DD',
            'review'=>'good',
            'rating'=>2,
            'status'=>1,
        ],

            ['id'=>5,
            'user_id'=>8,
            'product_ID'=>1,
            'name'=>'EE',
            'review'=>'very good',
            'rating'=>1,
            'status'=>1,
        ],





        ];
        Rating::insert($ratingRecords);
    }
}
