<?php
require_once("config/class.database.php");

echo "<h3>Menampilkan Postingan dengan Nama Penulis dan Kategori</h3>";

// Definisikan kolom yang ingin ditampilkan dengan alias untuk menghindari konflik
$kolom = "
    posts.id AS post_id,
    posts.title,
    posts.body,
    posts.thumbnail,
    posts.dates,
    users.name AS author_name,
    categories.name AS category_name,
    posts.slug
";

$posts = $db->table('posts')
    // JOIN pertama: Gabungkan dengan tabel users berdasarkan ID penulis
    ->join('users', 'posts.author_id = users.id')
    // JOIN kedua: Gabungkan dengan tabel categories berdasarkan ID kategori
    ->join('categories', 'posts.category_id = categories.id')
    // Pilih kolom-kolom yang sudah didefinisikan di atas
    ->select($kolom);

// --- Menampilkan hasilnya ---
if ($posts) {
    // Tampilkan hasil mentah untuk melihat strukturnya
    echo "<h4>Struktur Data Hasil JOIN:</h4>";
    echo "<pre>";
    print_r($posts);
    echo "</pre>";

    // Tampilkan dengan format yang lebih rapi
    echo "<h4>Hasil Postingan:</h4>";
    foreach ($posts as $post) {
        echo "<div style='border: 1px solid #ccc; padding: 10px; margin-bottom: 15px;'>";
        echo "<h2>" . htmlspecialchars($post['title']) . "</h2>";
        echo "<p><strong>Penulis:</strong> " . htmlspecialchars($post['author_name']) . "</p>";
        echo "<p><strong>Kategori:</strong> " . htmlspecialchars($post['category_name']) . "</p>";
        echo "<img src='" . htmlspecialchars($post['thumbnail']) . "' alt='thumbnail' width='200'>";
        echo "<div>" . nl2br(htmlspecialchars($post['body'])) . "</div>";
        echo "<p><small>Dipublikasikan pada: " . htmlspecialchars($post['dates']) . "</small></p>";
        echo "</div>";
    }

} else {
    echo "Tidak ada postingan yang ditemukan.";
}

?>
