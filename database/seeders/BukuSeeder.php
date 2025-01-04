<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buku')->insert([
            // Novels
            [
                'id' => rand(1000, 9999), // Random ID
                'judul_buku' => 'Whispers in the Wind',
                'penulis' => 'Amelia Watson',
                'penerbit' => 'Seashell Press',
                'ISBN' => '978-1234567890',
                'tahun_terbit' => rand(1901, 2155), // Random Year
                'stok' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => rand(1000, 9999), // Random ID
                'judul_buku' => 'The Silent Sea',
                'penulis' => 'Leonardo DeLuca',
                'penerbit' => 'Pacific Books',
                'ISBN' => '978-0987654321',
                'tahun_terbit' => rand(1901, 2155), // Random Year
                'stok' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => rand(1000, 9999), // Random ID
                'judul_buku' => 'The Forgotten Path',
                'penulis' => 'Eleanor Blackwood',
                'penerbit' => 'Crescent Moon Publications',
                'ISBN' => '978-1122334455',
                'tahun_terbit' => rand(1901, 2155), // Random Year
                'stok' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => rand(1000, 9999), // Random ID
                'judul_buku' => 'Under the Midnight Sky',
                'penulis' => 'Henry Doyle',
                'penerbit' => 'Starry Nights Publishing',
                'ISBN' => '978-5566778899',
                'tahun_terbit' => rand(1901, 2155), // Random Year
                'stok' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => rand(1000, 9999), // Random ID
                'judul_buku' => 'Echoes of the Past',
                'penulis' => 'Victoria Rivers',
                'penerbit' => 'Golden Leaf Books',
                'ISBN' => '978-1230987654',
                'tahun_terbit' => rand(1901, 2155), // Random Year
                'stok' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Books
            [
                'id' => rand(1000, 9999), // Random ID
                'judul_buku' => 'The Art of Creativity',
                'penulis' => 'Samuel Green',
                'penerbit' => 'Mindful Press',
                'ISBN' => '978-5678901234',
                'tahun_terbit' => rand(1901, 2155), // Random Year
                'stok' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => rand(1000, 9999), // Random ID
                'judul_buku' => 'Digital Transformation',
                'penulis' => 'Carla Jones',
                'penerbit' => 'TechWorld Publishers',
                'ISBN' => '978-6543210987',
                'tahun_terbit' => rand(1901, 2155), // Random Year
                'stok' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => rand(1000, 9999), // Random ID
                'judul_buku' => 'Modern Philosophy',
                'penulis' => 'Edward West',
                'penerbit' => 'Classic Reads',
                'ISBN' => '978-2345678901',
                'tahun_terbit' => rand(1901, 2155), // Random Year
                'stok' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => rand(1000, 9999), // Random ID
                'judul_buku' => 'The Mind of a Leader',
                'penulis' => 'Rachel White',
                'penerbit' => 'Visionary Press',
                'ISBN' => '978-8765432109',
                'tahun_terbit' => rand(1901, 2155), // Random Year
                'stok' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => rand(1000, 9999), // Random ID
                'judul_buku' => 'The World of Tomorrow',
                'penulis' => 'Oliver King',
                'penerbit' => 'Future Books Publishing',
                'ISBN' => '978-5432109876',
                'tahun_terbit' => rand(1901, 2155), // Random Year
                'stok' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            // Mangas
            [
                'id' => rand(1000, 9999), // Random ID
                'judul_buku' => 'Warrior’s Path: Saga of the Lost',
                'penulis' => 'Kaito Arashi',
                'penerbit' => 'Shonen Jump',
                'ISBN' => '978-1112233445',
                'tahun_terbit' => rand(1901, 2155), // Random Year
                'stok' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => rand(1000, 9999), // Random ID
                'judul_buku' => 'Chronicles of the Undead',
                'penulis' => 'Haruto Takeda',
                'penerbit' => 'Manga Studio',
                'ISBN' => '978-9988776655',
                'tahun_terbit' => rand(1901, 2155), // Random Year
                'stok' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => rand(1000, 9999), // Random ID
                'judul_buku' => 'Revenge of the Shadow',
                'penulis' => 'Mai Sato',
                'penerbit' => 'Super Manga Press',
                'ISBN' => '978-2345678910',
                'tahun_terbit' => rand(1901, 2155), // Random Year
                'stok' => 14,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => rand(1000, 9999), // Random ID
                'judul_buku' => 'Rising Sun: Battle of the Ages',
                'penulis' => 'Yuji Nakamura',
                'penerbit' => 'Neo Manga World',
                'ISBN' => '978-8765432109',
                'tahun_terbit' => rand(1901, 2155), // Random Year
                'stok' => 17,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => rand(1000, 9999), // Random ID
                'judul_buku' => 'Samurai’s Legacy',
                'penulis' => 'Kazuki Fujiwara',
                'penerbit' => 'Shonen Media',
                'ISBN' => '978-3344556677',
                'tahun_terbit' => rand(1901, 2155), // Random Year
                'stok' => 16,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
