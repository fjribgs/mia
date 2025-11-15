<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Umkm;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $umkms = [
            [
                'user_id' => 1,
                'province_id' => 1,
                'city_id' => 1,
                'district_id' => 1,
                'village_id' => 1,
                'description' => 'admin account',
                'type' => 'tetap',
                'gmaps_link' => 'https://www.google.com/maps',
                'address' => 'disini',
                'phone_number' => '082121345678',
                'open_days' => 'Setiap Hari',
                'open_time' => '07.00',
                'close_time' => '20.00',
            ],
            [
                'user_id' => 3,
                'province_id' => 12,
                'city_id' => 181,
                'description' => 'Pulas Katumbiri (PUKA) adalah sebuah UMKM yang bertujuan untuk memberdayakan para penyandang disabilitas melalui penjualan kerajinan yang berkualitas tinggi. Misi perusahaan PUKA terdiri dari empat aspek. Pertama, membedakan ciri khas produk dengan menunjukkan bakat kerajinan tangan siswa difabel. Kedua, menjalin hubungan jangka panjang dengan siswa penyandang disabilitas. Ketiga, meningkatkan kepedulian konsumen terhadap penyandang disabilitas. Keempat, memberdayakan siswa penyandang disabilitas untuk memasuki dunia kerja',
                'type' => 'tetap',
                'gmaps_link' => 'https://maps.app.goo.gl/kwaeEJFsHDR4q4A56',
                'latitude' => -6.8952053,
                'longitude' => 107.6347303,
                'address' => 'Jl. Pahlawan No.70, Cikutra, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40124',
                'phone_number' => '081122288333',
                'open_days' => 'Setiap Hari',
                'open_time' => '10.00',
                'close_time' => '20.00',
                'umkm_picture' => 'images/umkm-pulas-katumbiri.webp',
            ],
            [
                'user_id' => 4,
                'province_id' => 12,
                'city_id' => 181,
                'description' => 'Cafe More adalah kafe inklusif yang berlokasi di kawasan Sentra Wyata Guna, Bandung. Dikelola oleh individu dengan disabilitas netra dan didukung oleh komunitas Wyata Guna, Cafe More hadir sebagai ruang pemberdayaan dan pembelajaran bagi teman-teman disabilitas untuk mengembangkan keterampilan di bidang kuliner dan pelayanan.

                Kami percaya bahwa setiap orang berhak memiliki kesempatan yang sama untuk berkarya dan melayani. Selain menyajikan berbagai minuman dan makanan ringan khas kafe, kami juga menghadirkan suasana yang ramah, terbuka, dan edukatif bagi setiap pengunjung.',
                'type' => 'tetap',
                'gmaps_link' => 'https://maps.app.goo.gl/NCHCR5d1QUmBmpmK8',
                'address' => 'Jl. Pajajaran No.50, Pasir Kaliki, Kec. Cicendo, Kota Bandung, Jawa Barat 40171',
                'phone_number' => '085159288668',
                'open_days' => 'Setiap Hari',
                'open_time' => '09.00',
                'close_time' => '20.00',
                'umkm_picture' => 'images/umkm-cafe-more.webp',
            ],
            [
                'user_id' => 5,
                'province_id' => 12,
                'city_id' => 164,
                'description' => 'Keripik Pak Dedi adalah usaha yang menyajikan aneka pilihan keripik yang sudah diolah.',
                'type' => 'tetap',
                'gmaps_link' => 'https://maps.app.goo.gl/CZf1Hsrz3iPcMGcS6',
                'address' => 'Komp. Baranangsiang Indah No.16, RT.03/RW.04, Katulampa, Kec. Bogor Tim., Kota Bogor, Jawa Barat 16144',
                'open_days' => 'Setiap Hari',
                'open_time' => '09.00',
                'close_time' => '18.00',
            ],
            [
                'user_id' => 6,
                'province_id' => 12,
                'city_id' => 164,
                'description' => 'Kusnadi',
                'type' => 'tetap',
                'gmaps_link' => 'https://maps.app.goo.gl/CZf1Hsrz3iPcMGcS6',
                'address' => 'Sekitar Cileunyi',
                'open_days' => 'Setiap Hari',
                'umkm_picture' => 'images/umkm-keripik-kusnadi.webp',
            ],
            [
                'user_id' => 7,
                'province_id' => 13,
                'city_id' => 220,
                'description' => 'BJ Homemade Kacamata Kayu',
                'type' => 'tetap',
                'gmaps_link' => 'https://maps.app.goo.gl/NCHCR5d1QUmBmpmK8',
                'address' => 'Pasar Baru Banjar Dowo, Jl.Ratan Cilik Kelurahan, Banjaran dowo, Kec. Semarang Utara, Kota Semarang, Jawa Tengah 50231',
                'phone_number' => '085223119552',
                'open_days' => 'Selasa - Minggu',
                'open_time' => '08.00',
                'close_time' => '17.00',
            ],
            [
                'user_id' => 8,
                'province_id' => 12,
                'city_id' => 181,
                'description' => 'Nokha (Nopi Herlina)',
                'type' => 'tetap',
                'gmaps_link' => 'https://maps.app.goo.gl/c749JWUEpZTyFJVbA',
                'address' => 'Jl. Terusan Kopo - Katapang Babakan Sondari Rt.2, RT.2/RW.7, Pangauban, Katapang, Bandung Regency, West Java 40971',
                'phone_number' => '08112221524',
                'open_days' => 'Setiap Hari',
                'open_time' => '08.00',
                'close_time' => '19.00',
                'umkm_picture' => 'images/umkm-nokha.webp',
            ],
            [
                'user_id' => 9,
                'province_id' => 14,
                'city_id' => 226,
                'description' => 'Cupable Coffee',
                'type' => 'tetap',
                'gmaps_link' => 'https://maps.app.goo.gl/8qWTnMBFLimaJ8b2A',
                'address' => 'Kaliurang St No.km.13,5, Besi, Sukoharjo, Ngaglik, Sleman Regency, Special Region of Yogyakarta 55581',
                'phone_number' => '085791375260',
                'open_days' => 'Setiap Hari',
                'open_time' => '09.00',
                'close_time' => '21.00',
                'umkm_picture' => 'images/umkm-cafe-cupable.webp',
            ],
            [
                'user_id' => 10,
                'province_id' => 31,
                'city_id' => 159,
                'description' => 'Sunyi Coffee',
                'type' => 'tetap',
                'gmaps_link' => 'https://maps.app.goo.gl/EttYjPAjtcWscoNi6',
                'address' => 'Jl. Barito I No.31, Kramat Pela, Kec. Kby. Baru, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12130',
                'phone_number' => '081385069674',
                'open_days' => 'Setiap Hari',
                'open_time' => '09.00',
                'close_time' => '22.00',
                'umkm_picture' => 'images/umkm-cafe-sunyi.webp',
            ],
            [
                'user_id' => 11,
                'province_id' => 15,
                'city_id' => 264,
                'description' => 'ONNI House Surabaya',
                'type' => 'tetap',
                'gmaps_link' => 'https://maps.app.goo.gl/wQphS7jRFxh7MRGSA',
                'address' => 'Jl. Opak No.56, Darmo, Kec. Wonokromo, Surabaya, Jawa Timur 60261',
                'phone_number' => '081385069674',
                'open_days' => 'Setiap Hari',
                'open_time' => '10.00',
                'close_time' => '22.00',
                'umkm_picture' => 'images/umkm-onni-house.webp',
            ],
            [
                'user_id' => 12,
                'province_id' => 12,
                'city_id' => 181,
                'description' => 'Galleraj.id',
                'type' => 'tetap',
                'umkm_picture' => 'images/umkm-gallerajid.webp',
            ],
        ];

        foreach($umkms as $umkm) {
            Umkm::create($umkm);
        }
    }
}
