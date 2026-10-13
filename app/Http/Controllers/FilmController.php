<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    //
    private function daftarFilm()
    {
        return [
            [
                'slug' => 'interstellar',
                'judul' => 'Interstellar',
                'jenis' => 'Film',
                'genre' => 'Sci-Fi, Drama',
                'tahun' => 2014,
                'poster' => 'Interstellar.jpg',
                'deskripsi' => ' mengisahkan perjuangan umat manusia di masa depan ketika Bumi mengalami krisis pangan global dan badai debu parah yang mengancam kepunahan makhluk hidup. Demi menemukan rumah baru, seorang mantan pilot NASA bernama Joseph Cooper direkrut untuk memimpin misi antariksa rahasia menembus sebuah lubang cacing (wormhole) misterius di dekat Saturnus yang menjadi jalan pintas menuju galaksi lain. Bersama tim ilmuwan, Cooper harus mengeksplorasi beberapa planet asing yang berpotensi huni, namun misi ini dipenuhi pertaruhan waktu karena adanya efek dilatasi waktu akibat gravitasi ekstrem, di mana setiap jam yang mereka habiskan di luar angkasa bisa setara dengan belasan tahun di Bumi. Di tengah keputusasaan antargalaksi dan kerinduan mendalam pada anak-anaknya yang terus menua di Bumi, perjalanan sains ini pada akhirnya bertransformasi menjadi sebuah kisah emosional tentang kekuatan cinta yang mampu menembus batas ruang dan dimensi demi menyelamatkan peradaban manusia dari kepunahan.'
            ],
            [
                'slug' => '500 Days Of Summer',
                'judul' => '500 Days Of Summer',
                'jenis' => 'Film',
                'genre' => 'Romance, Drama',
                'tahun' => 2009,
                'poster' => '500daysofsummer.jpg',
                'deskripsi' => 'adalah film drama komedi romantis non-linear yang mengisahkan tentang Tom Hansen, seorang penulis kartu ucapan sekaligus arsitek idealis yang sangat percaya pada konsep cinta sejati dan takdir. Kehidupan Tom berubah ketika ia bertemu dengan Summer Finn, asisten baru bosnya yang berjiwa bebas dan tidak percaya pada hubungan berkomitmen ataupun cinta.
Meskipun Summer sejak awal menegaskan bahwa ia tidak menginginkan hubungan serius, Tom tetap mengejarnya. Keduanya pun menjalani hubungan tanpa status resmi selama ratusan hari, yang dipenuhi momen-momen manis layaknya sepasang kekasih. Namun, perbedaan cara pandang mereka mengenai komitmen akhirnya membuat hubungan tersebut kandas.
Naratif film ini melompat-lompat secara acak di antara 500 hari kebersamaan mereka, menggambarkan kontras yang tajam antara kebahagiaan Tom saat awal jatuh cinta dan rasa patah hatinya setelah dicampakkan. Melalui proses patah hati yang berat ini, Tom perlahan tersadar bahwa selama ini ia hanya jatuh cinta pada bayangan ideal Summer yang ia ciptakan sendiri di kepalanya, bukan pada sosok Summer yang sebenarnya. Pada akhirnya, kegagalan cinta ini justru menuntun Tom untuk bangkit, merelakan ekspektasinya, dan kembali mengejar impian sejatinya sebagai seorang arsitek.'
            ],
            [
                'slug' => 'Spider-Man: Brand New Day',
                'judul' => 'Spider-Man: Brand New Day',
                'jenis' => 'Film',
                'genre' => 'Action, Crime',
                'tahun' => 2026,
                'poster' => 'spiderman.jpg',
                'deskripsi' => 'mengisahkan kehidupan Peter Parker yang kini beranjak dewasa dan hidup dalam isolasi total di New York City, empat tahun setelah seluruh dunia melupakan identitasnya akibat mantra sihir di akhir peristiwa No Way Home. Ia terpaksa mengorbankan kehidupan pribadinya dan memilih fokus menjadi superhero penuh waktu, sementara orang-orang yang dicintainya seperti MJ dan Ned melanjutkan hidup tanpa mengingat dirinya.
Tekanan batin akibat kesepian yang mendalam serta beban berat sebagai pahlawan tanpa tanda terima kasih memicu perubahan biologis tak terkendali pada tubuh Peter. DNA-nya mulai bermutasi secara ekstrem dan menumbuhkan jaring organik.
Di tengah krisis eksistensial dan transformasi fisik tersebut, muncul ancaman misterius baru dari sosok penjahat telepatis berbahaya bernama Mind Jumper yang mampu mengendalikan pikiran serta berpindah tubuh. Untuk menghadapi teror yang mengancam kota dan menyelamatkan orang-orang yang tidak lagi mengenalnya, Peter harus berjuang memahami evolusi kekuatannya yang berbahaya, bahkan sampai melibatkan bantuan dari Bruce Banner / Hulk.'
            ],
            [
                'slug' => 'Obsession',
                'judul' => 'Obsession',
                'jenis' => 'Serial',
                'genre' => 'Supranatural, Psychological Horror',
                'tahun' => 2025,
                'poster' => 'obsession.jpg',
                'deskripsi' => 'Cerita berpusat pada Bear, seorang pria pemalu yang bekerja di sebuah toko musik bersama teman lamanya, Nikki. Bear diam-diam menaruh hati pada Nikki namun tidak pernah berani mengungkapkannya secara langsung.
Dalam keputusasaannya karena terjebak di friendzone, Bear menemukan sebuah jimat benda ajaib misterius bernama One Wish Willow. Ia pun menggunakan benda tersebut untuk membuat permohonan agar Nikki jatuh cinta dan menyukainya lebih dari siapa pun di dunia ini.
Permohonan Bear secara instan terkabul, tetapi kebahagiaannya tidak bertahan lama. Perasaan cinta Nikki berubah secara ekstrem menjadi obsesi yang gelap, posesif, dan berbahaya. Nikki mulai bertingkah tidak wajar di luar nalar sehat, bertindak protektif secara berlebihan, hingga tidak segan-segan melakukan tindakan kekerasan terhadap siapa saja yang mendekati atau dianggap mengganggu hubungannya dengan Bear. Niat awal Bear untuk mendapatkan cinta sejati justru berubah menjadi teror psikologis mengerikan yang mengancam nyawa mereka dan orang-orang di sekitar mereka.'
            ],
            [
                'slug' => 'Agak Laen',
                'judul' => 'Agak Laen',
                'jenis' => 'film',
                'genre' => 'horror-comedy',
                'tahun' => 2024,
                'poster' => 'agaklaen.jpg',
                'deskripsi' => 'mengisahkan tentang empat sahabat—Bene, Boris, Jegel, dan Oki—yang bekerja sebagai penjaga wahana rumah hantu di sebuah pasar malam. Karena wahana mereka sepi pengunjung dan terancam bangkrut, mereka memutuskan merenovasi rumah hantu tersebut agar menjadi jauh lebih menyeramkan.
Sialnya, upaya mereka berujung petaka ketika seorang pengunjung yang merupakan caleg DPRD meninggal mendadak akibat serangan jantung setelah terkejut di dalam wahana. Karena panik, keempat sahabat ini memutuskan untuk mengubur mayat sang caleg di dalam rumah hantu tersebut.
Tanpa diduga, arwah caleg yang bergentayangan justru membuat rumah hantu mereka menjadi sangat seram dan viral di media sosial. Di tengah kesuksesan wahana yang mulai ramai, situasi menjadi rumit dan menegangkan karena mereka harus menutupi kebohongan tersebut dari penyelidikan polisi yang mencari keberadaan caleg yang hilang.'
            ],
            [
                'slug' => 'Sore',
                'judul' => 'Sore',
                'jenis' => 'film',
                'genre' => 'Adventure, Fantasy',
                'tahun' => 2024,
                'poster' => 'sore.jpg',
                'deskripsi' => 'menceritakan kisah Jonathan, seorang fotografer asal Indonesia yang tinggal di Zagreb, Kroasia.
Jonathan menjalani gaya hidup yang tidak sehat—sering merokok, minum alkohol, begadang, dan tidak peduli pada kesehatannya—akibat trauma masa kecil karena ditinggal ayahnya sejak usia 4 tahun.
Kehidupannya berubah drastis saat ia kedatangan Sore, seorang perempuan misterius yang tiba-tiba muncul dan mengaku sebagai istrinya dari masa depan. Sore datang menempuh perjalanan waktu demi satu misi: mengubah gaya hidup Jonathan agar terhindar dari penyakit dan kematian dini di masa depan.
Dengan konsep time loop dan elemen realisme magis, cerita ini berkembang bukan sekadar tentang perjalanan waktu, melainkan sebuah elegi tentang duka, penerimaan luka masa lalu, dan kesempatan kedua dalam cinta.'
            ],
        ];
    }

    public function index()
    {
        $films = $this->daftarFilm();

        return view('film.index', compact('films'));
    }

    public function show($slug)
    {
        $films = $this->daftarFilm();

        foreach ($films as $film) {
            if ($film['slug'] === $slug) {
                return view('film.show', compact('film'));
            }
        }

        abort(404);
    }
}

