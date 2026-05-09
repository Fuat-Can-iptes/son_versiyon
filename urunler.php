<?php
// 1. İNDİRİMLİ ÜRÜNLER (Ekran Görüntüsü 1)
$indirimliUrunler = [
    ["id"=>1, "kat"=>"matkap", "resim"=>"matkap.png", "etiket"=>"İndirimli Ürün", "kargo"=>"Ücretsiz Kargo", "baslik"=>"Daflong PRO DARBELİ ŞARJLI MATKAP", "eski_fiyat"=>"2.599", "fiyat"=>"2.299"],
    ["id"=>2, "kat"=>"cim", "resim"=>"cimMakinası.png", "etiket"=>"İndirimli Ürün", "kargo"=>"Ücretsiz Kargo", "baslik"=>"Factor Benzinli Çim Biçme Makinası Itmeli 40 cm UME40", "eski_fiyat"=>"9.499", "fiyat"=>"8.299"],
    ["id"=>3, "kat"=>"tornavida", "resim"=>"tornavida.png", "etiket"=>"Kuponlu Ürün", "kargo"=>"Ücretsiz Kargo", "baslik"=>"Bosch HASSAS TORNAVİDA SETİ 13 PARÇA 1.600.A02.Z9N", "eski_fiyat"=>"2.810", "fiyat"=>"1.499"],
    ["id"=>4, "kat"=>"baret", "resim"=>"helmet.png", "etiket"=>"İndirimli Ürün", "kargo"=>"Ücretsiz Kargo", "baslik"=>"3M Koruyucu Baret Peltor Sarı", "eski_fiyat"=>"950", "fiyat"=>"799" ]
];

// 2. EN ÇOK TERCİH EDİLENLER (Ekran Görüntüsü 2)
$cokSatanlar = [
    ["id"=>5, "kat"=>"ic-cephe", "resim"=>"boya.png", "etiket"=>"Çok Satan", "renk"=>"#28a745", "baslik"=>"Filli Boya Momento Max 2,5 lt İç Cephe Boyası", "fiyat"=>"649.99"],
    ["id"=>6, "kat"=>"hortum", "resim"=>"hortum.png", "etiket"=>"Çok Satan", "renk"=>"#28a745", "baslik"=>"Fırat New Garden Hortum 5 Metre", "fiyat"=>"149.99"],
    ["id"=>7, "kat"=>"hirdavat", "resim"=>"canta.png", "etiket"=>"Çok Satan", "renk"=>"#28a745", "baslik"=>"Mano Mt-13 Metal Kilitli Takım Çantası 13 Inc", "fiyat"=>"312.00"],
    ["id"=>8, "kat"=>"yapistirici", "resim"=>"yapıştırıcı.png", "etiket"=>"Tükenmek Üzere", "renk"=>"#ff8c00", "baslik"=>"Akfix 705 Hızlı Yapıştırıcı Kit 400ML", "fiyat"=>"199.99"]
];

// 3. KATEGORİLERE ÖZEL EK ÜRÜNLER (Çekiçler ve istediğin yeni Hortumlar)
$kategoriUrunleri = [
    // Çekiç & Balyoz Reyonu
   [
        "id" => 9, 
        "kat" => "cekic-balyoz", 
        "resim" => "fotolar/cekic1.png", 
        "baslik" => "KL HOME Ev Tadilat Küçük Işlerinize Çekiç Ahşap Saplı 100gr", 
        "fiyat" => "134.99",
        "aciklama" => "Günlük tamirat işleri için uygundur.",
   'ozellikler' => ['Ahşap Sap', '100gr Ağırlık', 'Dövme Çelik', 'Ergonomik Tasarım']
        ],
    [
        "id" => 10, 
        "kat" => "cekic-balyoz", 
        "resim" => "fotolar/cekic2.png", 
        "baslik" => "EVSAN Mini Çekiç 40 Gr", 
        "fiyat" => "299.99" ,
        "aciklama" => "Profesyonel tamirat işleri için uygundur.",
    'ozellikler' => ['Çelik Sap', '40gr Ağırlık', 'Dövme Çelik', 'Kompakt Tasarım','Uzun Ömürlü']
    ],
    [
        "id" => 11, 
        "kat" => "cekic-balyoz", 
        "resim" => "fotolar/cekic3.png", 
        "baslik" => "Aki Yüksek Kalite %100 Dövme Çelik Tesviyeci Çekiç | Dişbudak Ahşap Saplı (300gr)", 
        "fiyat" => "570",
         "aciklama" => "Profesyonel tamirat işleri için uygundur.İş yerinizde güvenle kullanabilirsiniz.",
    'ozellikler' => ['Ahşap Sap', '300gr Ağırlık', 'Dövme Çelik', 'Profesyonel Kullanım','Uzun Ömürlü','paslanmaz Çelik']
    ],
    [
        "id" => 12, 
        "kat" => "cekic-balyoz", 
        "resim" => "fotolar/cekic4.png", 
        "baslik" => "Bosch Home and Garden Çekiç 300 Gr - 1600A027PH", 
        "fiyat" => "622",
         "aciklama" => "Profesyonel tamirat işleri için uygundur.Bosch firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",
    'ozellikler' => ['Ahşap Sap', '300gr Ağırlık', 'Dövme Çelik', 'Profesyonel Kullanım','Uzun Ömürlü','paslanmaz Çelik']

    ],

        // urunler.php
// Tornavida Setleri Reyonu Eklemeleri
[
    "id" => 13, 
    "kat" => "tornavida", 
    "resim" => "fotolar/tornavidaSeti1.png", 
    "baslik" => "Promosyonca 25 Parça Hassas Tornavida Seti, Krom-Vanadyum Çelik, PC ve Telefon Tamir Aleti, Deri Çantalı, PC/Laptop/Telefon/Gözlük Tamiri, Torx/Düz/Yıldız Uçlu", 
    "fiyat" => "488.99" ,
    "aciklama" => "Bu set, bilgisayar, telefon ve gözlük tamiri gibi hassas işler için idealdir. Krom-vanadyum çelikten üretilmiş uçları sayesinde uzun ömürlüdür. Deri çantasıyla taşıması kolaydır.",
    'ozellikler' => ['25 Parça Set', 'Krom-Vanadyum Çelik Uçlar', 'Deri Taşıma Çantası', 'Çeşitli Uç Tipleri (Torx, Düz, Yıldız)', 'Hassas İşler İçin İdeal']

],
[
    "id" => 14, 
    "kat" => "tornavida", 
    "resim" => "fotolar/tornavidaSeti2.png", 
    "baslik" => "
Jouis Tornavida ve Onarım Seti 115 Parça Çok Amaçlı Hassas Onarım Aletleri", 
    "fiyat" => "849.99",
     "aciklama" => "Bu kapsamlı set, 115 parçadan oluşur ve elektronik cihazlar, saatler, gözlükler gibi hassas tamirat işleri için mükemmeldir. Yüksek kaliteli malzemelerden üretilmiş aletleri sayesinde uzun ömürlüdür. Çok amaçlı tasarımıyla her türlü tamirat işine uygundur.",
    'ozellikler' => ['115 Parça Set', 'Yüksek Kaliteli Çelik üretim', 'Çok Amaçlı Tasarım', 'Hassas İşler İçin İdeal']
],
[
    "id" => 15, 
    "kat" => "tornavida", 
    "resim" => "fotolar/tornavidaSeti3.png", 
    "baslik" => "Prolink PB-006 Elektronikçi Tornavida Seti", 
    "fiyat" => "1399.99",
    "fiyat" => "849.99",
     "aciklama" => "Bu set, elektronik cihazların tamiri için özel olarak tasarlanmıştır. Yüksek kaliteli çelikten üretilmiş uçları sayesinde dayanıklıdır. Ergonomik sap tasarımıyla rahat bir tutuş sağlar. Çok çeşitli uç tipleriyle her türlü elektronik tamirat işine uygundur.",
    'ozellikler' => ['Elektronik Tamirat İçin Özel Tasarım', 'Yüksek Kaliteli Çelik Uçlar', 'Ergonomik Sap Tasarımı', 'Çeşitli Uç Tipleri (Düz, Yıldız, Torx)', 'Uzun Ömürlü ve Dayanıklı']
],

[
    "id" => 16, 
    "kat" => "tornavida", 
    "resim" => "fotolar/tornavidaSeti4.png", 
    "baslik" => "Workpro WP200501 6 Parça CR-V Manyetik Düz ve Yıldız Uçlu tornvida seti", 
    "fiyat" => "496",
        "aciklama" => "Bu set, düz ve yıldız uçlu tornavidalardan oluşur ve manyetik özellikleri sayesinde vidaları kolayca tutar. Yüksek kaliteli CR-V çelikten üretilmiş uçları dayanıklıdır. Ergonomik sap tasarımıyla rahat bir tutuş sağlar. Elektronik cihazların tamiri için idealdir.",
    'ozellikler' => ['6 Parça Set', 'CR-V Çelik Uçlar', 'Manyetik Özellik', 'Ergonomik Sap Tasarımı', 'Düz ve Yıldız Uçlar']
],
    // --- PENSELER & ANAHTARLAR REYONU ---
[
    "id" => 17, 
    "kat" => "pense", 
    "resim" => "fotolar/pense1.png", 
    "baslik" => "Orret Home Mini Pense+Mini Yan Keski+Mini Kargaburun (12 Cm) 3'lü Set", 
    "fiyat" => "635.90",
        "aciklama" => "Bu set, mini pense, mini yan keski ve mini kargaburun olmak üzere üç parçadan oluşur. 12 cm boyutlarıyla küçük tamirat işleri için idealdir. Yüksek kaliteli malzemelerden üretilmiş aletleri sayesinde uzun ömürlüdür. Kompakt tasarımıyla taşıması kolaydır.",
    'ozellikler' => ['3 Parça Set', 'Kompakt Tasarım', 'Küçük Tamirat İşleri İçin İdeal']
],
[
    "id" => 18, 
    "kat" => "pense", 
    "resim" => "fotolar/pense2.png", 
    "baslik" => "Bosch Home and Garden Pense Seti 4 Parça (Kargaburun, Yan Keski, Pense, Boru Anahtarı)", 
    "fiyat" => "1535.00",
        "aciklama" => "Bu set, kargaburun, yan keski, pense ve boru anahtarı olmak üzere dört parçadan oluşur. Yüksek kaliteli malzemelerden üretilmiş aletleri sayesinde uzun ömürlüdür. Profesyonel tamirat işleri için idealdir. Ergonomik tasarımıyla rahat bir tutuş sağlar.",
    'ozellikler' => ['4 Parça Set', 'Profesyonel Kullanım İçin İdeal', 'Ergonomik Tasarım', 'Uzun Ömürlü Malzeme']
],
[
    "id" => 19, 
    "kat" => "pense", 
    "resim" => "fotolar/pense3.png", 
    "baslik" => "Genel Marka Pense Kombine Hırdavat Boss", 
    "fiyat" => "399.99",
        "aciklama" => "Bu kombine pense, çeşitli tamirat işleri için çok yönlü bir araçtır. Yüksek kaliteli malzemelerden üretilmiştir ve uzun ömürlüdür. Ergonomik tasarımıyla rahat bir tutuş sağlar. Profesyonel ve amatör kullanıcılar için idealdir.",
    'ozellikler' => ['Kombine Pense', 'Çok Yönlü Kullanım', 'Ergonomik Tasarım', 'Uzun Ömürlü Malzeme']
],
[
    "id" => 20, 
    "kat" => "pense", 
    "resim" => "fotolar/pense4.png", 
    "baslik" => "SANEC Plato Yan Keski 170 (Kaliteli Model)", 
    "fiyat" => "229.99",
        "aciklama" => "Bu yan keski, çeşitli tamirat işleri için idealdir. Yüksek kaliteli malzemelerden üretilmiş aleti sayesinde uzun ömürlüdür. Ergonomik tasarımıyla rahat bir tutuş sağlar. Profesyonel ve amatör kullanıcılar için uygundur.",
    'ozellikler' => ['Yan Keski', 'Çeşitli Tamirat İşleri İçin İdeal', 'Ergonomik Tasarım', 'Uzun Ömürlü Malzeme']
],

[
    "id" => 21, 
    "kat" => "pense", 
    "resim" => "fotolar/pense5.png", 
    "baslik" => "Troy T 21028 Kargaburun, 180 Mm", 
    "fiyat" => "369.99",
        "aciklama" => "Bu kargaburun, çeşitli tamirat işleri için idealdir. Yüksek kaliteli malzemelerden üretilmiş aleti sayesinde uzun ömürlüdür. Ergonomik tasarımıyla rahat bir tutuş sağlar. Profesyonel ve amatör kullanıcılar için uygundur.",
    'ozellikler' => ['Kargaburun', 'Çeşitli Tamirat İşleri İçin İdeal', 'Ergonomik Tasarım', 'Uzun Ömürlü Malzeme', 'Paslanmaz Çelik']
],

[
    "id" => 22, 
    "kat" => "pense", 
    "resim" => "fotolar/anahtar1.png", 
    "baslik" => "Bosch İngiliz Anahtarı", 
    "fiyat" => "429.99",
        "aciklama" => "Bu İngiliz anahtarı, çeşitli tamirat işleri için idealdir. Yüksek kaliteli malzemelerden üretilmiştir ve uzun ömürlüdür. Ergonomik tasarımıyla rahat bir tutuş sağlar. Profesyonel ve amatör kullanıcılar için uygundur.Bosch firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['İngiliz Anahtarı', 'Çeşitli Tamirat İşleri İçin İdeal', 'Ergonomik Tasarım', 'Uzun Ömürlü Malzeme','çelik üretim']
],

[
    "id" => 23, 
    "kat" => "pense", 
    "resim" => "fotolar/anahtar2.png", 
    "baslik" => "Bosch Açık Uçlu Kombine Anahtar Seti 15 Parça", 
    "fiyat" => "1852",
        "aciklama" => "Bu açık uçlu kombine anahtar seti, çeşitli tamirat işleri için idealdir. Yüksek kaliteli malzemelerden üretilmiştir ve uzun ömürlüdür. Ergonomik tasarımıyla rahat bir tutuş sağlar. Profesyonel ve amatör kullanıcılar için uygundur.Bosch firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",
    'ozellikler' => ['15 Parça Set', 'Çeşitli Tamirat İşleri İçin İdeal', 'Ergonomik Tasarım', 'Uzun Ömürlü Malzeme','çelik üretim']
],

[
    "id" => 24, 
    "kat" => "pense", 
    "resim" => "fotolar/anahtar3.png", 
    "baslik" => "WORKPRO WP272001 150mm Kurbağacık Anahtar", 
    "fiyat" => "276",
        "aciklama" => "Bu kurbağacık anahtar, çeşitli tamirat işleri için idealdir. Yüksek kaliteli malzemelerden üretilmiştir ve uzun ömürlüdür. Ergonomik tasarımıyla rahat bir tutuş sağlar. Profesyonel ve amatör kullanıcılar için uygundur.",
    'ozellikler' => ['Kurbağacık Anahtar', 'Çeşitli Tamirat İşleri İçin İdeal', 'Ergonomik Tasarım', 'Uzun Ömürlü Malzeme','çelik üretim']
],

// --- ÖLÇÜM ALETLERİ REYONU ---
[
    "id" => 25, 
    "kat" => "olcum", 
    "resim" => "fotolar/olcum1.png", 
    "baslik" => "Şerit Metre, 5M Uzunluk, Sarı ve Siyah, Otomatik Geri Sarmalı, Profesyonel Ölçüm Aleti EMG", 
    "fiyat" => "245.00",
        "aciklama" => "Bu şerit metre, 5 metre uzunluğunda ölçüm yapabilen profesyonel bir alettir. Sarı ve siyah renkleriyle kolay okunabilir ölçümler sağlar. Otomatik geri sarmalı sayesinde kullanımı kolaydır. Dayanıklı malzemelerden üretilmiştir ve uzun ömürlüdür.",
    'ozellikler' => ['5 Metre Uzunluk', 'Sarı ve Siyah Renk', 'Otomatik Geri Sarmalı', 'Profesyonel Ölçüm Aleti', 'Dayanıklı Malzeme']
],
[
    "id" => 26, 
    "kat" => "olcum", 
    "resim" => "fotolar/olcum2.png", 
    "baslik" => "HU53D Baş Ve Vücut, Kafa Çevresi Ölçüm Aleti Bel Ölçme Metresi Mezura Terzi Ölçü Metresi Ergonomik", 
    "fiyat" => "69.99",
        "aciklama" => "Bu ölçüm aleti, baş ve vücut çevresi ölçümleri için idealdir. Kafa çevresi, bel ölçümü gibi farklı ölçümler yapabilir. Ergonomik tasarımıyla rahat bir tutuş sağlar. Dayanıklı malzemelerden üretilmiştir ve uzun ömürlüdür.",
    'ozellikler' => ['Baş ve Vücut Çevresi Ölçümü', 'Kafa Çevresi Ölçümü', 'Bel Ölçümü', 'Ergonomik Tasarım', 'Dayanıklı Malzeme']
],
[
    "id" => 27, 
    "kat" => "olcum", 
    "resim" => "fotolar/olcum3.png", 
    "baslik" => "Meşem Kumpas Vernierli Profesyonel Mekanik Kumpas 150 mm 1410", 
    "fiyat" => "349.99",
        "aciklama" => "Bu kumpas, vernierli mekanik tasarımıyla profesyonel ölçümler yapmanızı sağlar. 150 mm ölçüm kapasitesine sahiptir. Dayanıklı malzemelerden üretilmiştir ve uzun ömürlüdür. Hassas ölçümler için idealdir.Mühendislik öğrencileri için uygundur.", 
    'ozellikler' => ['Vernierli Mekanik Tasarım', '150 mm Ölçüm Kapasitesi', 'Profesyonel Ölçümler İçin İdeal', 'Dayanıklı Malzeme','mühendislik öğrencileri için uygun']    
],
[
    "id" => 28, 
    "kat" => "olcum", 
    "resim" => "fotolar/olcum4.png", 
    "baslik" => "OTCRAFT 3 ADET 6 inç/15 cm Akrilik Şeffaf T-Kare Cetvel, İnç ve Metrik, T Kare Cetvel, Şeffaf, T Cetveli", 
    "fiyat" => "299.99",
        "aciklama" => "Bu T-kare cetvel, 6 inç/15 cm uzunluğunda üç adet akrilik şeffaf cetvel içerir. İnç ve metrik ölçü birimlerine sahiptir. Şeffaf tasarımıyla kolay okunabilir ölçümler sağlar. Dayanıklı malzemelerden üretilmiştir ve uzun ömürlüdür.Mühendislik öğrencileri için uygundur.",
    'ozellikler' => ['6 inç/15 cm Uzunluk', '   İnç ve Metrik Ölçü Birimleri', 'Akrilik Şeffaf Tasarım', 'T-Kare Cetvel', 'Dayanıklı Malzeme','mühendislik öğrencileri için uygun']
],

[
    "id" => 31, 
    "kat" => "olcum", 
    "resim" => "fotolar/olcum5.png", 
    "baslik" => "Bosch Katlanır Metre 2m", 
    "fiyat" => "318.99",
        "aciklama" => "Bu katlanır metre, 2 metre uzunluğunda ölçüm yapabilen profesyonel bir alettir. Katlanabilir tasarımıyla taşıması kolaydır. Dayanıklı malzemelerden üretilmiştir ve uzun ömürlüdür. Bosch firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",
    'ozellikler' => ['2 Metre Uzunluk', 'Katlanabilir Tasarım', 'Profesyonel Ölçüm Aleti', 'Dayanıklı Malzeme','Bosch Kalitesi']
],

// --- ELEKTRİKLİ ALETLER: MATKAP REYONU ---
[
    "id" => 32, 
    "kat" => "matkap", 
    "resim" => "fotolar/matkap1.png", 
    "baslik" => "Sturdy Japon Tech Darbeli Çift Akülü Ekstra Güçlendirilmiş Akülü Matkap 27 PRÇSET", 
    "fiyat" => "1.099",
        "aciklama" => "Bu darbeli çift akülü matkap, ekstra güçlendirilmiş tasarımıyla zorlu işler için idealdir. 27 parçalık seti sayesinde çeşitli uygulamalarda kullanabilirsiniz. Dayanıklı malzemelerden üretilmiştir ve uzun ömürlüdür. Profesyonel ve amatör kullanıcılar için uygundur.",   
    'ozellikler' => ['Darbeli Çift Akülü Tasarım', 'Ekstra Güçlendirilmiş', '27 Parçalık Set', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme']
],
[
    "id" => 33, 
    "kat" => "matkap", 
    "resim" => "fotolar/matkap2.png", 
    "baslik" => "Daflong PRO BAKIR SARGILI 21V 84 PARÇA ÇEİLK MANDREN ÇİFT AKÜLÜ ŞARJLI DARBELİ MATKAP DFL-5", 
    "fiyat" => "999.99",
        "aciklama" => "Bu darbeli çift akülü matkap, bakır sargılı motoru ve 84 parçalık setiyle zorlu işler için idealdir. Çelik mandreni sayesinde dayanıklıdır. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir.",
    'ozellikler' => ['Darbeli Çift Akülü Tasarım', 'Bakır Sargılı Motor', '84 Parçalık Set', 'Çelik Mandren', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme']
],
[
    "id" => 34, 
    "kat" => "matkap", 
    "resim" => "fotolar/matkap3.png", 
    "baslik" => "Black & Decker Beh710 710W Darbeli Matkap", 
    "fiyat" => "1.699",
        "aciklama" => "Bu darbeli matkap, 710W gücünde motoru ve dayanıklı tasarımıyla zorlu işler için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Black & Decker firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",
    'ozellikler' => ['710W Güç', 'Darbeli Tasarım   ', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Black & Decker Kalitesi']
],
[
    "id" => 35, 
    "kat" => "matkap", 
    "resim" => "fotolar/matkap4.png", 
    "baslik" => "Cat DX17.1 750W 13 mm Profesyonel Darbeli Matkap + 8 Parça Aksesuar", 
    "fiyat" => "2.143",
        "aciklama" => "Bu darbeli matkap, 750W gücünde motoru ve 8 parçalık aksesuar setiyle zorlu işler için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Cat firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",
    'ozellikler' => ['750W Güç', 'Darbeli Tasarım', '8 Parçalık Aksesuar Seti', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Cat Kalitesi']
],
[
    "id" => 36, 
    "kat" => "matkap", 
    "resim" => "fotolar/matkap5.png", 
    "baslik" => "Bosch Gsb 600 Darbeli Matkap 600 W Güçlü Motor Ahşap Metal Delme Kapasitesi 30 mm", 
    "fiyat" => "3.070.00",
        "aciklama" => "Bu darbeli matkap, 600W gücünde motoru ve ahşap ile metal delme kapasitesiyle zorlu işler için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Bosch firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['600W Güç', 'Darbeli Tasarım', 'Ahşap ve Metal Delme Kapasitesi (30 mm)', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Bosch Kalitesi'] 
],
[
    "id" => 38, 
    "kat" => "matkap", 
    "resim" => "fotolar/matkap6.png", 
    "baslik" => "Bosch Gbh 240 Profesyonel Kırıcı Delici Matkap", 
    "fiyat" => "6.089",
        "aciklama" => "Bu kırıcı delici matkap, profesyonel kullanıcılar için tasarlanmıştır. Yüksek performanslı motoru ve dayanıklı tasarımıyla zorlu işler için idealdir. Uzun ömürlü malzemelerden üretilmiştir. Bosch firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Profesyonel Kırıcı Delici Tasarım', 'Yüksek Performanslı Motor', 'Dayanıklı Tasarım', 'Profesyonel Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Bosch Kalitesi']  
],
[
    "id" => 39, 
    "kat" => "matkap", 
    "resim" => "fotolar/matkap7.png", 
    "baslik" => "Bosch Easyimpact 600 13MM 600 Watt Darbeli Matkap + 103 Parça Matkap Ucu Vidalama Ucu Lokma Ucu Seti", 
    "fiyat" => "3.600",
        "aciklama" => "Bu darbeli matkap, 600W gücünde motoru ve 103 parçalık setiyle zorlu işler için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Bosch firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['600W Güç', 'Darbeli Tasarım', '103 Parçalık Set (Matkap Ucu, Vidalama Ucu, Lokma Ucu)', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Bosch Kalitesi']  
],
[
    "id" => 40, 
    "kat" => "matkap", 
    "resim" => "fotolar/matkap8.png", 
    "baslik" => "Einhell TE-CD 12/1 Li-i (2x2,0 Ah), Akülü Darbeli Vidalama - 4513890", 
    "fiyat" => "3.347",
        "aciklama" => "Bu akülü darbeli vidalama, 12V gücünde motoru ve 2x2,0 Ah bataryasıyla zorlu işler için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Einhell firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",
    'ozellikler' => ['12V Güç', 'Akülü Tasarım', '2x2,0 Ah Batarya', 'Darbeli Vidalama Özelliği', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Einhell Kalitesi']
],

// --- ELEKTRİKLİ ALETLER: TAŞLAMA MAKİNALARI ---
[
    "id" => 41, 
    "kat" => "taslama", 
    "resim" => "fotolar/taslama1.png", 
    "baslik" => "Bosch Professional GWS 2200-180 H Taşlama Makinesi", 
    "fiyat" => "4.930",
        "aciklama" => "Bu taşlama makinesi, 2200W gücünde motoru ve dayanıklı tasarımıyla zorlu işler için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Bosch firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['2200W Güç', 'Dayanıklı Tasarım', 'Profesyonel Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Bosch Kalitesi'] 
],
[
    "id" => 42, 
    "kat" => "taslama", 
    "resim" => "fotolar/taslama2.png", 
    "baslik" => "Einhell Akülü Avuç Taşlama TE-AG 18/115 Li-Solo Power X-Change ", 
    "fiyat" => "2.122",
        "aciklama" => "Bu akülü avuç taşlama, 18V gücünde motoru ve Power X-Change batarya sistemiyle zorlu işler için idealdir. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Einhell firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['18V Güç', 'Akülü Tasarım',    'Power X-Change Batarya Sistemi', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Einhell Kalitesi']
],
[
    "id" => 43, 
    "kat" => "taslama", 
    "resim" => "fotolar/taslama3.png", 
    "baslik" => "Kraft Hart Profesyonel 900 W 115MM Avuç Içi Taşlama Turuncu-Siyah", 
    "fiyat" => "1100",
        "aciklama" => "Bu avuç içi taşlama, 900W gücünde motoru ve dayanıklı tasarımıyla zorlu işler için idealdir. Profesyonel kullanım için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Kraft Hart firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['900W Güç', 'Dayanıklı Tasarım', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Kraft Hart Kalitesi'] 
],
[
    "id" => 44, 
    "kat" => "taslama", 
    "resim" => "fotolar/taslama4.png", 
    "baslik" => "Cat DX3090 720WATT 125MM Profesyonel Avuç Taşlama + DA09052 Genel Amaçlı Elmas Kesme Diski", 
    "fiyat" => "1.861",
        "aciklama" => "Bu avuç taşlama, 720W gücünde motoru ve 125mm çapındaki diskiyle zorlu işler için idealdir. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Cat firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['720W Güç', '125mm Çap', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Cat Kalitesi']    
],
[
    "id" => 45, 
    "kat" => "taslama", 
    "resim" => "fotolar/taslama5.png", 
    "baslik" => "Dewalt DCG408N - Xj 125MM Aküsüz Kömürsüz Taslama", 
    "fiyat" => "6.723",
        "aciklama" => "Bu kömürsüz taslama, 125mm çapındaki diski ve aküsüz tasarımıyla zorlu işler için idealdir. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Dewalt firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Aküsüz Tasarım', 'Kömürs  üz Motor', '125mm Çap', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Dewalt Kalitesi']
],
[
    "id" => 46, 
    "kat" => "taslama", 
    "resim" => "fotolar/taslama6.png", 
    "baslik" => "Dewalt DCG407M2T-QW 18V Xr Kömürsüz Akülü Avuç Taşlama 2X4.0AH", 
    "fiyat" => "13.421",
        "aciklama" => "Bu kömürsüz akülü avuç taşlama, 18V gücünde motoru ve 2x4.0Ah bataryasıyla zorlu işler için idealdir. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Dewalt firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['18V Güç', 'Kömürsüz Motor', 'Akülü Tasarım', '2x4.0Ah Batarya', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Dewalt Kalitesi'] 
],
[
    "id" => 47, 
    "kat" => "taslama", 
    "resim" => "fotolar/taslama7.png", 
    "baslik" => "Attlas ATT 650 Kalıpçı Taşlama 650 W", 
    "fiyat" => "1.500",
        "aciklama" => "Bu kalıpçı taşlama, 650W gücünde motoru ve dayanıklı tasarımıyla zorlu işler için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Attlas firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['650W Güç', 'Dayanıklı Tasarım', 'Profesyonel Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Attlas Kalitesi']
],

// --- ELEKTRİKLİ ALETLER: KAYNAK MAKİNALARI ---
[
    "id" => 48, 
    "kat" => "kaynak", 
    "resim" => "fotolar/kaynak1.png", 
    "baslik" => "Schulzz 600 Uçlu Araba Tampon Plastik Tamir Işıklı Kaynak Makinesi", 
    "fiyat" => "5850",
        "aciklama" => "Bu kaynak makinesi, 600 uçlu kapasitesi ve ışıklı tasarımıyla araba tampon plastik tamiri için idealdir. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Schulzz firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['600 Uçlu Kapasite', 'Işı  klı Tasarım', 'Araba Tampon Plastik Tamiri İçin İdeal', 'Profesyonel Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Schulzz Kalitesi']
],
[
    "id" => 49, 
    "kat" => "kaynak", 
    "resim" => "fotolar/kaynak2.png", 
    "baslik" => "Schulzz 100W 600 Uçlu Araba Tampon Pvc Tamir LED Işıklı Kaynak Makinesi", 
    "fiyat" => "1249.99",
        "aciklama" => "Bu kaynak makinesi, 100W gücünde motoru, 600 uçlu kapasitesi ve LED ışıklı tasarımıyla araba tampon PVC tamiri için idealdir. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Schulzz firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",   
    'ozellikler' => ['100W Güç', '600 Uçlu Kapasite', 'LED Işıklı Tasarım', 'Araba Tampon PVC Tamiri İçin İdeal', 'Profesyonel Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Schulzz Kalitesi']
],
[
    "id" => 50, 
    "kat" => "kaynak", 
    "resim" => "fotolar/kaynak3.png", 
    "baslik" => "Schulzz 200 Watt 600 Adet Tel 5000 Mah Batarya Desteği Şarjlı Tampon Plastik Parça Tamir Kaynak Makinesi", 
    "fiyat" => "2599.99",
        "aciklama" => "Bu kaynak makinesi, 200W gücünde motoru, 600 adet tel kapasitesi ve 5000 mAh batarya desteğiyle şarjlı tasarımıyla araba tampon plastik parça tamiri için idealdir. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Schulzz firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['200W Güç', '600 Adet Tel Kap  asitesi', '5000 mAh Batarya Desteği', 'Şarjlı Tasarım', 'Araba Tampon Plastik Parça Tamiri İçin İdeal', 'Profesyonel Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Schulzz Kalitesi']
],
[
    "id" => 51, 
    "kat" => "kaynak", 
    "resim" => "fotolar/kaynak4.png", 
    "baslik" => "Schulzz 150 Watt 1200 Adet Tel Tampon Plastik Parça Tamir Kaynak Makinesi", 
    "fiyat" => "2899.99",
        "aciklama" => "Bu kaynak makinesi, 150W gücünde motoru ve 1200 adet tel kapasitesiyle araba tampon plastik parça tamiri için idealdir. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Schulzz firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['150W Güç', '1200 Adet Tel Kapasitesi', 'Araba Tampon Plastik Parça Tamiri İçin İdeal', 'Profesyonel Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Schulzz Kalitesi']
],

// --- ELEKTRİKLİ ALETLER: TESTERE REYONU ---
[
    "id" => 52, 
    "kat" => "testere", 
    "resim" => "fotolar/testere1.png", 
    "baslik" => "Hyundai Hyc210 Elektrikli Testere 2000w 40 Cm Kılavuz", 
    "fiyat" => "4.599",
        "aciklama" => "Bu elektrikli testere, 2000W gücünde motoru ve 40 cm kılavuzuyla zorlu kesim işleri için idealdir. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Hyundai firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['2000W Güç', '40 cm Kılavuz', 'Elektrikli Tasarım', 'Profesyonel Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Hyundai Kalitesi']
],
[
    "id" => 53, 
    "kat" => "testere", 
    "resim" => "fotolar/testere2.png", 
    "baslik" => "KİMMEER PLUS Profesonel Metal Dişli 21v 3ah Şarjlı Dal Budama Testeresi", 
    "fiyat" => "945",
        "aciklama" => "Bu şarjlı dal budama testeresi, 21V gücünde motoru ve 3Ah bataryasıyla profesyonel kesim işleri için idealdir. Metal dişli tasarımıyla dayanıklıdır. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. KİMMEER PLUS firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['21V Güç', '3Ah Batarya', 'Metal Dişli Tasarım', 'Şarjlı Tasarım', 'Profesyonel Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','KİMMEER PLUS Kalitesi']
],
[
    "id" => 54, 
    "kat" => "testere", 
    "resim" => "fotolar/testere3.png", 
    "baslik" => "Hyundai HRS1050 Kılıç Testere Tilki Kuyruğu 1050 W Güçlü Motor ve Ergonomik Tasarım", 
    "fiyat" => "1150",
        "aciklama" => "Bu kılıç testere, 1050W gücünde motoru ve ergonomik tasarımıyla zorlu kesim işleri için idealdir. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Hyundai firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['1050W Güç', 'Ergonomik Tasarım', 'Kılıç Testere Tasarımı', 'Profesyonel Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Hyundai Kalitesi']
],

// --- BAHÇE & TARIM: SULAMA SİSTEMLERİ ---
[
    "id" => 55, 
    "kat" => "sulama", 
    "resim" => "fotolar/sulama1.png", 
    "baslik" => "Einhell Su Çekme Hortumu 4 m" , 
    "fiyat" => "413",
        "aciklama" => "Bu su çekme hortumu, 4 metre uzunluğunda ve dayanıklı malzemelerden üretilmiştir. Bahçe sulama sistemleri için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlüdür ve Einhell firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['4 Metre Uzunluk', 'Dayanıklı Malzeme', 'Bahçe Sulama Sistemleri İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Einhell Kalitesi']
],
[
    "id" => 56, 
    "kat" => "sulama", 
    "resim" => "fotolar/sulama2.png", 
    "baslik" => "Robo 360 Derece dönebilen 20 metre Sulama Sistemi", 
    "fiyat" => "1879",
        "aciklama" => "Bu sulama sistemi, 360 derece dönebilen tasarımı ve 20 metre uzunluğundaki hortumuyla geniş alanları sulamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Robo firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['360 Derece Dönebilen Tasarım', '20 Metre Uzunluk', 'Geniş Alanları Sulamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Robo Kalitesi']
],
[
    "id" => 57, 
    "kat" => "sulama", 
    "resim" => "fotolar/sulama3.png", 
    "baslik" => "Deliksiz Düz 400 Metre Damla Sulama Sistemi ve Ek Parçaları Damlama Borusu Hortumu Hazır Set", 
    "fiyat" => "2950",
        "aciklama" => "Bu damla sulama sistemi, deliksiz düz tasarımı ve 400 metre uzunluğundaki hortumuyla geniş alanları sulamak için idealdir. Ek parçalarıyla birlikte hazır set olarak sunulur. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Deliksiz Düz firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Deliksiz Düz Tasarım', '400 Metre Uzunluk', 'Geniş Alanları Sulamak İçin İdeal', 'Ek Parçalarla Hazır Set', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Deliksiz Düz Kalitesi']
],
[
    "id" => 58, 
    "kat" => "sulama", 
    "resim" => "fotolar/sulama4.png", 
    "baslik" => "Evefix Çiçek Sulama Damlama Sistemi - 4 Adet", 
    "fiyat" => "199.99",
        "aciklama" => "Bu çiçek sulama damlama sistemi, 4 adet damla sulama başlığıyla birlikte gelir. Bitkilerinizi düzenli olarak sulamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Evefix firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['4 Adet Damla Sulama Başlığı', 'Bitkileri Düzenli Sulamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Evefix Kalitesi']
],
[
    "id" => 59, 
    "kat" => "sulama", 
    "resim" => "fotolar/sulama5.png", 
    "baslik" => "Buffer Bahçe Damlama Sulama Sistemi Seti Hortum ve Ek Parçaları 15 M", 
    "fiyat" => "375",
        "aciklama" => "Bu bahçe damlama sulama sistemi seti, 15 metre uzunluğunda hortum ve ek parçalarıyla birlikte gelir. Bitkilerinizi düzenli olarak sulamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Buffer firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['15 Metre Uzunluk', 'Ek Parçalarla Hazır Set', 'Bitkileri Düzenli Sulamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Buffer Kalitesi']
],
[
    "id" => 60, 
    "kat" => "sulama", 
    "resim" => "fotolar/sulama6.png", 
    "baslik" => "Dino Timer valf Geniş Ekran Çift Çıkış Yağmur Sensörlü Sulama Sistemi", 
    "fiyat" => "2399.99",
        "aciklama" => "Bu sulama sistemi, geniş ekranlı çift çıkışlı tasarımı ve yağmur sensörlü özelliğiyle bitkilerinizi düzenli olarak sulamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Dino Timer firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",  
    'ozellikler' => ['Geniş Ekran', 'Çift Çıkış Tasarımı', 'Yağmur Sensörlü Özellik', 'Bitkileri Düzenli Sulamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Dino Timer Kalitesi']
],
[
    "id" => 61, 
    "kat" => "sulama", 
    "resim" => "fotolar/sulama7.png", 
    "baslik" => "Dino Timer valf Geniş Ekran Tek Çıkış Yağmur Sensörlü Sulama Sistemi", 
    "fiyat" => "1621",
        "aciklama" => "Bu sulama sistemi, geniş ekranlı tek çıkışlı tasarımı ve yağmur sensörlü özelliğiyle bitkilerinizi düzenli olarak sulamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Dino Timer firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",   
    'ozellikler' => ['Geniş Ekran', 'Tek Çıkış Tasarımı', 'Yağmur Sensörlü Özellik', 'Bitkileri Düzenli Sulamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Dino Timer Kalitesi']
],
[
    "id" => 62, 
    "kat" => "sulama", 
    "resim" => "fotolar/sulama8.png", 
    "baslik" => "G.F Metal Spring Fıskiye Başlığı - Dayanıklı Bahçe Sulama ve Yağmurlama Sistemi", 
    "fiyat" => "739.99",
        "aciklama" => "Bu metal spring fıskiye başlığı, dayanıklı tasarımıyla bahçe sulama ve yağmurlama sistemleri için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. G.F firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",   
    'ozellikler' => ['Dayanıklı Tasarım', 'Bahçe Sulama ve Yağmurlama Sistemleri İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','G.F Kalitesi']
    
],

// --- BAHÇE & TARIM: BUDAMA MAKASLARI ---
[
    "id" => 63, 
    "kat" => "kesme", 
    "resim" => "fotolar/budama1.png", 
    "baslik" => "Aslan Budama Makası-21Cm-3Mm", 
    "fiyat" => "189.99",
        "aciklama" => "Bu budama makası, 21 cm uzunluğunda ve 3 mm kalınlığında bıçaklarıyla bitkilerinizi düzenli olarak budamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Aslan firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",
    'ozellikler' => ['21 cm Uzunluk', '3 mm Kalınlık', 'Bitkileri Düzenli Budamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Aslan Kalitesi']
],
[
    "id" => 64, 
    "kat" => "kesme", 
    "resim" => "fotolar/budama2.png", 
    "baslik" => "Yunus Kayatek 3 Parça Bahçe Budama Seti Meyve Dal Ağaç Bitki Budama Makası,budama Testeresi ve Eldiveni", 
    "fiyat" => "349.99",
        "aciklama" => "Bu bahçe budama seti, 3 parçadan oluşur: budama makası, budama testeresi ve eldiven. Bitkilerinizi düzenli olarak budamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Yunus Kayatek firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['3 Parça Set (Budama Makası, Budama Testeresi, Eldiven)', 'Bitkileri Düzenli Budamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Yunus Kayatek Kalitesi']
],
[
    "id" => 65, 
    "kat" => "kesme", 
    "resim" => "fotolar/budama3.png", 
    "baslik" => "Baytech Baytec MK4562 Kalın Dal Budama Makası Uzatmalı Teleskopik Ağız 5 cm", 
    "fiyat" => "950",
        "aciklama" => "Bu kalın dal budama makası, uzatmalı teleskopik ağız tasarımıyla 5 cm kalınlığındaki dalları budamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Baytech firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Uzatmalı Teleskopik Ağız Tasarımı', '5 cm Kalınlık Kapasitesi', 'Kalın Dalları Budamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Baytech Kalitesi']
],
[
    "id" => 66, 
    "kat" => "kesme", 
    "resim" => "fotolar/budama4.png", 
    "baslik" => "Felco 8 Budama Makası ve F-Tech 7/3 Yedek Bıçaklı Özel Seri", 
    "fiyat" => "1499",
        "aciklama" => "Bu budama makası, Felco 8 modeli ve F-Tech 7/3 yedek bıçaklı özel seri tasarımıyla bitkilerinizi düzenli olarak budamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Felco firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Felco 8 Budama Makası', 'F-Tech 7/3 Yedek Bıçaklı Özel Seri', 'Bitkileri Düzenli Budamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Felco Kalitesi']
],

// --- BAHÇE & TARIM: ÇİM BİÇME MAKİNALARI ---
[
    "id" => 66, 
    "kat" => "cim", 
    "resim" => "fotolar/cimMakina1.png", 
    "baslik" => "Bosch Easyrotak 32-235 Elektrikli Çim Biçme Makinesi", 
    "fiyat" => "4749.99",
        "aciklama" => "Bu elektrikli çim biçme makinesi, 32 cm kesme genişliği ve 235 mm kesme yüksekliğiyle ideal bir bahçe bakım aracıdır. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Bosch firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['32 cm Kesme Genişliği', '235 mm Kesme Yüksekliği', 'Elektrikli Tasarım', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Bosch Kalitesi']
],
[
    "id" => 67, 
    "kat" => "cim", 
    "resim" => "fotolar/cim2.png", 
    "baslik" => "Hyundai C4405 Elektrikli Çim Biçme Makinası 1900W", 
    "fiyat" => "9999.99",
        "aciklama" => "Bu elektrikli çim biçme makinesi, 1900W gücünde motoru ve dayanıklı tasarımıyla ideal bir bahçe bakım aracıdır. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Hyundai firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['1900W Güç', 'Dayanıklı Tasarım', 'Elektrikli Tasarım', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Hyundai Kalitesi']
],
[
    "id" => 68, 
    "kat" => "cim", 
    "resim" => "fotolar/cim3.png", 
    "baslik" => "Ekinler Plus Çift Akülü Şarjlı Çim Biçme Makinesi Mavi EEA330", 
    "fiyat" => "2499.99",
        "aciklama" => "Bu çift akülü şarjlı çim biçme makinesi, 330 mm kesme genişliği ve dayanıklı tasarımıyla ideal bir bahçe bakım aracıdır. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Ekinler Plus firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Çift Akülü Şarjlı Tasarım', '330 mm Kesme Genişliği', 'Dayanıklı Tasarım', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Ekinler Plus Kalitesi','Kolay Kullanım']
],
[
    "id" => 69, 
    "kat" => "cim", 
    "resim" => "fotolar/cim4.png", 
    "baslik" => "Bosch Easygrasscut Misinalı Kenar Kesme Makinesi 280 Watt", 
    "fiyat" => "1799.99",
        "aciklama" => "Bu misinalı kenar kesme makinesi, 280W gücünde motoru ve dayanıklı tasarımıyla ideal bir bahçe bakım aracıdır. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Bosch firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['280W Güç', 'Misinalı Tasarım', 'Dayanıklı Tasarım', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Bosch Kalitesi','kolay kullanım']
],

// --- BAHÇE & TARIM: İLAÇLAMA POMPALARI ---
[
    "id" => 70, 
    "kat" => "ilaclama", 
    "resim" => "fotolar/ilac1.png", 
    "baslik" => "Solo 461 Profesyonel Basınçlı İlaçlama Pompası 5 Lt", 
    "fiyat" => "873",
        "aciklama" => "Bu profesyonel basınçlı ilaçlama pompası, 5 litre kapasitesi ve dayanıklı tasarımıyla ideal bir bahçe bakım aracıdır. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Solo firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['5 Litre Kapasite', 'Basınçlı Tasarım', 'Dayanıklı Malzeme', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Solo Kalitesi']
],
[
    "id" => 71, 
    "kat" => "ilaclama", 
    "resim" => "fotolar/pompa2.png", 
    "baslik" => "HB Garden Tools 16 Lt Şarjlı Turbo İlaç Pompası 120/60 Püskürtme Çubuğu", 
    "fiyat" => "2290",
        "aciklama" => "Bu şarjlı turbo ilaç pompası, 16 litre kapasitesi ve 120/60 püskürtme çubuğu ile ideal bir bahçe bakım aracıdır. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. HB Garden Tools firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['16 Litre Kapasite', 'Şarjlı Tasarım', '120/60 Püskürtme Çubuğu', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','HB Garden Tools Kalitesi']
],
[
    "id" => 72, 
    "kat" => "ilaclama", 
    "resim" => "fotolar/pompa3.png", 
    "baslik" => "İtal Akülü Su Aktarma ve Ilaçlama Motoru Pompası 12 Volt-", 
    "fiyat" => "299.99",
        "aciklama" => "Bu akülü su aktarma ve ilaçlama motoru pompası, 12 volt gücünde motoru ve dayanıklı tasarımıyla ideal bir bahçe bakım aracıdır. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. İtal firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['12 Volt Güç', 'Akülü Tasarım', 'Dayanıklı Malzeme', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','İtal Kalitesi']
],
[
    "id" => 73, 
    "kat" => "ilaclama", 
    "resim" => "fotolar/pompa4.png", 
    "baslik" => "Palmera 5b Kollu Ilaçlama Pompası 5lt", 
    "fiyat" => "640",
        "aciklama" => "Bu kollu ilaçlama pompası, 5 litre kapasitesi ve dayanıklı tasarımıyla ideal bir bahçe bakım aracıdır. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Palmera firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['5 Litre Kapasite', 'Kollu Tasarım', 'Dayanıklı Malzeme', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Palmera Kalitesi']
],
[
    "id" => 74, 
    "kat" => "ilaclama", 
    "resim" => "fotolar/pompa5.png", 
    "baslik" => "Veta Kalın Piston Ilaçlama Pompası 2 Lt (Tahliyeli)", 
    "fiyat" => "265.00",
        "aciklama" => "Bu kalın piston ilaçlama pompası, 2 litre kapasitesi ve tahliyeli tasarımıyla ideal bir bahçe bakım aracıdır. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Veta firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",  
    'ozellikler' => ['2 Litre Kapasite', 'Kalın Piston Tasarımı', 'Tahliyeli Özellik', 'Profesyonel ve Amatör Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Veta Kalitesi']
],

// --- HIRDAVAT: VİDALAR VE CİVATALAR ---
[
    "id" => 75, 
    "kat" => "vida", 
    "resim" => "fotolar/vida1.png", 
    "baslik" => "CIVTEX CİVATA 342 Parça Vida Dübel Pul Seti – DIN 7505 Sunta Vidası – Organizer Takım Kutusu", 
    "fiyat" => "459.90",
        "aciklama" => "Bu vida ve civata seti, 342 parçadan oluşur ve DIN 7505 sunta vidası içerir. Organizer takım kutusuyla birlikte gelir. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. CIVTEX firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",   
    'ozellikler' => ['342 Parça Set', 'DIN 7505 Sunta Vidası', 'Organizer Takım Kutusu', 'Profesyonel Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','CIVTEX Kalitesi']
],
[
    "id" => 76, 
    "kat" => "vida", 
    "resim" => "fotolar/vida2.png", 
    "baslik" => "Venoa ICSP600 İmbus Civata Somun Pul Seti M3 M4 M5 Çantalı 600 Adet – Alyan Başlı Vida Seti", 
    "fiyat" => "1365",
        "aciklama" => "Bu imbüs civata somun pul seti, M3, M4 ve M5 boyutlarında 600 adet parçadan oluşur. Çantalı tasarımıyla taşıması kolaydır. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Venoa firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['M3, M4, M5 Boyutlarında 600 Parça Set', 'Çantalı Tasarım', 'Alyan Başlı Vida Seti', 'Profesyonel Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Venoa Kalitesi']
],
[
    "id" => 77, 
    "kat" => "vida", 
    "resim" => "fotolar/vida3.png", 
    "baslik" => "Netzerkoz 1364 Parça Sunta Vidası, Cıvata, Somun, Vida Pulu, 3 Çeşit Bits Matkap Ucu Seti", 
    "fiyat" => "1499.99",
        "aciklama" => "Bu vida seti, 1364 parçadan oluşur ve sunta vidası, cıvata, somun, vida pulu içerir. 3 çeşit bits matkap ucu seti de dahildir. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Netzerkoz firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['1364 Parça Set', 'Sunta Vidası, Cıvata, Somun, Vida Pulu İçerir', '3 Çeşit Bits Matkap Ucu Seti', 'Profesyonel Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Netzerkoz Kalitesi']
],
[
    "id" => 78, 
    "kat" => "vida", 
    "resim" => "fotolar/vida4.png", 
    "baslik" => "Demir Civata Pul Başlı (Sding) Rysb Akıllı Vida 3,9X19 mm (50 Adet)", 
    "fiyat" => "75",
        "aciklama" => "Bu demir civata pul başlı (Sding) rysb akıllı vida, 3,9x19 mm boyutlarında ve 50 adet parçadan oluşur. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Demir Civata firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['3,9x19 mm Boyutlarında', '50 Adet Parça', 'Demir Civata Pul Başlı (Sding) Rysb Akıllı Vida', 'Profesyonel Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Demir Civata Kalitesi']
],
[
    "id" => 79, 
    "kat" => "vida", 
    "resim" => "fotolar/vida5.png", 
    "baslik" => "Rafburada 50 Adet Civata ve Somun", 
    "fiyat" => "450.00",
        "aciklama" => "Bu rafburada civata ve somun seti, 50 adet parçadan oluşur. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Rafburada firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",   
    'ozellikler' => ['50 Adet Parça', 'Civata ve Somun Seti', 'Profesyonel Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Rafburada Kalitesi']
],
[
    "id" => 80, 
    "kat" => "vida", 
    "resim" => "fotolar/vida6.png", 
    "baslik" => "Badem10 Aybolt 8 mm 5 Adet Halka Civata Metal Askı Civatası Paslanmaz Çelik Montaj Için Sabitleme Elemanı", 
    "fiyat" => "319.90",
        "aciklama" => "Bu halka civata, 8 mm boyutunda ve 5 adet parçadan oluşur. Metal askı civatası olarak montaj için ideal bir sabitleme elemanıdır. Profesyonel kullanıcılar için uygundur. Paslanmaz çelik malzemeden üretilmiştir. Badem10 firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",  
    'ozellikler' => ['8 mm Boyutunda', '5 Adet Parça', 'Halka Civata Metal Askı Civatası', 'Montaj İçin Sabitleme Elemanı', 'Profesyonel Kullanım İçin İdeal', 'Paslanmaz Çelik Malzeme','Badem10 Kalitesi']
],
[
    "id" => 81, 
    "kat" => "vida", 
    "resim" => "fotolar/vida7.png", 
    "baslik" => "Akdeniz DIN933 M8 45 mm Galv. Kaplamalı Cıvata 40 Adet", 
    "fiyat" => "197",
        "aciklama" => "Bu DIN933 M8 45 mm galv. kaplamalı cıvata, 40 adet parçadan oluşur. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Akdeniz firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['DIN933 M8 45 mm Boyutunda', '40 Adet Parça', 'Galv. Kaplamalı Cıvata', 'Profesyonel Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Akdeniz Kalitesi']
],
[
    "id" => 82, 
    "kat" => "vida", 
    "resim" => "fotolar/vida8.png", 
    "baslik" => "Site Hırdavat M4 Ysb Vida Civata Somun Pul Seti 665'li", 
    "fiyat" => "1037",
        "aciklama" => "Bu M4 Ysb vida civata somun pul seti, 665 parçadan oluşur. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Site Hırdavat firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['M4 Ysb Vida Civata Somun Pul Seti', '665 Parça Set', 'Profesyonel Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Site Hırdavat Kalitesi']
],

[
    "id" => 83, 
    "kat" => "vida", 
    "resim" => "fotolar/vida9.png", 
    "baslik" => "Meridyen Matkap Uçlu Akıllı Vida 3,9X19 ( 100 Adet )", 
    "fiyat" => "84.99",
        "aciklama" => "Bu meridyen matkap uçlu akıllı vida, 3,9x19 mm boyutlarında ve 100 adet parçadan oluşur. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Meridyen firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['3,9x19 mm Boyutunda', '100 Adet Parça', 'Matkap Uçlu Akıllı Vida', 'Profesyonel Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Meridyen Kalitesi']
],
[
    "id" => 84, 
    "kat" => "vida", 
    "resim" => "fotolar/vida10.png", 
    "baslik" => "Meridyen Sunta Vidası 4,0x50 mm 100 adet", 
    "fiyat" => "134.75",
        "aciklama" => "Bu meridyen sunta vidası, 4,0x50 mm boyutlarında ve 100 adet parçadan oluşur. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Meridyen firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['4,0x50 mm Boyutunda', '100 Adet Parça', 'Sunta Vidası', 'Profesyonel Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Meridyen Kalitesi']
],
[
    "id" => 85, 
    "kat" => "vida", 
    "resim" => "fotolar/vida11.png", 
    "baslik" => "Civtex 808 Parça Vida Dübel Somun Pul Seti Organizer Kutulu 23 Çeşit Profesyonel Montaj Seti", 
    "fiyat" => "979.90",
        "aciklama" => "Bu vida, dübel, somun ve pul seti, 808 parçadan oluşur ve 23 çeşit parçayı içerir. Organizer kutulu tasarımıyla taşıması kolaydır. Profesyonel kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Civtex firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['808 Parça Set', 'Vida, Dübel, Somun ve Pul İçerir', '23 Çeşit Parça', 'Organizer Kutulu Tasarım', 'Profesyonel Kullanım İçin İdeal', 'Uzun Ömürlü Malzeme','Civtex Kalitesi']
],

// --- HIRDAVAT: KİLİT SİSTEMLERİ ---
[
    "id" => 86, 
    "kat" => "kilit", 
    "resim" => "fotolar/kilit1.png", 
    "baslik" => "Flaş Group Alüminyum Doğrama Kapı Sistem Sürgü Alt Kilitleme VM-1068", 
    "fiyat" => "259",
        "aciklama" => "Bu alüminyum doğrama kapı sistem sürgü alt kilitleme, dayanıklı tasarımıyla kapılarınızı güvenli bir şekilde kilitlemek için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Flaş Group firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Dayanıklı Tasarım', 'Kapıları Güvenli Bir Şekilde Kilitlemek İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Flaş Group Kalitesi']
],
[
    "id" => 87, 
    "kat" => "kilit", 
    "resim" => "fotolar/kilit2.png", 
    "baslik" => "Kale 164/KTB S Bilyalı Tuzaklı Sistem Barel - Ahşap ve Çelik Kapı Göbeği - 68MM", 
    "fiyat" => "625",
        "aciklama" => "Bu bilyalı tuzaklı sistem barel, ahşap ve çelik kapılar için ideal bir kapı göbeğidir. 68 mm boyutunda ve dayanıklı tasarımıyla kapılarınızı güvenli bir şekilde kilitlemek için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Kale firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Bilyalı Tuzaklı Sistem', 'Ahşap ve Çelik Kapılar İçin İdeal', '68 mm Boyutunda', 'Dayanıklı Tasarım', 'Kapıları Güvenli Bir Şekilde Kilitlemek İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Kale Kalitesi']
],
[
    "id" => 88, 
    "kat" => "kilit", 
    "resim" => "fotolar/kilit3.png", 
    "baslik" => "Kale Kilit 264 Ikiz Set Sistem Barel Ortak Anahtar Tuzaksız", 
    "fiyat" => "989.00",
        "aciklama" => "Bu ikiz set sistem barel, ortak anahtar tuzaksız tasarımıyla kapılarınızı güvenli bir şekilde kilitlemek için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Kale firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['İkiz Set Sistem Barel', 'Ortak Anahtar Tuzaksız Tasarım', 'Kapıları Güvenli Bir Şekilde Kilitlemek İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Kale Kalitesi']
],
[
    "id" => 89, 
    "kat" => "kilit", 
    "resim" => "fotolar/kilit4.png", 
    "baslik" => "Daf Kilit Daf Toki 14 Lü Sistem Merkezi Kilit Orta Kilit Barelsiz Çelik Kapı Kilidi( falez kapı + sur kapının )birçok modeline uyumludur", 
    "fiyat" => "680.00",
        "aciklama" => "Bu merkezi kilit, 14'lü sistem tasarımıyla çelik kapılar için ideal bir orta kilit barelsiz kapı kilididir. Falez kapı ve sur kapının birçok modeline uyumludur. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Daf Kilit firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['14 Lü Sistem Merkezi Kilit', 'Bareliz Çelik Kapılar İçin İdeal', 'Falez Kapı ve Sur Kapının Birçok Modeline Uyumlu', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Daf Kilit Kalitesi']
],
[
    "id" => 90, 
    "kat" => "kilit", 
    "resim" => "fotolar/kilit5.png", 
    "baslik" => "Electrima Rfıd Şifreli Kapı Kilidi - Kartlı Geçiş Kontrol Göstergeç Sistemi -10 Adet Tag", 
    "fiyat" => "549.99",
        "aciklama" => "Bu RFID şifreli kapı kilidi, kartlı geçiş kontrol göstergeç sistemi tasarımıyla kapılarınızı güvenli bir şekilde kilitlemek için idealdir. 10 adet tag ile birlikte gelir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Electrima firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['RFID Şifreli Kapı Kilidi', 'Kartlı Geçiş Kontrol Göstergeç Sistemi', '10 Adet Tag İçerir', 'Kapıları Güvenli Bir Şekilde Kilitlemek İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Electrima Kalitesi']
],
[
    "id" => 91, 
    "kat" => "kilit", 
    "resim" => "fotolar/kilit6.png", 
    "baslik" => "Kale Şifreli Asma Kilit 4 Basamaklı KD001/21-100", 
    "fiyat" => "540.00",
        "aciklama" => "Bu şifreli asma kilit, 4 basamaklı tasarımıyla kapılarınızı güvenli bir şekilde kilitlemek için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Kale firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['4 Basamaklı Şifreli Asma Kilit', 'Kapıları Güvenli Bir Şekilde Kilitlemek İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Kale Kalitesi']
],
[
    "id" => 92, 
    "kat" => "kilit", 
    "resim" => "fotolar/kilit7.png", 
    "baslik" => "Kale Uzun Kancalı Asma Kilit Blisterli 40Mm", 
    "fiyat" => "349.99",
        "aciklama" => "Bu uzun kancalı asma kilit, 40 mm boyutunda ve blisterli tasarımıyla kapılarınızı güvenli bir şekilde kilitlemek için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Kale firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['40 mm Boyutunda', 'Uzun Kancalı Asma Kilit', 'Blisterli Tasarım', 'Kapıları Güvenli Bir Şekilde Kilitlemek İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Kale Kalitesi']
],
[
    "id" => 93, 
    "kat" => "kilit", 
    "resim" => "fotolar/kilit8.png", 
    "baslik" => "Beşel Emniyet Zinciri Sürgülü Saten Kaplama", 
    "fiyat" => "245",
        "aciklama" => "Bu emniyet zinciri, sürgülü tasarımı ve saten kaplamasıyla kapılarınızı güvenli bir şekilde kilitlemek için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Beşel firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Sürgülü Tasarım', 'Saten Kaplama', 'Kapıları Güvenli Bir Şekilde Kilitlemek İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Beşel Kalitesi']
],

// --- HIRDAVAT: MENTEŞE REYONU ---
[
    "id" => 94, 
    "kat" => "mentese", 
    "resim" => "fotolar/mentese1.png", 
    "baslik" => "Samet Master Frenli Dolap Kapak Menteşesi Pistonlu Düz Tas Menteşe", 
    "fiyat" => "127",
        "aciklama" => "Bu frenli dolap kapak menteşesi, pistonlu düz tasarımıyla dolap kapaklarınızı güvenli bir şekilde kapatmak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Samet firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Pistonlu Düz Tasarım', 'Frenli Özellik', 'Dolap Kapaklarını Güvenli Bir Şekilde Kapatmak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Samet Kalitesi']
],
[
    "id" => 95, 
    "kat" => "mentese", 
    "resim" => "fotolar/mentese2.png", 
    "baslik" => "Çelik Pvc Pimapen Penceresi Menteşesi 75 mm", 
    "fiyat" => "38.90",
        "aciklama" => "Bu çelik PVC pimapen penceresi menteşesi, 75 mm boyutunda ve dayanıklı tasarımıyla pencerelerinizi güvenli bir şekilde açıp kapatmak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Çelik firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['75 mm Boyutunda', 'Çelik PVC Pimapen Penceresi Menteşesi', 'Dayanıklı Tasarım', 'Pencereleri Güvenli Bir Şekilde Açıp Kapatmak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Çelik Kalitesi']
],
[
    "id" => 96, 
    "kat" => "mentese", 
    "resim" => "fotolar/mentese3.png", 
    "baslik" => "Hobidabi Frenli Pistonlu Yavaş Kapanan Menteşe Dolap Kapak Menteşesi", 
    "fiyat" => "69",
        "aciklama" => "Bu frenli pistonlu yavaş kapanan menteşe, dolap kapaklarınızı güvenli bir şekilde kapatmak için ideal bir menteşe seçeneğidir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Hobidabi firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Frenli Pistonlu Tasarım', 'Yavaş Kapanan Özellik', 'Dolap Kapaklarını Güvenli Bir Şekilde Kapatmak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Hobidabi Kalitesi']
],
[
    "id" => 97, 
    "kat" => "mentese", 
    "resim" => "fotolar/mentese4.png", 
    "baslik" => "Badem10 2 Adet Broth 165 Derece Dolap Kapak Menteşesi Robot Tas Menteşe", 
    "fiyat" => "529",
        "aciklama" => "Bu 165 derece dolap kapak menteşesi, robot tasarımıyla dolap kapaklarınızı güvenli bir şekilde açıp kapatmak için ideal bir menteşe seçeneğidir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Badem10 firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['165 Derece Açılabilen Tasarım', 'Robot Tasarım', 'Dolap Kapaklarını Güvenli Bir Şekilde Açıp Kapatmak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Badem10 Kalitesi']
],
[
    "id" => 98, 
    "kat" => "mentese", 
    "resim" => "fotolar/mentese5.png", 
    "baslik" => "Koral 1840 Yaprak Menteşe 2 No 24'lü", 
    "fiyat" => "275",
        "aciklama" => "Bu yaprak menteşe, 2 no boyutunda ve 24'lü set halinde sunulur. Dayanıklı tasarımıyla kapılarınızı güvenli bir şekilde açıp kapatmak için ideal bir menteşe seçeneğidir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Koral firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['2 No Boyutunda', '24lü Set', 'Yaprak Menteşe', 'Kapıları Güvenli Bir Şekilde Açıp Kapatmak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Koral Kalitesi']
],
[
    "id" => 99, 
    "kat" => "mentese", 
    "resim" => "fotolar/mentese6.png", 
    "baslik" => "Hafele Yavaşlatıcılı Tas Menteşe Düz", 
    "fiyat" => "145",
        "aciklama" => "Bu yavaşlatıcılı tas menteşe, düz tasarımıyla kapılarınızı güvenli bir şekilde açıp kapatmak için ideal bir menteşe seçeneğidir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Hafele firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Yavaşlatıcılı Tasarım', 'Düz Tasarım', 'Kapıları Güvenli Bir Şekilde Açıp Kapatmak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Hafele Kalitesi']
],

// --- HIRDAVAT & YAPI: TESİSAT MALZEMELERİ ---
[
    "id" => 99, 
    "kat" => "tesisat", 
    "resim" => "fotolar/tesisat1.png", 
    "baslik" => "Viko Beyaz 2li Sıva Altı Elektrik Prizi Çerçeveli Modern Tasarım Özellikleriyle", 
    "fiyat" => "150",
        "aciklama" => "Bu sıva altı elektrik prizi, beyaz renk ve modern tasarımıyla evinizin dekorasyonuna uyum sağlar. Çerçeveli tasarımıyla şık bir görünüm sunar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Viko firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Beyaz Renk', 'Modern Tasarım', 'Çerçeveli Tasarım', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Viko Kalitesi']
],
[
    "id" => 100, 
    "kat" => "tesisat", 
    "resim" => "fotolar/tesisat2.png", 
    "baslik" => "Günsan Elektrik Üçlü Çocuk Korumalı Topraklı Grup Priz 2 Metre", 
    "fiyat" => "185",
        "aciklama" => "Bu üçlü çocuk korumalı topraklı grup priz, 2 metre uzunluğunda ve dayanıklı tasarımıyla evinizde güvenli bir şekilde elektrik bağlantısı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Günsan Elektrik firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Üçlü Tasarım', 'Çocuk Korumalı', 'Topraklı Grup Priz', '2 Metre Uzunluğunda', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Günsan Elektrik Kalitesi']
],
[
    "id" => 101, 
    "kat" => "tesisat", 
    "resim" => "fotolar/tesisat3.png", 
    "baslik" => "Philips CHP7010B/10 1140 Joule Tekli Akım Korumalı Priz, Siyah", 
    "fiyat" => "649.99",
        "aciklama" => "Bu tekli akım korumalı priz, 1140 joule koruma kapasitesi ve siyah renk tasarımıyla evinizde güvenli bir şekilde elektrik bağlantısı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Philips firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Tekli Tasarım', '1140 Joule Koruma Kapasitesi', 'Siyah Renk', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Philips Kalitesi']
],
[
    "id" => 102, 
    "kat" => "tesisat", 
    "resim" => "fotolar/tesisat4.png", 
    "baslik" => "Konza Konza 3'lü Topraklı Yonca Grup Golyat Çoğaltıcı", 
    "fiyat" => "120.00",
        "aciklama" => "Bu 3'lü topraklı yonca grup golyat çoğaltıcı, dayanıklı tasarımıyla evinizde güvenli bir şekilde elektrik bağlantısı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Konza firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['3lü Tasarım', 'Topraklı Yonca Grup Golyat Çoğaltıcı', 'Dayanıklı Tasarım', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Konza Kalitesi']
],
[
    "id" => 103, 
    "kat" => "tesisat", 
    "resim" => "fotolar/tesisat5.png", 
    "baslik" => "Cata Ct-9186 Tekli Akım Korumalı Priz", 
    "fiyat" => "252",
        "aciklama" => "Bu tekli akım korumalı priz, dayanıklı tasarımıyla evinizde güvenli bir şekilde elektrik bağlantısı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Cata firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Tekli Tasarım', 'Akım Korumalı Priz', 'Dayanıklı Tasarım', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Cata Kalitesi']
],
[
    "id" => 104, 
    "kat" => "tesisat", 
    "resim" => "fotolar/tesisat6.png", 
    "baslik" => "İNWATT 50 Metre Makaralı Seyyar Uzatma Kablosu Siyah 4 Girişli", 
    "fiyat" => "1230",
        "aciklama" => "Bu 50 metre makaralı seyyar uzatma kablosu, siyah renk ve 4 girişli tasarımıyla evinizde güvenli bir şekilde elektrik bağlantısı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. İNWATT firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['50 Metre Uzunluğunda', 'Makaralı Seyyar Uzatma Kablosu', 'Siyah Renk', '4 Girişli Tasarım', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','İNWATT Kalitesi']
],
[
    "id" => 105, 
    "kat" => "tesisat", 
    "resim" => "fotolar/tesisat7.png", 
    "baslik" => "Tograt Isı Shrink Boru Daralan Makaron Kablo Yalıtım - 580 Adet 16 Boy", 
    "fiyat" => "199.99",
        "aciklama" => "Bu ısı shrink boru daralan makaron kablo yalıtım seti, 580 adet parçadan oluşur ve 16 farklı boyda sunulur. Dayanıklı tasarımıyla kablolarınızı güvenli bir şekilde yalıtmak için ideal bir seçenek sunar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Tograt firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['580 Adet Parça', '16 Farklı Boy', 'Isı Shrink Boru Daralan Makaron Kablo Yalıtım Seti', 'Dayanıklı Tasarım', 'Kabloları Güvenli Bir Şekilde Yalıtmak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Tograt Kalitesi']
],
[
    "id" => 106, 
    "kat" => "tesisat", 
    "resim" => "fotolar/tesisat8.png", 
    "baslik" => "Cata CT-9184 Otomatik Tipi Zaman Saati Cata", 
    "fiyat" => "218.90",
        "aciklama" => "Bu otomatik tipi zaman saati, dayanıklı tasarımıyla evinizde güvenli bir şekilde elektrik bağlantısı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Cata firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Otomatik Tipi Zaman Saati', 'Dayanıklı Tasarım', 'Kapıları Güvenli Bir Şekilde Kilitlemek İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Cata Kalitesi']
],

[
  "id" => 107, 
    "kat" => "tesisat", 
    "resim" => "fotolar/tesisat9.png", 
    "baslik" => "Wago 221-413 3'lü Çok Amaçlı Buat Klemensi (10 adet)", 
    "fiyat" => "309",
        "aciklama" => "Bu 3'lü çok amaçlı buat klemensi, 10 adet parçadan oluşur. Dayanıklı tasarımıyla evinizde güvenli bir şekilde elektrik bağlantısı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Wago firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['3lü Tasarım', 'Çok Amaçlı Buat Klemensi', '10 Adet Parça', 'Dayanıklı Tasarım', 'Kapıları Güvenli Bir Şekilde Kilitlemek İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Wago Kalitesi']
],

[
    "id" => 108, 
    "kat" => "tesisat", 
    "resim" => "fotolar/tesisat10.png", 
    "baslik" => "HS Global Masa Altı Kablo Yönetim Tepsisi Kablo Organizeri Kablo Düzenleyici", 
    "fiyat" => "399.99",
        "aciklama" => "Bu masa altı kablo yönetim tepsisi, dayanıklı tasarımıyla evinizde veya ofisinizde kablolarınızı düzenli bir şekilde saklamak için ideal bir seçenek sunar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. HS Global firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Masa Altı Tasarım', 'Kablo Yönetim Tepsisi', 'Kablo Organizeri', 'Kablo Düzenleyici', 'Dayanıklı Tasarım', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','HS Global Kalitesi']
],

// --- BOYA & YAPI: İÇ CEPHE BOYALARI ---
[
    "id" => 109, 
    "kat" => "boya", 
    "resim" => "fotolar/boya1.png", 
    "baslik" => "Polisan X1 All Her Yeri Istediğini Boya-Çizilmez-Yıkanabilir-Isıya Dayanıklı-Kokusuz-- Beyaz 0,75 L", 
    "fiyat" => "800.25",
        "aciklama" => "Bu   Polisan X1  All Her Yeri Istediğini Boya, çizilmez, yıkanabilir, ısıya dayanıklı ve kokusuz özellikleriyle iç cephe boyası olarak ideal bir seçenektir. Beyaz renk seçeneğiyle evinizin dekorasyonuna uyum sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Polisan firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Çizilmez', 'Yıkanabilir', 'Isıya Dayanıklı', 'Kokusuz', 'Beyaz Renk', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Polisan Kalitesi']
],
[
    "id" => 110, 
    "kat" => "boya", 
    "resim" => "fotolar/boya2.png", 
    "baslik" => "Bianca Su Bazlı Panel Kapı Boyası Seti 2,50Lt Beyaz", 
    "fiyat" => "1060",
        "aciklama" => "Bu su bazlı panel kapı boyası seti, 2,50 litre hacmi ve beyaz renk seçeneğiyle iç cephe boyası olarak ideal bir seçenektir. Dayanıklı tasarımıyla kapılarınızı güvenli bir şekilde boyamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Bianca firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Su Bazlı Formül', 'Panel Kapı Boyası Seti', '2,50 Litre Hacmi', 'Beyaz Renk', 'Dayanıklı Tasarım', 'Kapıları Güvenli Bir Şekilde Boyamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Bianca Kalitesi']
],
[
    "id" => 111, 
    "kat" => "boya", 
    "resim" => "fotolar/boya3.png", 
    "baslik" => "Bianca Stella Su Bazlı Saf Akrilik Boya 1 lt 0101 Beyaz", 
    "fiyat" => "1650",
        "aciklama" => "Bu su bazlı saf akrilik boya, 1 litre hacmi ve 0101 beyaz renk seçeneğiyle iç cephe boyası olarak ideal bir seçenektir. Dayanıklı tasarımıyla duvarlarınızı güvenli bir şekilde boyamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Bianca firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Su Bazlı Formül', 'Saf Akrilik Boya', '1 Litre Hacmi', '0101 Beyaz Renk', 'Dayanıklı Tasarım', ]
],
[
    "id" => 112, 
    "kat" => "boya", 
    "resim" => "fotolar/boya4.png", 
    "baslik" => "Polisan X1 Panel Kapı Boyası 2,5 Lt. ( 3,3 Kg.) Amerikan Panel Kapı Boyası", 
    "fiyat" => "999",
        "aciklama" => "Bu panel kapı boyası, 2,5 litre (3,3 kg) hacmi ve Amerikan panel kapı boyası formülüyle iç cephe boyası olarak ideal bir seçenektir. Dayanıklı tasarımıyla kapılarınızı güvenli bir şekilde boyamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Polisan firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Panel Kapı Boyası', '2,5 Litre (3,3 kg) Hacmi', 'Amerikan Panel Kapı Boyası Formülü', 'Dayanıklı Tasarım', 'Kapıları Güvenli Bir Şekilde Boyamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Polisan Kalitesi']
],
[
    "id" => 113, 
    "kat" => "boya", 
    "resim" => "fotolar/boya5.png", 
    "baslik" => "Bi Boya Beyaz Isıya Dayanıklı Radyatör Petek Boyası 0,75 lt Parlak Metal Boyası Kolay Uygulama", 
    "fiyat" => "974.25",
        "aciklama" => "Bu beyaz ısıya dayanıklı radyatör petek boyası, 0,75 litre hacmi ve parlak metal boyası formülüyle iç cephe boyası olarak ideal bir seçenektir. Dayanıklı tasarımıyla radyatörlerinizi güvenli bir şekilde boyamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Bi'Boya firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
   "ozellikler" => ["Isıya Dayanıklı", "Beyaz Parlak Renk", "0,75 Litre Hacim", "Sararma Yapmaz", "Kolay Uygulama", "Uzun Ömürlü", "Bi Boya Kalitesi"]
],
   [
    "id" => 114, 
    "kat" => "boya", 
    "resim" => "fotolar/boya6.png", 
    "baslik" => "Filli Boya Filli Kapatan Boya 0,25", 
    "fiyat" => "349",
        "aciklama" => "Bu kapatan boya, 0,25 litre hacmi ve Filli Boya kalitesiyle iç cephe boyası olarak ideal bir seçenektir. Dayanıklı tasarımıyla duvarlarınızı güvenli bir şekilde boyamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Filli Boya firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Kapatan Boya', '0,25 Litre Hacmi', 'Dayanıklı Tasarım', 'Duvarları Güvenli Bir Şekilde Boyamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Filli Boya Kalitesi']
],
[
    "id" => 115, 
    "kat" => "boya", 
    "resim" => "fotolar/boya7.png", 
    "baslik" => "Dyo Hidrolux 2.5 Lt Beyaz(ahşap,metal,duvar ve yüzeyler için)", 
    "fiyat" => "1550",
        "aciklama" => "Bu hidrolux boya, 2,5 litre hacmi ve beyaz renk seçeneğiyle iç cephe boyası olarak ideal bir seçenektir. Ahşap, metal, duvar ve yüzeyler için uygun formülüyle çok yönlü kullanım sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Dyo firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Hidrolux Boya', '2,5 Litre Hacmi', 'Beyaz Renk', 'Ahşap, Metal, Duvar ve Yüzeyler İçin Uygun Formül', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Dyo Kalitesi']
],
[
    "id" => 116, 
    "kat" => "boya", 
    "resim" => "fotolar/boya8.png", 
    "baslik" => "Filli Boya Betakril Tavan Boyası 1 kg", 
    "fiyat" => "250",
        "aciklama" => "Bu tavan boyası  1 kg hacmi ve Filli Boya kalitesiyle iç cephe boyası olarak ideal bir seçenektir. Dayanıklı tasarımıyla tavanlarınızı güvenli bir şekilde boyamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Filli Boya firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",
],


// --- BOYA & YAPI: DIŞ CEPHE BOYALARI ---
[
    "id" => 117, 
    "kat" => "dis-cephe", 
    "resim" => "fotolar/disboya1.png", 
    "baslik" => "Düfa Diamond Silikonlu Dış Cephe Boyası Beyaz 10 kg", 
    "fiyat" => "952",
        "aciklama" => "Bu silikonlu dış cephe boyası, 10 kg hacmi ve beyaz renk seçeneğiyle dış cephe boyası olarak ideal bir seçenektir. Dayanıklı tasarımıyla dış cephelerinizi güvenli bir şekilde boyamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Düfa firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Silikonlu Formül', '10 kg Hacmi', 'Beyaz Renk', 'Dayanıklı Tasarım', 'Dış Cepheleri Güvenli Bir Şekilde Boyamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Düfa Kalitesi']
],
[
    "id" => 118, 
    "kat" => "dis-cephe", 
    "resim" => "fotolar/disboya2.png", 
    "baslik" => "Düfa Silosan Silikonlu Grenli Beyaz 25 kg", 
    "fiyat" => "1680",
        "aciklama" => "Bu silikonlu grenli beyaz dış cephe boyası, 25 kg hacmi ve Düfa kalitesiyle dış cephe boyası olarak ideal bir seçenektir. Dayanıklı tasarımıyla dış cephelerinizi güvenli bir şekilde boyamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Düfa firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Silikonlu Formül', 'Grenli Beyaz Renk', '25 kg Hacmi', 'Dayanıklı Tasarım', 'Dış Cepheleri Güvenli Bir Şekilde Boyamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Düfa Kalitesi']
],
[
    "id" => 119, 
    "kat" => "dis-cephe", 
    "resim" => "fotolar/disboya3.png", 
    "baslik" => "Fawori Silikonlu Dış Cephe Astarı 20 Kg.", 
    "fiyat" => "1323",
        "aciklama" => "Bu silikonlu dış cephe astarı, 20 kg hacmi ve Fawori kal itesiyle dış cephe boyası olarak ideal bir seçenektir. Dayanıklı tasarımıyla dış cephelerinizi güvenli bir şekilde boyamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Fawori firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Silikonlu Formül', '20 kg Hacmi', 'Dayanıklı Tasarım', 'Dış Cepheleri Güvenli Bir Şekilde Boyamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Fawori Kalitesi']
],
[
    "id" => 120, 
    "kat" => "dis-boya", 
    "resim" => "fotolar/disboya4.png", 
    "baslik" => "Tempo Silikonlu Dış Cephe Boyası - Beyaz 15 Lt", 
    "fiyat" => "2600",
        "aciklama" => "Bu silikonlu dış cephe boyası, 15 litre hacmi ve beyaz renk seçeneğiyle dış cephe boyası olarak ideal bir seçenektir. Dayanıklı tasarımıyla dış cephelerinizi güvenli bir şekilde boyamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Tempo firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Silikonlu Formül', '15 Litre Hacmi', 'Beyaz Renk', 'Dayanıklı Tasarım', 'Dış Cepheleri Güvenli Bir Şekilde Boyamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Tempo Kalitesi']
],
[
    "id" => 121, 
    "kat" => "dis-boya", 
    "resim" => "fotolar/disboya5.png", 
    "baslik" => "Asrın Yol Çizgi Boyası Sarı 3kg.", 
    "fiyat" => "750",
        "aciklama" => "Bu yol çizgi boyası, sarı renk ve 3 kg hacmiyle dış cephe boyası olarak ideal bir seçenektir. Dayanıklı tasarımıyla dış cephelerinizi güvenli bir şekilde boyamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Asrın Yol firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Yol Çizgi Boyası', 'Sarı Renk', '3 kg Hacmi', 'Dayanıklı Tasarım', 'Dış Cepheleri Güvenli Bir Şekilde Boyamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Asrın Yol Kalitesi']
],
[
    "id" => 122, 
    "kat" => "dis-boya", 
    "resim" => "fotolar/disboya6.png", 
    "baslik" => "Hickson Decor Hıckson Decor Ultra Plus Wood Dış Cephe Ahşap Boyası Burma - 1 lt", 
    "fiyat" => "999.99",
        "aciklama" => "Bu dış cephe ahşap boyası, 1 litre hacmi ve Burma renk seçeneğiyle dış cephe boyası olarak ideal bir seçenektir. Dayanıklı tasarımıyla dış cephelerinizi güvenli bir şekilde boyamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Hickson Decor firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Dış Cephe Ahşap Boyası', '1 Litre Hacmi', 'Burma Renk', 'Dayanıklı Tasarım', 'Dış Cepheleri Güvenli Bir Şekilde Boyamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Hickson Decor Kalitesi']
],
[
    "id" => 123, 
    "kat" => "dis-boya", 
    "resim" => "fotolar/disboya7.png", 
    "baslik" => "Hammerite Direkt Pas Üstüne Çekiçlenmiş Metal Boyası 2.5 Lt Altın", 
    "fiyat" => "1197",
        "aciklama" => "Bu direkt pas üstüne çekiçlenmiş metal boyası, 2,5 litre hacmi ve altın renk seçeneğiyle dış cephe boyası olarak ideal bir seçenektir. Dayanıklı tasarımıyla dış cephelerinizi güvenli bir şekilde boyamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Hammerite firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Direkt Pas Üstüne Çekiçlenmiş Metal Boyası', '2,5 Litre Hacmi', 'Altın Renk', 'Dayanıklı Tasarım', 'Dış Cepheleri Güvenli Bir Şekilde Boyamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Hammerite Kalitesi']
],
[
    "id" => 124, 
    "kat" => "dis-boya", 
    "resim" => "fotolar/disboya8.png", 
    "baslik" => "Zırh Yalıtımlı Dış Cephe Boyası 3 kg Kırık Beyaz", 
    "fiyat" => "1600",
        "aciklama" => "Bu yalıtımlı dış cephe boyası, 3 kg hacmi ve kırık beyaz renk seçeneğiyle dış cephe boyası olarak ideal bir seçenektir. Dayanıklı tasarımıyla dış cephelerinizi güvenli bir şekilde boyamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Zırh firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Yalıtımlı Dış Cephe Boyası', '3 kg Hacmi', 'Kırık Beyaz Renk', 'Dayanıklı Tasarım', 'Dış Cepheleri Güvenli Bir Şekilde Boyamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Zırh Kalitesi']
],

// --- BOYA & YAPI: FIRÇA VE RULO REYONU ---
[
    "id" => 125, 
    "kat" => "firca", 
    "resim" => "fotolar/firca1.png", 
    "baslik" => "Elden Hırdavat Parmak Rulo Boya Rulosu 10 cm + 10 Yedek Rulo", 
    "fiyat" => "187,90",
        "aciklama" => "Bu parmak rulo boya rulosu seti, 10 cm genişliğinde bir rulo ve 10 yedek rulo içerir. Dayanıklı tasarımıyla evinizde güvenli bir şekilde boya uygulaması yapmanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Elden Hırdavat firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Parmak Rulo Boya Rulosu', '10 cm Genişliğinde Rulo', '10 Yedek Rulo', 'Dayanıklı Tasarım', 'Evde Güvenli Boya Uygulaması İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Elden Hırdavat Kalitesi']
],
[
    "id" => 126, 
    "kat" => "firca", 
    "resim" => "fotolar/firca2.png", 
    "baslik" => "İzmir Fırça Pratik Boyacı Seti 25 cm", 
    "fiyat" => "350",
        "aciklama" => "Bu pratik boyacı seti, 25 cm genişliğinde bir fırça içerir. Dayanıklı tasarımıyla evinizde güvenli bir şekilde boya uygulaması yapmanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. İzmir Fırça firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",
    'ozellikler' => ['Pratik Boyacı Seti', '25 cm Genişliğinde Fırça', 'Dayanıklı Tasarım', 'Evde Güvenli Boya Uygulaması İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','İzmir Fırça Kalitesi']
],
[
    "id" => 127, 
    "kat" => "firca", 
    "resim" => "fotolar/firca3.png", 
    "baslik" => "Buhobi Cadence Boya Kadife Kaplı Iz Bırakmayan Rulo Fırça Seti 6 Parça", 
    "fiyat" => "285.00",
        "aciklama" => "Bu boya kadife kaplı iz bırakmayan rulo fırça seti, 6 parçadan oluşur. Dayanıklı tasarımıyla evinizde güvenli bir şekilde boya uygulaması yapmanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Buhobi Cadence firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Boya Kadife Kaplı Rulo Fırça Seti', 'Iz Bırakmayan Tasarım', '6 Parça Set', 'Dayanıklı Tasarım', 'Evde Güvenli Boya Uygulaması İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Buhobi Cadence Kalitesi']
],
[
    "id" => 128, 
    "kat" => "firca", 
    "resim" => "fotolar/firca4.png", 
    "baslik" => "İzmir Fırça Profesynel Boyacı Seti 10 cm", 
    "fiyat" => "182",
        "aciklama" => "Bu profesyonel boyacı seti, 10 cm genişliğinde bir fırça içerir. Dayanıklı tasarımıyla evinizde güvenli bir şekilde boya uygulaması yapmanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. İzmir Fırça firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",
    'ozellikler' => ['Profesyonel Boyacı Seti', '10 cm Genişliğinde Fırça', 'Dayanıklı Tasarım', 'Evde Güvenli Boya Uygulaması İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','İzmir Fırça Kalitesi']
],
[
    "id" => 129, 
    "kat" => "firca", 
    "resim" => "fotolar/firca5.png", 
    "baslik" => "Cadence Boya İz Bırakmayan İpek Fırça Seti 10CM Kadife Rulo ve Parmak Fırça ile Sanatsal Çalışmalar İçin", 
    "fiyat" => "75.00",
        "aciklama" => "Bu boya iz bırakmayan ipek fırça seti, 10 cm genişliğinde bir kadife rulo ve parmak fırça içerir. Dayanıklı tasarımıyla evinizde güvenli bir şekilde boya uygulaması yapmanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Cadence firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Boya İz Bırakmayan İpek Fırça Seti', '10 cm Genişliğinde Kadife Rulo ve Parmak Fırça', 'Sanatsal Çalışmalar İçin İdeal', 'Dayanıklı Tasarım', 'Evde Güvenli Boya Uygulaması İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Cadence Kalitesi']
],
[
    "id" => 130, 
    "kat" => "firca", 
    "resim" => "fotolar/firca6.png", 
    "baslik" => "Polisan Pro Tavan Kestirme Fırçası", 
    "fiyat" => "65.00",
        "aciklama" => "Bu tavan kestirme fırçası, Polisan Pro kalitesiyle iç cephe boyası olarak ideal bir seçenektir. Dayanıklı tasarımıyla tavanlarınızı güvenli bir şekilde boyamak için idealdir. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Polisan Pro firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Tavan Kestirme Fırçası', 'Polisan Pro Kalitesi', 'Dayanıklı Tasarım', 'Tavanları Güvenli Bir Şekilde Boyamak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Polisan Pro Kalitesi']
],
[
    "id" => 131, 
    "kat" => "firca", 
    "resim" => "fotolar/firca7.png", 
    "baslik" => "Dekor 6131 Sentetik Vernik Fırçası 40 mm", 
    "fiyat" => "200",
        "aciklama" => "Bu sentetik vernik fırçası, 40 mm genişliğinde bir fırça içerir. Dayanıklı tasarımıyla evinizde güvenli bir şekilde vernik uygulaması yapmanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Dekor firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Sentetik Vernik Fırçası', '40 mm Genişliğinde Fırça', 'Dayanıklı Tasarım', 'Evde Güvenli Vernik Uygulaması İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Dekor Kalitesi']
],
[
    "id" => 132, 
    "kat" => "firca", 
    "resim" => "fotolar/firca8.png", 
    "baslik" => "Badem10 Hışır Örtü Boyacı Naylonu Eşya Zemin Koruma 20 M² (4x5 Metre)", 
    "fiyat" => "169.99",
        "aciklama" => "Bu hışır örtü boyacı naylonu, 20 m² (4x5 metre) genişliğinde bir örtü içerir. Dayanıklı tasarımıyla evinizde güvenli bir şekilde boya uygulaması yapmanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Badem10 firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Hışır Örtü Boyacı Naylonu', '20 m² (4x5 Metre) Genişliğinde Örtü', 'Dayanıklı Tasarım', 'Evde Güvenli Boya Uygulaması İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Badem10 Kalitesi']
],

// --- BOYA & YAPI: YAPIŞTIRICILAR VE SİLİKONLAR ---
[
    "id" => 133, 
    "kat" => "yapistirici", 
    "resim" => "fotolar/yapistirici1.png", 
    "baslik" => "Selsil Ultra Tack Hibrit Güçlü Montaj Yapıştırıcı - Kokusuz, UV ve Hava Koşullarına Dayanıklı, 290 ml", 
    "fiyat" => "239",
        "aciklama" => "Bu hibrit güçlü montaj yapıştırıcı, 290 ml hacmi ve Selsil kalitesiyle iç cephe yapıştırıcısı olarak ideal bir seçenektir. Kokusuz formülü, UV ve hava koşullarına dayanıklı özellikleriyle güvenli bir şekilde yapıştırma işlemi yapmanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Selsil firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Hibrit Güçlü Montaj Yapıştırıcı', 'Kokusuz Formül', 'UV ve Hava Koşullarına Dayanıklı', '290 ml Hacmi', 'Güvenli Yapıştırma İşlemi İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Selsil Kalitesi']
],
[
    "id" => 134, 
    "kat" => "yapistirici", 
    "resim" => "fotolar/yapistirici2.png", 
    "baslik" => "Selsil Ultra Tack Yapıştırıcı Yüksek Mukavemetli 290 ml", 
    "fiyat" => "275",
        "aciklama" => "Bu yüksek mukavemetli yapıştırıcı, 290 ml hacmi ve Selsil kalitesiyle iç cephe yapıştırıcısı olarak ideal bir seçenektir. Dayanıklı tasarımıyla güvenli bir şekilde yapıştırma işlemi yapmanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Selsil firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Yüksek Mukavemetli Yapıştırıcı', '290 ml Hacmi', 'Dayanıklı Tasarım', 'Güvenli Yapıştırma İşlemi İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Selsil Kalitesi']
],
[
    "id" => 135, 
    "kat" => "yapistirici", 
    "resim" => "fotolar/yapistirici3.png", 
    "baslik" => "Selsil Ultra Tack Korniş Yapıştırıcısı ve 350 kg Ağırlık Taşıyan Hybrid Çok Güçlü Yapıştırıcı 290 ml", 
    "fiyat" => "263",
        "aciklama" => "Bu korniş yapıştırıcısı, 290 ml hacmi ve Selsil kalitesiyle iç cephe yapıştırıcısı olarak ideal bir seçenektir. Hybrid çok güçlü formülü, 350 kg ağırlık taşıma kapasitesiyle güvenli bir şekilde yapıştırma işlemi yapmanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Selsil firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Korniş Yapıştırıcısı', '350 kg Ağırlık Taşıma Kapasitesi', 'Hybrid Çok Güçlü Formül', '290 ml Hacmi', 'Güvenli Yapıştırma İşlemi İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Selsil Kalitesi']
],
[
    "id" => 136, 
    "kat" => "yapistirici", 
    "resim" => "fotolar/yapistirici4.png", 
    "baslik" => "Selsil Hibrit Ultra Tack Güçlü Yapıştırıcı 290 ml Beyaz", 
    "fiyat" => "45.00",
        "aciklama" => "Bu güçlü yapıştırıcı, 290 ml hacmi ve beyaz renk seçeneğiyle iç cephe yapıştırıcısı olarak ideal bir seçenektir. Hibrit formülüyle güvenli bir şekilde yapıştırma işlemi yapmanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Selsil firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Güçlü Yapıştırıcı', '290 ml Hacmi', 'Beyaz Renk', 'Hibrit Formül', 'Güvenli Yapıştırma İşlemi İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Selsil Kalitesi']
],
[
    "id" => 137, 
    "kat" => "yapistirici", 
    "resim" => "fotolar/yapistirici5.png", 
    "baslik" => "Dayson Extra Pu Mastik Güçlü Yapıştırıcı Beyaz 280 Ml.", 
    "fiyat" => "325",
        "aciklama" => "Bu güçlü yapıştırıcı, 280 ml hacmi ve beyaz renk seçeneğiyle iç cephe yapıştırıcısı olarak ideal bir seçenektir. Extra PU mastik formülüyle güvenli bir şekilde yapıştırma işlemi yapmanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Dayson firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Güçlü Yapıştırıcı', '280 ml Hacmi', 'Beyaz Renk', 'Extra PU Mastik Formülü', 'Güvenli Yapıştırma İşlemi İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Dayson Kalitesi']
],
[
    "id" => 138, 
    "kat" => "yapistirici", 
    "resim" => "fotolar/yapistirici6.png", 
    "baslik" => "Dayson Pu Mastik Silikon Yapıştırıcı Siyah 280 ml", 
    "fiyat" => "299.99",
        "aciklama" => "Bu silikon yapıştırıcı, 280 ml hacmi ve siyah renk seçeneğiyle iç cephe yapıştırıcısı olarak ideal bir seçenektir. PU mastik formülüyle güvenli bir şekilde yapıştırma işlemi yapmanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Dayson firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Silikon Yapıştırıcı', '280 ml Hacmi', 'Siyah Renk', 'PU Mastik Formülü', 'Güvenli Yapıştırma İşlemi İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Dayson Kalitesi']
],
[
    "id" => 139, 
    "kat" => "yapistirici", 
    "resim" => "fotolar/yapistirici7.png", 
    "baslik" => "Pointer Poitner Sıvı Silikon Yapıştırıcı 250 ml", 
    "fiyat" => "189.90",
        "aciklama" => "Bu sıvı silikon yapıştırıcı, 250 ml hacmiyle iç cephe yapıştırıcısı olarak ideal bir seçenektir. Dayanıklı tasarımıyla güvenli bir şekilde yapıştırma işlemi yapmanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Pointer Poitner firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Sıvı Silikon Yapıştırıcı', '250 ml Hacmi', 'Dayanıklı Tasarım', 'Güvenli Yapıştırma İşlemi İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Pointer Poitner Kalitesi']
],
[
    "id" => 140, 
    "kat" => "yapistirici", 
    "resim" => "fotolar/yapistirici8.png", 
    "baslik" => "Somafix Korniş ve Montaj Yapıştırıcısı Tüp", 
    "fiyat" => "179",
        "aciklama" => "Bu korniş ve montaj yapıştırıcısı, tüp formunda ve Somafix kalitesiyle iç cephe yapıştırıcısı olarak ideal bir seçenektir. Dayanıklı tasarımıyla güvenli bir şekilde yapıştırma işlemi yapmanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Somafix firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Korniş ve Montaj Yapıştırıcısı', 'Tüp Formu', 'Dayanıklı Tasarım', 'Güvenli Yapıştırma İşlemi İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Somafix Kalitesi']
],
[
    "id" => 141, 
    "kat" => "yapistirici", 
    "resim" => "fotolar/yapistirici9.png", 
    "baslik" => "Stanley Çift Taraflı Nano Bant Kuvvetli Silikon Jel Yapıştırıcı", 
    "fiyat" => "233.75",
        "aciklama" => "Bu çift taraflı nano bant yapıştırıcı, kuvvetli silikon jel formülüyle iç cephe yapıştırıcısı olarak ideal bir seçenektir. Dayanıklı tasarımıyla güvenli bir şekilde yapıştırma işlemi yapmanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Stanley firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Çift Taraflı Nano Bant Yapıştırıcı', 'Kuvvetli Silikon Jel Formülü', 'Dayanıklı Tasarım', 'Güvenli Yapıştırma İşlemi İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Stanley Kalitesi']
],
[
    "id" => 142, 
    "kat" => "yapistirici", 
    "resim" => "fotolar/yapistirici10.png", 
    "baslik" => "Mikasso Elsa Bond Süper Hızlı Yapıştırıcı, S02 Japon Yapıştırıcı G", 
    "fiyat" => "45",
        "aciklama" => "Bu süper hızlı yapıştırıcı, S02 Japon yapıştırıcı formülüyle iç cephe yapıştırıcısı olarak ideal bir seçenektir. Dayanıklı tasarımıyla güvenli bir şekilde yapıştırma işlemi yapmanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Mikasso firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Süper Hızlı Yapıştırıcı', 'S02 Japon Yapıştırıcı Formülü', 'Dayanıklı Tasarım', 'Güvenli Yapıştırma İşlemi İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Mikasso Kalitesi']
],

// --- İŞ GÜVENLİĞİ: BARET REYONU --- 
[
    "id" => 143, 
    "kat" => "baret", 
    "resim" => "fotolar/baret1.png", 
    "baslik" => "3M G3000 Havalandırmalı Baret", 
    "fiyat" => "1160",
        "aciklama" => "Bu havalandırmalı baret, 3M kalitesiyle iş güvenliği için ideal bir seçenektir. Dayanıklı tasarımıyla başınızı güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. 3M firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Havalandırmalı Baret', 'Dayanıklı Tasarım', 'Başınızı Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','3M Kalitesi']
],
[
    "id" => 144, 
    "kat" => "baret", 
    "resim" => "fotolar/baret2.png", 
    "baslik" => "Baret (Sarı)", 
    "fiyat" => "135",
        "aciklama" => "Bu sarı baret, iş güvenliği için ideal bir seçenektir. Dayanıklı tasarımıyla başınızı güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Sarı Baret', 'Dayanıklı Tasarım', 'Başınızı Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Yüksek Kalite']
],
[
    "id" => 145, 
    "kat" => "baret", 
    "resim" => "fotolar/baret3.png", 
    "baslik" => " E3M G3000 NUV RD BARET KIRMIZI", 
    "fiyat" => "1400",
        "aciklama" => "Bu kırmızı baret, 3M kalitesiyle iş güvenliği için ideal bir seçenektir. Dayanıklı tasarımıyla başınızı güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. 3M firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Kırmızı Baret', 'Dayanıklı Tasarım', 'Başınızı Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','3M Kalitesi']
],
[
    "id" => 146, 
    "kat" => "baret", 
    "resim" => "fotolar/baret4.png", 
    "baslik" => "Delta Plus Deltaplus Balbı 2 Şeffaf Polikarbonat Siperlikli Siperlik Tutucu", 
    "fiyat" => "750",
        "aciklama" => "Bu şeffaf polikarbonat siperlikli baret, Delta Plus kalitesiyle iş güvenliği için ideal bir seçenektir. Dayanıklı tasarımıyla başınızı güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Delta Plus firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",  
    'ozellikler' => ['Şeffaf Polikarbonat Siperlikli Baret', 'Dayanıklı Tasarım', 'Başınızı Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Delta Plus Kalitesi']
],
[
    "id" => 147, 
    "kat" => "baret", 
    "resim" => "fotolar/baret5.png", 
    "baslik" => "33M G2N Baret Içliği Vidalı", 
    "fiyat" => "829",
        "aciklama" => "Bu vidalı baret içliği, 3M kalitesiyle iş güvenliği için ideal bir seçenektir. Dayanıklı tasarımıyla başınızı güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. 3M firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",  
    'ozellikler' => ['Vidalı Baret İçliği', 'Dayanıklı Tasarım', 'Başınızı Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','3M Kalitesi']
],
[
    "id" => 148, 
    "kat" => "baret", 
    "resim" => "fotolar/baret6.png", 
    "baslik" => "Essafe Vidalı Baret + Slotlu Braket + Kulaklık + Yeşil Yüz Koruyucu Siperlik
3,7
", 
    "fiyat" => "1550",
        "aciklama" => "Bu vidalı baret seti, slotlu braket, kulaklık ve yeşil yüz koruyucu siperlik içeren bir iş güvenliği ekipmanıdır. Dayanıklı tasarımıyla başınızı güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Essafe firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Vidalı Baret Seti', 'Slotlu Braket', 'Kulaklık', 'Yeşil Yüz Koruyucu Siperlik', 'Dayanıklı Tasarım', 'Başınızı Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Essafe Kalitesi'] 

],
[
    "id" => 149, 
    "kat" => "baret", 
    "resim" => "fotolar/baret7.png", 
    "baslik" => "Hunsafety Baret Güneşliği - Tam Kenarlı Baş ve Boyun Korumalı Güneş Koruyuculuğu Siperlik Şapka", 
    "fiyat" => "590",
        "aciklama" => "Bu güneşlikli baret, tam kenarlı baş ve boyun korumalı güneş koruyuculuğu siperlik şapka tasarımıyla iş güvenliği için ideal bir seçenektir. Dayanıklı tasarımıyla başınızı güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Hunsafety firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Güneşlikli Baret', 'Tam Kenarlı Baş ve Boyun Koruma', 'Güneş Koruyuculuğu Siperlik Şapka', 'Dayanıklı Tasarım', 'Başınızı Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Hunsafety Kalitesi']
],

// --- İŞ GÜVENLİĞİ: İŞ ELDİVENLERİ ---
[
    "id" => 150, 
    "kat" => "eldiven", 
    "resim" => "fotolar/eldiven1.png", 
    "baslik" => "Dnd 10 Kesilmeye Dayanıklı İş Eldiveni", 
    "fiyat" => "200",
        "aciklama" => "Bu kesilmeye dayanıklı iş eldiveni, Dnd kalitesiyle iş güvenliği için ideal bir seçenektir. Dayanıklı tasarımıyla ellerinizi güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Dnd firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Kesilmeye Dayanıklı İş Eldiveni', 'Dayanıklı Tasarım', 'Ellerinizi Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Dnd Kalitesi']
],
[
    "id" => 151, 
    "kat" => "eldiven", 
    "resim" => "fotolar/eldiven2.png", 
    "baslik" => "AGM Kesilmez Çelik Eldiven Paslanmaz Çelik Tel Hasır Örgü Kasap Kesim Eldiveni , Çelik Örgü Eldiveni", 
    "fiyat" => "425",
        "aciklama" => "Bu kesilmez çelik eldiven, paslanmaz çelik tel hasır örgü tasarımıyla iş güvenliği için ideal bir seçenektir. Dayanıklı tasarımıyla ellerinizi güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. AGM firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Kesilmez Çelik Eldiven', 'Paslanmaz Çelik Tel Hasır Örgü Tasarımı', 'Ellerinizi Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','AGM Kalitesi']
],
[
    "id" => 152, 
    "kat" => "eldiven", 
    "resim" => "fotolar/eldiven3.png", 
    "baslik" => "Sgs NİTRİL KAPLAMA ÖRME ELDİVEN SARI SPEED-10", 
    "fiyat" => "34.50",
        "aciklama" => "Bu nitril kaplama örme eldiven, sarı renk seçeneğiyle iş güvenliği için ideal bir seçenektir. Dayanıklı tasarımıyla ellerinizi güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Sgs firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Nitril Kaplama Örme Eldiven', 'Sarı Renk', 'Dayanıklı Tasarım', 'Ellerinizi Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Sgs Kalitesi']
],
[
    "id" => 153, 
    "kat" => "eldiven", 
    "resim" => "fotolar/eldiven4.png", 
    "baslik" => "Deybi Eldiven - Nitril (PN5)(9 Beden, 12 Çiftli Paket, Kırmızı Siyah)", 
    "fiyat" => "435",
        "aciklama" => "Bu nitril eldiven, 9 beden ve 12 çiftli paket seçeneğiyle iş güvenliği için ideal bir seçenektir. Kırmızı siyah renk kombinasyonuyla dayanıklı tasarımıyla ellerinizi güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Deybi firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Nitril Eldiven', '9 Beden Seçeneği', '12 Çiftli Paket', 'Kırmızı Siyah Renk Kombinasyonu', 'Dayanıklı Tasarım', 'Ellerinizi Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Deybi Kalitesi']
],
[
    "id" => 154, 
    "kat" => "eldiven", 
    "resim" => "fotolar/eldiven5.png", 
    "baslik" => "Aran meşem Protectıon Deri Kaynak Eldiveni", 
    "fiyat" => "500",
        "aciklama" => "Bu deri kaynak eldiveni, Aran meşem Protectıon kalitesiyle iş güvenliği için ideal bir seçenektir. Dayanıklı tasarımıyla ellerinizi güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Aran meşem Protectıon firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Deri Kaynak Eldiveni', 'Dayanıklı Tasarım', 'Ellerinizi Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Aran meşem Protectıon Kalitesi']
],
[
    "id" => 155, 
    "kat" => "eldiven", 
    "resim" => "fotolar/eldiven6.png", 
    "baslik" => "Starline Mavi Nitrilli Eldiven / E-370 Petrol Eldiiveni", 
    "fiyat" => "86.99",
        "aciklama" => "Bu mavi nitrilli eldiven, E-370 petrol eldiveni olarak iş güvenliği için ideal bir seçenektir. Dayanıklı tasarımıyla ellerinizi güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Starline firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Mavi Nitrilli Eldiven', 'E-370 Petrol Eldiveni', 'Dayanıklı Tasarım', 'Ellerinizi Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Starline Kalitesi']
],

// --- İŞ GÜVENLİĞİ: İŞ AYAKKABILARI ---
[
    "id" => 156, 
    "kat" => "ayakkabi", 
    "resim" => "fotolar/ayakkabi1.png", 
    "baslik" => "Nublado Ulaş Pvc Çizme Sarı Uzun Oto Yıkama Şantiye.", 
    "fiyat" => "385",
        "aciklama" => "Bu PVC çizme, Nublado kalitesiyle iş güvenliği için ideal bir seçenektir. Sarı renk seçeneği ve uzun tasarımıyla ayaklarınızı güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Nublado firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['PVC Çizme', 'Sarı Renk', 'Uzun Tasarım', 'Ayaklarınızı Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Nublado Kalitesi']
],
[
    "id" => 157, 
    "kat" => "ayakkabi", 
    "resim" => "fotolar/ayakkabi2.png", 
    "baslik" => "Derby Bahçe Şantiye Çizmesi Uzun Boğaz No:42", 
    "fiyat" => "1300",
        "aciklama" => "Bu bahçe şantiye çizmesi, Derby kalitesiyle iş güvenliği için ideal bir seçenektir. Uzun boğaz tasarımı ve No:42 numarasıyla ayaklarınızı güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Derby firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Bahçe Şantiye Çizmesi', 'Uzun Boğaz Tasarımı', 'No:42 Numara', 'Ayaklarınızı Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Derby Kalitesi']
],
[
    "id" => 158 , 
    "kat" => "ayakkabi", 
    "resim" => "fotolar/ayakkabi3.png", 
    "baslik" => "Nublado İŞ Ayakkabısı Çelik Demir Burunlu Nubuk Bağcıklı Sportif Güvenlik Inşaatçı Ayakkabı Şantiye", 
    "fiyat" => "1699.99",
        "aciklama" => "Bu iş ayakkabısı, Nublado kalitesiyle iş güvenliği için ideal bir seçenektir. Çelik demir burunlu tasarımı, nubuk malzemesi ve bağcıklı sportif görünümüyle ayaklarınızı güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Nublado firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Çelik Demir Burunlu İş Ayakkabısı', 'Nubuk Malzeme', 'Bağcıklı Sportif Tasarım', 'Ayaklarınızı Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Nublado Kalitesi']
],


// --- İŞ GÜVENLİĞİ: EMNİYET GÖZLÜKLERİ ve maskeler ---
[
    "id" => 159, 
    "kat" => "maske", 
    "resim" => "fotolar/gozluk1.png", 
    "baslik" => "3M 6200 Yarım Yüz Maskesi ve 3M 6051 A1 Maske Filtresi", 
    "fiyat" => "1250",
        "aciklama" => "Bu yarım yüz maskesi ve maske filtresi seti, 3M kalitesiyle iş güvenliği için ideal bir seçenektir. Dayanıklı tasarımıyla yüzünüzü güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. 3M firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['Yarım Yüz Maskesi ve Maske Filtresi Seti', 'Dayanıklı Tasarım', 'Yüzünüzü Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','3M Kalitesi']
],
[
    "id" => 160, 
    "kat" => "maske", 
    "resim" => "fotolar/gozluk2.png", 
    "baslik" => "Viola Valente Koruyucu Yüz Siperlik", 
    "fiyat" => "350",
        "aciklama" => "Bu koruyucu yüz siperlik, Viola Valente kalitesiyle iş güvenliği için ideal bir seçenektir. Dayanıklı tasarımıyla yüzünüzü güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Viola Valente firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",   
    'ozellikler' => ['Koruyucu Yüz Siperlik', 'Dayanıklı Tasarım', 'Yüzünüzü Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Viola Valente Kalitesi']
],
[
    "id" => 161, 
    "kat" => "maske", 
    "resim" => "fotolar/gozluk3.png", 
    "baslik" => "Essafe Yüz Koruyucu Siperlik (20x40 cm) Şeffaf (Takım) (GE-1202)", 
    "fiyat" => "349",
        "aciklama" => "Bu yüz koruyucu siperlik, Essafe kalitesiyle iş güvenliği için ideal bir seçenektir. Şeffaf tasarımıyla yüzünüzü güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Essafe firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Yüz Koruyucu Siperlik', 'Şeffaf Tasarım', 'Yüzünüzü Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Essafe Kalitesi']
],
[
    "id" => 162, 
    "kat" => "maske", 
    "resim" => "fotolar/gozluk4.png", 
    "baslik" => "3M 9322 Ffp2 Ventilli Toz ve Sis Maskesi (N95)", 
    "fiyat" => "315.00",
        "aciklama" => "Bu ventilli toz ve sis maskesi, 3M kalitesiyle iş güvenliği için ideal bir seçenektir. Ffp2 ve N95 standartlarına uygun tasarımıyla yüzünüzü güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. 3M firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Ventilli Toz ve Sis Maskesi', 'Ffp2 ve N95 Standartlarına Uygun', 'Dayanıklı Tasarım', 'Yüzünüzü Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','3M Kalitesi']
],
[
    "id" => 163, 
    "kat" => "maske", 
    "resim" => "fotolar/gozluk5.png", 
    "baslik" => "Dräger Drager x Plore 3300 Yarım Yüz Maske Filitre Dahil", 
    "fiyat" => "1394",
        "aciklama" => "Bu yarım yüz maske, Dräger kalitesiyle iş güvenliği için ideal bir seçenektir. Filtre dahil tasarımıyla yüzünüzü güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Dräger firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Yarım Yüz Maske', 'Filtre Dahil', 'Dayanıklı Tasarım', 'Yüzünüzü Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Dräger Kalitesi']
],
[
    "id" => 164, 
    "kat" => "gozluk", 
    "resim" => "fotolar/gozluk6.png", 
    "baslik" => "Baymax S-400 Standart Şeffaf Koruyucu Çapak İş Gözlüğü (3 Adet)", 
    "fiyat" => "114",
        "aciklama" => "Bu standart şeffaf koruyucu çapak iş gözlüğü, Baymax kalitesiyle iş güvenliği için ideal bir seçenektir. 3 adet içeren setiyle gözlerinizi güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Baymax firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Standart Şeffaf Koruyucu Çapak İş Gözlüğü', '3 Adet İçeren Set', 'Dayanıklı Tasarım', 'Gözlerinizi Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Baymax Kalitesi']
],
[
    "id" => 165, 
    "kat" => "gozluk", 
    "resim" => "fotolar/gozluk7.png", 
    "baslik" => "Badem10 Orient Otomatik Kararan Kaynakçı Kaynak Gözlüğü Kaynak Maskesi Koruyucu Gözlük", 
    "fiyat" => "649.99",
        "aciklama" => "Bu otomatik kararan kaynakçı gözlüğü, Badem10 kalitesiyle iş güvenliği için ideal bir seçenektir. Kaynak maskesi tasarımıyla gözlerinizi güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Badem10 firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",   
    'ozellikler' => ['Otomatik Kararan Kaynakçı Gözlüğü', 'Kaynak Maskesi Tasarımı', 'Dayanıklı Tasarım', 'Gözlerinizi Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Badem10 Kalitesi']
],
[
    "id" => 166, 
    "kat" => "gozluk", 
    "resim" => "fotolar/gozluk8.png", 
    "baslik" => "Sgs Max Safety Koruyucu Toz Gözlüğü Optimum", 
    "fiyat" => "114",
        "aciklama" => "Bu koruyucu toz gözlüğü, Sgs Max Safety kalitesiyle iş güvenliği için ideal bir seçenektir. Optimum tasarımıyla gözlerinizi güvenli bir şekilde korumanızı sağlar. Profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Sgs Max Safety firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Koruyucu Toz Gözlüğü', 'Optimum Tasarım', 'Dayanıklı Tasarım', 'Gözlerinizi Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Sgs Max Safety Kalitesi']
],
[
    "id" => 167, 
    "kat" => "gozluk", 
    "resim" => "fotolar/gozluk9.png", 
    "baslik" => "Baymax Güvenlik Koruyucu Gözlük Integral Siyah Kaynak Gözlüğü Çift Cam", 
    "fiyat" => "230",
        "aciklama" => "Bu güvenlik koruyucu gözlük, Baymax kalitesiyle iş güvenliği için ideal bir seçenektir. Integral siyah kaynak gözlüğü tasarımıyla gözlerinizi güvenli bir şekilde korumanızı sağlar. Çift cam özelliğiyle dayanıklı tasarımıyla profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Baymax firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.",    
    'ozellikler' => ['Güvenlik Koruyucu Gözlük', 'Integral Siyah Kaynak Gözlüğü Tasarımı', 'Çift Cam Özelliği', 'Dayanıklı Tasarım', 'Gözlerinizi Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Baymax Kalitesi']
],
[
    "id" => 168, 
    "kat" => "gozluk", 
    "resim" => "fotolar/gozluk10.png", 
    "baslik" => "Badem10 İş Güvenlik Güvenliği Kaynak Gözlüğü Antifog Buğulanmaz Koruyucu Gözlük Ventilli Gümüş Renk", 
    "fiyat" => "449.90",
        "aciklama" => "Bu iş güvenlik gözlüğü, Badem10 kalitesiyle iş güvenliği için ideal bir seçenektir. Antifog buğulanmaz özellikli koruyucu gözlük tasarımıyla gözlerinizi güvenli bir şekilde korumanızı sağlar. Ventilli gümüş renk seçeneğiyle dayanıklı tasarımıyla profesyonel ve amatör kullanıcılar için uygundur. Uzun ömürlü malzemelerden üretilmiştir. Badem10 firmasının yüksek kalite standartlarına uygun olarak üretilmiştir.", 
    'ozellikler' => ['İş Güvenlik Gözlüğü', 'Antifog Buğulanmaz Özellik', 'Koruyucu Gözlük Tasarımı', 'Ventilli Gümüş Renk Seçeneği', 'Dayanıklı Tasarım', 'Gözlerinizi Güvenli Bir Şekilde Korumak İçin İdeal', 'Profesyonel ve Amatör Kullanım İçin Uygun', 'Uzun Ömürlü Malzeme','Badem10 Kalitesi']
],
















];
?>