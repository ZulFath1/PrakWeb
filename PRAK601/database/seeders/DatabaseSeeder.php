<?php

namespace Database\Seeders;

use App\Models\Profil;
use App\Models\Pengalaman;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Profil::create([
            'nama'   => 'Muhammad Dzul Fathi Ahyan',
            'nim'    => '2410817210011',
            'prodi'  => 'Teknologi Informasi',
            'hobi'   => 'Fotografi, Gaming, dan Belajar Biologi',
            'skill'  => 'Fotografi, Colorgrade, dan Biologi',
            'gambar' => 'images/pfp.jpeg'
        ]);

        Pengalaman::insert([
            [
                'judul'  => 'Sesak Nafas LKMM-PD',
                'waktu'  => 'Akhir LKMM-PD',
                'desc'   => 'Ketika hari puncak nya LKMM-PD, saya mengalami sesak nafas yang cukup parah dikarenakan gimmik yang terlalu tidak menyenangkan untuk saya. apalagi saya adalah orang yang tipenya pendiam dan melihat keadaan. tpi dihadapi dengan semua kesalahan yang di salah salahkan membuat saya menjadi memiliki banyak pertanyaan di kepala saya sehingga nembuat saya stress dan sesak nafas.',
                'kesan'  => 'Kesannya saya kesal sekali dan sampai sekarang saya masih tidak melupakan pragos',
                'gambar' => 'images/pragos.jpeg'
            ],
            [
                'judul'  => 'APS Astagfirullah',
                'waktu'  => 'Semester 3',
                'desc'   => 'intinya ya allah salah satu pengalaman mengerikan dengan bang irham astagfirullah kada handak lagi meingati',
                'kesan'  => 'pertama kalinya standby sagan konsul sampai subuh kada beguringan. kada handak lagi',
                'gambar' => 'images/asp.jpeg'
            ],
            [
                'judul'  => 'Mafia Jurnal Dalle Dallean',
                'waktu'  => 'Semester 1',
                'desc'   => 'Itu saat kami mengetahui bahwa ULM ada kena kasus mafia jurnal yang cukup besar dan pelakunya adalah dosen kami sendiri yaitu dalle dalle itu. membuat ulm saat itu akrenya turun ke C dan di demo mahasiswa di rektorat.',
                'kesan'  => 'rami soalnya dapat foto bagus bagus, crowdednya dapat ahahahahha',
                'gambar' => 'images/mafia.jpeg'
            ],
            [
                'judul'  => 'BBQ',
                'waktu'  => 'Januari 2025',
                'desc'   => 'kami makan bbq daging brp kilo lupa saya, tpi yang jelas kami makan kebanyakan sampai hoek hoek semalam tuh perkara kebanyakan',
                'kesan'  => 'lucu banar maul sampai hoek hoek disuapi',
                'gambar' => 'images/bbq.jpeg'
            ]
        ]);
    }
}