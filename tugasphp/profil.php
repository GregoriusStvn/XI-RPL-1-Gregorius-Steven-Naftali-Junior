<?php
$nama = "Gregorius Steven";
$sekolah = "SMKN 2 BANDUNG";
$cita_cita = "Menjadi seorang Programmer di perusahaan game ternama";
$umur = "16";
$email = "gregoriussteven31@gmail.com";
$ig = "gregor1ussteven";
$github = "GregoriusStvn";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <div class="intro">
            <h1>Hello, I'm <?=$nama ?></h1>
            <p>High School Student</p>
        </div>
    </section>

    <section id="about">
        <h2>About Me</h2>
        <p>Aku adalah seorang murid di <?=$sekolah?> </p>
        <p>Cita-cita ku adalah <?=$cita_cita?> </p>
        <p>Umur saya adalah <?=$umur?></p>
    </section>

    <section id="contact">
        <h2>Contact</h2>
        <p>Jika Anda ingin menghubungi saya, silakan menghubungi saya melalui salah satu metode berikut:</p>
        <ul>
            <li>Email: <a href="mailto:gregoriussteven31@gmail.com"><?=$email ?></a></li>
            <li>Instagram: <a href="https://www.instagram.com/gregor1ussteven?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><?=$ig?></a></li>
            <li>GitHub: <a href="https://github.com/GregoriusStvn"><?=$github?></a></li>
        </ul>
    </section> <br>

    <footer>
        <p>&copy; 2024 Gregorius Steven. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>