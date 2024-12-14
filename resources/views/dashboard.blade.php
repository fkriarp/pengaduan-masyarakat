<x-layout>

    @if (session('success'))
        <div id="dismiss-alert"
            class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-teal-50 border border-teal-200 text-sm text-teal-800 rounded-lg p-4 mb-8"
            role="alert" tabindex="-1" aria-labelledby="hs-dismiss-button-label">
            <div class="flex">
                <div class="shrink-0">
                    <svg class="shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"></path>
                        <path d="m9 12 2 2 4-4"></path>
                    </svg>
                </div>
                <div class="ms-2">
                    <h3 id="hs-dismiss-button-label" class="text-sm font-medium">
                        {{ session('success') }}
                    </h3>
                </div>
                <div class="ps-3 ms-auto">
                    <div class="-mx-1.5 -my-1.5">
                        <button type="button"
                            class="inline-flex bg-teal-50 rounded-lg p-1.5 text-teal-500 hover:bg-teal-100 focus:outline-none focus:bg-teal-100"
                            data-hs-remove-element="#dismiss-alert">
                            <span class="sr-only">Dismiss</span>
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="M18 6 6 18"></path>
                                <path d="m6 6 12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif


    <div class="mb-10 text-2xl font-semibold tracking-wide">Langkah - Langkah Membuat Laporan</div>
    <div class="grid grid-cols-4 gap-4">

        <div class="p-8 w-80 h-96 bg-white rounded-md flex flex-col justify-between">
            <img src="{{ asset('assets/image/toa.png') }}" class="w-3/4 mx-auto" alt="">
            <div class="mt-2 text-center">
                <p class="font-semibold text-gray-400">Buat Laporan</p>
                <p class="w-3/4 mx-auto text-gray-700">Laporkan keluhan atau aspirasi anda dengan lengkap dan jelas
                </p>
            </div>
        </div>
        <div class="p-8 w-80 h-96 bg-white rounded-md flex flex-col justify-between">
            <img src="{{ asset('assets/image/verify.png') }}" class="w-3/4 mx-auto" alt="">
            <div class="mt-2 text-center">
                <p class="font-semibold text-gray-400">Proses Verifikasi</p>
                <p class="w-3/4 mx-auto text-gray-700">Laporan anda akan diverifikasi & diteruskan kepada petugas
                </p>
            </div>
        </div>
        <div class="p-8 w-80 h-96 bg-white rounded-md flex flex-col justify-between">
            <img src="{{ asset('assets/image/talking.png') }}" class="w-3/4 mx-auto" alt="">
            <div class="mt-2 text-center">
                <p class="font-semibold text-gray-400">Tindak Lanjut</p>
                <p class="w-3/4 mx-auto text-gray-700">Staff akan menindaklanjuti dan membalas laporan anda</p>
            </div>
        </div>
        <div class="p-8 w-80 h-96 bg-white rounded-md flex flex-col justify-between">
            <img src="{{ asset('assets/image/solution.png') }}" class="w-3/4 mx-auto" alt="">
            <div class="mt-2 text-center">
                <p class="font-semibold text-gray-400">Selesai</p>
                <p class="w-3/4 mx-auto text-gray-700">Laporan anda akan terus ditindaklanjuti sampai terselesaikan
                </p>
            </div>
        </div>

        <div class="h-52 bg-white col-span-2 flex flex-col justify-center items-center">
            <span class="font-semibold text-gray-500">Aduanku</span>
            <span class="font-semibold text-gray-400">{{ $report }}</span>
        </div>
        <div class="h-52 bg-white col-span-2 flex flex-col justify-center items-center">
            <span class="font-semibold text-gray-500">Seluruh aduan masyarakat</span>
            <span class="font-semibold text-gray-400">{{ $reports }}</span>
        </div>
    </div>

</x-layout>
