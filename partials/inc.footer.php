</main>

<!-- FOOTER -->
<footer class="bg-gray-900 dark:bg-brand-dark-card border-t border-gray-700">
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center md:text-left">
<div>
<img src="<?=$site->site_url.$site->site_logo; ?>" width="60" alt="<?=$site->site_title; ?>">
<p class="mt-2 text-gray-400 text-sm">
<?=$site->seo_meta_description; ?>
</p>
</div>
<div>
<h4 class="font-semibold text-white uppercase">Quick Links</h4><ul class="mt-4 space-y-2">
<li><a href="#roster" class="text-gray-400 hover:text-white">Roster</a></li><li><a href="#events" class="text-gray-400 hover:text-white">Events</a></li><li><a href="#achievements" class="text-gray-400 hover:text-white">Achievements</a></li>
</ul>
</div>
<div>
<h4 class="font-semibold text-white uppercase">Follow Us</h4><div class="mt-4 flex justify-center md:justify-start space-x-5">
<a href="<?=$site->social_youtube_url; ?>" class="text-gray-400 hover:text-white"><i class="fab fa-youtube text-2xl"></i></a><a href="<?=$site->social_instagram_url; ?>" class="text-gray-400 hover:text-white"><i class="fab fa-instagram text-2xl"></i></a><a href="<?=$site->social_discord_url; ?>" class="text-gray-400 hover:text-white"><i class="fab fa-discord text-2xl"></i></a><a href="<?=$site->social_twitter_url; ?>" class="text-gray-400 hover:text-white"><i class="fab fa-twitter text-2xl"></i></a>
</div>
</div>
</div>
<div class="mt-12 border-t border-gray-800 pt-8 text-center text-gray-500 text-sm">
<p>
<?=$site->footer_text; ?>
</p>
</div>
</div>
</footer>
<!-- Swiper.js JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
// Inisialisasi AOS
AOS.init({
duration: 800,
once: true,
});

// Inisialisasi Swiper
const swiper = new Swiper('.hero-slider', {
loop: true,
effect: 'fade',
fadeEffect: {
crossFade: true
},
autoplay: {
delay: 3000,
disableOnInteraction: false,
},
pagination: {
el: '.swiper-pagination',
clickable: true,
},
navigation: {
nextEl: '.swiper-button-next',
prevEl: '.swiper-button-prev',
},
});



// --- LOGIKA UI ---
document.addEventListener('DOMContentLoaded', () => {
    
    
            // Tab Functionality
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');

            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const targetId = button.dataset.target;

                    // Update button styles
                    tabButtons.forEach(btn => {
                        btn.classList.remove('text-brand-accent', 'border-brand-accent');
                        btn.classList.add('text-gray-400', 'border-transparent', 'hover:text-gray-200', 'hover:border-gray-500');
                    });
                    button.classList.add('text-brand-accent', 'border-brand-accent');
                    button.classList.remove('text-gray-400', 'border-transparent', 'hover:text-gray-200', 'hover:border-gray-500');

                    // Update content visibility
                    tabContents.forEach(content => {
                        if (content.id === targetId) {
                            content.classList.remove('hidden');
                        } else {
                            content.classList.add('hidden');
                        }
                    });
                });
            });
    
    
    
    
    
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
const newTheme = isDarkMode ? 'light': 'dark';
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
mobileMenu.classList.add('hidden');
});
});
});
</script>
</body>
</html>