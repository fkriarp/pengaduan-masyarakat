<x-layout>

    <h1 class="text-3xl font-semibold tracking-wide mb-12">Pengaduanku</h1>

    <div class="hs-accordion-group flex flex-col gap-4">

        @foreach ($reports as $report)
            <div class="hs-accordion hs-accordion-active:border-gray-200 bg-white border border-gray-300 rounded-xl shadow-lg transition-all ease-in-out duration-300"
                id="hs-active-bordered-heading-one">
                <button
                    class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex justify-between items-center gap-x-6 w-full font-semibold text-start text-gray-800 py-4 px-6 hover:text-gray-700 disabled:opacity-50 disabled:pointer-events-none rounded-lg transition-all duration-300 ease-in-out"
                    aria-expanded="false" aria-controls="hs-basic-active-bordered-collapse-one">
                    <span class="text-lg font-medium">Pengaduan - {{ $report->created_at->format('d F Y') }}</span>
                    <svg class="hs-accordion-active:hidden block size-3.5 transition-transform duration-300"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="M12 5v14"></path>
                    </svg>
                    <svg class="hs-accordion-active:block hidden size-3.5 transition-transform duration-300"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                    </svg>
                </button>

                <div id="hs-basic-active-bordered-collapse-one"
                    class="hs-accordion-content hidden w-full overflow-hidden transition-all duration-300 ease-in-out"
                    role="region" aria-labelledby="hs-active-bordered-heading-one">
                    <div class="px-6 py-6 grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Bagian Kiri: Gambar Pengaduan -->
                        <div class="flex justify-center items-center">
                            <img class="w-full max-w-xl mx-auto rounded-lg shadow-xl border border-gray-300 transform hover:scale-105 transition-transform duration-500"
                                src="{{ asset('storage/' . $report->image) }}" alt="Bukti Gambar">
                        </div>

                        <!-- Bagian Kanan: Detail Pengaduan -->
                        <div class="space-y-6">
                            <div class="text-lg font-semibold text-gray-800">
                                <span class="font-semibold text-black">Tipe:</span> {{ $report->type }}
                            </div>
                            <div class="text-lg font-semibold text-gray-800">
                                <span class="font-semibold text-black">Lokasi:</span> {{ $report->village }},
                                {{ $report->subdistrict }}, {{ $report->regency }}, {{ $report->province }}
                            </div>
                            <div class="text-lg font-semibold text-gray-800">
                                <span class="font-semibold text-black">Deskripsi:</span>
                                <p class="text-gray-600">{{ $report->description }}</p>
                            </div>

                            <!-- Status Pengaduan -->
                            <div class="mt-6 flex items-center gap-x-4">
                                <div
                                    class="flex-shrink-0 w-12 h-12 flex items-center justify-center rounded-full bg-green-100 text-green-600 transition-all duration-300 ease-in-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M5 12l5 5L19 7"></path>
                                    </svg>
                                </div>
                                <p class="text-lg font-semibold text-green-600">
                                    {{ $report->type }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Riwayat Pengaduan -->
                    <div class="border-t pt-6 px-6">
                        <h3 class="text-xl font-semibold text-gray-800">Riwayat Pengaduan:</h3>
                        <ul class="mt-4 space-y-2 text-gray-600">
                            <li>[Tambahkan riwayat pengaduan di sini]</li>
                            <!-- Bisa menambahkan lebih banyak elemen riwayat di sini -->
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach

        

    </div>


    @push('script')
        <script>
            $(document).ready(function() {
                $.ajax({
                    // HTTP method
                    method: "GET",
                    // ENDPOINT
                    url: "https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json",
                    // Tipe Data
                    dataType: "json",
                    success: function(response) {
                        let options = ``;
                        respose.foreach(option => {
                            options += `<option value="${option.id}">${option.name}</option>`
                        });
                        $('#province').append(options);
                    },
                    error: function(error) {
                        console.log(`Error: ${error}`);
                    }
                });
            });
        </script>
    @endpush
</x-layout>
