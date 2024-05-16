<?php
// Kullanıcı adı ve şifre sabitleri
$kayitKullaniciAdi = "B231210583@sakarya.edu.tr";
$kayitSifre = "B231210583";

// Formdan gelen verileri al
$girisKullaniciAdi = $_POST["email"];
$girisSifre = $_POST["password"];

// E-posta kontrolü
if (!filter_var($girisKullaniciAdi, FILTER_VALIDATE_EMAIL)) {
    header("Location: girisyap.html"); // Eğer e-posta formatında değilse giriş sayfasına geri yönlendir
    exit();
}

// Boşluk kontrolü
if (empty($girisKullaniciAdi) || empty($girisSifre)) {
    header("Location: girisyap.html"); // Eğer alanlar boşsa giriş sayfasına geri yönlendir
    exit();
}

// Kullanıcı adı ve şifre kontrolü
if ($girisKullaniciAdi === $kayitKullaniciAdi && $girisSifre === $kayitSifre) {
    echo "Hoşgeldiniz  " . $kayitKullaniciAdi; // Giriş başarılı mesajı
} else {
    header("Location: girisyap.html"); // Giriş başarısızsa giriş sayfasına geri yönlendir
    exit();
}
?>
