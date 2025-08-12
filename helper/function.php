<?php
/**
 * Mengubah format tanggal dari format SQL (Y-m-d H:i:s)
 * menjadi format lengkap Bahasa Indonesia.
 * Contoh: "Jumat, 08 Agustus 2025"
 *
 * @param string $tanggalSql Tanggal dalam format dari database.
 * @return string Tanggal yang sudah diformat.
 */
function dateID(string $tanggalSql): string
{
    // Daftar nama hari dan bulan dalam Bahasa Indonesia
    $hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
    $bulan = [
        1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    ];

    // Pecah tanggal dari database
    $timestamp = strtotime($tanggalSql);
    
    // Ambil bagian-bagian tanggal
    $namaHari = $hari[date('w', $timestamp)];
    $tanggal = date('d', $timestamp);
    $namaBulan = $bulan[date('n', $timestamp)];
    $tahun = date('Y', $timestamp);
    $jam = date('H:i', $timestamp); // Opsional jika Anda butuh jam

    return "{$namaHari}, {$tanggal} {$namaBulan} {$tahun}";
    // Jika ingin dengan jam, gunakan:
    // return "{$namaHari}, {$tanggal} {$namaBulan} {$tahun} - {$jam} WIB";
}
?>