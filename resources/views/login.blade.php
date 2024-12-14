<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Pengaduan Masyarakat</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body class="font-poppins">

    <div class="w-screen h-screen flex flex-col lg:flex-row">
        <!-- Bagian Kiri: Form Login -->
        <div class="w-full lg:w-1/2 h-full flex flex-col justify-center px-8 lg:px-16 py-8">
            <!-- Logo -->
            <div class="mb-8 uppercase font-bold text-3xl absolute top-10 left-10">
                Suara<span class="text-blue-500">Kita</span>
            </div>
            <!-- Konten Form -->
            <div class="w-full max-w-sm mx-auto">
                @if (session('failed'))
                    <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:text-red-400"
                        role="alert">
                        <svg class="flex-shrink-0 inline w-4 h-4 mr-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="sr-only">Info</span>
                        <div>
                            <span class="font-medium">Login gagal!</span> {{ session('failed') }}
                        </div>
                    </div>
                @endif
                <h1 class="mb-4 font-semibold text-3xl tracking-wide text-center">Login</h1>
                <p class="mb-8 text-center text-sm text-gray-400">
                    Selamat datang! Masukkan email dan password Anda di bawah ini untuk masuk.
                </p>
                <form action="" id="form_input" method="post" class="space-y-6">
                    @csrf

                    <!-- Input Email -->
                    <div>
                        <label for="email" class="block text-sm mb-2">Email</label>
                        <div class="relative">
                            <input type="email" name="email" id="email"
                                class="py-3 px-4 block w-full border border-gray-500 rounded-lg text-sm focus:outline-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukkan email anda...">
                            @error('email')
                                <small class="text-red-400">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    <!-- Input Password -->
                    <div>
                        <label for="password" class="block text-sm mb-2">Password</label>
                        <div class="relative">
                            <input name="password" id="hs-toggle-pas" type="password"
                                class="py-3 px-4 block w-full border border-gray-500 rounded-lg text-sm focus:outline-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                                placeholder="Masukkan password anda...">
                            @error('password')
                                <small class="text-red-400">{{ $message }}</small>
                            @enderror

                            <button type="button" data-hs-toggle-password='{"target": "#hs-toggle-password"}'
                                class="absolute inset-y-0 right-0 flex items-center px-3 cursor-pointer text-gray-400 focus:outline-none focus:text-blue-600"
                                aria-label="Toggle password visibility">
                                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path class="hs-password-active:hidden"
                                        d="M13.875 18.825A10.05 10.05 0 0 1 12 19c-7 0-10-7-10-7a13.16 13.16 0 0 1 1.67-2.68">
                                    </path>
                                    <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                                    <line class="hs-password-active:hidden" x1="2" x2="22" y1="2"
                                        y2="22"></line>
                                    <path class="hidden hs-password-active:block"
                                        d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                    <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3">
                                    </circle>
                                </svg>
                            </button>
                        </div>
                    </div>

                    <!-- Tombol Login & Register -->
                    <div class="w-full flex items-center gap-3">
                        <button type="submit" onclick="register()"
                            class="w-full py-3 text-center bg-gray-500 text-white font-semibold rounded-md hover:bg-gray-600 transition">Buat
                            Akun</button>
                        <span class="font-bold text-gray-500">O<span class="text-blue-500">R</span></span>
                        <button type="submit" onclick="login()"
                            class="w-full py-3 bg-blue-500 text-white font-semibold rounded-md hover:bg-blue-600 transition">Login</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Bagian Kanan: Gambar -->
        <div class="w-full lg:w-1/2 h-64 lg:h-full">
            <img src="{{ asset('assets/image/clock.jpg') }}"
                class="w-full h-full object-cover rounded-tl-xl lg:rounded-bl-xl" alt="Clock">
        </div>
    </div>

    <script>
        function register() {
            const formInput = document.getElementById('form_input');
            const url = "{{ route('register') }}";
            formInput.setAttribute('action', url);
        }

        function login() {
            const formInput = document.getElementById('form_input');
            const url = "{{ route('login.auth') }}";
            formInput.setAttribute('action', url);
        }
    </script>
</body>

</html>
