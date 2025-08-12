<!DOCTYPE html>
<html lang="id" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title ?? $site->site_title; ?></title>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?=$url ?? $site->site_url; ?>">
    <meta property="og:title" content="<?=$title ?? $site->site_title; ?>">
    <meta property="og:description" content="<?=$description ?? $site->seo_meta_description; ?>">
    <meta property="og:image" content="<?=$image ?? $site->site_logo; ?>">
    <meta property="og:site_name" content="<?=$title ?? $site->site_title; ?>">
    <meta property="og:locale" content="id_ID">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?=$url ?? $site->site_url; ?>">
    <meta property="twitter:title" content="<?=$title ?? $site->site_title; ?>">
    <meta property="twitter:description" content="<?=$description ?? $site->seo_meta_description; ?>">
    <meta property="twitter:image" content="<?=$image ?? $site->site_logo; ?>">



    <!-- Tailwind CSS via CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

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
        background-color: #0d1117;
        /* Warna latar belakang yang sangat gelap */
        color: #f3f4f6;
    }

    .dark .card-bg {
        background-color: #1f2937;
        /* abu-abu-800 */
    }

    .card-bg {
        background-color: #f9fafb;
        /* abu-abu-50 */
    }

    .primary-accent {
        background-color: #dc2626;
        /* merah-600 */
        color: white;
    }
    .primary-accent-text {
        color: #dc2626;
    }

    /* Font khusus untuk logo */
    .font-logo {
        font-family: 'Teko', sans-serif;
    }
    /* Custom styling untuk Swiper.js Banner */
        .hero-slider .swiper-button-next,
        .hero-slider .swiper-button-prev {
            color: #fff;
            background-color: rgba(0, 0, 0, 0.2);
            width: 44px;
            height: 44px;
            border-radius: 50%;
            transition: background-color 0.3s ease;
        }
        .hero-slider .swiper-button-next:hover,
        .hero-slider .swiper-button-prev:hover {
             background-color: rgba(220, 38, 38, 0.7);
        }
        .hero-slider .swiper-button-next::after,
        .hero-slider .swiper-button-prev::after {
            font-size: 18px;
            font-weight: 800;
        }
        .hero-slider .swiper-pagination-bullet {
            background-color: rgba(255, 255, 255, 0.6);
            width: 10px;
            height: 10px;
            opacity: 1;
        }
        .hero-slider .swiper-pagination-bullet-active {
            background-color: #dc2626;
        }
</style>

<script>
    // Konfigurasi custom untuk Tailwind
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                fontFamily: {
                    'logo': ['Teko', 'sans-serif'],
                },
                typography: ({ theme }) => ({
                DEFAULT: {
                  css: {
                    '--tw-prose-body': theme('colors.gray[800]'),
                    '--tw-prose-headings': theme('colors.gray[900]'),
                    '--tw-prose-lead': theme('colors.gray[700]'),
                    '--tw-prose-links': theme('colors.red[600]'),
                    '--tw-prose-bold': theme('colors.gray[900]'),
                    '--tw-prose-counters': theme('colors.gray[600]'),
                    '--tw-prose-bullets': theme('colors.red[400]'),
                    '--tw-prose-hr': theme('colors.gray[300]'),
                    '--tw-prose-quotes': theme('colors.gray[900]'),
                    '--tw-prose-quote-borders': theme('colors.red[300]'),
                    '--tw-prose-captions': theme('colors.gray[700]'),
                    '--tw-prose-code': theme('colors.red[900]'),
                    '--tw-prose-pre-code': theme('colors.red[100]'),
                    '--tw-prose-pre-bg': theme('colors.gray[900]'),
                    '--tw-prose-invert-body': theme('colors.gray[200]'),
                    '--tw-prose-invert-headings': theme('colors.white'),
                    '--tw-prose-invert-lead': theme('colors.gray[300]'),
                    '--tw-prose-invert-links': theme('colors.white'),
                    '--tw-prose-invert-bold': theme('colors.white'),
                    '--tw-prose-invert-counters': theme('colors.gray[400]'),
                    '--tw-prose-invert-bullets': theme('colors.red[600]'),
                    '--tw-prose-invert-hr': theme('colors.gray[700]'),
                    '--tw-prose-invert-quotes': theme('colors.gray[100]'),
                    '--tw-prose-invert-quote-borders': theme('colors.red[700]'),
                    '--tw-prose-invert-captions': theme('colors.gray[400]'),
                    '--tw-prose-invert-code': theme('colors.white'),
                    '--tw-prose-invert-pre-code': theme('colors.gray[300]'),
                    '--tw-prose-invert-pre-bg': 'rgb(0 0 0 / 50%)',
                  },
                },
              }),
                colors: {
                    // Warna kustom Anda
                    'brand-dark': '#0d1117',
                    'brand-dark-card': '#1f2937',
                    'brand-light': '#ffffff',
                    'brand-light-card': '#f9fafb',
                    'brand-accent': '#dc2626',

                    // TAMBAHKAN INI UNTUK MENGEMBALIKAN WARNA COKELAT
                    'brown': {
                        50: '#fef3c7',
                        100: '#fde68a',
                        200: '#fcd34d',
                        300: '#fbbf24',
                        400: '#f59e0b',
                        500: '#d97706',
                        600: '#b45309',
                        700: '#92400e',
                        800: '#78350f',
                        900: '#6b2b0e',
                        950: '#422006',
                    },
                },
                aspectRatio: {
                    'square': '1 / 1',
                    'video': '16 / 9',
                    'wide': '21 / 9',
                },
            }
        }
    }
</script>

</head>
<body class="transition-colors duration-300">

<!-- HEADER -->
<header class="bg-gray-900/80 dark:bg-brand-dark/80 backdrop-blur-sm fixed top-0 left-0 right-0 z-50">
<div class="container mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex items-center justify-between h-20">
<!-- Logo -->
<div class="flex-shrink-0">
<a href="/"><img src="<?=$site->site_url.$site->site_logo; ?>" width="60" alt="<?=$site->site_title; ?>"></a>
</div>

<!-- Navigasi Desktop -->
<nav class="hidden md:flex items-center space-x-8">
<a href="#" class="text-gray-300 hover:text-white transition-colors duration-200">Home</a>
<a href="#roster" class="text-gray-300 hover:text-white transition-colors duration-200">Roster</a>
<a href="#achievements" class="text-gray-300 hover:text-white transition-colors duration-200">Achievements</a>
<a href="#gallery" class="text-gray-300 hover:text-white transition-colors duration-200">Gallery</a>
</nav>

<!-- Ikon & Tombol Aksi -->
<div class="flex items-center space-x-4">
<a href="#" class="hidden sm:inline-block text-gray-400 hover:text-white"><i class="fab fa-youtube text-xl"></i></a>
<a href="#" class="hidden sm:inline-block text-gray-400 hover:text-white"><i class="fab fa-instagram text-xl"></i></a>
<a href="#" class="hidden sm:inline-block text-gray-400 hover:text-white"><i class="fab fa-tiktok text-xl"></i></a>
<button id="theme-toggle" class="text-gray-400 hover:text-white focus:outline-none">
<i id="theme-icon" class="fas fa-sun text-xl"></i>
</button>
<!-- Tombol Hamburger Mobile -->
<button id="mobile-menu-button" class="md:hidden text-gray-400 hover:text-white focus:outline-none">
<i class="fas fa-bars text-xl"></i>
</button>
</div>
</div>
</div>
</header>

<!-- Menu Navigasi Mobile -->
<div id="mobile-menu" class="hidden md:hidden fixed inset-0 bg-brand-dark z-40 pt-20">
<div class="flex flex-col items-center justify-center h-full space-y-8">
<a href="#" class="mobile-menu-link text-2xl text-gray-300 hover:text-white transition-colors duration-200">Home</a>
<a href="#roster" class="mobile-menu-link text-2xl text-gray-300 hover:text-white transition-colors duration-200">Roster</a>
<a href="#achievements" class="mobile-menu-link text-2xl text-gray-300 hover:text-white transition-colors duration-200">Achievements</a>
<a href="#gallery" class="mobile-menu-link text-2xl text-gray-300 hover:text-white transition-colors duration-200">Gallery</a>
</div>
</div>


<main class="pt-20">