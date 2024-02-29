<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = [
            [
                "title" => "Seminar Pembuatan Biopeptisida Oleh KKN UIN Alauddin Makassar Angkatan 74 Posko 11 Desa Pariwang",
                "body"  => "<p>Mahasiswa KKN UIN Alauddin Makassar melakukan seminar pembuatan Biopeptisida 7 Februari 2024, di rumah Sekretaris Desa Pariwang.<br />
                            Sesuasi dengan yang telah di canangkan oleh mahasiswa KKN pada saat seminar program kerja, pembuatan Biopeptisida menjadi salah satu dari enam program kerja utama dari mahasiswa tersebut.Biopeptisida adalah sebuah racun hama yang terbuat dari bahan alami dan tidak berbahaya bagi tubuh manusia.<br />
                            Warga desa sangat antusias terhadap pembuatan racun alami ini,itu terlihat dari banyaknya warga yang ikut dalam seminar tersebut.<br />
                            Arnita Sari selaku mahasiswa KKN sekaligus menjadi pemateri dari seminar tersebut mengatan bahwa program kerja ini hadir dari hasil riset dan survei lapangan diminggu pertama saat datang di desa Pariwang.<br />
                            &quot;Ini juga dibuat dari bahan alami seperti daun sirsak dan daun pepaya, sehingga sangat aman bagi kesehatan dan bisa mengurangi bahan kimia pada bahan pokok yang dikonsumsi sehari-hari oleh masyarakat di desa.&quot; Lanjutnya.<br />
                            &quot;Semoga kegiatan ini bermanfaat bagi masyarakat di desa Pariwang .&quot; Ungkap Andi Abdi Mulki Nugraha selaku Kordinator Desa (Kordes)di desa Pariwang.<br />
                            Setelah seminar pembuatan Biopeptisida ini selesai,masyarakat berharap mahasiswa KKN bisa membantu dalam pembuatan Biopeptisida tersebut untuk digunakan pada tanaman mereka masing-masing.</p>",
                "publish_date"  => "2024-02-17",
            ],
            [
                "title" => "Festival Anak Sholeh Mahasiswa KKN UIN Alauddin Makassar Angkatan 74",
                "body"  => "<p>Bertempat di masjid desa Pariwang mahasiswa KKN UIN Alauddin Makassar angkatan 74 melakukan kegiatan festival anak sholeh pada 15 februari 2024.<br />
                Kegiatan Festival ini turut diramaikan oleh banyak anak-anak di desa Pariwang,itu terlihat dari jumlah pendaftar hingga 33 orang. Jumlah ini tergolong sangat besar di karenakan jumlah populasi di desa Pariwang bisa dikatan masih sedikit. Ada tiga kategori lomba yang di adakan mahasiswa KKN ini yaitu lomba adzan,mengaji,dan hafalan surah pendek yang mulai dari surah ad-dhuha hingga an-nas.<br />
                Ahmad Ikbal Djaya selaku sekretaris posko mengatakan bahwa &quot;Ini adalah saran masyarakat di desa dan karena kami juga dari kampus islam negeri sehingga kami sepakati untuk melaksanakan program kerja ini.&quot;<br />
                Program kerja ini sudah seharusnya diadakan oleh mahasiswa KKN di semua desa,terutama pada mahasiswa dari kampus islam negeri,lanjut si sekretari posko.<br />
                Pengurus masjid desa sangat antusias dalam membantu kegiatan mahasiswa ini&nbsp;<br />
                Kegiatan seperti ini akan membantu membangun minat mengaji anak-anak di desa. ujar Salmansyah selaku pengurus masjid desa Pariwang.<br />
                &quot;saya suka kalau ada kegiatan seperti ini,mudah-mudahan ada terus kegiatan seperti ini nantinya.&quot;lanjutnya.</p>",
                "publish_date"  => "2024-02-7",
            ],
        ];
        foreach ($articles as $article) {
            Article::create($article);
        }
    }
}
