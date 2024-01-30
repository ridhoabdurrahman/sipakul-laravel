<?php

namespace Database\Seeders;

use App\Models\Kulit;
use Illuminate\Database\Seeder;

class CreatePenyakitSeeder extends Seeder
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
                'nama' => 'Normal',
                'kode' => 'JK01',
                'pengobatan' => 'Gunakan double cleansing berupa cleansing oil  atau micellar water dan facial wash yang berbahan 0% alkohol dan ringan (tidak mengandung scrub dan tidak banyak busa) <br/>
                Gunakan hydarating toner untuk mengembalikan menyeimbangkan kadar Ph kulit untuk menjaga kelembapan dan keelastisan kulit wajah.
                Gunakan serum dan moisturizer yang berbahan hyaluronic acid, kolagen, asam hialuronat atau vitamin C untuk kelembapan, mencerahkan dan mengencangkan kulit wajah.<br/>
                Gunakan chemical sunscreen chemical yang teksturnya ringan dan tidak meninggalkan white case saat digunakan dengan kandungan SPF50+ dan PA++++ (broad spectrum) yang melindungi kulit dari sinar UV dan polusi.'
            ],
            [
                'nama' => 'Berminyak',
                'kode' => 'JK02',
                'pengobatan' => 'Gunakan micellar water dan facial wash, toner, serum, dan moisturizer atau pelembap dengan bahan yang mengandung salicylic acid, ceramide, atau tea trea oil yang bagus untuk melembapkan wajah dan mencegah adanya jerawat. <br/>
                Gunakan physical sunscreen yang kandungannya non-comedogenic (tidak menyumbat pori-pori) dengan SPF50+ serta PA++++ yang melindungi kulit dari sinar UV dan polusi.'
            ],
            [
                'nama' => 'Kering',
                'kode' => 'JK03',
                'pengobatan' => 'Gunakan pembersih wajah, toner, serum, moisturizer yang berbahan aloe vera, argan oil, centella asiatica, atau glycerin untuk melembapkan wajah agar kulit tidak kering dan kasar. <br/>
                Gunakan chemical sunscreen dan SPF 50+ serta PA++++ yang melindungi kulit dari sinar UV dan polusi.'
            ],
            [
                'nama' => 'Kombinasi',
                'kode' => 'JK04',
                'pengobatan' => '1.	Gunakan pembersih, toner, serum, moisturizer, yang mengandung bahan niacinamide, hyaluronic acid, aloevera, silica, dan Vitamin E untuk mengurangi produksi sebum, melembapkan, menghidrasi kulit, dan meningkatkan elastisitas kulit pada wajah. <br/>
                2. Gunakan hybrid sunscreen (gabungan antara physical dan chemical sunscreen yang memiliki tekstur ringan) dengan SPF50+ serta PA++++ yang melindungi kulit dari sinar UV dan polusi.'
            ],
            [
                'nama' => 'Sensitif',
                'kode' => 'JK05',
                'pengobatan' => '1.	Gunakan produk pembersih, toner, serum, moisturizer yang mengandung polyhydrocix acid, niacinamide, atau hyaluronic acid untuk mengurangi kerusakan kulit, menghidrasi, dan menjaga kelembapan kulit wajah. <br/>
                2.	Gunakan physical sunscreen yang kandungannya non-comedogenic (tidak menyumbat pori-pori) dengan SPF50+ serta PA++++ yang melindungi kulit dari sinar UV dan polusi.'
            ],
        ];

        Kulit::insert($data);
    }
}
