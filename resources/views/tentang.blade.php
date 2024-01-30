@extends('layout.main')

@section('container')
    <br>
    <div class="container">
        <div id="images">
            <a href="#">
                <img class="tentanggambar img-fluid" border="0" alt="logo"
                    src="{{ asset('image/kototabang1.jpeg') }}" /></a>
            <a href="#" target="_blank">
                <img class="tentanggambar img-fluid" border="0" alt="logo"
                    src="{{ asset('image/kototabang2.png') }}" /></a>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="d-flex flex-grow-1">
            <span class="icontentang">
                <ion-icon name="information-circle-outline"></ion-icon>
                </ion-icon>
            </span>
        </div>
        <div class="thumbtext1">
            <div>
                <p class="tentangtext">Stasiun Pemantau Atmosfer Global Bukit Kototabang (Global Atmosphere Watch) terletak
                    di Pulau Sumatera, Indonesia (0° 12′ 07″ LS – 100° 19′ 05″ BT). Stasiun ini berjarak 17 km arah Utara
                    kota Bukittinggi dan lebih kurang 120 km Utara kota Padang yang merupakan ibukota provinsi Sumatera
                    Barat. Stasiun yang berada di area terpencil ini terletak di daerah ekuatorial pada ketinggian 864,5 m
                    di atas permukaan laut dan 40 km dari garis pantai bagian Barat. Arah angin berasal dari
                    Selatan-Tenggara (Desember sampai Mei) atau Utara-Barat Laut (Mei sampai Oktober). Temperatur bervariasi
                    dari 16 sampai 25°C dengan variasi yang sangat kecil dan kelembaban relatif biasanya lebih dari 80%.
                    Fasilitas yang tersedia meliputi bangunan yang cukup luas yang menyediakan ruang kantor, ruang rapat,
                    dan laboratorium. Di area atap seluas 300 m2, inlet udara dan beberapa peralatan radiasi dan meteorologi
                    dipasang. Stasiun ini dapat dicapai dari jalan kecil yang tertutup untuk publik dan berjarak beberapa
                    kilometer dari sebelah Barat jalan utama antara kota Padang dan Medan. Vegetasi yang mengelilingi area
                    (30 km) sebagian besar berupa hutan tropis.</p>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="d-flex flex-grow-1">
            <span class="icontentang">
                <ion-icon name="information-circle-outline"></ion-icon>
                </ion-icon>
            </span>
        </div>
        <div class="thumbtext2">
            <div>
                <p class="tentangtext">EAR adalah radar Doppler besar yang dibangun untuk pengamatan atmosfer di ekuator
                    Sumatera Barat di Republik Indonesia. Itu selesai pada Maret 2001, kerjasama antara Lembaga Penelitian
                    untuk Manusia Berkelanjutan (RISH), Universitas Kyoto dan Lembaga Penerbangan dan Antariksa Nasional
                    Indonesia (LAPAN).</p>
                <p class="tentangtext">EAR memiliki rangkaian antena melingkar dengan diameter sekitar 110 m, yang terdiri
                    dari 560 Yagi tiga elemen. Ini adalah sistem array bertahap aktif dengan masing-masing Yagi digerakkan
                    oleh modul transceiver solid-state. Konfigurasi sistem ini memungkinkan untuk mengarahkan pancaran
                    antena dengan kontrol elektronik hingga 5.000 kali per detik.</p>
                <p class="tentangtext">EAR mentransmisikan gelombang radio intens 47 MHz ke langit, dan menerima gema yang
                    sangat lemah yang tersebar kembali oleh turbulensi atmosfer. Itu dapat mengamati angin dan turbulensi di
                    kisaran ketinggian dari 1,5 km hingga 20 km (troposfer dan stratosfer bawah). Itu juga dapat mengamati
                    gema dari penyimpangan ionosfer pada ketinggian lebih dari 90 km.</p>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="d-flex flex-grow-1">
            <span class="icontentang">
                <ion-icon name="information-circle-outline"></ion-icon>
                </ion-icon>
            </span>
        </div>
        <div class="thumbtext3">
            <div>
                <p class="tentangtext">Optical Rain Gauge (ORG) merupakan salah satu contoh alat penakaran hujan otomatis
                    yang menakar curah hujan tanpa harus mengumpulkan air hujan. ORG menggunakan fotodioda sebagai sensor
                    penerima untuk mendeteksi perubahan cahaya akibat terjadinya hujan. ORG mampu bekerja secara normal
                    dalam keadaan tingkat intensitas hujan manapun, dan pembacaannya tidak terpengaruh oleh angin, debu, dan
                    mampu bekerja pada pelampung. ORG sangat cocok digunakan sebagai alat monitoring karena memiliki
                    pembacaan alat yang konstan, dan mampu meminimalisir noise.</p>
                <p class="tentangtext">ORG telah dipasang di Loka Pengamatan Atmosfer (LPA) Kototabang LAPAN sejak tahun
                    2003. ORG yang dipasang di LPA Kototabang LAPAN adalah ORG tipe 815. ORG-815 di pasang hasil kerjasama
                    antara LAPAN yang diwakili LPA Kototabang dengan Universitas Shimane yang diwakili oleh profesor Kozu.
                </p>
            </div>
        </div>
    </div>
    <br>
@endsection
