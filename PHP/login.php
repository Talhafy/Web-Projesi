<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Kullanıcı bilgilerini kontrol et
        // Örneğin: Veritabanında kullanıcı bilgileriyle karşılaştırma yapılabilir

        if ($username === $password) { // Örneğin: Basit bir kontrol, şifre öğrenci numarası ile aynı mı diye bakıyoruz
            echo "Hoşgeldiniz $username"; // Başarılı giriş mesajı
        } else {
            header("Location: login.html"); // Başarısız giriş durumunda login sayfasına geri yönlendir
            exit;
        }
    }
?>
