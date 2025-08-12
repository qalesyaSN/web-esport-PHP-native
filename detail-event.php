<?php
require_once 'config/class.database.php';
require_once 'helper/function.php';

$id = htmlspecialchars($_GET['id']);

$tournament = $db->table('tournaments')->where('tournaments.id', $id)
->join('games', 'tournaments.game_id = games.id')
->join('organizers', 'tournaments.organizer_id = organizers.id')
->first("
    tournaments.title,
    tournaments.description,
    tournaments.poster_url,
    games.name AS game_name,
    organizers.name AS organizers_name,
    games.slug,
    tournaments.rules,
    tournaments.prizepool_info,
    tournaments.registration_opens_at,
    tournaments.registration_closes_at,
    tournaments.event_starts_at,
    tournaments.event_ends_at,
    tournaments.venue,
    tournaments.entry_fee,
    tournaments.max_teams,
    tournaments.contact_person,
    tournaments.status,
    tournaments.status_event,
    tournaments.created_at
    ");
$title = htmlspecialchars($tournament['title']);
$description = strip_tags($tournament['description']);
$image = $site->site_url.htmlspecialchars($tournament['poster_url']);
include 'partials/inc.head.php';
//var_dump($tournament);

if ($tournament):
?>

 


        <!-- Banner Section -->
        <section class="w-full h-64 md:h-96" data-aos="fade-in">
             <img src="<?=htmlspecialchars($tournament['poster_url']); ?>" alt="<?=htmlspecialchars($tournament['title']); ?>" class="w-full h-full object-cover">
        </section>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Header Halaman -->
            <div data-aos="fade-up">
                <p class="text-brand-accent font-semibold uppercase"><?=htmlspecialchars($tournament['game_name']); ?> Tournament</p>
                <h1 class="text-4xl md:text-5xl font-extrabold mt-2"><?=htmlspecialchars($tournament['title']); ?></h1>
                <p class="mt-2 text-lg text-gray-400">Hosted by <span class="font-semibold text-white"><?=htmlspecialchars($tournament['organizers_name']); ?></span></p>
            </div>

            <!-- Konten Utama -->
            <div class="mt-12 grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-12">
                <!-- Konten Kiri (Tabs) -->
                <div class="lg:col-span-2" data-aos="fade-up" data-aos-delay="100">
                    <!-- Tab Buttons -->
                    <div class="border-b border-gray-700">
                        <nav class="-mb-px flex flex-wrap gap-x-8 gap-y-2" aria-label="Tabs">
                            <button class="tab-button whitespace-nowrap py-4 px-1 border-b-2 font-medium text-lg text-brand-accent border-brand-accent" data-target="deskripsi">Description</button>
                            <button class="tab-button whitespace-nowrap py-4 px-1 border-b-2 font-medium text-lg text-gray-400 border-transparent hover:text-gray-200 hover:border-gray-500" data-target="peraturan">Rules</button>
                            <button class="tab-button whitespace-nowrap py-4 px-1 border-b-2 font-medium text-lg text-gray-400 border-transparent hover:text-gray-200 hover:border-gray-500" data-target="hadiah">Prizepool</button>
                        </nav>
                    </div>
                    <!-- Tab Content -->
                    <div class="py-6">
                        <div id="deskripsi" class="tab-content prose dark:prose-invert max-w-none">
                            <p><?=$tournament['description']; ?></p>
                        </div>
                        <div id="peraturan" class="tab-content prose dark:prose-invert max-w-none hidden">
                        <?=$tournament['rules']; ?>
                        </div>
                        <div id="hadiah" class="tab-content prose dark:prose-invert max-w-none hidden">
                        <?=$tournament['prizepool_info']; ?>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Kanan -->
                <aside class="lg:col-span-1" data-aos="fade-up" data-aos-delay="200">
                     <div class="card-bg rounded-lg shadow-xl p-6 lg:sticky top-28 h-fit">
                        <div class="bg-green-500/10 text-green-400 font-bold text-center py-3 rounded-lg mb-6">Pendaftaran Buka</div>
                        <a href="#" class="block w-full text-center px-6 py-4 bg-brand-accent text-white rounded-lg font-semibold hover:bg-red-700 transition-colors">DAFTAR SEKARANG</a>
                        <hr class="my-6 border-gray-700/50">
                        <h3 class="text-xl font-bold mb-4">Details Turnamen</h3>
                        <ul class="space-y-3 text-gray-300">
                            <li class="flex items-start"><i class="fas fa-gamepad w-6 text-brand-accent"></i><span><strong class="text-white">Game:</strong> <?=$tournament['game_name']; ?></span></li>
                            <li class="flex items-start"><i class="fas fa-trophy w-6 text-brand-accent"></i><span><strong class="text-white">Hadiah:</strong> Rp 100.000.000</span></li>
                            <li class="flex items-start"><i class="fas fa-calendar-alt w-6 text-brand-accent"></i><span><strong class="text-white">Tanggal:</strong> 1 - 15 Sep 2025</span></li>
                            <li class="flex items-start"><i class="fas fa-map-marker-alt w-6 text-brand-accent"></i><span><strong class="text-white">Venue:</strong> <?=$tournament['venue']; ?></span></li>
                            <li class="flex items-start"><i class="fas fa-money-bill-wave w-6 text-brand-accent"></i><span><strong class="text-white">Biaya:</strong> Rp  <?=$tournament['entry_fee']; ?> / Team</span></li>
                            <li class="flex items-start"><i class="fas fa-users w-6 text-brand-accent"></i><span><strong class="text-white">Slot:</strong> <?=$tournament['max_teams']; ?> Team</span></li>
                            <li class="flex items-start"><i class="fas fa-calendar-times w-6 text-brand-accent"></i><span><strong class="text-white">Pendaftaran Tutup:</strong> 25 Agu 2025</span></li>
                            <li class="flex items-start"><i class="fas fa-user-headset w-6 text-brand-accent"></i><span><strong class="text-white">Kontak:</strong> <?=$tournament['contact_person']; ?></span></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>

<?php
endif;
include 'partials/inc.footer.php';
?>