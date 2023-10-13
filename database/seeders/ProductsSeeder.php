<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsSeeder extends Seeder
{
    /**
     * Data array dibawah merupakan karya ekstrakulikuliler desain n printing SMKN 2 Sumedang,
     * dan kategori barangnya berdasarkan ID database ialah
     * 1 : Gantungan kunci (Gantungan kunci)
     * 2 : Tumbler
     * 3 : Totebag
     * 4 : Mug
     * 5 : Kaos
     * 6 : Pin
     */
    public function run(): void
    {
        $dnp_product = [
            ['products/gk_akrilik.jpg', 'Ganci Akrilik', 'Bawa kehidupan Anda lebih dekat dengan Ganci Akrilik kami! 😍 Dengan desain yang transparan dan elegan, gantungan kunci akrilik ini adalah aksesoris sempurna untuk tas Anda. Dapatkan kesan kelas dan fungsionalitas dalam satu produk. Tambahkan sentuhan pribadi dengan kustomisasi nama Anda! 🎁', 5000, 1],
            ['products/tblr_sm.jpg', 'Tumbler Kecil', 'Tetap segar dan hidrasi dengan Tumbler Kecil kami. 💧 Didesain untuk mobilitas Anda, tumbler kecil ini memungkinkan Anda minum dengan mudah kapan saja, di mana saja. Kecil namun kuat! 💪', 25000, 2],
            ['products/tb_blacu.jpg', 'Totebag blacu', 'Tampil trendi dan berkeliling dengan Totebag blacu kami! 🛍️ Terbuat dari bahan blacu yang tahan lama, totebag ini adalah teman setia Anda untuk berbelanja atau pergi ke kampus. Buat penampilan Anda unik dengan totebag yang nyaman ini. 🌟', 22000, 3],
            ['products/gk_1s.jpg', 'Ganci 1 sisi', 'Gantungan kunci sederhana namun efektif! Ganci 1 sisi kami adalah pilihan yang sempurna untuk menjaga kunci Anda tetap aman. Kecil, ringan, dan praktis! 🗝️', 5000, 1],
            ['products/tblr_lg.jpg', 'Tumbler Besar', 'Tumbler Besar kami adalah teman minum yang sempurna untuk petualangan Anda! 🏞️ Dengan kapasitas yang lebih besar, Anda dapat mengisi lebih banyak minuman untuk menjaga diri Anda tetap terhidrasi selama perjalanan. Lepaskan jiwa petualangan Anda! 🌄', 30000, 2],
            ['products/mug_polos.jpg', 'Mug Polos', 'Buat pagi Anda lebih cerah dengan Mug Polos kami. ☕ Kustomisasi mug ini dengan gambar atau pesan pribadi Anda untuk memberikan sentuhan pribadi pada setiap tegukan kopi. Pagi yang indah dimulai dari sini! 🌞', 25000, 4],
            ['products/tb_kanvas.jpg', 'Totebag Kanvas', 'Totebag Kanvas kami adalah perpaduan sempurna antara gaya dan fungsi. 🎨 Terbuat dari kanvas yang kokoh, totebag ini akan menemani Anda dalam perjalanan berbelanja atau saat berkeliling kota. Ekspresikan gaya Anda dengan totebag yang fleksibel ini! 👜', 25000, 3],
            ['products/mug_warna.jpg', 'Mug Warna', 'Warnai harimu dengan Mug Warna kami! ☕ Dengan berbagai pilihan warna cerah, Anda dapat memilih mug yang sesuai dengan suasana hati Anda. Minum kopi belum pernah semenyenangkan ini! 🌈', 27000, 4],
            ['products/kaos_sm.jpg', 'Kaos Pendek Polyester', 'Tetap nyaman dan modis dengan Kaos Pendek Polyester kami. 👕 Terbuat dari bahan polyester yang ringan dan tahan lama, kaos ini adalah pilihan yang sempurna untuk sehari-hari. Tersedia dalam berbagai ukuran dan warna! 👚', 50000, 5],
            ['products/pin.jpg', 'Pin', 'Tambahkan sedikit kilauan pada pakaian Anda dengan Pin kami! ✨ Dengan berbagai desain yang unik, pin ini adalah aksesoris yang serbaguna dan bisa Anda kenakan dengan bangga di mana saja. Tampilkan gaya Anda! 📌', 5000, 6],
        ];


        foreach ($dnp_product as $product) {
            DB::table('products')->insert([
                'picture' => $product[0],
                'name' => $product[1],
                'desc' => $product[2],
                'price' => $product[3],
                'category_id' => $product[4],
            ]);
        }
    }
}
