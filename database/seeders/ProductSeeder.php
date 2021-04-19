<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */                        
    public function run()
    {
        DB::table('products')->insert([
            ['name'=> 'Lenovo-Tab-M10',
            'price'=> '10000',
            'category'=>'Tablet',
            'description'=> 'The tablet comes with a 10.20-inch touchscreen',
            'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/61ul3f89uDL._SX679_.jpg',
            ],
            ['name'=> 'Dell Laptop',
            'price'=> '45000',
            'category'=>'Laptop',
            'description'=> 'Dell Inspiron 14 7000 7490 is a Windows 10 laptop with a 14.00-inch display,resolution  1920x1080 pixels.',
            'gallery'=>'https://i.gadgets360cdn.com/products/large/inspiron147007490-db-1146x800-1569332980.jpg?downsize=*:420&output-quality=80',

            ],
            ['name'=> 'LG T.v',
            'price'=> '24000',
            'category'=>'Television',
            'description'=> 'LG TVs are equipped with all-round protection with a robust IPS panel ',
            'gallery'=>'https://4.imimg.com/data4/PR/VO/MY-17088056/lg-led-tv-500x500.jpg',
            ],
            ['name'=> 'Panasonic 1 Ton 5 Star Wi-Fi Inverter Split AC',
            'price'=> '38400',
            'category'=>'AC',
            'description'=> 'It uses UFS 2.1 for storage and has a dedicated card slot for storage expansion.',
            'gallery'=>'http://solarshop.pk/wp-content/uploads/2016/04/381-Panasonic-1.5-Ton-YC18-Split-AC.jpg',
            ]
            
        ]);   
     }
}
