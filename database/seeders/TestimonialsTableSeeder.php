<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                'name' => 'Ferdian Paleka',
                'content' => 'PT. Amboina Jasa Prima Membantu Saya Mendapatkan Pembiayaan Kendaraan Impian Saya Dengan Mudah.',
                'rating' => 5,
                'image' => 'testimonial1.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Marion Salsabila',
                'content' => 'Sangat puas dengan layanan yang diberikan. Proses cepat dan mudah.',
                'rating' => 5,
                'image' => 'testimonial2.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Tambahkan data testimonial lainnya
        ]);
    }
}