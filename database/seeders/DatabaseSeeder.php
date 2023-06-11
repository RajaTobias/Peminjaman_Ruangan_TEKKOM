<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('ruangans')->insert([
        'Nama_ruangan' => 'A201',
        'Jenis_ruangan' => 'Ruang Kelas',
        'image' => 'image/8UpeN1UV1GY9bgGercQMcH4mVq8If6DaBAicYUp4.jpg',  
        'kursi' => '121', 
        'smart_tv'=> '0',
        'layar_proyektor' => '1',
        'lcd_proyektor' => '1',
        'ac' => '4',
        'kapasitas' => '121',
        'papan_tulis' => '1'
        ],
    );

    DB::table('ruangans')->insert([
        'Nama_ruangan' => 'A101',
        'Jenis_ruangan' => 'Ruang Kelas',
        'image' => 'image/xQY4fZmTUNSt15agii2W3AghpLATbkg6yKNsOYr7.jpg', 
        'kursi' => '83', 
        'smart_tv'=> '1',
        'layar_proyektor' => '1',
        'lcd_proyektor' => '1',
        'ac' => '3',
        'kapasitas' => '83',
        'papan_tulis' => '0'
        ],
    );

    DB::table('ruangans')->insert([
        'Nama_ruangan' => 'A102',
        'Jenis_ruangan' => 'Ruang Kelas',
        'image' => 'image/fUpFu7K9CNu0jr8HqKIZUQtNBAjjzVQqRt60IYVM.jpg', 
        'kursi' => '76', 
        'smart_tv'=> '0',
        'layar_proyektor' => '1',
        'lcd_proyektor' => '1',
        'ac' => '2',
        'kapasitas' => '1',
        'papan_tulis' => '1'
        ],
    );

    DB::table('ruangans')->insert([
        'Nama_ruangan' => 'Lab. embedded',
        'Jenis_ruangan' => 'Ruang Laboratorium',
        'image' => 'image/HPeuGFifJu9WfJYoEQnUh44k69ajY8X9AGpFFVW1.jpg', 
        'kursi' => '30', 
        'smart_tv'=> '0',
        'layar_proyektor' => '1',
        'lcd_proyektor' => '1',
        'ac' => '3',
        'kapasitas' => '30',
        'papan_tulis' => '1'
        ],
    );

    DB::table('ruangans')->insert([
        'Nama_ruangan' => 'Lab. jarkom',
        'Jenis_ruangan' => 'Ruang Laboratorium',
        'image' => 'image/ZO9qwWYUVTWfRbjKgm6wSUIOM1bJMaSFaRUedwlW.jpg', 
        'kursi' => '21', 
        'smart_tv'=> '0',
        'layar_proyektor' => '1',
        'lcd_proyektor' => '1',
        'ac' => '2',
        'kapasitas' => '21',
        'papan_tulis' => '1'
        ],
    );

    DB::table('ruangans')->insert([
        'Nama_ruangan' => 'Lab. mulmed',
        'Jenis_ruangan' => 'Ruang Laboratorium',
        'image' => 'image/mcxy2J1h1X9PAZNM90srBbpGpsyM4bH5tWXwGWIF.jpg', 
        'kursi' => '23', 
        'smart_tv'=> '0',
        'layar_proyektor' => '1',
        'lcd_proyektor' => '1',
        'ac' => '2',
        'kapasitas' => '23',
        'papan_tulis' => '1'
        ],
    );

    DB::table('ruangans')->insert([
        'Nama_ruangan' => 'Lab. RPL',
        'Jenis_ruangan' => 'Ruang Laboratorium',
        'image' => 'image/KmU4yxaNSAQMyzdDB4Il4pmSBFxHGIHT6UImvBRN.jpg', 
        'kursi' => '20', 
        'smart_tv'=> '0',
        'layar_proyektor' => '1',
        'lcd_proyektor' => '1',
        'ac' => '2',
        'kapasitas' => '20',
        'papan_tulis' => '1'
        ],
    );

    DB::table('users')->insert([
        'name' => 'admin',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('admin123'),  
        'is_admin' => '1'
        ],
    );

    DB::table('images_ruangans')->insert([
        'image' => 'image/XqlhvSABUvaPgJx9zFdFdSI39aX6aHW9WCNmCY4g.jpg',
        'id_ruangan' => '1',
        ],
    );

    DB::table('images_ruangans')->insert([
        'image' => 'image/k47GLaeZG191i7rOn4zY9bgL4csYXdePgycAh0zR.jpg',
        'id_ruangan' => '1',
        ],
    );

    DB::table('images_ruangans')->insert([
        'image' => 'image/mkRM6FZRu8MQXjxNNyiRlnmttyleHfvjosdGwn6e.jpg',
        'id_ruangan' => '1',
        ],
    );

    DB::table('images_ruangans')->insert([
        'image' => 'image/fI2C7AvQcbTxXU3Or7nU2khWa64uhhRS4Smx4SJA.jpg',
        'id_ruangan' => '2',
        ],
    );

    DB::table('images_ruangans')->insert([
        'image' => 'image/wW3w1AYBuSK4uTC5fnKTK6rS5Bteu3t6aVCDBc96.jpg',
        'id_ruangan' => '2',
        ],
    );

    DB::table('images_ruangans')->insert([
        'image' => 'image/11uJfvoGOEGGhnudVpaMnf71jBmW7NlhCEIZ8unN.jpg',
        'id_ruangan' => '2',
        ],
    );

    DB::table('images_ruangans')->insert([
        'image' => 'image/5rRLBqUaXRJy8kZm88aQi2nxIEOMUAFUma1Qignk.jpg',
        'id_ruangan' => '3',
        ],
    );

    DB::table('images_ruangans')->insert([
        'image' => 'image/tBmzQcoypBaHGs9ZIpbyqucZDJ0IQuerICFCBjfL.jpg',
        'id_ruangan' => '3',
        ],
    );

    DB::table('images_ruangans')->insert([
        'image' => 'image/oLOk4Jqsxr1ZGXtIyFUzJNHXRH0CNYABIVgj9EX6.jpg',
        'id_ruangan' => '3',
        ],
    );

    DB::table('images_ruangans')->insert([
        'image' => 'image/7153NBIUVsqqGyEUIfCyFFe0zTzyyItMq2sm34Rd.jpg',
        'id_ruangan' => '4',
        ],
    );

    DB::table('images_ruangans')->insert([
        'image' => 'image/euTxIdUuaWRl6rJFS0mMgybtH9GsaFQZm4CGBEVa.jpg',
        'id_ruangan' => '4',
        ],
    );

    DB::table('images_ruangans')->insert([
        'image' => 'image/dtrZJ6jK2MJcO69c4TuHNLvtrkKqhHZ3VuHQGbkN.jpg',
        'id_ruangan' => '4',
        ],
    );

    DB::table('images_ruangans')->insert([
        'image' => 'image/xD2ucqxqvywN8ngjEdye1q5n7EzXMmdujGImmnyW.jpg',
        'id_ruangan' => '5',
        ],
    );

    DB::table('images_ruangans')->insert([
        'image' => 'image/sKuFuBwfc149dwCy39WmqnSnkqeQ6nbmHNLJODuF.jpg',
        'id_ruangan' => '5',
        ],
    );

    DB::table('images_ruangans')->insert([
        'image' => 'image/3HjDA3G50JN5dl91gr31CP7tLOPAHSTXESE51Gmv.jpg',
        'id_ruangan' => '5',
        ],
    );

    
    }

    
}
