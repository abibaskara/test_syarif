<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kelas;
use App\Models\Matakuliah;
use App\Models\Nilai;
use App\Models\Dosen;
use App\Models\Mahasiswa;

class Dataseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Kelas::insert([
            'nama_kelas' => 'ipa'
        ], [
            'nama_kelas' => 'ips'
        ]);

        Dosen::insert([
            'nama_dosen' => 'aa',
            'nip'   => '8979',
            'alamat'   => 'mangga2',
            'no_telp'   => '09899765',
        ], [
            'nama_dosen' => 'ab',
            'nip'   => '111',
            'alamat'   => 'apel1',
            'no_telp'   => '0989711',
        ]);

        Mahasiswa::insert([
            'id_kelas' => 1,
            'nama'   => '111',
            'alamat'   => 'setapak',
            'no_telp'   => '0987777',
            'nim' => '123'
        ], [
            'id_kelas' => 2,
            'nama'   => '222',
            'alamat'   => 'keoi',
            'no_telp'   => '098777',
            'nim' => '321'
        ]);

        Matakuliah::insert([
            'nama_matkul'   => 'kimia',
            'id_dosen'   => 1,
            'kode_matkul' => 1,
        ], [
            'nama_matkul'   => 'fisika',
            'id_dosen'   => 2,
            'kode_matkul' => 2,
        ]);

        Nilai::insert([
            'id_mahasiswa' => 1,
            'id_matkul' => 1,
            'nilai' => '80'
        ], [
            'id_mahasiswa' => 2,
            'id_matkul' => 2,
            'nilai' => '90'
        ]);
    }
}