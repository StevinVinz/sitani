@extends('layouts.app')

@section('title', 'Dashboard Petani - SIM Tani')

@section('content')
<div class="p-6">
  <header class="bg-[#0B4619] text-white p-4 rounded-xl shadow-md mb-6 flex justify-between items-center">
    <div>
      <h1 class="text-xl font-bold">SIM Kelompok Tani</h1>
      <p class="text-xs text-[#E6E4B8]">Dashboard Petani</p>
    </div>
    <span class="bg-[#2D6A2E] px-3 py-1 rounded text-sm font-semibold">Petani: Pak Joko</span>
  </header>

  <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <div class="bg-[#E6E4B8] bg-opacity-30 border border-[#E6E4B8] p-6 rounded-xl shadow-sm">
      <h2 class="text-lg font-bold text-[#0B4619] mb-4 flex items-center gap-2">🌱 Form Registrasi Anggota</h2>
      <form action="/petani/daftar" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div>
          <label class="block text-sm font-semibold text-[#0B4619] mb-1">Nama Lengkap</label>
          <input type="text" name="nama" class="w-full p-2.5 rounded bg-white border border-[#E6E4B8] focus:outline-none focus:border-[#2D6A2E]" placeholder="Contoh: Budi Santoso">
        </div>
        <div>
          <label class="block text-sm font-semibold text-[#0B4619] mb-1">Luas Lahan (Ha)</label>
          <input type="number" step="0.1" name="luas_lahan" class="w-full p-2.5 rounded bg-white border border-[#E6E4B8] focus:outline-none focus:border-[#2D6A2E]" placeholder="Contoh: 1.2">
        </div>
        <div>
          <label class="block text-sm font-semibold text-[#0B4619] mb-1">Dokumen Pendukung</label>
          <input type="file" name="dokumen" class="w-full text-sm text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-semibold file:bg-[#2D6A2E] file:text-white hover:file:bg-[#0B4619]">
        </div>
        <button type="submit" class="w-full bg-[#2D6A2E] hover:bg-[#0B4619] text-white font-bold py-2 px-4 rounded transition-all shadow">Kirim Pendaftaran</button>
      </form>
    </div>

    <div class="bg-white border-2 border-[#2D6A2E] p-6 rounded-xl shadow-md">
      <h2 class="text-lg font-bold text-[#2D6A2E] mb-4 flex items-center gap-2">🌾 Input Hasil Panen Musim Ini</h2>
      <form action="/petani/panen" method="POST" class="space-y-4">
        @csrf
        <div>
          <label class="block text-sm font-semibold text-[#0B4619] mb-1">Komoditas</label>
          <select name="komoditas" class="w-full p-2.5 rounded bg-[#FDFBF0] border border-[#E6E4B8] focus:outline-none focus:border-[#2D6A2E]">
            <option value="padi">Padi IR64</option>
            <option value="jagung">Jagung Hibrida</option>
          </select>
        </div>
        <div class="grid grid-cols-2 gap-4">
          <div>
            <label class="block text-sm font-semibold text-[#0B4619] mb-1">Jumlah (Kg)</label>
            <input type="number" name="jumlah" class="w-full p-2.5 rounded bg-[#FDFBF0] border border-[#E6E4B8] focus:outline-none focus:border-[#2D6A2E]" placeholder="1500">
          </div>
          <div>
            <label class="block text-sm font-semibold text-[#0B4619] mb-1">Musim Tanam</label>
            <input type="text" name="musim" class="w-full p-2.5 rounded bg-[#FDFBF0] border border-[#E6E4B8] focus:outline-none focus:border-[#2D6A2E]" placeholder="Gadu 2026">
          </div>
        </div>
        <button type="submit" class="w-full bg-[#0B4619] hover:bg-[#2D6A2E] text-white font-bold py-2 px-4 rounded transition-all shadow">Kirim Data Panen</button>
      </form>
    </div>
  </div>
</div>
@endsection