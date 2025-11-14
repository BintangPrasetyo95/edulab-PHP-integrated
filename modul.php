<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul - EduLab</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="shortcut icon" href="./assets/images/Logo.png" type="image/x-icon">
</head>

<body>
    <div class="loader">
        <div class="spinner"></div>
        <p>Loading...</p>
    </div>
    <div class="bg-circle circle1"></div>
    <div class="bg-circle circle2"></div>

    <header>
        <div class="header-left">
            <img src="./assets/images/Logo.png" alt="Logo EduLab" onclick="window.location.href='./beranda.php'">
            <h1 onclick="window.location.href='./beranda.php'">EduLab</h1>
        </div>
        <button class="mobile-menu-toggle" onclick="toggleMobileMenu()">☰</button>
        <nav class="navbar">
            <a href="./beranda.php" class="normal">Beranda</a>
            <a href="./topik.php" class="active">Topik</a>
            <a href="./modul.php" class="normal">Modul</a>
            <a href="./start-praktikum.php" class="normal">Praktikum</a>
            <a href="./kelompok.php" class="disabled">Tugas Kelompok</a>
        </nav>
        <div class="header-right">
            <div class="notification" onclick="toggleNotification()">
                <span class="notification-icon">🔔</span>
                <div class="notification-dropdown" id="notification-dropdown">
                    <h3>Notifikasi</h3>
                    <p onclick="window.location.href='./topik.php?topic=asam-basa'">Quiz Asam Basa besok jam 08.00!</p>
                </div>
            </div>
            <div class="profile" onclick="toggleProfile()">
                <img src="./assets/images/profile-picture.jpeg" alt="Profil">
                <span class="profile-icon">Budi (10A)</span>
                <div class="profile-dropdown" id="profile-dropdown">
                    <p onclick="window.location.href='./profile.php'">Profil</p>
                    <p onclick="window.location.href='./profile.php#inprogress-topics'">Topik Praktikum</p>
                    <p>Pengaturan</p>
                    <p onclick="window.location.href='./index.php'" class="logout">Log Out</p>
                </div>
            </div>
        </div>
    </header>

    <aside>
        <div class="sidebar-header">
            <img src="./assets/images/Logo.png" alt="Logo EduLab" onclick="window.location.href='./beranda.php'">
            <h2 onclick="window.location.href='./beranda.php'">EduLab</h2>
        </div>

        <!-- Mobile Navigation Menu -->
        <div class="mobile-nav">
            <div class="nav-item" onclick="window.location.href='./beranda.php'">
                🏠 Beranda
            </div>
            <div class="nav-item active" onclick="window.location.href='./topik.php'">
                📚 Topik
            </div>
            <div class="nav-item" onclick="window.location.href='./modul.php'">
                📖 Modul
            </div>
            <div class="nav-item" onclick="window.location.href='./start-praktikum.php'">
                🧪 Praktikum
            </div>
            <div class="nav-item disabled" onclick="window.location.href='./kelompok.php'">
                🤝 Tugas Kelompok
            </div>
        </div>

        <hr>

        <div class="level" onclick="toggleLevel(this)"><span class="arrow">▶</span> Pengenalan</div>
        <div class="sub-level">
            <div class="topic" onclick="window.location.href='./pengenalan.php?section=alat-laboratorium'">Alat
                Laboratorium</div>
            <div class="topic" onclick="window.location.href='./pengenalan.php#keselamatan-dasar'">Keselamatan Dasar
            </div>
        </div>

        <div class="level" onclick="toggleLevel(this)"><span class="arrow">▶</span> Simbol Bahaya</div>
        <div class="sub-level">
            <div class="topic" onclick="window.location.href='./simbol-bahaya.php'">Simbol-Simbol Bahaya</div>
            <div class="topic" onclick="window.location.href='./simbol-bahaya.php#panduan-keselamatan'">Panduan Umum
                Keselamatan</div>
        </div>

        <hr>

        <div class="level" onclick="toggleLevel(this)"><span class="arrow">▶</span> Kelas 10</div>
        <div class="sub-level">
            <div class="mata-pelajaran" onclick="toggleTopic(this)"><span class="arrow">▶</span> Kimia</div>
            <div class="topics">
                <div class="topic" onclick="window.location.href='./topik.php?topic=asam-basa'">Asam Basa</div>
                <div class="topic" onclick="window.location.href='./topik.php?topic=redoks'">Redoks</div>
            </div>
            <div class="mata-pelajaran" onclick="toggleTopic(this)"><span class="arrow">▶</span> Fisika</div>
            <div class="topics">
                <div class="topic" onclick="window.location.href='./topik.php?topic=gerak'">Gerak Lurus</div>
            </div>
        </div>
        <div class="level" onclick="toggleLevel(this)"><span class="arrow">▶</span> Kelas 11</div>
        <div class="sub-level">
            <div class="mata-pelajaran" onclick="toggleTopic(this)"><span class="arrow">▶</span> Kimia</div>
            <div class="topics">
                <div class="topic" onclick="window.location.href='./topik.php?topic=stoikiometri'">Stoikiometri</div>
            </div>
            <div class="mata-pelajaran" onclick="toggleTopic(this)"><span class="arrow">▶</span> Fisika</div>
            <div class="topics">
                <div class="topic" onclick="window.location.href='./topik.php?topic=energi'">Energi</div>
            </div>
        </div>
        <div class="level" onclick="toggleLevel(this)"><span class="arrow">▶</span> Kelas 12</div>
        <div class="sub-level">
            <div class="mata-pelajaran" onclick="toggleTopic(this)"><span class="arrow">▶</span> Kimia</div>
            <div class="topics">
                <div class="topic" onclick="window.location.href='./topik.php?topic=polimer'">Polimer</div>
            </div>
            <div class="mata-pelajaran" onclick="toggleTopic(this)"><span class="arrow">▶</span> Fisika</div>
            <div class="topics">
                <div class="topic" onclick="window.location.href='./topik.php?topic=listrik'">Listrik</div>
            </div>
        </div>
    </aside>

    <main>
        <div class="main-card">
            <div class="header-boxes">
                <div class="header-box modul" onclick="renderModulContent('modul')">
                    <h2>Modul</h2>
                </div>
                <div class="header-box video" onclick="renderModulContent('video')">
                    <h2>Video Tutorial</h2>
                </div>
            </div>
            <div class="content-card" id="content-card">
                <p>Pilih modul atau video tutorial di atas.</p>
            </div>
        </div>
    </main>

    <footer>
        <p>©2025 EduLab. All Rights Reserved.</p>
        <p style="font-size: 0.8rem; margin-top: 0.5rem;">
            Developed by NeoEngineer |
            <a href="https://wa.me/6282185168851" style="color: white;">Contact Us</a>
        </p>
    </footer>

    <script src="./assets/main.js"></script>
    <script src="./assets/javascript/asam-basa.js"></script>
    <script src="./assets/javascript/redoks.js"></script>
    <script src="./assets/javascript/gerak.js"></script>
    <script src="./assets/javascript/stoikiometri.js"></script>
    <script src="./assets/javascript/energi.js"></script>
    <script src="./assets/javascript/polimer.js"></script>
    <script src="./assets/javascript/listrik.js"></script>
</body>

</html>