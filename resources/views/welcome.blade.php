<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulasi Dashboard - SIM Kelompok Tani</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Konfigurasi Palet Warna Agrikultur Alami Sesuai Ekstraksi Gambar Anda
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        tani: {
                            cream: '#FAF6E9',
                            olive: '#E6E4B8',
                            green: '#2D6A2E',
                            dark: '#0B4619',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-[#FAF6E9] min-h-screen p-6 font-sans antialiased text-[#0B4619]">

    <div class="max-w-7xl mx-auto space-y-6">
        
        <header class="bg-[#0B4619] text-white p-5 rounded-2xl shadow-md flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
            <div>
                <h1 class="text-2xl font-black tracking-wide">SITANI (Sistem Informasi Tani)</h1>
                <p class="text-xs text-[#E6E4B8] font-medium mt-0.5">Mode Simulasi Maket Tampilan Gabungan Berdasarkan Flowchart</p>
            </div>
            <div class="bg-[#2D6A2E] text-white text-xs px-3 py-1.5 rounded-xl font-bold border border-[#E6E4B8] border-opacity-20 shadow-inner">
                🟢 Preview Layout Terintegrasi
            </div>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            <div class="bg-white border-2 border-[#E6E4B8] rounded-2xl p-5 shadow-sm space-y-5">
                <div class="bg-[#2D6A2E] text-white p-3 rounded-xl flex justify-between items-center shadow-sm">
                    <span class="font-bold text-sm tracking-wide">👨‍🌾 ALUR PETANI (P1 - P6)</span>
                    <span class="text-[10px] bg-[#0B4619] font-bold px-2 py-0.5 rounded-full">Aktif</span>
                </div>

                <div class="bg-[#FAF6E9] p-4 rounded-xl border border-[#E6E4B8]">
                    <h3 class="text-xs font-bold text-[#0B4619] uppercase tracking-wider mb-3 border-l-4 border-[#2D6A2E] pl-2">Form Input Panen (P4)</h3>
                    <div class="space-y-3 text-xs">
                        <div>
                            <label class="block font-semibold text-gray-700 mb-1">Pilih Komoditas Komoditas</label>
                            <select class="w-full p-2 rounded-lg border border-[#E6E4B8] bg-white focus:outline-none focus:ring-1 focus:ring-[#2D6A2E]">
                                <option>Padi IR64</option>
                                <option>Jagung Hibrida</option>
                            </select>
                        </div>
                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <label class="block font-semibold text-gray-700 mb-1">Jumlah (Kg)</label>
                                <input type="number" value="1200" class="w-full p-2 rounded-lg border border-[#E6E4B8] bg-white text-gray-800 focus:outline-none">
                            </div>
                            <div>
                                <label class="block font-semibold text-gray-700 mb-1">Musim Tanam</label>
                                <input type="text" value="Gadu 2026" class="w-full p-2 rounded-lg border border-[#E6E4B8] bg-white text-gray-800 focus:outline-none">
                            </div>
                        </div>
                        <button type="button" class="w-full bg-[#2D6A2E] hover:bg-[#0B4619] text-white font-bold py-2 rounded-lg transition-all shadow-sm mt-1">
                            Kirim Data Ke Pengurus (P5)
                        </button>
                    </div>
                </div>

                <div class="space-y-2">
                    <h3 class="text-xs font-bold text-gray-400 uppercase tracking-wider">Kotak Masuk Notifikasi (P6)</h3>
                    <div class="bg-green-50 p-3 rounded-xl border border-green-200 text-xs">
                        <div class="flex justify-between font-bold text-[#2D6A2E]">
                            <span>✔ Validasi Sukses</span>
                            <span class="text-[10px] text-gray-400 font-normal">Barusan</span>
                        </div>
                        <p class="text-gray-600 mt-1">Data setoran Padi IR64 sebesar 1,200 Kg telah **Disetujui** oleh pengurus.</p>
                    </div>
                </div>
            </div>

            <div class="bg-white border-2 border-[#0B4619] rounded-2xl p-5 shadow-sm space-y-5 lg:col-span-2">
                <div class="bg-[#0B4619] text-white p-3 rounded-xl flex justify-between items-center shadow-sm">
                    <span class="font-bold text-sm tracking-wide">📋 ALUR PENGURUS KELOMPOK TANI (A1 - A15)</span>
                    <span class="text-[10px] bg-[#2D6A2E] font-bold px-2 py-0.5 rounded-full">Akses Penuh</span>
                </div>

                <div class="grid grid-cols-3 gap-3">
                    <div class="bg-[#FAF6E9] p-3 rounded-xl border border-[#E6E4B8] text-center">
                        <span class="text-[10px] text-gray-500 font-bold uppercase block">Stok Kelompok</span>
                        <span class="text-lg font-black text-[#0B4619]">14,250 Kg</span>
                    </div>
                    <div class="bg-[#FAF6E9] p-3 rounded-xl border border-[#E6E4B8] text-center">
                        <span class="text-[10px] text-gray-500 font-bold uppercase block">Siap Distribusi</span>
                        <span class="text-lg font-black text-[#2D6A2E]">8,400 Kg</span>
                    </div>
                    <div class="bg-[#FAF6E9] p-3 rounded-xl border border-[#E6E4B8] text-center">
                        <span class="text-[10px] text-gray-500 font-bold uppercase block">Porsi Anggota</span>
                        <span class="text-lg font-black text-amber-700">Proporsional</span>
                    </div>
                </div>

                <div class="space-y-2">
                    <h3 class="text-xs font-bold text-[#0B4619] uppercase tracking-wider border-l-4 border-[#2D6A2E] pl-2">Antrean Verifikasi Masuk (A1 & A3)</h3>
                    <div class="overflow-x-auto border border-[#E6E4B8] rounded-xl">
                        <table class="w-full text-left text-xs">
                            <thead class="bg-[#E6E4B8] text-[#0B4619] font-bold">
                                <tr>
                                    <th class="p-3">Nama Petani</th>
                                    <th class="p-3">Jenis Input</th>
                                    <th class="p-3">Rincian Data</th>
                                    <th class="p-3 text-center">Aksi Keputusan</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-100 text-gray-700 bg-white">
                                <tr>
                                    <td class="p-3 font-semibold">Pak Joko Widodo</td>
                                    <td class="p-3"><span class="bg-emerald-100 text-emerald-800 text-[10px] px-2 py-0.5 rounded-md font-bold">Hasil Panen</span></td>
                                    <td class="p-3">Padi IR64 — 1,200 Kg (Musim Gadu)</td>
                                    <td class="p-3 flex justify-center gap-1.5">
                                        <button class="bg-[#2D6A2E] hover:bg-[#0B4619] text-white font-bold px-2 py-1 rounded text-[10px]">Setujui (A4)</button>
                                        <button class="bg-red-50 hover:bg-red-100 text-red-600 font-bold px-2 py-1 rounded text-[10px]">Tolak (A6)</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-3 font-semibold">Budi Santoso</td>
                                    <td class="p-3"><span class="bg-blue-100 text-blue-800 text-[10px] px-2 py-0.5 rounded-md font-bold">Anggota Baru</span></td>
                                    <td class="p-3">Lahan 1.2 Ha, Dokumen KTP Lengkap</td>
                                    <td class="p-3 flex justify-center gap-1.5">
                                        <button class="bg-[#2D6A2E] text-white font-bold px-2 py-1 rounded text-[10px]">Setujui</button>
                                        <button class="bg-red-50 text-red-600 font-bold px-2 py-1 rounded text-[10px]">Tolak</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-1">
                    <div class="p-4 bg-[#FAF6E9] rounded-xl border border-[#E6E4B8] space-y-2">
                        <h4 class="font-bold text-xs text-[#0B4619] uppercase tracking-wide">🚚 Log Pengiriman & Pasar (A7 & A10)</h4>
                        <div class="text-[11px] text-gray-600 space-y-1">
                            <p>• <span class="font-bold text-gray-800">PT. Berkah Pangan</span> — 5,000 Kg Padi (Selesai)</p>
                            <p>• <span class="font-bold text-gray-800">Pasar Induk Gabah</span> — 3,500 Kg Padi (Proses)</p>
                        </div>
                    </div>
                    <div class="p-4 bg-[#FAF6E9] rounded-xl border border-[#E6E4B8] flex flex-col justify-between">
                        <div>
                            <h4 class="font-bold text-xs text-[#0B4619] uppercase tracking-wide">📊 Output Laporan Akhir (A14)</h4>
                            <p class="text-[11px] text-gray-500 mt-1">Data otomatis dikompilasi ke format dokumen laporan cetak kelompok.</p>
                        </div>
                        <div class="flex gap-2 mt-3">
                            <button class="flex-1 bg-[#0B4619] text-white font-bold py-1.5 rounded-lg text-[10px] shadow-sm">Cetak PDF (A15)</button>
                            <button class="flex-1 bg-emerald-700 text-white font-bold py-1.5 rounded-lg text-[10px] shadow-sm">Ekspor Excel</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <footer class="bg-slate-800 text-slate-300 p-4 rounded-2xl flex flex-col md:flex-row justify-between items-start md:items-center gap-4 border border-slate-700 shadow-sm">
            <div>
                <span class="bg-slate-700 text-slate-200 font-bold text-[11px] px-2.5 py-1 rounded-md tracking-wider">⚙ CONTROL PANEL ADMIN (S1-S3)</span>
                <p class="text-[11px] text-slate-400 mt-1">Konfigurasi database master tanaman, alokasi role penilai, serta manajemen backup.</p>
            </div>
            <div class="flex gap-2 w-full md:w-auto">
                <button class="flex-1 md:flex-none bg-slate-700 text-xs text-white font-semibold px-3 py-1.5 rounded-xl border border-slate-600">Master Data Tanam</button>
                <button class="flex-1 md:flex-none bg-blue-600 text-xs text-white font-bold px-3 py-1.5 rounded-xl shadow-md">Backup Database (S3)</button>
            </div>
        </footer>

    </div>

</body>
</html>