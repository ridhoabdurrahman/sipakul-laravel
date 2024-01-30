<?php

namespace Database\Seeders;

use App\Models\Gejala;
use Illuminate\Database\Seeder;

class CreateGejalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'nama' => 'Kelembapapan dan kekenyalan kulit wajah cukup',
                'kode' => 'G001'
            ],
            [
                'nama' => 'Tidak tampak kusam',
                'kode' => 'G002'
            ],
            [
                'nama' => 'Persebaran warna kulit merata',
                'kode' => 'G003'
            ],
            [
                'nama' => 'Pori-pori tidak terlalu besar',
                'kode' => 'G004'
            ],
            [
                'nama' => 'Tidak mudah iritasi',
                'kode' => 'G005'
            ],
            [
                'nama' => 'Tidak mudah berjerawat',
                'kode' => 'G006'
            ],
            [
                'nama' => 'Pori-pori besar',
                'kode' => 'G007'
            ],
            [
                'nama' => 'Banyak komedo',
                'kode' => 'G008'
            ],
            [
                'nama' => 'Sering berjerawat',
                'kode' => 'G009'
            ],
            [
                'nama' => 'Wajah tampak mengkilap di area dahi, hidung, dagu',
                'kode' => 'G010'
            ],
            [
                'nama' => 'Tampak kusam',
                'kode' => 'G011'
            ],
            [
                'nama' => 'Kosmetik sulit menempel di wajah',
                'kode' => 'G012'
            ],
            [
                'nama' => 'Bertekstur kasar',
                'kode' => 'G013'
            ],
            [
                'nama' => 'Kulit kaku dan terasa tertarik setelah mencuci muka',
                'kode' => 'G014'
            ],
            [
                'nama' => 'Garis halus di wajah lebih terlihat',
                'kode' => 'G015'
            ],
            [
                'nama' => 'Kulit terkelupas',
                'kode' => 'G016'
            ],
            [
                'nama' => 'Tampak ruam',
                'kode' => 'G017'
            ],
            [
                'nama' => 'Pipi kering',
                'kode' => 'G018'
            ],
            [
                'nama' => 'Terasa gatal di area wajah',
                'kode' => 'G019'
            ],
            [
                'nama' => 'Mudah berjerawat jika menggunakan produk yang kurang cocok',
                'kode' => 'G020'
            ],
            [
                'nama' => 'Terdapat breakout',
                'kode' => 'G021'
            ],
            [
                'nama' => 'Terasa perih saat terlalu lama beraktivitas di bawah sinar matahari',
                'kode' => 'G022'
            ]
        ];

        Gejala::insert($data);
    }
}
