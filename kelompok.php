<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Kelompok - EduLab</title>
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
            <a href="./topik.php" class="normal">Topik</a>
            <a href="./modul.php" class="normal">Modul</a>
            <a href="./start-praktikum.php" class="normal">Praktikum</a>
            <a href="./kelompok.php" class="active">Tugas Kelompok</a>
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
            <img src="./assets/images/Logo.png" alt="Logo EduLab" onclick="window.location.href='./index.php'">
            <h2 onclick="window.location.href='./index.php'">EduLab</h2>
        </div>

        <!-- Mobile Navigation Menu -->
        <div class="mobile-nav">
            <div class="nav-item" onclick="window.location.href='./index.php'">
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
            <!-- Kelompok Info Section -->
            <div class="kelompok-info">
                <h2>Tugas Kelompok - Indikator Asam Basa</h2>
                <div class="kelompok-card">
                    <h3>🤝 Kelompok 3</h3>
                    <div class="anggota-list">
                        <div class="anggota">
                            <img src="https://placehold.co/32?text=B" alt="Budi">
                            <span>Budi Santoso (10A) - Ketua</span>
                        </div>
                        <div class="anggota">
                            <img src="https://placehold.co/32?text=A" alt="Ani">
                            <span>Ani Putri (10A)</span>
                        </div>
                        <div class="anggota">
                            <img src="https://placehold.co/32?text=C" alt="Citra">
                            <span>Citra Dewi (10A)</span>
                        </div>
                        <div class="anggota">
                            <img src="https://placehold.co/32?text=D" alt="Doni">
                            <span>Doni Rahman (10A)</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Studi Kasus Section -->
            <div class="studi-kasus-section">
                <h2>📋 Studi Kasus</h2>

                <div class="kasus-content">
                    <div class="pertanyaan-kasus">
                        <h3>Pertanyaan Studi Kasus:</h3>
                        <ol>
                            <li>Apa perubahan warna yang terjadi pada indikator alami saat kontak dengan larutan asam
                                basa?</li>
                            <li>Bagaimana cara membandingkan hasil pengukuran pH menggunakan indikator alami dan
                                indikator buatan?</li>
                            <li>Apakah ada faktor-faktor tertentu yang memengaruhi akurasi pengukuran pH dengan
                                indikator alami?</li>
                            <li>Apa pelajaran penting yang kalian dapatkan dari kegiatan ini mengenai pengukuran pH dan
                                penggunaan indikator?</li>
                        </ol>
                    </div>

                    <div class="alat-bahan">
                        <div class="alat-section">
                            <h3>🔬 Alat:</h3>
                            <ul>
                                <li>Gelas</li>
                                <li>Kertas Lakmus</li>
                            </ul>
                        </div>

                        <div class="bahan-section">
                            <h3>🧪 Bahan:</h3>
                            <ul>
                                <li>Air Sungai</li>
                                <li>Air Jeruk</li>
                                <li>Air Beckline</li>
                                <li>Air Cuka</li>
                                <li>Air Mawar</li>
                                <li>Air Kunyit</li>
                            </ul>
                        </div>
                    </div>

                    <div class="prosedur-section">
                        <h3>📝 Prosedur Kerja:</h3>
                        <ol>
                            <li>Teteskan masing-masing larutan ke dalam palet tetes.</li>
                            <li>Beri label untuk membedakan tiap larutan.</li>
                            <li>Celupkan kertas lakmus merah ke dalam masing-masing palet.</li>
                            <li>Amati perubahan warna kertas lakmus.</li>
                            <li>Catat hasilnya ke dalam tabel yang disediakan.</li>
                            <li>Ulangi percobaan untuk kertas lakmus biru.</li>
                        </ol>
                    </div>

                    <div class="tabel-section">
                        <h3>📊 Tabel Pengamatan:</h3>
                        <div class="table-container">
                            <table class="pengamatan-table">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Larutan</th>
                                        <th colspan="2">Perubahan pada</th>
                                        <th>Sifat Larutan</th>
                                    </tr>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Lakmus Merah</th>
                                        <th>Lakmus Biru</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Air Jeruk</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Minuman berkarbonasi</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Larutan detergen</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Larutan garam dapur</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Larutan cuka</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>Air mineral</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>Larutan pasta gigi</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Nilai Section -->
            <div class="nilai-section">
                <h2>📊 Penilaian Kelompok</h2>
                <div class="nilai-container">
                    <div class="nilai-card">
                        <h3>Nilai Akhir</h3>
                        <div class="nilai-display">
                            <span class="nilai-angka">85</span>
                            <span class="nilai-grade">B+</span>
                        </div>
                        <div class="nilai-breakdown">
                            <div class="nilai-item">
                                <span>Kerjasama Tim:</span>
                                <span class="nilai">90</span>
                            </div>
                            <div class="nilai-item">
                                <span>Analisis Data:</span>
                                <span class="nilai">80</span>
                            </div>
                            <div class="nilai-item">
                                <span>Presentasi:</span>
                                <span class="nilai">85</span>
                            </div>
                            <div class="nilai-item">
                                <span>Laporan:</span>
                                <span class="nilai">85</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feedback Section -->
            <div class="feedback-section">
                <h2>💬 Feedback dari Guru</h2>
                <div class="feedback">
                    <p class="teacher">Guru Kimia: Ibu Ani</p>
                    <p>Kelompok ini menunjukkan kerjasama yang baik dalam melakukan percobaan indikator asam basa.
                        Analisis data cukup mendalam, namun perlu lebih detail dalam menjelaskan faktor-faktor yang
                        mempengaruhi akurasi pengukuran pH.</p>
                    <p class="date">18 Agustus 2025</p>
                </div>
                <div class="feedback">
                    <p class="teacher">Asisten Lab: Pak Budi</p>
                    <p>Presentasi kelompok sangat baik dengan visual yang menarik. Saran untuk ke depan: lebih focus
                        pada perbandingan hasil antara indikator alami dan buatan untuk analisis yang lebih
                        komprehensif.</p>
                    <p class="date">19 Agustus 2025</p>
                </div>
                <div class="feedback">
                    <p class="teacher">Guru Kimia: Ibu Ani</p>
                    <p>Overall, ini adalah salah satu tugas kelompok terbaik untuk topik indikator asam basa. Keep up
                        the good work!</p>
                    <p class="date">20 Agustus 2025</p>
                </div>
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