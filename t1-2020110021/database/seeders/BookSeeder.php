<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();
        // Buat 25 artikel dummy
        for ($i = 0; $i < 25; $i++) {
            // Generate nomor 13 angka
            $no_isbn = $faker->randomNumber();
            // Generate link untuk url gambar
            $judul_buku = $faker->sentence();
            // Generate paragraf dengan panjang 20 kalimat
            $total_halaman = $faker->randomNumber();
            // Generate angka acak antara 0 hingga 100
            $kategori = $faker->sentence();
            $penerbit = $faker->sentence();
            // Generate DateTime antara 3 bulan lall
            $created_at = $faker->dateTimeBetween('-1 years', '-3 months');

            DB::table('books')->insert([
                'no_isbn' => $no_isbn,
                'judul_buku' => $judul_buku,
                'total_halaman' => $total_halaman,
                'kategori' => $kategori,
                'penerbit' => $penerbit,
                'created_at' => $created_at,
                'updated_at' => $created_at,
            ]);
        }

    }
}
