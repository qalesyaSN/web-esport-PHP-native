<?php
require_once 'config/class.database.php';
require_once 'helper/function.php';
include 'partials/inc.head.php';
// Data Divisi
$division = $db->table("division")->where('status', 'Active')->orderBy('id', 'DESC')->select("title, slug, url_image");
// Data Partnership
$partnership = $db->table("partners")->where('status', 'Active')->orderBy('id', 'DESC')->select("title, logo, url");
// Data Gallery
$galeries = $db->table("gallery")->where('status', 'Show')->orderBy('id', 'DESC')->select("url_image, description");
// Data Events/tournaments
$events = $db->table("tournaments")->where('status', 'Active')->orderBy('id', 'DESC')->select("id, title, poster_url, status_event");
// Data Post
$posts = $db->table('posts')
->join('users', 'posts.author_id = users.id')
->join('categories', 'posts.category_id = categories.id')
->limit(6)
->select("
    posts.id AS post_id,
    posts.title,
    posts.body,
    posts.thumbnail,
    posts.dates,
    users.name AS author_name,
    categories.name AS category_name,
    posts.slug,
    posts.created_at
    ");
// Data Achievements
$achievements = $db->table("achievement")->orderBy('id', 'DESC')->select("divisi, logo_tournament, name_tournament,sub_tournament, place");
$placeSuffixes = [1 => "st", 2 => "nd", 3 => "rd"];
$trophyColor = [1 => "text-yellow-400", 2 => "text-gray-300", 3 => "text-brown-700"];


?>
<!-- HERO SLIDER SECTION  -->
<section class="relative h-[60vh] md:h-screen flex items-center justify-center text-center bg-cover bg-center" style="background-image: url('<?=htmlspecialchars($site->hero_image); ?>');">
    <div class="absolute inset-0 bg-black/20"></div>
    <!-- Black Overlay -->
    <div class="absolute inset-0 bg-black/20"></div>
    <div class="absolute bottom-0 left-0 right-0 h-48 bg-gradient-to-t from-brand-dark to-transparent"></div>
    <div class="relative z-10" data-aos="zoom-in">
        <h1 class="text-5xl md:text-9xl font-bold text-white uppercase tracking-widest"><?=htmlspecialchars($site->hero_title); ?></h1>
        <p class="text-gray-300 mt-2 text-lg md:text-2xl font-light">
            <?=htmlspecialchars($site->hero_description); ?>
        </p>
    </div>
</section>

<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 sm:py-24 space-y-24">

    <!-- ABOUT TEAM SECTION -->
    <section id="about" data-aos="fade-up">
        <div class="relative z-10">
            <div class="max-w-3xl mx-auto text-center bg-gray-900/50 backdrop-blur-lg p-8 md:p-12 rounded-xl shadow-2xl border border-white/10">
                <p class="text-brand-accent font-semibold uppercase tracking-wider" data-aos="fade-up" data-aos-delay="100">
                    About our team
                </p>
                <h2 class="text-4xl font-bold mt-2 text-white" data-aos="fade-up" data-aos-delay="200"><?=htmlspecialchars($site->title_about); ?></h2>
                <p class="mt-4 text-lg text-gray-300" data-aos="fade-up" data-aos-delay="300">
                    <?=htmlspecialchars($site->body_about); ?>
                </p>
                <div data-aos="fade-up" data-aos-delay="400">
                    <a href="#roster" class="inline-block mt-8 px-8 py-3 bg-brand-accent text-white rounded-lg font-semibold hover:bg-red-700 transition-colors transform hover:scale-105">Kenali Pemain Kami</a>
                </div>
            </div>
        </div>
    </section>




    <!-- EVENTS SECTION -->
    <section id="events" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-2 uppercase">Events</h2>
        <div class="w-20 h-1 bg-brand-accent mx-auto mb-12"></div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php foreach ($events as $event): ?>
            <div class="card-bg rounded-lg overflow-hidden shadow-lg transform hover:-translate-y-2 transition-transform duration-300" data-aos="fade-up" data-aos-delay="100">
                <div class="aspect-square">
                    <img src="<?=$event['poster_url']; ?>" alt="<?=$event['title']; ?>" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold uppercase"><?=$event['title']; ?></h3>
                    <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                        2025.04.18 - START 20:00 GMT+7
                    </p>
<div class="flex items-center space-x-2 mt-4">
    <a href="#" class="flex-1 text-center px-4 py-2 bg-green-500/50 text-white text-sm font-semibold rounded-md hover:bg-green-300 transition-colors">
        Registration
    </a>

    <a href="/events/<?=$event['id']; ?>" class="inline-block px-4 py-2 bg-brand-accent text-white text-sm font-semibold rounded-md hover:bg-red-700 transition-colors">
        <i class="fa fa-eye"></i>
    </a>
</div>

                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- DIVISIONS SECTION (REVISED) -->
    <section id="divisions" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-2 uppercase">Division</h2>
        <div class="w-20 h-1 bg-brand-accent mx-auto mb-12"></div>
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <?php foreach ($division as $divisi): ?>
            <!-- Card Mobile Legends -->
            <a href="/division/<?=htmlspecialchars ($divisi['slug']); ?>" class="group relative aspect-video rounded-lg overflow-hidden shadow-xl block" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('<?=htmlspecialchars ($divisi['url_image']); ?>')"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                <div class="relative z-10 h-full flex items-end p-6 text-white">
                    <h3 class="text-2xl font-bold uppercase"><?=strtoupper(htmlspecialchars ($divisi['title'])); ?></h3>
                </div>
            </a>
            <?php endforeach; ?>

        </div>
    </section>


    <!-- LATEST POSTS SECTION (NEW) -->
    <section id="posts" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-2 uppercase">Latest Post</h2>
        <div class="w-20 h-1 bg-brand-accent mx-auto mb-12"></div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($posts as $post): ?>
            <!-- Post Card 1 -->
            <div class="card-bg rounded-lg overflow-hidden shadow-lg group" data-aos="fade-up" data-aos-delay="100">
                <a href="/post/<?=htmlspecialchars($post['slug']); ?>" class="block overflow-hidden"><div class="aspect-video">
                    <img src="<?=htmlspecialchars($post['thumbnail']); ?>" alt="<?=htmlspecialchars($post['title']); ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                </div>
                </a>
                <div class="p-6">
                    <p class="text-brand-accent text-sm font-semibold uppercase">
                        <?=htmlspecialchars($post['category_name']); ?>
                    </p>
                    <h3 class="text-xl font-bold mt-2"><a href="/post/<?=htmlspecialchars($post['slug']); ?>" class="hover:text-brand-accent transition-colors"><?=htmlspecialchars($post['title']); ?></a></h3>
                    <p class="text-gray-400 mt-2 text-sm">
                        <?=htmlspecialchars(dateID($post['created_at'])); ?>
                    </p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>





    <!-- ROSTER SECTION -->
    <!--section id="roster" data-aos="fade-up">
                    <h2 class="text-3xl font-bold text-center mb-2 uppercase">Our Roster</h2>
                    <div class="w-20 h-1 bg-brand-accent mx-auto mb-12"></div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        <div class="group relative h-96 rounded-lg overflow-hidden shadow-xl" data-aos="fade-up" data-aos-delay="100">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('/assets/images/players/roster.jpg')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 p-6 text-white">
                                <h3 class="text-2xl font-bold">JANE DOE</h3><p class="text-brand-accent font-semibold uppercase tracking-wider">
                                    In-Game Leader
                                </p>
                            </div>
                        </div>
                        <div class="group relative h-96 rounded-lg overflow-hidden shadow-xl" data-aos="fade-up" data-aos-delay="200">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('/assets/images/players/roster.jpg')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 p-6 text-white">
                                <h3 class="text-2xl font-bold">JOHN SMITH</h3><p class="text-brand-accent font-semibold uppercase tracking-wider">
                                    AWP / Sniper
                                </p>
                            </div>
                        </div>
                        <div class="group relative h-96 rounded-lg overflow-hidden shadow-xl" data-aos="fade-up" data-aos-delay="300">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('/assets/images/players/roster.jpg')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 p-6 text-white">
                                <h3 class="text-2xl font-bold">EMILY</h3><p class="text-brand-accent font-semibold uppercase tracking-wider">
                                    Entry Fragger
                                </p>
                            </div>
                        </div>
                        <div class="group relative h-96 rounded-lg overflow-hidden shadow-xl" data-aos="fade-up" data-aos-delay="400">
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110" style="background-image: url('/assets/images/players/roster.jpg')"></div>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 p-6 text-white">
                                <h3 class="text-2xl font-bold">SAMUEL</h3><p class="text-brand-accent font-semibold uppercase tracking-wider">
                                    Support
                                </p>
                            </div>
                        </div>
                    </div>
                </section-->

    <!-- PARTNERSHIP SECTION -->
    <section id="partners" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-2 uppercase">Partnership</h2>
        <div class="w-20 h-1 bg-brand-accent mx-auto mb-12"></div>
        <div class="grid grid-cols-2 sm:grid-cols-4 gap-8">
            <?php foreach ($partnership as $partner): ?>
            <div class="card-bg p-6 rounded-lg text-center transform hover:-translate-y-2 transition-transform duration-300" data-aos="zoom-in" data-aos-delay="100">
                <img src="<?=htmlspecialchars ($partner['logo']); ?>" alt="<?=htmlspecialchars ($partner['title']); ?>" class="h-16 mx-auto mb-4 object-contain"><h4 class="font-semibold"><?=strtoupper(htmlspecialchars ($partner['title'])); ?></h4>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- GALLERY SECTION -->
    <section id="gallery" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-2 uppercase">Gallery</h2>
        <div class="w-20 h-1 bg-brand-accent mx-auto mb-12"></div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            <?php foreach ($galeries as $gallery): ?>
            <div data-aos="zoom-in" data-aos-delay="100">
                <img class="aspect-square w-full h-full object-cover rounded-lg shadow-lg" src="<?=htmlspecialchars($gallery['url_image']); ?>" alt="Foto galeri 1">
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- ACHIEVEMENTS SECTION (REVISED) -->
    <section id="achievements" data-aos="fade-up">
        <h2 class="text-3xl font-bold text-center mb-2 uppercase">Achievements</h2>
        <div class="w-20 h-1 bg-brand-accent mx-auto mb-12"></div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Achievement Card 1 -->
            <?php foreach ($achievements as $achievement): ?>
            <div class="card-bg p-3 rounded-2xl shadow-xl flex items-center gap-4 border-l-4 border-transparent hover:border-brand-accent transition-colors duration-300" data-aos="fade-up" data-aos-delay="100">
                <img src="<?=htmlspecialchars($achievement['logo_tournament']); ?>" alt="<?=htmlspecialchars($achievement['name_tournament']); ?>" class="w-16 h-16 rounded-md object-cover">
                <div class="flex-grow">
                    <h4 class="font-bold"><?=htmlspecialchars($achievement['name_tournament']); ?></h4>
                    <p class="text-sm text-gray-400">
                        <?=htmlspecialchars($achievement['sub_tournament']); ?>
                    </p>
                </div>
                <div class="text-center">
                    <?php
                    $suffix = $placeSuffixes[htmlspecialchars($achievement['place'])] ?? "th";
                    $trophy = $trophyColor[htmlspecialchars($achievement['place'])] ?? "";
                    if ($trophy): ?>
                    <i class="fas fa-trophy text-3xl <?= htmlspecialchars($trophy); ?>"></i>
                    <p class="font-semibold text-sm mt-1">
                        <?=htmlspecialchars($achievement['place']) . $suffix; ?> Place
                    </p>
                    <?php endif; ?>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </section>
</div>

<?php
include 'partials/inc.footer.php';
?>