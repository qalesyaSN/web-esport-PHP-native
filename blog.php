<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Artikel - Waris Esports</title>

    <!-- Tailwind CSS with Typography Plugin via CDN -->
    <script src="https://cdn.tailwindcss.com/3.4.1?plugins=typography"></script>

    <!-- Animate On Scroll (AOS) CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        /* Custom styles untuk font dan tampilan */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&family=Teko:wght@700&display=swap');
        
        body {
            font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #ffffff;
            color: #111827;
            scroll-behavior: smooth;
        }

        /* Dark Mode styles */
        .dark body {
            background-color: #0d1117; /* Warna latar belakang yang sangat gelap */
            color: #f3f4f6;
        }

        .dark .card-bg {
            background-color: #1f2937; /* abu-abu-800 */
        }
        
        .card-bg {
            background-color: #f9fafb; /* abu-abu-50 */
        }

        .primary-accent {
            background-color: #dc2626; /* merah-600 */
            color: white;
        }
        .primary-accent-text {
            color: #dc2626;
        }

        /* Font khusus untuk logo */
        .font-logo {
            font-family: 'Teko', sans-serif;
        }
    </style>
    
    <script>
        // Konfigurasi custom untuk Tailwind, termasuk plugin Typography
        tailwind.config = {
          darkMode: 'class',
          theme: {
            extend: {
              fontFamily: {
                'logo': ['Teko', 'sans-serif'],
              },
              colors: {
                'brand-dark': '#0d1117',
                'brand-dark-card': '#1f2937',
                'brand-light': '#ffffff',
                'brand-light-card': '#f9fafb',
                'brand-accent': '#dc2626',
              },
            }
          }
        }
      </script>

</head>
<body class="transition-colors duration-300">

    <!-- HEADER (Sama seperti halaman utama) -->
    <header class="bg-gray-900/80 dark:bg-brand-dark/80 backdrop-blur-sm fixed top-0 left-0 right-0 z-50">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                <div class="flex-shrink-0"><a href="index.html" class="font-logo text-4xl text-white uppercase tracking-wider">W<span class="text-brand-accent">A</span>RIS</a></div>
                <nav class="hidden md:flex items-center space-x-8">
                    <a href="index.html" class="text-gray-300 hover:text-white transition-colors duration-200">Home</a>
                    <a href="index.html#roster" class="text-gray-300 hover:text-white transition-colors duration-200">Roster</a>
                    <a href="article-list.html" class="text-white font-bold transition-colors duration-200">Artikel</a>
                    <a href="index.html#gallery" class="text-gray-300 hover:text-white transition-colors duration-200">Gallery</a>
                </nav>
                <div class="flex items-center space-x-4">
                    <button id="theme-toggle" class="text-gray-400 hover:text-white focus:outline-none"><i id="theme-icon" class="fas fa-sun text-xl"></i></button>
                    <button id="mobile-menu-button" class="md:hidden text-gray-400 hover:text-white focus:outline-none"><i class="fas fa-bars text-xl"></i></button>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu Navigasi Mobile (Sama seperti halaman utama) -->
    <div id="mobile-menu" class="hidden md:hidden fixed inset-0 bg-brand-dark z-40 pt-20">
        <div class="flex flex-col items-center justify-center h-full space-y-8">
            <a href="index.html" class="mobile-menu-link text-2xl text-gray-300 hover:text-white">Home</a>
            <a href="index.html#roster" class="mobile-menu-link text-2xl text-gray-300 hover:text-white">Roster</a>
            <a href="article-list.html" class="mobile-menu-link text-2xl text-white font-bold">Artikel</a>
            <a href="index.html#gallery" class="mobile-menu-link text-2xl text-gray-300 hover:text-white">Gallery</a>
        </div>
    </div>


    <main class="pt-20">
        <!-- KONTEN DAFTAR ARTIKEL -->
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <!-- Header Halaman -->
            <div class="text-center" data-aos="fade-up">
                <h1 class="text-5xl font-extrabold">Berita & Artikel</h1>
                <p class="mt-4 max-w-2xl mx-auto text-lg text-gray-400">Ikuti perkembangan terbaru, analisis mendalam, dan cerita di balik layar dari tim Waris Esports.</p>
            </div>

            <!-- Grid Daftar Artikel -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-12">
                <!-- Kartu Artikel 1 -->
                <div class="card-bg rounded-lg overflow-hidden shadow-lg flex flex-col transform hover:-translate-y-2 transition-transform duration-300" data-aos="fade-up" data-aos-delay="100">
                    <a href="article-detail.html" class="block aspect-square">
                        <img src="https://dummyimage.com/600x600/111/dc2626.png&text=MATCH+WIN" alt="Thumbnail Artikel 1" class="w-full h-full object-cover">
                    </a>
                    <div class="p-6 flex flex-col flex-grow">
                        <p class="text-brand-accent text-sm font-semibold uppercase">Analisis Pertandingan</p>
                        <h2 class="text-xl font-bold mt-2 flex-grow"><a href="article-detail.html" class="hover:text-brand-accent transition-colors">Kemenangan Dramatis WARIS di Final Lower Bracket</a></h2>
                        <p class="text-gray-400 mt-2 text-sm">Tertinggal 0-2, WARIS menunjukkan mental baja dan membalikkan keadaan menjadi 3-2.</p>
                        <div class="mt-4 pt-4 border-t border-gray-700/50">
                            <a href="article-detail.html" class="font-semibold text-white hover:text-brand-accent">Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Kartu Artikel 2 -->
                <div class="card-bg rounded-lg overflow-hidden shadow-lg flex flex-col transform hover:-translate-y-2 transition-transform duration-300" data-aos="fade-up" data-aos-delay="200">
                    <a href="article-detail.html" class="block aspect-square">
                        <img src="https://dummyimage.com/600x600/111/fff.png&text=NEW+PLAYER" alt="Thumbnail Artikel 2" class="w-full h-full object-cover">
                    </a>
                    <div class="p-6 flex flex-col flex-grow">
                        <p class="text-brand-accent text-sm font-semibold uppercase">Berita Tim</p>
                        <h2 class="text-xl font-bold mt-2 flex-grow"><a href="article-detail.html" class="hover:text-brand-accent transition-colors">WARIS Perkenalkan Roster Baru untuk Musim Depan</a></h2>
                        <p class="text-gray-400 mt-2 text-sm">Menyambut talenta muda berbakat untuk memperkuat tim di kompetisi selanjutnya.</p>
                        <div class="mt-4 pt-4 border-t border-gray-700/50">
                            <a href="article-detail.html" class="font-semibold text-white hover:text-brand-accent">Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Kartu Artikel 3 -->
                <div class="card-bg rounded-lg overflow-hidden shadow-lg flex flex-col transform hover:-translate-y-2 transition-transform duration-300" data-aos="fade-up" data-aos-delay="300">
                    <a href="article-detail.html" class="block aspect-square">
                        <img src="https://dummyimage.com/600x600/111/fff.png&text=GUIDE" alt="Thumbnail Artikel 3" class="w-full h-full object-cover">
                    </a>
                    <div class="p-6 flex flex-col flex-grow">
                        <p class="text-brand-accent text-sm font-semibold uppercase">Tips & Trik</p>
                        <h2 class="text-xl font-bold mt-2 flex-grow"><a href="article-detail.html" class="hover:text-brand-accent transition-colors">5 Tips Aim dari Pro Player WARIS, John Smith</a></h2>
                        <p class="text-gray-400 mt-2 text-sm">Pelajari cara meningkatkan akurasi tembakan Anda langsung dari ahlinya.</p>
                        <div class="mt-4 pt-4 border-t border-gray-700/50">
                            <a href="article-detail.html" class="font-semibold text-white hover:text-brand-accent">Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Kartu Artikel 4 -->
                <div class="card-bg rounded-lg overflow-hidden shadow-lg flex flex-col transform hover:-translate-y-2 transition-transform duration-300" data-aos="fade-up" data-aos-delay="100">
                    <a href="article-detail.html" class="block aspect-square">
                        <img src="https://dummyimage.com/600x600/111/fff.png&text=BEHIND+SCENES" alt="Thumbnail Artikel 4" class="w-full h-full object-cover">
                    </a>
                    <div class="p-6 flex flex-col flex-grow">
                        <p class="text-brand-accent text-sm font-semibold uppercase">Cerita Tim</p>
                        <h2 class="text-xl font-bold mt-2 flex-grow"><a href="article-detail.html" class="hover:text-brand-accent transition-colors">Di Balik Layar: Kehidupan di Gaming House WARIS</a></h2>
                        <p class="text-gray-400 mt-2 text-sm">Intip keseharian para pemain profesional kami di luar panggung kompetisi.</p>
                        <div class="mt-4 pt-4 border-t border-gray-700/50">
                            <a href="article-detail.html" class="font-semibold text-white hover:text-brand-accent">Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Kartu Artikel 5 -->
                <div class="card-bg rounded-lg overflow-hidden shadow-lg flex flex-col transform hover:-translate-y-2 transition-transform duration-300" data-aos="fade-up" data-aos-delay="200">
                    <a href="article-detail.html" class="block aspect-square">
                        <img src="https://dummyimage.com/600x600/111/fff.png&text=PARTNERSHIP" alt="Thumbnail Artikel 5" class="w-full h-full object-cover">
                    </a>
                    <div class="p-6 flex flex-col flex-grow">
                        <p class="text-brand-accent text-sm font-semibold uppercase">Pengumuman</p>
                        <h2 class="text-xl font-bold mt-2 flex-grow"><a href="article-detail.html" class="hover:text-brand-accent transition-colors">WARIS Umumkan Kemitraan Strategis dengan Steelseries</a></h2>
                        <p class="text-gray-400 mt-2 text-sm">Sebuah kolaborasi untuk menghadirkan gear gaming terbaik bagi para pemain dan fans.</p>
                        <div class="mt-4 pt-4 border-t border-gray-700/50">
                            <a href="article-detail.html" class="font-semibold text-white hover:text-brand-accent">Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Kartu Artikel 6 -->
                <div class="card-bg rounded-lg overflow-hidden shadow-lg flex flex-col transform hover:-translate-y-2 transition-transform duration-300" data-aos="fade-up" data-aos-delay="300">
                    <a href="article-detail.html" class="block aspect-square">
                        <img src="https://dummyimage.com/600x600/111/fff.png&text=TOURNAMENT" alt="Thumbnail Artikel 6" class="w-full h-full object-cover">
                    </a>
                    <div class="p-6 flex flex-col flex-grow">
                        <p class="text-brand-accent text-sm font-semibold uppercase">Recap Event</p>
                        <h2 class="text-xl font-bold mt-2 flex-grow"><a href="article-detail.html" class="hover:text-brand-accent transition-colors">Recap Turnamen Good Friday: Penuh Aksi dan Kejutan</a></h2>
                        <p class="text-gray-400 mt-2 text-sm">Melihat kembali momen-momen terbaik dari turnamen komunitas yang sukses besar.</p>
                        <div class="mt-4 pt-4 border-t border-gray-700/50">
                            <a href="article-detail.html" class="font-semibold text-white hover:text-brand-accent">Baca Selengkapnya <i class="fas fa-arrow-right ml-1"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Paginasi -->
            <nav class="flex justify-center items-center mt-16 space-x-2" data-aos="fade-up">
                <a href="#" class="px-4 py-2 rounded-lg bg-gray-800 text-gray-400 opacity-50 cursor-not-allowed">
                    <i class="fas fa-chevron-left"></i>
                </a>
                <a href="#" class="px-4 py-2 rounded-lg bg-brand-accent text-white font-bold">1</a>
                <a href="#" class="px-4 py-2 rounded-lg text-white hover:bg-gray-700 transition-colors">2</a>
                <a href="#" class="px-4 py-2 rounded-lg text-white hover:bg-gray-700 transition-colors">3</a>
                <span class="px-4 py-2 text-gray-500">...</span>
                <a href="#" class="px-4 py-2 rounded-lg text-white hover:bg-gray-700 transition-colors">8</a>
                <a href="#" class="px-4 py-2 rounded-lg text-white hover:bg-gray-700 transition-colors">
                    <i class="fas fa-chevron-right"></i>
                </a>
            </nav>

        </div>
    </main>

    <!-- FOOTER (Sama seperti halaman utama) -->
    <footer class="bg-gray-900 dark:bg-brand-dark-card border-t border-gray-700 mt-16">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
                <div><h3 class="font-logo text-3xl text-white uppercase">W<span class="text-brand-accent">A</span>RIS</h3><p class="mt-2 text-gray-400 text-sm">Professional esports team competing at the highest level. Est. 2020.</p></div>
                <div><h4 class="font-semibold text-white uppercase">Quick Links</h4><ul class="mt-4 space-y-2"><li><a href="index.html#roster" class="text-gray-400 hover:text-white">Roster</a></li><li><a href="index.html#events" class="text-gray-400 hover:text-white">Events</a></li><li><a href="index.html#achievements" class="text-gray-400 hover:text-white">Achievements</a></li></ul></div>
                <div><h4 class="font-semibold text-white uppercase">Follow Us</h4><div class="mt-4 flex justify-center md:justify-start space-x-5"><a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube text-2xl"></i></a><a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram text-2xl"></i></a><a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-tiktok text-2xl"></i></a><a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter text-2xl"></i></a></div></div>
            </div>
            <div class="mt-12 border-t border-gray-800 pt-8 text-center text-gray-500 text-sm"><p>&copy; 2025 Waris Esports. All Rights Reserved.</p></div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inisialisasi AOS
        AOS.init({
            duration: 800,
            once: true,
        });

        // --- LOGIKA UI ---
        document.addEventListener('DOMContentLoaded', () => {
            const themeToggleBtn = document.getElementById('theme-toggle');
            const themeIcon = document.getElementById('theme-icon');
            const docElement = document.documentElement;
            
            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuLinks = document.querySelectorAll('.mobile-menu-link');

            // Fungsi untuk menerapkan tema
            const applyTheme = (theme) => {
                if (theme === 'dark') {
                    docElement.classList.add('dark');
                    themeIcon.classList.remove('fa-sun');
                    themeIcon.classList.add('fa-moon');
                } else {
                    docElement.classList.remove('dark');
                    themeIcon.classList.remove('fa-moon');
                    themeIcon.classList.add('fa-sun');
                }
            };

            // Terapkan tema saat halaman dimuat (default ke 'dark')
            applyTheme(localStorage.getItem('theme') || 'dark');

            // Event listener untuk tombol ganti tema
            themeToggleBtn.addEventListener('click', () => {
                const isDarkMode = docElement.classList.contains('dark');
                const newTheme = isDarkMode ? 'light' : 'dark';
                localStorage.setItem('theme', newTheme);
                applyTheme(newTheme);
            });

            // Event listener untuk tombol menu mobile
            mobileMenuButton.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });
            
            // Event listener untuk menutup menu saat link di-klik
            mobileMenuLinks.forEach(link => {
                link.addEventListener('click', () => {
                    const href = link.getAttribute('href');
                    if (href && !href.startsWith('#')) {
                        // Tidak perlu menyembunyikan, karena halaman akan berganti
                    } else {
                        mobileMenu.classList.add('hidden');
                    }
                });
            });
        });
    </script>
</body>
</html>

