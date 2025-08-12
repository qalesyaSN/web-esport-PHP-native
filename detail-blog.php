<?php
require_once 'config/class.database.php';
require_once 'helper/function.php';

$slug = htmlspecialchars(htmlentities($_GET['slug']));

$post = $db->table('posts')->where('slug', $slug)
->join('users', 'posts.author_id = users.id')
->join('categories', 'posts.category_id = categories.id')
->first("
    posts.title,
    posts.body,
    posts.thumbnail,
    users.name AS author_name,
    categories.name AS category_name,
    posts.slug,
    users.url_image AS photo_profile,
    users.position,
    posts.created_at
    ");
$title = htmlspecialchars($post['title']);
$description = strip_tags($post['body']);
$image = $site->site_url.htmlspecialchars($post['thumbnail']);
include 'partials/inc.head.php';
if ($post):
?>

<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-10">
    <div class="max-w-4xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8 lg:gap-12 items-center" data-aos="fade-up">
            <div class="lg:col-span-2">
                <div class="aspect-square w-full rounded-lg overflow-hidden shadow-2xl">
                    <img src="<?=htmlspecialchars($post['thumbnail']); ?>" alt="<?=htmlspecialchars($post['title']); ?>" class="w-full h-full object-cover">
                </div>
            </div>
            <div class="lg:col-span-3">
                <p class="text-brand-accent font-semibold uppercase">
                    <?=htmlspecialchars($post['category_name']); ?>
                </p>
                <h1 class="text-4xl md:text-5xl font-extrabold mt-2"><?=htmlspecialchars($post['title']); ?></h1>
                <div class="flex flex-wrap items-center gap-x-6 gap-y-2 text-gray-400 mt-4">
                    <span class="flex items-center space-x-2"><i class="fas fa-user"></i><span>Oleh <?=htmlspecialchars($post['author_name']); ?></span></span>
                    <span class="flex items-center space-x-2"><i class="fas fa-calendar-alt"></i><span><?=htmlspecialchars(dateID($post['created_at'])); ?></span></span>
                </div>
            </div>
        </div>
        
        <hr class="my-12 border-gray-700" data-aos="fade-up" data-aos-delay="100">
        
        <article class="prose dark:prose-invert max-w-none" data-aos="fade-up" data-aos-delay="200">
            <p class="lead">
                <?=htmlspecialchars($post['body']); ?>.
            </p>
        </article>

        <hr class="my-12 border-gray-700" data-aos="fade-up" data-aos-delay="250">

        <div class="flex flex-col sm:flex-row justify-between items-center gap-6" data-aos="fade-up" data-aos-delay="300">
            <div class="flex items-center space-x-4">
                <img class="w-16 h-16 rounded-full" src="<?=htmlspecialchars($post['photo_profile']); ?>" alt="Avatar Penulis">
                <div>
                    <p class="font-bold">
                        <?=htmlspecialchars($post['author_name']); ?>
                    </p>
                    <p class="text-sm text-gray-400">
                        <?=htmlspecialchars($post['position']); ?>
                    </p>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <span class="font-semibold">Bagikan:</span>
                <a href="#" class="text-gray-400 hover:text-white text-2xl"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-gray-400 hover:text-white text-2xl"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-gray-400 hover:text-white text-2xl"><i class="fab fa-whatsapp"></i></a>
                <a href="#" class="text-gray-400 hover:text-white text-2xl"><i class="fas fa-link"></i></a>
            </div>
        </div>

        <div class="text-center mt-16" data-aos="fade-up" data-aos-delay="350">
            <a href="/" class="text-gray-400 hover:text-white transition-colors">
                <i class="fas fa-arrow-left mr-2"></i>Kembali ke Halaman Utama
            </a>
        </div>
    </div>
</div>


<?php
endif;
include 'partials/inc.footer.php';
?>