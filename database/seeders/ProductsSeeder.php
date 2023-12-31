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
     * 1 : Souvenirs
     * 2 : Gifts
     * 3 : Foods
     */
    public function run(): void
    {
        $dnp_product = [
            ['products/gk_akrilik.jpg', 'Ganci Akrilik', 'Bawa kehidupan Anda lebih dekat dengan Ganci Akrilik kami! Dengan desain yang transparan dan elegan, gantungan kunci akrilik ini adalah aksesoris sempurna untuk tas Anda.', 5000, 1],
            ['products/tblr_sm.jpg', 'Tumbler Kecil', 'Tetap segar dan hidrasi dengan Tumbler Kecil kami.  Didesain untuk mobilitas Anda, tumbler kecil ini memungkinkan Anda minum dengan mudah kapan saja, di mana saja. Kecil namun kuat! ', 25000, 1],
            ['products/tb_blacu.jpg', 'Totebag blacu', 'Tampil trendi dan berkeliling dengan Totebag blacu kami!  Terbuat dari bahan blacu yang tahan lama, totebag ini adalah teman setia Anda untuk berbelanja atau pergi ke kampus. Buat penampilan Anda unik dengan totebag yang nyaman ini. ', 22000, 1],
            ['products/gk_1s.jpg', 'Ganci 1 sisi', 'Gantungan kunci sederhana namun efektif! Ganci 1 sisi kami adalah pilihan yang sempurna untuk menjaga kunci Anda tetap aman. Kecil, ringan, dan praktis! ', 5000, 1],
            ['products/tblr_lg.jpg', 'Tumbler Besar', 'Tumbler Besar kami adalah teman minum yang sempurna untuk petualangan Anda!  Dengan kapasitas yang lebih besar, Anda dapat mengisi lebih banyak minuman untuk menjaga diri Anda tetap terhidrasi selama perjalanan. Lepaskan jiwa petualangan Anda! ', 30000, 1],
            ['products/mug_polos.jpg', 'Mug Polos', 'Buat pagi Anda lebih cerah dengan Mug Polos kami. ☕ Kustomisasi mug ini dengan gambar atau pesan pribadi Anda untuk memberikan sentuhan pribadi pada setiap tegukan kopi. Pagi yang indah dimulai dari sini! ', 25000, 1],
            ['products/tb_kanvas.jpg', 'Totebag Kanvas', 'Totebag Kanvas kami adalah perpaduan sempurna antara gaya dan fungsi.  Terbuat dari kanvas yang kokoh, totebag ini akan menemani Anda dalam perjalanan berbelanja atau saat berkeliling kota. Ekspresikan gaya Anda dengan totebag yang fleksibel ini! ', 25000, 1],
            ['products/mug_warna.jpg', 'Mug Warna', 'Warnai harimu dengan Mug Warna kami! ☕ Dengan berbagai pilihan warna cerah, Anda dapat memilih mug yang sesuai dengan suasana hati Anda. Minum kopi belum pernah semenyenangkan ini! ', 27000, 1],
            ['products/kaos_sm.jpg', 'Kaos Pendek Polyester', 'Tetap nyaman dan modis dengan Kaos Pendek Polyester kami.  Terbuat dari bahan polyester yang ringan dan tahan lama, kaos ini adalah pilihan yang sempurna untuk sehari-hari. Tersedia dalam berbagai ukuran dan warna! ', 50000, 1],
            ['products/pin.jpg', 'Pin', 'Tambahkan sedikit kilauan pada pakaian Anda dengan Pin kami!  Dengan berbagai desain yang unik, pin ini adalah aksesoris yang serbaguna dan bisa Anda kenakan dengan bangga di mana saja. Tampilkan gaya Anda! 📌', 5000, 1],
            ['products/bk_abu.png', 'Bucket kelulusan', 'Produk ini adalah Bucket kelulusan yang sangat spesial. Dengan warna abu-abu yang elegan, Bucket ini dirancang untuk merayakan pencapaian lulusan dengan gaya. Setiap Bucket dilengkapi dengan boneka yang imut sebagai pelengkap. Ideal untuk diberikan kepada lulusan SMA, SMK, atau perguruan tinggi. Biarkan mereka merayakan prestasi mereka dengan Bucket ini!', 65000, 2],
            ['products/bk_pink.png', 'Bucket bucin', 'Produk ini adalah Bucket kelulusan yang cantik dengan sentuhan merah muda yang manis. Menjadi hadiah yang indah untuk merayakan kesuksesan lulusan. Setiap Bucket dilengkapi dengan boneka merah muda yang lucu. Sempurna untuk lulusan dari berbagai tingkatan pendidikan. Berikan Bucket ini untuk menyampaikan selamat dan kebanggaan Anda.', 65000, 2],
            ['products/bk_putih.png', 'Bucket wisuda', 'Ini adalah varian Bucket kelulusan yang juga sangat menawan, dengan warna merah muda yang manis. Setiap Bucket datang dengan boneka merah muda yang lucu, menjadikannya hadiah yang sempurna untuk lulusan. Apakah mereka lulus dari sekolah menengah, sekolah kejuruan, atau perguruan tinggi, Bucket ini adalah cara yang indah untuk merayakan prestasi mereka.', 80000, 2],
            ['products/bk_uang.png', 'Bucket uang', 'Produk ini adalah Bucket uang yang unik dengan sentuhan bunga yang indah. Ini adalah hadiah yang praktis dan kreatif untuk berbagai kesempatan. Anda dapat memberikannya kepada lulusan sebagai bantuan finansial atau kepada seseorang yang Anda cintai untuk merayakan momen istimewa. Kombinasi uang dan bunga membuatnya sangat istimewa.', 70000, 2],
            ['products/basrengdaunjeruk.jpg', 'Basreng Daun Jeruk', 'Basreng Daun Jeruk adalah hidangan gurih yang terbuat dari irisan tipis bakso goreng (basreng) yang digoreng hingga renyah. Hidangan ini ditambahkan dengan daun jeruk yang memberikan aroma segar dan citarasa yang unik. Daun jeruk yang digunakan  biasanya adalah daun jeruk purut, yang memiliki aroma khas. Basreng daun jeruk seringkali diolah dengan tambahan bumbu pedas seperti cabai dan bumbu penyedap lainnya.', 5000, 3],
            ['products/seblakcikruh.jpg', 'Seblak Cikruh', 'Kerupuk seblak cikruh dengan bumbu rempah seblak yang khas dengan rasa pedas nampol mulai dari level 1 sampai 3 enak asin gurih pedas wangi rempah kencur dan aroma daun jeruk emmhh susah nahan enaknya.', 3000, 3],
            ['products/abon1.jpg', 'Abon oncom', 'Olahan makanan tradisional dari Oncom Pasireungit terbaik yang terbuat dari kacang tanah terbaik, diolah dengan rempah-rempah segar dan tanpa MSG sehingga menghasilkan abon oncom yang bercitarasa tinggi', 20000, 3],
            ['products/kopi1.jpg', 'Kopi tandjoeng honey', 'Arabika Gunung Manglayang Timur Kopi Tandjoeng Arabica Coffe Speciality Fullash disangrai dari kopi berkualitas Speciality. Green Bean yang diperoleh dari Petani Kopi di Gunung Manglayang Timur Sumedang Jawa Barat, diseleksi ulang secara manual untuk mendapatkan kopi arabica yang benar-benar speciality', 40000, 3],
            ['products/jahe1.jpg', 'Jahe instan', 'Jahe instan merupakan produk makanan yang berbentuk serbuk, terbuat dari ekstrak jahe yang ditambah gula atau rempah-rempah lain', 45000, 3],
            ['products/opak.jpg', 'Opak oded', 'Kuliner tradisional yang sungguh luar biasa dan patut dicoba. Terbuat dari beras ketan yang direbus, kemudian dibungkus dengan daun pisang dan dipanggang hingga matang, opak memiliki cita rasa yang khas dan tekstur yang begitu memikat.', 25000, 3],
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
