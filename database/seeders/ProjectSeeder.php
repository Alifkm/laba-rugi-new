<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // ----------------------------------------------------------------------------
        // Tahun 2019
        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU CANTOL DAN SUTR PB LAZADA LOGISTIK',
        //     'start_date' => '2019-05-16',
        //     'end_date' => '2019-06-14',
        //     'client_name' => 'PT PLN',
        //     'location' => 'JL RAYA PISANGAN',
        //     'price' => 16685331,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'admin1',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTR PB HOLIS',
        //     'start_date' => '2019-05-14',
        //     'end_date' => '2019-06-07',
        //     'client_name' => 'PT PLN',
        //     'location' => 'JLN BUMI MAS UTAMA  1A RT 6/4 UJUNG HARAPAN',
        //     'price' => 10622598,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN KABEL JURUSAN BARU DAN SUTR PB H. ERICK',
        //     'start_date' => '2019-05-14',
        //     'end_date' => '2019-06-07',
        //     'client_name' => 'PT PLN',
        //     'location' => 'JL SEKOLAH TARUNA WATER RT 11/9',
        //     'price' => 10722444,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMAS SUTR PD MASJID JAMI" ARROHMAH',
        //     'start_date' => '2019-05-14',
        //     'end_date' => '2019-06-07',
        //     'client_name' => 'PT PLN',
        //     'location' => 'JL RAYA PRAMBANAN 7 RT 2/14',
        //     'price' => 10428619,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN KABEL JURUSAN BARU DAN SUTR PD SUCIPTO',
        //     'start_date' => '2019-05-14',
        //     'end_date' => '2019-06-07',
        //     'client_name' => 'PT PLN',
        //     'location' => 'KP KEDUNG PENGAWAS RT 1 /1 ',
        //     'price' => 11015502,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU PORTAL DAN BONGKAR SUTR PD ROHMAT BIN DAMANG ( GE )',
        //     'start_date' => '2019-05-27',
        //     'end_date' => '2019-06-25',
        //     'client_name' => 'PT PLN',
        //     'location' => 'KP TELUK GARUT',
        //     'price' => 31075046,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU CANTOL DAN SUTR PB LUSYANA',
        //     'start_date' => '2019-06-13',
        //     'end_date' => '2019-07-19',
        //     'client_name' => 'PT PLN',
        //     'location' => 'KP PONCOL BABAKAN',
        //     'price' => 16017914,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTR PD MESJID JAMI AL IKHLAS',
        //     'start_date' => '2019-05-27',
        //     'end_date' => '2019-06-20',
        //     'client_name' => 'PT PLN',
        //     'location' => 'TAMAN KEBALEN',
        //     'price' => 9686125,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTR PB ROBITHO SE',
        //     'start_date' => '2019-05-27',
        //     'end_date' => '2019-06-20',
        //     'client_name' => 'PT PLN',
        //     'location' => 'UJUNG HARAPAN',
        //     'price' => 10358001,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTR PB PT SUMBER  TIRTA MAS ABADI',
        //     'start_date' => '2019-06-10',
        //     'end_date' => '2019-07-04',
        //     'client_name' => 'PT PLN',
        //     'location' => 'TARUMA JAYA',
        //     'price' => 10712887,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN  GARDU CANTOL PD TATANG SUANDI',
        //     'start_date' => '2019-07-09',
        //     'end_date' => '2019-08-07',
        //     'client_name' => 'PT PLN',
        //     'location' => 'JL GELORA BABELAN RT 22 RW 3',
        //     'price' => 13999166,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN  GARDU CANTOL DAN SUTR PD. BUSRI BUSTAMI',
        //     'start_date' => '2019-07-09',
        //     'end_date' => '2019-08-07',
        //     'client_name' => 'PT PLN',
        //     'location' => 'KP PINTU',
        //     'price' => 13936003,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTR PB RW NURHADI',
        //     'start_date' => '2019-07-09',
        //     'end_date' => '2019-08-02',
        //     'client_name' => 'PT PLN',
        //     'location' => 'KP PAL JAYA ',
        //     'price' => 9031333,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU CANTOL DAN SUTR PB  PT. FERA JAYA MANDIRI',
        //     'start_date' => '2019-07-16',
        //     'end_date' => '2019-08-14',
        //     'client_name' => 'PT PLN',
        //     'location' => 'PR VILLA INDAH PULO TIMAHA',
        //     'price' => 24047502,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU CANTOL DAN SUTR PB  PT. PROPERTINDO JAYA BERSAMA',
        //     'start_date' => '2019-07-16',
        //     'end_date' => '2019-08-14',
        //     'client_name' => 'PT PLN',
        //     'location' => 'CLUSTER PESONA BABELAN INDAH',
        //     'price' => 17969182,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU PORTAL DAN  SUTR PB PT. SOUBER WIJAYA SAKTI',
        //     'start_date' => '2019-07-16',
        //     'end_date' => '2019-08-14',
        //     'client_name' => 'PT PLN',
        //     'location' => 'SUKA MEKAR REGENCY',
        //     'price' => 24742158,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU CANTOL DAN SUTR PB  PT. PROPERTINDO JAYA BERSAMA',
        //     'start_date' => '2019-07-16',
        //     'end_date' => '2019-08-14',
        //     'client_name' => 'PT PLN',
        //     'location' => 'PESONA BABELAN',
        //     'price' => 19110433,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU PORTAL DAN  SUTR PD. GEREJA KATOLIK SANTA CLARA',
        //     'start_date' => '2019-07-17',
        //     'end_date' => '2019-08-15',
        //     'client_name' => 'PT PLN',
        //     'location' => 'JL LINGKAR UTARA',
        //     'price' => 15076322,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTR PD SDIT BINA NURUL HAQ',
        //     'start_date' => '2019-07-18',
        //     'end_date' => '2019-08-16',
        //     'client_name' => 'PT PLN',
        //     'location' => 'VILLA INDAH PERMAI',
        //     'price' => 10347725,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'MUTASI TRAFO DAN PEMASANGAN SUTR PD SLAMET TEGUH',
        //     'start_date' => '2019-07-22',
        //     'end_date' => '2019-08-20',
        //     'client_name' => 'PT PLN',
        //     'location' => 'KALI ABANG TENGAH',
        //     'price' => 10798585,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU CANTOL DAN SUTR PB  PT. CAHAYA CITRA INDAH',
        //     'start_date' => '2019-07-31',
        //     'end_date' => '2019-08-29',
        //     'client_name' => 'PT PLN',
        //     'location' => 'CLUSTER MUTIARA BABELAN 3',
        //     'price' => 25804255,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SKTM, GARDU KIOS SPLIT 3C & SUTR PB AHMAD RIFQI HIDAYATA',
        //     'start_date' => '2019-08-12',
        //     'end_date' => '2019-09-25',
        //     'client_name' => 'PT PLN',
        //     'location' => 'CLUSTER MADANI',
        //     'price' => 55357771,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU CANTOL DAN SUTR PB  PT. RAJAH BUMI PROPERTINDO',
        //     'start_date' => '2019-08-15',
        //     'end_date' => '2019-09-13',
        //     'client_name' => 'PT PLN',
        //     'location' => 'PR. CITRA GARDEN PERMAI',
        //     'price' => 22996659,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU CANTOL DAN SUTR PB  PT. TAJUL GABEKA JABAR',
        //     'start_date' => '2019-08-15',
        //     'end_date' => '2019-10-13',
        //     'client_name' => 'PT PLN',
        //     'location' => 'PR VILLA INDAH PULO TIMAHA',
        //     'price' => 35220951,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU CANTOL- PORTAL DAN SUTR PB  PT. WAHANA WISESA',
        //     'start_date' => '2019-08-15',
        //     'end_date' => '2019-10-13',
        //     'client_name' => 'PT PLN',
        //     'location' => 'PR WAHANA PONDOK UNGU',
        //     'price' => 68681279,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU CANTOL DAN SUTR PD. BASAN BIN NIMAN',
        //     'start_date' => '2019-08-19',
        //     'end_date' => '2019-09-17',
        //     'client_name' => 'PT PLN',
        //     'location' => 'KP PULAU NANGKA',
        //     'price' => 36098848,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTR, PB JONI PRATIKNO',
        //     'start_date' => '2019-08-20',
        //     'end_date' => '2019-09-18',
        //     'client_name' => 'PT PLN',
        //     'location' => 'KP BABELAN',
        //     'price' => 12698380,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU PORTAL PB PT. SLAMET MAKMUR BERSAMA',
        //     'start_date' => '2019-08-19',
        //     'end_date' => '2019-09-17',
        //     'client_name' => 'PT PLN',
        //     'location' => 'KP PISANGAN, KEBON SINGKONG RT 4/ RW1',
        //     'price' => 22026348,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU CANTOL DAN SUTR PB. KAVLING AHSANA DARUS SAKINAH',
        //     'start_date' => '2019-08-26',
        //     'end_date' => '2019-09-24',
        //     'client_name' => 'PT PLN',
        //     'location' => 'KAVLING AHSANA DARUS SAKINAH',
        //     'price' => 26655360,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN KABEL JURUSAN BARU DAN SUTR PB PT. SOUBER SAKTI',
        //     'start_date' => '2019-08-26',
        //     'end_date' => '2019-09-24',
        //     'client_name' => 'PT PLN',
        //     'location' => 'SUKA MEKAR REGENCY',
        //     'price' => 11330885,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SKTM, SUTM GARDU CANTOL DAN SUTR PB PT. PERSADA JAYA ARTHA',
        //     'start_date' => '2019-09-02',
        //     'end_date' => '2019-10-01',
        //     'client_name' => 'PT PLN',
        //     'location' => 'VILLA GADING HARAPAN 3',
        //     'price' => 20163759,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTR, PB NURMAJI - KAVLING KHURIPAN',
        //     'start_date' => '2019-08-19',
        //     'end_date' => '2019-09-17',
        //     'client_name' => 'PT PLN',
        //     'location' => 'KAVLING BUMI KHURIPAN',
        //     'price' => 12089960,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTR, PB SARIYANTYO DAN MARIA ELISABATH',
        //     'start_date' => '2019-09-19',
        //     'end_date' => '2019-10-08',
        //     'client_name' => 'PT PLN',
        //     'location' => 'KEBALEN KP PULO',
        //     'price' => 10117307,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTR PB AMANAH',
        //     'start_date' => '2019-09-19',
        //     'end_date' => '2019-10-18',
        //     'client_name' => 'PT PLN',
        //     'location' => 'KP PULO',
        //     'price' => 10282405,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN GARDU CANTOL  DAN SUTR PB MASJID FIKRUL AKBAR',
        //     'start_date' => '2019-09-19',
        //     'end_date' => '2019-10-18',
        //     'client_name' => 'PT PLN',
        //     'location' => 'DS BABELAN KOTA',
        //     'price' => 13390575,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SKTM, GARDU KIOS SPLIT 3C. PB. PIZZA HUT GOLDEN CITY',
        //     'start_date' => '2019-09-26',
        //     'end_date' => '2019-10-25',
        //     'client_name' => 'PT PLN',
        //     'location' => 'GOLDEN CITY BEKASI',
        //     'price' => 62294565,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTR, PB JURO',
        //     'start_date' => '2019-10-01',
        //     'end_date' => '2019-10-30',
        //     'client_name' => 'PT PLN',
        //     'location' => 'UJUNG HARAPAN - BABELAN',
        //     'price' => 12653285,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN  GARDU CANTOL DAN SUTR PB. MIKE ELOCK FAIQOH',
        //     'start_date' => '2019-10-23',
        //     'end_date' => '2019-10-21',
        //     'client_name' => 'PT PLN',
        //     'location' => 'KP. BATU JAYA',
        //     'price' => 13689301,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTR, PB GUNTUR ADE SAPUTRA ( KOLEKTIF )',
        //     'start_date' => '2019-10-23',
        //     'end_date' => '2019-11-21',
        //     'client_name' => 'PT PLN',
        //     'location' => 'DESA KEDUNG PENGAWAS',
        //     'price' => 8693055,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTR, PB JURO 2',
        //     'start_date' => '2019-10-23',
        //     'end_date' => '2019-11-21',
        //     'client_name' => 'PT PLN',
        //     'location' => 'DESA MUARA BAKTI',
        //     'price' => 8781200,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU CANTOL DAN SUTR PB SATONAH',
        //     'start_date' => '2019-10-28',
        //     'end_date' => '2019-11-26',
        //     'client_name' => 'PT PLN',
        //     'location' => 'KAV. RISMA JIHAN AKBAR',
        //     'price' => 18887388,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTR, PB DRS. H. DIAUDDIN. MM',
        //     'start_date' => '2019-11-25',
        //     'end_date' => '2019-12-24',
        //     'client_name' => 'PT PLN',
        //     'location' => 'KP. GEBANG CABANG',
        //     'price' => 9517331,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU CANTOL DAN SUTR PB  PT. ASSA PUTRA PROPERTI',
        //     'start_date' => '2019-11-26',
        //     'end_date' => '2019-12-25',
        //     'client_name' => 'PT PLN',
        //     'location' => 'PERUMAHAN BEKASI GRAND VILLAGE',
        //     'price' => 40952989,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU CANTOL-PORTAL DAN SUTR PB  PT. METRO PERKASA ABADI',
        //     'start_date' => '2019-11-26',
        //     'end_date' => '2019-12-25',
        //     'client_name' => 'PT PLN',
        //     'location' => 'JL RAYA PERTAMINA DESA BUNI BAKTI KEC BABELAN',
        //     'price' => 75530115,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU CANTOL DAN SUTR PB CV. NAILA JAYA',
        //     'start_date' => '2019-12-06',
        //     'end_date' => '2019-12-30',
        //     'client_name' => 'PT PLN',
        //     'location' => 'UJUNG HARAPAN RT 008 / 004 KEL. BAHAGIA',
        //     'price' => 32717147,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTR, PERUBAHAN DAYA POSKAM CV PANAH JAYA',
        //     'start_date' => '2019-12-16',
        //     'end_date' => '2020-01-09',
        //     'client_name' => 'PT PLN',
        //     'location' => 'KALI ABANG NANGKA',
        //     'price' => 14388832,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTR, PB JURO 3',
        //     'start_date' => '2019-12-16',
        //     'end_date' => '2020-01-02',
        //     'client_name' => 'PT PLN',
        //     'location' => 'JL GELORA BABELAN',
        //     'price' => 13413134,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTR, PB TOPIK',
        //     'start_date' => '2019-12-16',
        //     'end_date' => '2020-01-02',
        //     'client_name' => 'PT PLN',
        //     'location' => 'GRIYA UJUNG HARAPAN BABELAN',
        //     'price' => 11047390,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTR, PB SUKARDI',
        //     'start_date' => '2019-12-16',
        //     'end_date' => '2020-01-02',
        //     'client_name' => 'PT PLN',
        //     'location' => 'DESA BABAKAN',
        //     'price' => 8663233,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU CANTOL DAN SUTR PB CV SRIAMUR INDAH',
        //     'start_date' => '2019-12-30',
        //     'end_date' => '2020-01-23',
        //     'client_name' => 'PT PLN',
        //     'location' => 'KAVLING SUKA MEKAR INDAH 2',
        //     'price' => 11295446,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SKTM, GARDU KIOS SPLIT 3C & PERUBAHAN DAYA PERUMKA BEKASI ( GE )',
        //     'start_date' => '2019-03-12',
        //     'end_date' => '2019-04-25',
        //     'client_name' => 'PT PLN',
        //     'location' => 'STASIUN KRANJI',
        //     'price' => 117516069,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN INSTALASI TM-TR PB PT. SUMARECON AGUNG TBK',
        //     'start_date' => '2019-04-08',
        //     'end_date' => '2019-05-07',
        //     'client_name' => 'PT PLN',
        //     'location' => 'CLUSTER BURGUNDY- SUMARECON BEKASI ( KSO )',
        //     'price' => 22255814,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU PORTAL & SUTR PD H ZAENUDIN',
        //     'start_date' => '2019-04-18',
        //     'end_date' => '2019-05-17',
        //     'client_name' => 'PT PLN',
        //     'location' => 'JLN LINGKAR UTARA',
        //     'price' => 20983371,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SKTM, SUTM  GARDU CANTOL  & SUTR PD SMP ISLAM ANNUR',
        //     'start_date' => '2019-07-17',
        //     'end_date' => '2019-08-15',
        //     'client_name' => 'PT PLN',
        //     'location' => 'KALI ABANG TENGAH',
        //     'price' => 22823884,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SKTM, GARDU KIOS SPLIT 3C  & SUTR PD SMKN 11 KOTA BEKASI',
        //     'start_date' => '2019-11-04',
        //     'end_date' => '2019-12-03',
        //     'client_name' => 'PT PLN',
        //     'location' => 'MEDAN SATRIA',
        //     'price' => 173681213,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU PORTAL & SUTR PB PT DENNIS KUMALA SARI - GREEN ROYAL RESIDENCE',
        //     'start_date' => '2019-05-27',
        //     'end_date' => '2019-07-25',
        //     'client_name' => 'PT PLN',
        //     'location' => 'GREEN ROYAL RESIDENCE',
        //     'price' => 54290019,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU PORTAL & SUTR PB PT MITRA BOJONG PERKASA',
        //     'start_date' => '2019-07-01',
        //     'end_date' => '2019-07-30',
        //     'client_name' => 'PT PLN',
        //     'location' => 'PR. SATRIA INDAH RESIDENCE',
        //     'price' => 26431293,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SKTM, GARDU KIOS SPLIT 3C PD  GEREJA ST ARNODUS JANSSEN',
        //     'start_date' => '2019-07-18',
        //     'end_date' => '2019-08-16',
        //     'client_name' => 'PT PLN',
        //     'location' => 'JL IR H JUANDA NO 164 RT 002 RW 09',
        //     'price' => 107987072,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU CANTOL & SUTR PB GRAND INTAN RESIDENCE',
        //     'start_date' => '2019-07-22',
        //     'end_date' => '2019-08-20',
        //     'client_name' => 'PT PLN',
        //     'location' => 'GRAND INTAN RESIDENCE',
        //     'price' => 27327148,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU PORTAL & SUTR PB PT SATRIA RIANDI PERMAI',
        //     'start_date' => '2019-08-15',
        //     'end_date' => '2019-09-13',
        //     'client_name' => 'PT PLN',
        //     'location' => 'TAMAN EDELWEIS DESA SATRIA JAYA TAMBUN UTARA',
        //     'price' => 29829093,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SUTM, GARDU PORTAL & SUTR PB PERUM SATRIA MEKAR JAYA',
        //     'start_date' => '2019-08-20',
        //     'end_date' => '2019-09-18',
        //     'client_name' => 'PT PLN',
        //     'location' => 'PERUM SATRIA MEKAR JAYA',
        //     'price' => 28018601,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SKTM, GARDU KIOS SPLIT 3C PB PT. REKSO NASIONAL FOOD ( GE )',
        //     'start_date' => '2019-09-02',
        //     'end_date' => '2019-10-01',
        //     'client_name' => 'PT PLN',
        //     'location' => 'JLN .IR.H. JUANDA NO. 164 RT 002 RW 09',
        //     'price' => 65466940,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SKTM, GARDU KIOS SPLIT 3C PD. GEDUNG DIKBUD KOTA BEKASI',
        //     'start_date' => '2019-09-26',
        //     'end_date' => '2019-10-25',
        //     'client_name' => 'PT PLN',
        //     'location' => 'GEDUNG DIKBUD KOTA BEKASI',
        //     'price' => 38657557,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SKTM, GARDU KIOS SPLIT 3C PD. GEREJA HKBP',
        //     'start_date' => '2019-10-07',
        //     'end_date' => '2019-11-05',
        //     'client_name' => 'PT PLN',
        //     'location' => 'JLN GUNUNG GEDE RAYA',
        //     'price' => 98820689,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN INSTALASI TM-TR PB BTN KANWIL 1',
        //     'start_date' => '2019-11-04',
        //     'end_date' => '2019-12-03',
        //     'client_name' => 'PT PLN',
        //     'location' => 'GEDUNG ARSIP BTN KANWIL',
        //     'price' => 14003729,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);

        // DB::table('projects')->insert([
        //     'name' => 'PEMASANGAN SKTM, GARDU KIOS SPLIT 4C, PB PT. SURYA ASRI SELARAS',
        //     'start_date' => '2019-12-02',
        //     'end_date' => '2019-12-31',
        //     'client_name' => 'PT PLN',
        //     'location' => 'PER. GRAND SURYA ESTATE',
        //     'price' => 43761901,
        //     'status' => 'inactive',
        //     'description' => '',
        //     'created_by' => 'owner',
        //     'updated_by' => 'owner',
        //     'created_at' => '2022-12-20',
        //     'updated_at' => '2022-12-20'
        // ]);





        // ----------------------------------------------------------------------------
        // Tahun 2020
        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SKTM, SUTM, GARDU PORTAL & SUTR PB PT. ALAMINDO TRULYNUSA',
            'start_date' => '2020-01-20',
            'end_date' => '2020-02-13',
            'client_name' => 'PT PLN',
            'location' => 'PERUM DARMAWANGSA - CLUSTER SINGOSARI',
            'price' => 42026629,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTM, & GARDU PORTAL PB PT. ADHI PERSADA GEDUNG',
            'start_date' => '2020-01-20',
            'end_date' => '2020-02-09',
            'client_name' => 'PT PLN',
            'location' => 'JL. KALI MALANG JEMBATAN 3',
            'price' => 39628548,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTR, PB SURADI',
            'start_date' => '2020-01-24',
            'end_date' => '2020-02-10',
            'client_name' => 'PT PLN',
            'location' => 'Jl. Raya Pertamina',
            'price' => 29517883,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTR, PB SARI BUDI ASIH',
            'start_date' => '2020-01-24',
            'end_date' => '2020-02-10',
            'client_name' => 'PT PLN',
            'location' => 'Jl. Alistiqomah',
            'price' => 30133131,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTM, GARDU CANTOL DAN SUTR PB PERUM SRIMUKTI RESIDENCE',
            'start_date' => '2020-01-24',
            'end_date' => '2020-02-17',
            'client_name' => 'PT PLN',
            'location' => 'Kp. Gabus Ujung',
            'price' => 50330939,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTM, GARDU CANTOL & SUTR PB PT. SOUBER WIJAYA SAKTI',
            'start_date' => '2020-01-24',
            'end_date' => '2020-02-17',
            'client_name' => 'PT PLN',
            'location' => 'Perum Suke Mekar Regensy',
            'price' => 49529188,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTM, GARDU CANTOL DAN SUTR PB PT. PERMATA INDAH CIPTA GRAHA',
            'start_date' => '2020-02-07',
            'end_date' => '2020-03-02',
            'client_name' => 'PT PLN',
            'location' => 'Jl. Pertamina',
            'price' => 53920393,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTM, GARDU CANTOL DAN SUTR PB. MUSLIM CAHAYA PURNAMA',
            'start_date' => '2020-02-11',
            'end_date' => '2020-03-06',
            'client_name' => 'PT PLN',
            'location' => 'PERUM KASABLANGKA INDAH',
            'price' => 44409401,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTM & GARDU PORTAL PB UNIVERSITAS BHAYANGKARA',
            'start_date' => '2020-02-18',
            'end_date' => '2020-03-09',
            'client_name' => 'PT PLN',
            'location' => 'JL.PERJUANGAN RT 01/02',
            'price' => 37302766,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTR, PB ADANG',
            'start_date' => '2020-03-03',
            'end_date' => '2020-03-20',
            'client_name' => 'PT PLN',
            'location' => 'Jl. Raya Babelan',
            'price' => 33349680,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTM, GARDU PORTAL DAN SUTR PB NURHASAN',
            'start_date' => '2020-03-13',
            'end_date' => '2020-04-09',
            'client_name' => 'PT PLN',
            'location' => 'Karang Congok-Tambun Utara',
            'price' => 36199170,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTM, & GARDU CANTOL PB APIPUDIN',
            'start_date' => '2020-03-17',
            'end_date' => '2020-04-06',
            'client_name' => 'PT PLN',
            'location' => 'GG. CEMPAKA-BEKASI TIMUR',
            'price' => 40565481,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SKTM, GARDU KIOS SPLIT 3C & SUTR PB KEJAKSAAN NEGERI BEKASI',
            'start_date' => '2020-08-04',
            'end_date' => '2020-08-21',
            'client_name' => 'PT PLN',
            'location' => 'JL. VETERAN NO. 01',
            'price' => 57609133,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTM, GARDU PORTAL & SUTR TAHAP 1 PT. BUKILLA',
            'start_date' => '2020-09-12',
            'end_date' => '2020-10-11',
            'client_name' => 'PT PLN',
            'location' => 'Ulp Babelan, Medan Satria Dan Bekasi Kota',
            'price' => 59522726,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTM, GARDU CANTOL & SUTR PB ISOL',
            'start_date' => '2020-10-23',
            'end_date' => '2020-11-16',
            'client_name' => 'PT PLN',
            'location' => 'Desa Jayasakti, Muara Gembong',
            'price' => 65191365,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SKTM DAN GARDU KIOS SPLIT 3C PB YAYASAN ATTAQWA',
            'start_date' => '2020-11-27',
            'end_date' => '2020-12-21',
            'client_name' => 'PT PLN',
            'location' => 'JL. KENCANA PERMAI',
            'price' => 97986096,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTM, GARDU PORTAL & SUTR TAHAP 3 PT. BUKILLA',
            'start_date' => '2020-12-07',
            'end_date' => '2020-12-31',
            'client_name' => 'PT PLN',
            'location' => 'Ulp MDS, BKT dan BBL',
            'price' => 92595268,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEKERJAAN PENINGGIAN PHBTR YANG TERKENA DAMPAK BANJIR WILAYAH ULP BABELAN',
            'start_date' => '2020-12-30',
            'end_date' => '2021-02-26',
            'client_name' => 'PT PLN',
            'location' => 'ULP BABELAN',
            'price' => 264821788,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEKERJAAN PENINGGIAN KUBIKEL SPLIT 3C UNIS, GKJB, PL 102, PL 112 TERDAMPAK BANJIR WILAYAH ULP BEKASI KOTA',
            'start_date' => '2020-12-30',
            'end_date' => '2021-02-26',
            'client_name' => 'PT PLN',
            'location' => 'ULP BEKASI KOTA',
            'price' => 69975020,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        

        

        

        

        

        

        



        // ----------------------------------------------------------------------------
        // Tahun 2021
        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTM, GARDU PORTAL & SUTR TAHAP 1 PT. BUKILLA',
            'start_date' => '2021-01-25',
            'end_date' => '2021-03-24',
            'client_name' => 'PT PLN',
            'location' => 'Babelan, Medan Satria Dan Bekasi Kota',
            'price' => 93377438,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTM, GARDU PORTAL & SUTR TAHAP 2 Tahun 2021 PT. BUKILLA',
            'start_date' => '2021-04-23',
            'end_date' => '2021-06-21',
            'client_name' => 'PT PLN',
            'location' => 'Babelan, Medan Satria Dan Bekasi Kota',
            'price' => 132005057,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN LBS WILAYAH ULP BABELAN',
            'start_date' => '2021-05-17',
            'end_date' => '2021-07-15',
            'client_name' => 'PT PLN',
            'location' => 'P.Coffelate_TTG, P.Attaqwa_PPHIP',
            'price' => 86238358,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN CUT OUT WILAYAH ULP BABELAN',
            'start_date' => '2021-05-17',
            'end_date' => '2021-07-15',
            'client_name' => 'PT PLN',
            'location' => 'P.Lidya, Segara, Attaqwa, Pisangan, Citarum dan Coffelate',
            'price' => 88144583,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN GARDU PORTAL',
            'start_date' => '2021-05-17',
            'end_date' => '2021-07-15',
            'client_name' => 'PT PLN',
            'location' => 'BBI dan TWAK',
            'price' => 94381652,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTR UNTUK POTONG BEBAN',
            'start_date' => '2021-05-17',
            'end_date' => '2021-07-15',
            'client_name' => 'PT PLN',
            'location' => 'GARDU RWUC,  KDHA, BSSD',
            'price' => 97889093,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SKTM DAN GARDU KIOS SPLIT 3C',
            'start_date' => '2021-05-17',
            'end_date' => '2021-07-15',
            'client_name' => 'PT PLN',
            'location' => 'JL. JATI LUHUR RAYA - BEKASI KOTA',
            'price' => 121085120,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTM DAN GARDU PORTAL PENGADILAN NEGERI BEKASI',
            'start_date' => '2021-07-01',
            'end_date' => '2021-08-30',
            'client_name' => 'PT PLN',
            'location' => 'JL PANGERAN JAYA KARTA',
            'price' => 89929253,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMBANGUNAN SKTM, SUTM, GARDU DAN SUTR TAHAP 3 PT. BUKILLA MANDIRI',
            'start_date' => '2021-07-01',
            'end_date' => '2021-08-30',
            'client_name' => 'PT PLN',
            'location' => 'Babelan, Bekasi Kota Dan Medan Satria',
            'price' => 135309073,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN GARDU UNTUK POTONG BEBAN G. KSA, SAHB, STMD DAN ARGG',
            'start_date' => '2021-08-09',
            'end_date' => '2021-09-22',
            'client_name' => 'PT PLN',
            'location' => 'ULP Bekasi Kota',
            'price' => 105275799,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTM, GARDU DAN SUTR TAHAP 4 PT. BUKILLA MANDIRI',
            'start_date' => '2021-08-16',
            'end_date' => '2021-09-29',
            'client_name' => 'PT PLN',
            'location' => 'Ulp Babelan, Bekasi Kota Dan Medan Satria',
            'price' => 170303284,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTM, GARDU DAN SUTR TAHAP 5 PT. BUKILLA MANDIRI',
            'start_date' => '2021-10-26',
            'end_date' => '2021-12-09',
            'client_name' => 'PT PLN',
            'location' => 'Ulp Babelan, Bekasi Kota Dan Medan Satria',
            'price' => 180138372,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTM, GARDU DAN SUTR TAHAP 6 PT. BUKILLA MANDIRI',
            'start_date' => '2021-12-10',
            'end_date' => '2022-01-10',
            'client_name' => 'PT PLN',
            'location' => 'Ulp Babelan, Bekasi Kota Dan Medan Satria',
            'price' => 204672015,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);





        // ----------------------------------------------------------------------------
        // Tahun 2022
        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SKTM, GARDU TEMBOK, INSTALASI TM-TR, SKTR DAN SUTR DI CLUSTER VRANTA - TERA DAMAI',
            'start_date' => '2022-01-28',
            'end_date' => '2022-04-27',
            'client_name' => 'PT Surya Wana Elektrik',
            'location' => 'Cluster Vranta - Tera Damai',
            'price' => 383600000,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTM UNTUK PEREMAJAAN JARINGAN P. KENCANA',
            'start_date' => '2022-02-17',
            'end_date' => '2022-03-18',
            'client_name' => 'PT PLN',
            'location' => 'Perum Permata Hijau',
            'price' => 17310333,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PENYAMBUNGAN BARU DAN JARINGAN VGR, BONGKAR PASANG TIANG TR 1 GAWANG, TAMBAHAN 1 TIANG',
            'start_date' => '2022-02-21',
            'end_date' => '2022-03-20',
            'client_name' => 'PT Metro Perkasa Abadi',
            'location' => 'Komplek rukan mega bulevar, Jl. Harapan indah Bulevar Blok RV 2 No. 6C Utara, Pusaka Rakyat Bekasi',
            'price' => 79750000,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PERLUASAN JTM, JTR DAN GARDU TAHAP 1 TAHUN 2022 PT. BUKILLA MANDIRI',
            'start_date' => '2022-03-25',
            'end_date' => '2022-04-22',
            'client_name' => 'PT PLN',
            'location' => 'Ulp Babelan, Bekasi Kota Dan Medan Satria',
            'price' => 350003356,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN INSTALASI STADION UNTUK KEANDALAN AFF U19 2022',
            'start_date' => '2022-07-11',
            'end_date' => '2022-07-22',
            'client_name' => 'PT PLN',
            'location' => 'STADION PATRIOT - BEKASI',
            'price' => 23123327,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PERLUASAN JTM, JTR DAN GARDU TAHAP 2 TAHUN 2022 PT. BUKILLA MANDIRI',
            'start_date' => '2022-07-12',
            'end_date' => '2022-09-09',
            'client_name' => 'PT PLN',
            'location' => 'Ulp Babelan, Bekasi Kota Dan Medan Satria',
            'price' => 329284966,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN GARSIP CANTOL 100 KVA ULP BEKASI KOTA',
            'start_date' => '2022-07-27',
            'end_date' => '2022-08-26',
            'client_name' => 'PT PLN',
            'location' => 'ULP BEKASI KOTA',
            'price' => 23487332,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'UPRATING TRAFO ULP BEKASI KOTA',
            'start_date' => '2022-07-27',
            'end_date' => '2022-08-26',
            'client_name' => 'PT PLN',
            'location' => 'ULP BEKASI KOTA',
            'price' => 6837507,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTR PEMBERATAN ULP BEKASI KOTA',
            'start_date' => '2022-08-02',
            'end_date' => '2022-09-01',
            'client_name' => 'PT PLN',
            'location' => 'YPNA, STMI, STMC, SYPA, UDPB Dan KSBA',
            'price' => 25812155,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTR PEMBERATAN ULP MEDAN SATRIA',
            'start_date' => '2022-08-02',
            'end_date' => '2022-09-01',
            'client_name' => 'PT PLN',
            'location' => 'MSF, MSQ, AMR, RWUD Dan RWUE',
            'price' => 383600000,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PERLUASAN JTM, JTR, DAN GARDU TAHAP 3 TAHUN 2022 PT. BUKILLA MANDIRI',
            'start_date' => '2022-09-12',
            'end_date' => '2023-01-31',
            'client_name' => 'PT PLN',
            'location' => 'ULP BABELAN, ULP BEKASI KOTA, DAN ULP MEDAN SATRIA',
            'price' => 130076908,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'UPRATING TRAFO 250 kVA ULP BABELAN',
            'start_date' => '2022-09-20',
            'end_date' => '2022-10-19',
            'client_name' => 'PT PLN',
            'location' => 'ULP BABELAN',
            'price' => 11264112,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SKTM, GARDU TEMBOK, INSTALASI TM-TR, SKTR, DAN SUTR, DI CLUSTER CURTINA - TERA DAMAI',
            'start_date' => '2022-10-12',
            'end_date' => '2023-01-11',
            'client_name' => 'PT Surya Wana Elektrik',
            'location' => 'Cluster Vranta - Tera Damai',
            'price' => 441625071,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);

        DB::table('projects')->insert([
            'name' => 'PEMASANGAN SUTR PECAH BEBAN ULP BABELAN TAHAP 2',
            'start_date' => '2022-12-16',
            'end_date' => '2023-01-13',
            'client_name' => 'PT PLN',
            'location' => 'BABELAN',
            'price' => 78115987,
            'status' => 'inactive',
            'description' => '',
            'created_by' => 'admin1',
            'updated_by' => 'admin1',
            'created_at' => '2022-12-20',
            'updated_at' => '2022-12-20'
        ]);
    }
}
