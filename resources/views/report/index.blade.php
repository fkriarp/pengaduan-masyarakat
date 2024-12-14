<x-layout>


    @if ($reports->isEmpty())
        <div class="w-full h-full flex flex-col justify-center items-center">
            <img src="{{ asset('assets/image/empty-box.png') }}" alt="">
            <h1 class="text-2xl uppercase font-semibold tracking-wide">Kamu tidak memiliki pengaduan</h1>
        </div>
    @else
        <h1 class="text-3xl font-semibold tracking-wide mb-12">Pengaduanku</h1>

        <div class="hs-accordion-group flex flex-col gap-4">

            @foreach ($reports as $report)
                <div class="hs-accordion hs-accordion-active:border-gray-200 bg-white border border-gray-300 rounded-xl shadow-lg transition-all ease-in-out duration-300"
                    id="hs-active-bordered-heading-one">
                    <button
                        class="hs-accordion-toggle hs-accordion-active:text-blue-600 inline-flex justify-between items-center gap-x-6 w-full font-semibold text-start text-gray-800 py-4 px-6 hover:text-gray-700 disabled:opacity-50 disabled:pointer-events-none rounded-lg transition-all duration-300 ease-in-out"
                        aria-expanded="false" aria-controls="hs-basic-active-bordered-collapse-one">
                        <span class="text-lg font-medium">Pengaduan -
                            {{ $report->created_at->isoFormat('D MMMM YYYY') }}</span>
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
                            <div class="max-w-2xl overflow-hidden">
                                <img class="w-full max-w-xl mx-auto rounded-lg shadow-xl border border-gray-300 transform scale-105 transition-transform duration-500 object-cover"
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
                                    <div class="w-full flex justify-between">
                                        <p class="text-lg font-semibold text-green-600">response_status</p>
                                        <a href="#" class="px-4 py-2 text-red-500 bg-red-200 rounded-md font-semibold hover:bg-red-300  ">Batalkan Pengaduan</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Riwayat Pengaduan -->
                        <div class="border-t pt-6 px-6">
                            <!-- Timeline -->
                            <div>
                                <!-- Heading -->
                                <div class="ps-2 my-2 first:mt-0">
                                    <h3 class="text-xs font-medium uppercase text-gray-500">
                                        1 Aug, 2023
                                    </h3>
                                </div>
                                <!-- End Heading -->

                                <!-- Item -->
                                <div class="flex gap-x-3">
                                    <!-- Icon -->
                                    <div
                                        class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200">
                                        <div class="relative z-10 size-7 flex justify-center items-center">
                                            <div class="size-2 rounded-full bg-gray-400"></div>
                                        </div>
                                    </div>
                                    <!-- End Icon -->

                                    <!-- Right Content -->
                                    <div class="grow pt-0.5 pb-8">
                                        <h3 class="flex gap-x-1.5 font-semibold text-gray-800">
                                            <svg class="shrink-0 size-4 mt-1" xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path
                                                    d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z">
                                                </path>
                                                <polyline points="14 2 14 8 20 8"></polyline>
                                                <line x1="16" x2="8" y1="13" y2="13">
                                                </line>
                                                <line x1="16" x2="8" y1="17" y2="17">
                                                </line>
                                                <line x1="10" x2="8" y1="9" y2="9">
                                                </line>
                                            </svg>
                                            Created "Preline in React" task
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-600">
                                            Find more detailed insctructions here.
                                        </p>
                                        <button type="button"
                                            class="mt-1 -ms-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                                            <img class="shrink-0 size-4 rounded-full"
                                                src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8auto=format&fit=facearea&facepad=3&w=320&h=320&q=80"
                                                alt="Avatar">
                                            James Collins
                                        </button>
                                    </div>
                                    <!-- End Right Content -->
                                </div>
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="flex gap-x-3">
                                    <!-- Icon -->
                                    <div
                                        class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200">
                                        <div class="relative z-10 size-7 flex justify-center items-center">
                                            <div class="size-2 rounded-full bg-gray-400"></div>
                                        </div>
                                    </div>
                                    <!-- End Icon -->

                                    <!-- Right Content -->
                                    <div class="grow pt-0.5 pb-8">
                                        <h3 class="flex gap-x-1.5 font-semibold text-gray-800">
                                            Release v5.2.0 quick bug fix 🐞
                                        </h3>
                                        <button type="button"
                                            class="mt-1 -ms-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                                            <span
                                                class="flex shrink-0 justify-center items-center size-4 bg-white border border-gray-200 text-[10px] font-semibold uppercase text-gray-600 rounded-full">
                                                A
                                            </span>
                                            Alex Gregarov
                                        </button>
                                    </div>
                                    <!-- End Right Content -->
                                </div>
                                <!-- End Item -->

                                <!-- Item -->
                                <div class="flex gap-x-3">
                                    <!-- Icon -->
                                    <div
                                        class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200">
                                        <div class="relative z-10 size-7 flex justify-center items-center">
                                            <div class="size-2 rounded-full bg-gray-400"></div>
                                        </div>
                                    </div>
                                    <!-- End Icon -->

                                    <!-- Right Content -->
                                    <div class="grow pt-0.5 pb-8">
                                        <h3 class="flex gap-x-1.5 font-semibold text-gray-800">
                                            Marked "Install Charts" completed
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-600">
                                            Finally! You can check it out here.
                                        </p>
                                        <button type="button"
                                            class="mt-1 -ms-1 p-1 inline-flex items-center gap-x-2 text-xs rounded-lg border border-transparent text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none">
                                            <img class="shrink-0 size-4 rounded-full"
                                                src="https://images.unsplash.com/photo-1659482633369-9fe69af50bfb?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=3&w=320&h=320&q=80"
                                                alt="Avatar">
                                            James Collins
                                        </button>
                                    </div>
                                    <!-- End Right Content -->
                                </div>
                                <!-- End Item -->

                                <!-- Heading -->
                                <div class="ps-2 my-2 first:mt-0">
                                    <h3 class="text-xs font-medium uppercase text-gray-500">
                                        31 Jul, 2023
                                    </h3>
                                </div>
                                <!-- End Heading -->

                                <!-- Item -->
                                <div class="flex gap-x-3">
                                    <!-- Icon -->
                                    <div
                                        class="relative last:after:hidden after:absolute after:top-7 after:bottom-0 after:start-3.5 after:w-px after:-translate-x-[0.5px] after:bg-gray-200">
                                        <div class="relative z-10 size-7 flex justify-center items-center">
                                            <div class="size-2 rounded-full bg-gray-400"></div>
                                        </div>
                                    </div>
                                    <!-- End Icon -->

                                    <!-- Right Content -->
                                    <div class="grow pt-0.5 pb-8">
                                        <h3 class="flex gap-x-1.5 font-semibold text-gray-800">
                                            Take a break ⛳️
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-600">
                                            Just chill for now... 😉
                                        </p>
                                    </div>
                                    <!-- End Right Content -->
                                </div>
                                <!-- End Item -->
                            </div>
                            <!-- End Timeline -->
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    @endif




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
