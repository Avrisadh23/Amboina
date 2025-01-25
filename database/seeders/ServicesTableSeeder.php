<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('services')->insert([
            [
                'name' => 'Debt Collection',
                'description' => 'Layanan penagihan dan manajemen hutang yang profesional untuk memastikan pengembalian yang efektif.',
                'icon' => 'debt-collection-icon',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Security Guard',
                'description' => 'Layanan keamanan profesional untuk melindungi aset dan properti Anda.',
                'icon' => 'security-guard-icon',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Handling Trouble Credit',
                'description' => 'Solusi profesional untuk menangani masalah kredit dan pembiayaan bermasalah.',
                'icon' => 'trouble-credit-icon',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Credit Transfer',
                'description' => 'Layanan transfer kredit yang aman dan terpercaya untuk kebutuhan finansial Anda.',
                'icon' => 'credit-transfer-icon',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);

        // Menambahkan data untuk "Why Choose Us?"
        DB::table('services')->insert([
            [
                'name' => 'Efficiency',
                'description' => 'Kami menyediakan layanan yang efisien dan cepat untuk setiap kebutuhan finansial Anda.',
                'icon' => 'efficiency-icon',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Customer Service',
                'description' => 'Layanan pelanggan 24/7 yang siap membantu Anda dengan segala kebutuhan.',
                'icon' => 'customer-service-icon',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Security & Reliability',
                'description' => 'Keamanan dan keandalan adalah prioritas utama kami dalam setiap layanan.',
                'icon' => 'security-reliability-icon',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}