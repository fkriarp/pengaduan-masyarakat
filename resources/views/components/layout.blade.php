<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Pengaduan Masyarakat</title>
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    {{-- Phosphos Icons --}}
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    {{-- FontAwesome --}}
    <script src="https://kit.fontawesome.com/7dfe115e0d.js" crossorigin="anonymous"></script>
    {{-- cdn Jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>
<body class="font-Poppins w-screen">

  <div class="h-screen flex justify-between">

    <x-sidebar class="w-3/12"></x-sidebar>  

    <main class="p-12 w-screen h-screen bg-gray-50 overflow-y-auto">
        {{ $slot }}
    </main>

  </div>

  @stack('script')
  <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>