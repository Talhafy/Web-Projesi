<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Kullanıcı adı ve şifre alanlarını kontrol etme
    if (empty($_POST['email']) || empty($_POST['password'])) {
        header("Location: index.php?error=empty");
        exit();
    }

    // Kullanıcı adının mail adresi olup olmadığını kontrol etme
    $email = $_POST['email'];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?error=invalidemail");
        exit();
    }

    // Şifre kontrolü
    $password = $_POST['password'];
    $studentNumber = substr($email, 1, strpos($email, '@') - 1); // Öğrenci numarasını almak için

    // Kullanıcı adı ve şifrenin eşleştiğini kontrol etme
    if ($password === $studentNumber) {
        // Giriş başarılıysa
        $_SESSION['username'] = $studentNumber; // Oturum oluşturma
        header("Location: welcome.php");
        exit();
    } else {
        // Giriş başarısızsa
        header("Location: index.php?error=incorrect");
        exit();
    }
}
?>
