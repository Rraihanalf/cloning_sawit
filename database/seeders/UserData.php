<?php

namespace Database\Seeders;

use App\Models\Jadwal;
use App\Models\Laboratorium;
use App\Models\Lapangan;
use App\Models\Pegawai;
use App\Models\Pohon;
use App\Models\Sampel;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userData = [
            [
                'id_pegawai' => 'C030322063',
                'username' => 'Admin',
                'password' => bcrypt('123456'),
                'level' => '1',
            ],
            [
                'id_pegawai' => 'PL-001-S-001',
                'username' => 'PL001',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
            [
                'id_pegawai' => 'PL-002-S-001',
                'username' => 'PL002',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
            [
                'id_pegawai' => 'PL-003-S-001',
                'username' => 'PL003',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
            [
                'id_pegawai' => 'PL-004-S-001',
                'username' => 'PL004',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
            [
                'id_pegawai' => 'PL-005-S-001',
                'username' => 'PL005',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
        
            // Pegawai untuk Laboratorium Fisika (S-002)
            [
                'id_pegawai' => 'PL-006-S-002',
                'username' => 'PL006',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
            [
                'id_pegawai' => 'PL-007-S-002',
                'username' => 'PL007',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
            [
                'id_pegawai' => 'PL-008-S-002',
                'username' => 'PL008',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
            [
                'id_pegawai' => 'PL-009-S-002',
                'username' => 'PL009',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
        
            // Pegawai untuk Laboratorium Biologi (S-003)
            [
                'id_pegawai' => 'PL-010-S-003',
                'username' => 'PL010',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
            [
                'id_pegawai' => 'PL-011-S-003',
                'username' => 'PL011',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
            [
                'id_pegawai' => 'PL-012-S-003',
                'username' => 'PL012',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
            [
                'id_pegawai' => 'PL-013-S-003',
                'username' => 'PL013',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
            [
                'id_pegawai' => 'PL-014-S-003',
                'username' => 'PL014',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
            [
                'id_pegawai' => 'PL-015-S-003',
                'username' => 'PL015',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
        
            // Pegawai untuk Laboratorium Komputer (S-004)
            [
                'id_pegawai' => 'PL-016-S-004',
                'username' => 'PL016',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
            [
                'id_pegawai' => 'PL-017-S-004',
                'username' => 'PL017',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
            [
                'id_pegawai' => 'PL-018-S-004',
                'username' => 'PL018',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
        
            // Pegawai untuk Laboratorium Teknik (S-005)
            [
                'id_pegawai' => 'PL-019-S-005',
                'username' => 'PL019',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
            [
                'id_pegawai' => 'PL-020-S-005',
                'username' => 'PL020',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
            [
                'id_pegawai' => 'PL-021-S-005',
                'username' => 'PL021',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],
            [
                'id_pegawai' => 'PL-022-S-005',
                'username' => 'PL022',
                'password' => bcrypt('123456'),
                'level' => '2',
            ],

        ];

        foreach($userData as $key => $val){
            User::create($val);
        }

        $pegawai = [
            [
                'id_pegawai' => 'PL-001-S-001',
                'nama_pegawai' => 'Andi Surya',
                'jenis_kelamin' => 'Laki-laki',
                'email_pegawai' => 'andi.surya@example.com',
                'no_hp_pegawai' => '081234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pegawai' => 'PL-002-S-001',
                'nama_pegawai' => 'Budi Santoso',
                'jenis_kelamin' => 'Laki-laki',
                'email_pegawai' => 'budi.santoso@example.com',
                'no_hp_pegawai' => '081234567891',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pegawai' => 'PL-003-S-001',
                'nama_pegawai' => 'Citra Dewi',
                'jenis_kelamin' => 'Perempuan',
                'email_pegawai' => 'citra.dewi@example.com',
                'no_hp_pegawai' => '081234567892',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pegawai' => 'PL-004-S-001',
                'nama_pegawai' => 'Dedi Kusuma',
                'jenis_kelamin' => 'Laki-laki',
                'email_pegawai' => 'dedi.kusuma@example.com',
                'no_hp_pegawai' => '081234567893',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pegawai' => 'PL-005-S-001',
                'nama_pegawai' => 'Eka Putri',
                'jenis_kelamin' => 'Perempuan',
                'email_pegawai' => 'eka.putri@example.com',
                'no_hp_pegawai' => '081234567894',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
            [
                'id_pegawai' => 'PL-006-S-002',
                'nama_pegawai' => 'Farid Ahmad',
                'jenis_kelamin' => 'Laki-laki',
                'email_pegawai' => 'farid.ahmad@example.com',
                'no_hp_pegawai' => '081234567895',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pegawai' => 'PL-007-S-002',
                'nama_pegawai' => 'Gina Laras',
                'jenis_kelamin' => 'Perempuan',
                'email_pegawai' => 'gina.laras@example.com',
                'no_hp_pegawai' => '081234567896',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pegawai' => 'PL-008-S-002',
                'nama_pegawai' => 'Hariyanto',
                'jenis_kelamin' => 'Laki-laki',
                'email_pegawai' => 'hariyanto@example.com',
                'no_hp_pegawai' => '081234567897',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pegawai' => 'PL-009-S-002',
                'nama_pegawai' => 'Indah Purnama',
                'jenis_kelamin' => 'Perempuan',
                'email_pegawai' => 'indah.purnama@example.com',
                'no_hp_pegawai' => '081234567898',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
            [
                'id_pegawai' => 'PL-010-S-003',
                'nama_pegawai' => 'Joko Widodo',
                'jenis_kelamin' => 'Laki-laki',
                'email_pegawai' => 'joko.widodo@example.com',
                'no_hp_pegawai' => '081234567899',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pegawai' => 'PL-011-S-003',
                'nama_pegawai' => 'Kartika Sari',
                'jenis_kelamin' => 'Perempuan',
                'email_pegawai' => 'kartika.sari@example.com',
                'no_hp_pegawai' => '081234567900',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pegawai' => 'PL-012-S-003',
                'nama_pegawai' => 'Lukman Hakim',
                'jenis_kelamin' => 'Laki-laki',
                'email_pegawai' => 'lukman.hakim@example.com',
                'no_hp_pegawai' => '081234567901',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pegawai' => 'PL-013-S-003',
                'nama_pegawai' => 'Maya Sari',
                'jenis_kelamin' => 'Perempuan',
                'email_pegawai' => 'maya.sari@example.com',
                'no_hp_pegawai' => '081234567902',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pegawai' => 'PL-014-S-003',
                'nama_pegawai' => 'Nurul Fadhilah',
                'jenis_kelamin' => 'Perempuan',
                'email_pegawai' => 'nurul.fadhilah@example.com',
                'no_hp_pegawai' => '081234567903',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pegawai' => 'PL-015-S-003',
                'nama_pegawai' => 'Omar Saif',
                'jenis_kelamin' => 'Laki-laki',
                'email_pegawai' => 'omar.saif@example.com',
                'no_hp_pegawai' => '081234567904',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
            [
                'id_pegawai' => 'PL-016-S-004',
                'nama_pegawai' => 'Putu Wibawa',
                'jenis_kelamin' => 'Laki-laki',
                'email_pegawai' => 'putu.wibawa@example.com',
                'no_hp_pegawai' => '081234567905',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pegawai' => 'PL-017-S-004',
                'nama_pegawai' => 'Qori Asih',
                'jenis_kelamin' => 'Perempuan',
                'email_pegawai' => 'qori.asih@example.com',
                'no_hp_pegawai' => '081234567906',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pegawai' => 'PL-018-S-004',
                'nama_pegawai' => 'Rendi Agus',
                'jenis_kelamin' => 'Laki-laki',
                'email_pegawai' => 'rendi.agus@example.com',
                'no_hp_pegawai' => '081234567907',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
            [
                'id_pegawai' => 'PL-019-S-005',
                'nama_pegawai' => 'Sari Utami',
                'jenis_kelamin' => 'Perempuan',
                'email_pegawai' => 'sari.utami@example.com',
                'no_hp_pegawai' => '081234567908',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pegawai' => 'PL-020-S-005',
                'nama_pegawai' => 'Taufik Hidayat',
                'jenis_kelamin' => 'Laki-laki',
                'email_pegawai' => 'taufik.hidayat@example.com',
                'no_hp_pegawai' => '081234567909',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pegawai' => 'PL-021-S-005',
                'nama_pegawai' => 'Umar Zunaidi',
                'jenis_kelamin' => 'Laki-laki',
                'email_pegawai' => 'umar.zunaidi@example.com',
                'no_hp_pegawai' => '081234567910',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pegawai' => 'PL-022-S-005',
                'nama_pegawai' => 'Vina Melati',
                'jenis_kelamin' => 'Perempuan',
                'email_pegawai' => 'vina.melati@example.com',
                'no_hp_pegawai' => '081234567911',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach($pegawai as $key => $val){
            Pegawai::create($val);
        }

        $lab = [
            [
                'id_lab' => 'S-001',
                'nama_lab' => 'Laboratorium Kimia',
                'kapasitas' => '30',
                'jumlah_pegawai' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_lab' => 'S-002',
                'nama_lab' => 'Laboratorium Fisika',
                'kapasitas' => '25',
                'jumlah_pegawai' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_lab' => 'S-003',
                'nama_lab' => 'Laboratorium Biologi',
                'kapasitas' => '35',
                'jumlah_pegawai' => '6',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_lab' => 'S-004',
                'nama_lab' => 'Laboratorium Komputer',
                'kapasitas' => '40',
                'jumlah_pegawai' => '3',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_lab' => 'S-005',
                'nama_lab' => 'Laboratorium Teknik',
                'kapasitas' => '20',
                'jumlah_pegawai' => '4',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach($lab as $key => $val){
            Laboratorium::create($val);
        }

        $sampel = [
            [
                'id_sampel' => 'SP-S001-001',
                'id_lab' => 'S-001',
                'jenis_bibit' => 'Tenera',
                'asal_bibit' => 'Sumatera Utara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sampel' => 'SP-S001-002',
                'id_lab' => 'S-001',
                'jenis_bibit' => 'Dura',
                'asal_bibit' => 'Riau',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sampel' => 'SP-S001-003',
                'id_lab' => 'S-001',
                'jenis_bibit' => 'Pisifera',
                'asal_bibit' => 'Jambi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sampel' => 'SP-S001-004',
                'id_lab' => 'S-001',
                'jenis_bibit' => 'Tenera',
                'asal_bibit' => 'Lampung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sampel' => 'SP-S001-005',
                'id_lab' => 'S-001',
                'jenis_bibit' => 'Dura',
                'asal_bibit' => 'Kalimantan Barat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
            [
                'id_sampel' => 'SP-S002-006',
                'id_lab' => 'S-002',
                'jenis_bibit' => 'Pisifera',
                'asal_bibit' => 'Sumatera Selatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sampel' => 'SP-S002-007',
                'id_lab' => 'S-002',
                'jenis_bibit' => 'Tenera',
                'asal_bibit' => 'Kalimantan Tengah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sampel' => 'SP-S002-008',
                'id_lab' => 'S-002',
                'jenis_bibit' => 'Dura',
                'asal_bibit' => 'Sulawesi Selatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sampel' => 'SP-S002-009',
                'id_lab' => 'S-002',
                'jenis_bibit' => 'Pisifera',
                'asal_bibit' => 'Jawa Barat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sampel' => 'SP-S002-010',
                'id_lab' => 'S-002',
                'jenis_bibit' => 'Tenera',
                'asal_bibit' => 'Sumatera Barat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
            [
                'id_sampel' => 'SP-S003-011',
                'id_lab' => 'S-003',
                'jenis_bibit' => 'Dura',
                'asal_bibit' => 'Kalimantan Timur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sampel' => 'SP-S003-012',
                'id_lab' => 'S-003',
                'jenis_bibit' => 'Pisifera',
                'asal_bibit' => 'Bali',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sampel' => 'SP-S003-013',
                'id_lab' => 'S-003',
                'jenis_bibit' => 'Tenera',
                'asal_bibit' => 'Papua',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sampel' => 'SP-S003-014',
                'id_lab' => 'S-003',
                'jenis_bibit' => 'Dura',
                'asal_bibit' => 'Aceh',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sampel' => 'SP-S003-015',
                'id_lab' => 'S-003',
                'jenis_bibit' => 'Pisifera',
                'asal_bibit' => 'Nusa Tenggara Barat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
            [
                'id_sampel' => 'SP-S004-016',
                'id_lab' => 'S-004',
                'jenis_bibit' => 'Tenera',
                'asal_bibit' => 'Sulawesi Tenggara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sampel' => 'SP-S004-017',
                'id_lab' => 'S-004',
                'jenis_bibit' => 'Dura',
                'asal_bibit' => 'Sumatera Utara',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sampel' => 'SP-S004-018',
                'id_lab' => 'S-004',
                'jenis_bibit' => 'Pisifera',
                'asal_bibit' => 'Riau',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sampel' => 'SP-S004-019',
                'id_lab' => 'S-004',
                'jenis_bibit' => 'Tenera',
                'asal_bibit' => 'Jambi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sampel' => 'SP-S004-020',
                'id_lab' => 'S-004',
                'jenis_bibit' => 'Dura',
                'asal_bibit' => 'Lampung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        
            [
                'id_sampel' => 'SP-S005-021',
                'id_lab' => 'S-005',
                'jenis_bibit' => 'Pisifera',
                'asal_bibit' => 'Kalimantan Barat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sampel' => 'SP-S005-022',
                'id_lab' => 'S-005',
                'jenis_bibit' => 'Tenera',
                'asal_bibit' => 'Sumatera Selatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sampel' => 'SP-S005-023',
                'id_lab' => 'S-005',
                'jenis_bibit' => 'Dura',
                'asal_bibit' => 'Kalimantan Tengah',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sampel' => 'SP-S005-024',
                'id_lab' => 'S-005',
                'jenis_bibit' => 'Pisifera',
                'asal_bibit' => 'Sulawesi Selatan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_sampel' => 'SP-S005-025',
                'id_lab' => 'S-005',
                'jenis_bibit' => 'Tenera',
                'asal_bibit' => 'Jawa Barat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach($sampel as $key => $val){
            Sampel::create($val);
        }

        $pohon = [
            [
                'id_pohon' => 'S-001-LP-001-P001',
                'id_sampel' => 'SP-S001-001',
                'id_lapangan' => 'LP-001',
                'tgl_tanam' => '2021-01-15',
                'tinggi_pohon' => 2.5,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon pertama di lapangan 001 dengan sampel dari laboratorium S-001.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-001-LP-002-P002',
                'id_sampel' => 'SP-S001-002',
                'id_lapangan' => 'LP-002',
                'tgl_tanam' => '2021-02-20',
                'tinggi_pohon' => 3.0,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon kedua di lapangan 002 dengan sampel dari laboratorium S-001.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-001-LP-003-P003',
                'id_sampel' => 'SP-S001-003',
                'id_lapangan' => 'LP-003',
                'tgl_tanam' => '2021-03-25',
                'tinggi_pohon' => 2.8,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon ketiga di lapangan 003 dengan sampel dari laboratorium S-001.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-001-LP-004-P004',
                'id_sampel' => 'SP-S001-004',
                'id_lapangan' => 'LP-004',
                'tgl_tanam' => '2021-04-10',
                'tinggi_pohon' => 3.2,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon keempat di lapangan 004 dengan sampel dari laboratorium S-001.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-001-LP-005-P005',
                'id_sampel' => 'SP-S001-005',
                'id_lapangan' => 'LP-005',
                'tgl_tanam' => '2021-05-18',
                'tinggi_pohon' => 2.9,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon kelima di lapangan 005 dengan sampel dari laboratorium S-001.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-002-LP-006-P006',
                'id_sampel' => 'SP-S002-006',
                'id_lapangan' => 'LP-006',
                'tgl_tanam' => '2021-06-22',
                'tinggi_pohon' => 2.7,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon keenam di lapangan 006 dengan sampel dari laboratorium S-002.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-002-LP-007-P007',
                'id_sampel' => 'SP-S002-007',
                'id_lapangan' => 'LP-007',
                'tgl_tanam' => '2021-07-30',
                'tinggi_pohon' => 3.1,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon ketujuh di lapangan 007 dengan sampel dari laboratorium S-002.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-002-LP-008-P008',
                'id_sampel' => 'SP-S002-008',
                'id_lapangan' => 'LP-008',
                'tgl_tanam' => '2021-08-15',
                'tinggi_pohon' => 2.6,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon kedelapan di lapangan 008 dengan sampel dari laboratorium S-002.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-002-LP-009-P009',
                'id_sampel' => 'SP-S002-009',
                'id_lapangan' => 'LP-009',
                'tgl_tanam' => '2021-09-18',
                'tinggi_pohon' => 3.3,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon kesembilan di lapangan 009 dengan sampel dari laboratorium S-002.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-002-LP-010-P010',
                'id_sampel' => 'SP-S002-010',
                'id_lapangan' => 'LP-010',
                'tgl_tanam' => '2021-10-20',
                'tinggi_pohon' => 3.0,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon kesepuluh di lapangan 010 dengan sampel dari laboratorium S-002.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-003-LP-001-P011',
                'id_sampel' => 'SP-S003-011',
                'id_lapangan' => 'LP-001',
                'tgl_tanam' => '2021-11-15',
                'tinggi_pohon' => 2.5,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon kesebelas di lapangan 001 dengan sampel dari laboratorium S-003.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-003-LP-002-P012',
                'id_sampel' => 'SP-S003-012',
                'id_lapangan' => 'LP-002',
                'tgl_tanam' => '2021-12-20',
                'tinggi_pohon' => 3.0,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon keduabelas di lapangan 002 dengan sampel dari laboratorium S-003.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-003-LP-003-P013',
                'id_sampel' => 'SP-S003-013',
                'id_lapangan' => 'LP-003',
                'tgl_tanam' => '2021-01-25',
                'tinggi_pohon' => 2.8,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon ketigabelas di lapangan 003 dengan sampel dari laboratorium S-003.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-003-LP-004-P014',
                'id_sampel' => 'SP-S003-014',
                'id_lapangan' => 'LP-004',
                'tgl_tanam' => '2022-02-10',
                'tinggi_pohon' => 3.2,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon keempatbelas di lapangan 004 dengan sampel dari laboratorium S-003.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-003-LP-005-P015',
                'id_sampel' => 'SP-S003-015',
                'id_lapangan' => 'LP-005',
                'tgl_tanam' => '2022-03-18',
                'tinggi_pohon' => 2.9,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon kelimabelas di lapangan 005 dengan sampel dari laboratorium S-003.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-004-LP-006-P016',
                'id_sampel' => 'SP-S004-016',
                'id_lapangan' => 'LP-006',
                'tgl_tanam' => '2022-04-22',
                'tinggi_pohon' => 2.7,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon keenambelas di lapangan 006 dengan sampel dari laboratorium S-004.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-004-LP-007-P017',
                'id_sampel' => 'SP-S004-017',
                'id_lapangan' => 'LP-007',
                'tgl_tanam' => '2022-05-30',
                'tinggi_pohon' => 3.1,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon ketujuhbelas di lapangan 007 dengan sampel dari laboratorium S-004.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-004-LP-008-P018',
                'id_sampel' => 'SP-S004-018',
                'id_lapangan' => 'LP-008',
                'tgl_tanam' => '2022-06-15',
                'tinggi_pohon' => 2.6,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon kedelapanbelas di lapangan 008 dengan sampel dari laboratorium S-004.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-004-LP-009-P019',
                'id_sampel' => 'SP-S004-019',
                'id_lapangan' => 'LP-009',
                'tgl_tanam' => '2022-07-18',
                'tinggi_pohon' => 3.3,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon kesembilanbelas di lapangan 009 dengan sampel dari laboratorium S-004.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-004-LP-010-P020',
                'id_sampel' => 'SP-S004-020',
                'id_lapangan' => 'LP-010',
                'tgl_tanam' => '2022-08-20',
                'tinggi_pohon' => 3.0,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon kedua puluh di lapangan 010 dengan sampel dari laboratorium S-004.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-005-LP-001-P021',
                'id_sampel' => 'SP-S005-021',
                'id_lapangan' => 'LP-001',
                'tgl_tanam' => '2022-09-15',
                'tinggi_pohon' => 2.5,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon kedua puluh satu di lapangan 001 dengan sampel dari laboratorium S-005.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-005-LP-002-P022',
                'id_sampel' => 'SP-S005-022',
                'id_lapangan' => 'LP-002',
                'tgl_tanam' => '2022-10-20',
                'tinggi_pohon' => 3.0,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon kedua puluh dua di lapangan 002 dengan sampel dari laboratorium S-005.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-005-LP-003-P023',
                'id_sampel' => 'SP-S005-023',
                'id_lapangan' => 'LP-003',
                'tgl_tanam' => '2022-11-25',
                'tinggi_pohon' => 2.8,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon kedua puluh tiga di lapangan 003 dengan sampel dari laboratorium S-005.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-005-LP-004-P024',
                'id_sampel' => 'SP-S005-024',
                'id_lapangan' => 'LP-004',
                'tgl_tanam' => '2022-12-10',
                'tinggi_pohon' => 3.2,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon kedua puluh empat di lapangan 004 dengan sampel dari laboratorium S-005.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_pohon' => 'S-005-LP-005-P025',
                'id_sampel' => 'SP-S005-025',
                'id_lapangan' => 'LP-005',
                'tgl_tanam' => '2023-01-18',
                'tinggi_pohon' => 2.9,
                'tgl_kematian' => null,
                'bukti_kematian' => null,
                'deskripsi' => 'Pohon kedua puluh lima di lapangan 005 dengan sampel dari laboratorium S-005.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach($pohon as $key => $val){
            Pohon::create($val);
        }

        $lapangan = [
            [
                'id_lapangan' => 'LP-001',
                'luas' => 120.50,  // luas dalam meter persegi (m²)
                'lokasi' => 'Sumatera Utara',
                'kondisi_tanah' => 'Gembur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_lapangan' => 'LP-002',
                'luas' => 200.00,  // luas dalam meter persegi (m²)
                'lokasi' => 'Riau',
                'kondisi_tanah' => 'Berpasir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_lapangan' => 'LP-003',
                'luas' => 150.75,  // luas dalam meter persegi (m²)
                'lokasi' => 'Jambi',
                'kondisi_tanah' => 'Lempung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_lapangan' => 'LP-004',
                'luas' => 300.00,  // luas dalam meter persegi (m²)
                'lokasi' => 'Lampung',
                'kondisi_tanah' => 'Berhumus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_lapangan' => 'LP-005',
                'luas' => 175.25,  // luas dalam meter persegi (m²)
                'lokasi' => 'Kalimantan Barat',
                'kondisi_tanah' => 'Gembur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_lapangan' => 'LP-006',
                'luas' => 250.00,  // luas dalam meter persegi (m²)
                'lokasi' => 'Sulawesi Selatan',
                'kondisi_tanah' => 'Berpasir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_lapangan' => 'LP-007',
                'luas' => 350.00,  // luas dalam meter persegi (m²)
                'lokasi' => 'Papua',
                'kondisi_tanah' => 'Berhumus',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_lapangan' => 'LP-008',
                'luas' => 180.75,  // luas dalam meter persegi (m²)
                'lokasi' => 'Aceh',
                'kondisi_tanah' => 'Gembur',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_lapangan' => 'LP-009',
                'luas' => 220.00,  // luas dalam meter persegi (m²)
                'lokasi' => 'Bali',
                'kondisi_tanah' => 'Lempung',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_lapangan' => 'LP-010',
                'luas' => 195.50,  // luas dalam meter persegi (m²)
                'lokasi' => 'Nusa Tenggara Barat',
                'kondisi_tanah' => 'Berpasir',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach($lapangan as $key => $val){
            Lapangan::create($val);
        }

        $jadwal = [

        ];

        foreach($jadwal as $key => $val){
            Jadwal::create($val);
        }

    }
}
