<?php

namespace Database\Seeders;

use App\Models\Book as ModelsBook;
use Illuminate\Database\Seeder;

class Book extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $judul = [
            'jika kamu menjadi tanda tambah',
            'beruang kutub dan panda',
            'Pierre',
            'buku pintar pengetahuan umum',
            'membaca pikiran orang lewat bahasa tubuh',
            'rahasia dibalik telepon',
            'piknik seru',
            'Metode Penelitian Kuantitatif',
            'Metode Penelitian Kualitatif',
            'Piawai Menembus Jurnal Terakreditasi',
            'Kamus Pangan dan Gizi Ed. 3',
            'Metabolisme Zat Gizi Ed. 2',
            'Metabolisme Zat Gizi Ed. 2',
            'Gizi Kesehatan Masyarakat'
        ];

        ModelsBook::create([
            'kode' => 'Buku '.rand(99,999),
            'judul' => $judul[rand(0,count($judul))],
            'penulis' => 'Erwin Alam',
            'penerbit' => 'Erwin Publisher',
            'tahun_terbit' => 2018,
            'stok' => rand(0,99),
            'rak_id' => rand(1,6)
        ]);
        ModelsBook::create([
            'kode' => 'Buku '.rand(99,999),
            'judul' => $judul[rand(0,count($judul))],
            'penulis' => 'Erwin Alam',
            'penerbit' => 'Erwin Publisher',
            'tahun_terbit' => 2018,
            'stok' => rand(0,99),
            'rak_id' => rand(1,6)
        ]);
        ModelsBook::create([
            'kode' => 'Buku '.rand(99,999),
            'judul' => $judul[rand(0,count($judul))],
            'penulis' => 'Erwin Alam',
            'penerbit' => 'Erwin Publisher',
            'tahun_terbit' => 2018,
            'stok' => rand(0,99),
            'rak_id' => rand(1,6)
        ]);
        ModelsBook::create([
            'kode' => 'Buku '.rand(99,999),
            'judul' => $judul[rand(0,count($judul))],
            'penulis' => 'Erwin Alam',
            'penerbit' => 'Erwin Publisher',
            'tahun_terbit' => 2018,
            'stok' => rand(0,99),
            'rak_id' => rand(1,6)
        ]);
        ModelsBook::create([
            'kode' => 'Buku '.rand(99,999),
            'judul' => $judul[rand(0,count($judul))],
            'penulis' => 'Erwin Alam',
            'penerbit' => 'Erwin Publisher',
            'tahun_terbit' => 2018,
            'stok' => rand(0,99),
            'rak_id' => rand(1,6)
        ]);
        ModelsBook::create([
            'kode' => 'Buku '.rand(99,999),
            'judul' => $judul[rand(0,count($judul))],
            'penulis' => 'Erwin Alam',
            'penerbit' => 'Erwin Publisher',
            'tahun_terbit' => 2018,
            'stok' => rand(0,99),
            'rak_id' => rand(1,6)
        ]);
        ModelsBook::create([
            'kode' => 'Buku '.rand(99,999),
            'judul' => $judul[rand(0,count($judul))],
            'penulis' => 'Erwin Alam',
            'penerbit' => 'Erwin Publisher',
            'tahun_terbit' => 2018,
            'stok' => rand(0,99),
            'rak_id' => rand(1,6)
        ]);
        ModelsBook::create([
            'kode' => 'Buku '.rand(99,999),
            'judul' => $judul[rand(0,count($judul))],
            'penulis' => 'Erwin Alam',
            'penerbit' => 'Erwin Publisher',
            'tahun_terbit' => 2018,
            'stok' => rand(0,99),
            'rak_id' => rand(1,6)
        ]);
        ModelsBook::create([
            'kode' => 'Buku '.rand(99,999),
            'judul' => $judul[rand(0,count($judul))],
            'penulis' => 'Erwin Alam',
            'penerbit' => 'Erwin Publisher',
            'tahun_terbit' => 2018,
            'stok' => rand(0,99),
            'rak_id' => rand(1,6)
        ]);
        ModelsBook::create([
            'kode' => 'Buku '.rand(99,999),
            'judul' => $judul[rand(0,count($judul))],
            'penulis' => 'Erwin Alam',
            'penerbit' => 'Erwin Publisher',
            'tahun_terbit' => 2018,
            'stok' => rand(0,99),
            'rak_id' => rand(1,6)
        ]);
        ModelsBook::create([
            'kode' => 'Buku '.rand(99,999),
            'judul' => $judul[rand(0,count($judul))],
            'penulis' => 'Erwin Alam',
            'penerbit' => 'Erwin Publisher',
            'tahun_terbit' => 2018,
            'stok' => rand(0,99),
            'rak_id' => rand(1,6)
        ]);
        ModelsBook::create([
            'kode' => 'Buku '.rand(99,999),
            'judul' => $judul[rand(0,count($judul))],
            'penulis' => 'Erwin Alam',
            'penerbit' => 'Erwin Publisher',
            'tahun_terbit' => 2018,
            'stok' => rand(0,99),
            'rak_id' => rand(1,6)
        ]);
        ModelsBook::create([
            'kode' => 'Buku '.rand(99,999),
            'judul' => $judul[rand(0,count($judul))],
            'penulis' => 'Erwin Alam',
            'penerbit' => 'Erwin Publisher',
            'tahun_terbit' => 2018,
            'stok' => rand(0,99),
            'rak_id' => rand(1,6)
        ]);
        ModelsBook::create([
            'kode' => 'Buku '.rand(99,999),
            'judul' => $judul[rand(0,count($judul))],
            'penulis' => 'Erwin Alam',
            'penerbit' => 'Erwin Publisher',
            'tahun_terbit' => 2018,
            'stok' => rand(0,99),
            'rak_id' => rand(1,6)
        ]);
        ModelsBook::create([
            'kode' => 'Buku '.rand(99,999),
            'judul' => $judul[rand(0,count($judul))],
            'penulis' => 'Erwin Alam',
            'penerbit' => 'Erwin Publisher',
            'tahun_terbit' => 2018,
            'stok' => rand(0,99),
            'rak_id' => rand(1,6)
        ]);
    }
}
