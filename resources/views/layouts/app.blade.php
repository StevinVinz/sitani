<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIM Kelompok Tani')</title>
    @vite('resources/css/app.css') 
    <script>
        // Memasukkan palet warna sesuai gambar Cuplikan Layar Anda
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        tani: {
                            cream: '#FDFBF0',
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
<body class="bg-[#FDFBF0] min-h-screen font-sans">
    
    @yield('content')

</body>
</html>