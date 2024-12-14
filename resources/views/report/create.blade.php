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

    @if (session('error'))
        <div id="dismiss-alert"
            class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-red-50 border border-red-200 text-sm text-red-800 rounded-lg p-4 mb-8"
            role="alert" tabindex="-1" aria-labelledby="hs-dismiss-button-label">
            <div class="flex">
                <div class="shrink-0">
                    <svg class="shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="m15 9-6 6"></path>
                        <path d="m9 9 6 6"></path>
                    </svg>
                </div>
                <div class="ms-2">
                    <h3 id="hs-dismiss-button-label" class="text-sm font-medium">
                        {{ session('error') }}
                    </h3>
                </div>
                <div class="ps-3 ms-auto">
                    <div class="-mx-1.5 -my-1.5">
                        <button type="button"
                            class="inline-flex bg-red-50 rounded-lg p-1.5 text-red-500 hover:bg-red-100 focus:outline-none focus:bg-red-100"
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

    <h1 class="mb-8 text-3xl font-bold text-gray-800">Buat Keluhan</h1>
    <form action="{{ route('report.store') }}" method="post" enctype="multipart/form-data" class="space-y-6">
        @csrf

        <!-- Provinsi -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div class="space-y-1">
                <label for="province" class="block text-sm font-medium text-gray-700">Provinsi<span
                        class="text-red-500">*</span></label>
                <select id="province" name="province" required
                    class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                    <option value="" selected disabled>Pilih Provinsi</option>
                </select>
            </div>

            <!-- Kota/Kabupaten -->
            <div class="space-y-1">
                <label for="regency" class="block text-sm font-medium text-gray-700">Kota/Kabupaten<span
                        class="text-red-500">*</span></label>
                <select id="regency" name="regency" required
                    class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                    <option value="" selected disabled>Pilih Kota/Kabupaten</option>
                </select>
            </div>
        </div>

        <!-- Kecamatan & Kelurahan -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <!-- Kecamatan -->
            <div class="space-y-1">
                <label for="subdistrict" class="block text-sm font-medium text-gray-700">Kecamatan<span
                        class="text-red-500">*</span></label>
                <select id="subdistrict" name="subdistrict" required
                    class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                    <option value="" selected disabled>Pilih Kecamatan</option>
                </select>
            </div>

            <!-- Kelurahan -->
            <div class="space-y-1">
                <label for="village" class="block text-sm font-medium text-gray-700">Kelurahan<span
                        class="text-red-500">*</span></label>
                <select id="village" name="village" required
                    class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                    <option value="" selected disabled>Pilih Kelurahan</option>
                </select>
            </div>
        </div>

        <!-- Kategori -->
        <div class="space-y-1">
            <label for="type" class="block text-sm font-medium text-gray-700">Kategori<span
                    class="text-red-500">*</span></label>
            <select id="type" name="type" required
                class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                <option value="" selected disabled>Pilih Kategori</option>
                <option value="KEJAHATAN">Kejahatan</option>
                <option value="PEMBANGUNAN">Pembangunan</option>
                <option value="SOSIAL">Sosial</option>
            </select>
        </div>

        <!-- Deskripsi -->
        <div class="space-y-1">
            <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi<span
                    class="text-red-500">*</span></label>
            <textarea id="description" name="description" required
                class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50"
                rows="4" placeholder="Ketikkan detail keluhan..."></textarea>
            @error('description')
                <small class="text-danger-500">{{ $message }}</small>
            @enderror
        </div>

        <!-- Upload Gambar -->
        <div class="space-y-1">
            <label for="image" class="block text-sm font-medium text-gray-700">Gambar Pendukung<span
                    class="text-red-500">*</span></label>
            <input type="file" name="image" id="image" required
                class="block w-full text-sm text-gray-500 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:bg-gray-100 file:text-blue-600 hover:file:bg-gray-200">
            @error('image')
                <small class="text-danger-500">{{ $message }}</small>
            @enderror
        </div>

        <!-- Checkbox -->
        <div class="flex items-center space-x-3">
            <input type="checkbox" id="hs-default-checkbox" name="statement"
                class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            <label for="hs-default-checkbox" class="text-sm text-gray-600">Laporan yang disampaikan sesuai dengan
                kebenaran.</label>
        </div>

        <!-- Tombol Kirim -->
        <div>
            <button type="submit"
                class="w-full py-3 px-5 text-sm font-semibold text-white bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 focus:ring focus:ring-blue-300 focus:ring-opacity-50">Kirim</button>
        </div>
    </form>

    @push('script')
        <script>
            $(document).ready(function() {

                function populateSelect(id, url, placeholder) {
                    $.ajax({
                        method: "GET",
                        url: url,
                        dataType: "json",
                        success: function(response) {
                            let options = `<option value="" selected disabled>${placeholder}</option>`;
                            response.forEach(option => {
                                options += `<option value="${option.name}">${option.name}</option>`;
                            });
                            $(id).html(options);
                        },
                        error: function(error) {
                            console.log(`Error: ${error}`);
                        }
                    });
                }

                populateSelect('#province', "https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json",
                    "Pilih Provinsi");

                $('#province').on('change', function() {
                    let provinceId = $(this).val();
                    if (provinceId) {
                        populateSelect('#regency',
                            `https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provinceId}.json`,
                            "Pilih Kota/Kabupaten");
                    }
                });

                $('#regency').on('change', function() {
                    let regencyId = $(this).val();
                    if (regencyId) {
                        populateSelect('#subdistrict',
                            `https://www.emsifa.com/api-wilayah-indonesia/api/districts/${regencyId}.json`,
                            "Pilih Kecamatan");
                    }
                });

                $('#subdistrict').on('change', function() {
                    let subdistrictId = $(this).val();
                    if (subdistrictId) {
                        populateSelect('#village',
                            `https://www.emsifa.com/api-wilayah-indonesia/api/villages/${subdistrictId}.json`,
                            "Pilih Kelurahan");
                    }
                });
            });
        </script>
    @endpush
</x-layout>
