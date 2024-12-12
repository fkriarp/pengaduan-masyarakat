<x-layout>
    <h1 class="mb-8 text-3xl font-bold text-gray-800">Buat Keluhan</h1>
    <form action="{{ route('report.store') }}" method="post" enctype="multipart/form-data" class="space-y-6">
        <!-- Provinsi -->
        <div class="space-y-1">
            <label for="province" class="block text-sm font-medium text-gray-700">Provinsi<span class="text-red-500">*</span></label>
            <select id="province" name="province" class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50 disabled:opacity-50 disabled:pointer-events-none">
                <option value="" selected disabled>Pilih Provinsi</option>
            </select>
        </div>

        <!-- Kota/Kabupaten -->
        <div class="space-y-1">
            <label for="regency" class="block text-sm font-medium text-gray-700">Kota/Kabupaten<span class="text-red-500">*</span></label>
            <select id="regency" name="regency" class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50 disabled:opacity-50 disabled:pointer-events-none">
                <option value="" selected disabled>Pilih Kota/Kabupaten</option>
                <option>Bandung</option>
                <option>Semarang</option>
            </select>
        </div>

        <!-- Kecamatan -->
        <div class="space-y-1">
            <label for="subdistrict" class="block text-sm font-medium text-gray-700">Kecamatan<span class="text-red-500">*</span></label>
            <select id="subdistrict" name="subdistrict" class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50 disabled:opacity-50 disabled:pointer-events-none">
                <option value="" selected disabled>Pilih Kecamatan</option>
                <option>Cimahi</option>
            </select>
        </div>

        <!-- Kelurahan -->
        <div class="space-y-1">
            <label for="village" class="block text-sm font-medium text-gray-700">Kelurahan<span class="text-red-500">*</span></label>
            <select id="village" name="village" class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50 disabled:opacity-50 disabled:pointer-events-none">
                <option value="" selected disabled>Pilih Kelurahan</option>
                <option>Setiamanah</option>
            </select>
        </div>

        <!-- Kategori -->
        <div class="space-y-1">
            <label for="type" class="block text-sm font-medium text-gray-700">Kategori<span class="text-red-500">*</span></label>
            <select id="type" name="type" class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50">
                <option value="" selected disabled>Pilih Kategori</option>
                <option value="KEJAHATAN">Kejahatan</option>
                <option value="PEMBANGUNAN">Pembangunan</option>
                <option value="SOSIAL">Sosial</option>
            </select>
        </div>

        <!-- Deskripsi -->
        <div class="space-y-1">
            <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi<span class="text-red-500">*</span></label>
            <textarea id="description" name="description" class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50" rows="4" placeholder="Ketikkan detail keluhan..."></textarea>
        </div>

        <!-- Upload Gambar -->
        <div class="space-y-1">
            <label for="image" class="block text-sm font-medium text-gray-700">Gambar Pendukung<span class="text-red-500">*</span></label>
            <input type="file" name="image" id="image" class="block w-full text-sm text-gray-500 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:bg-gray-100 file:text-blue-600 hover:file:bg-gray-200">
        </div>

        <!-- Checkbox -->
        <div class="flex items-center space-x-3">
            <input type="checkbox" id="hs-default-checkbox" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            <label for="hs-default-checkbox" class="text-sm text-gray-600">Laporan yang disampaikan sesuai dengan kebenaran.</label>
        </div>

        <!-- Tombol Kirim -->
        <div>
            <button type="submit" class="w-full py-3 px-5 text-sm font-semibold text-white bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 focus:ring focus:ring-blue-300 focus:ring-opacity-50">Kirim</button>
        </div>
    </form>
</x-layout>

@push('script')
    <script>
        $(document).ready(function () {
            $.ajax({
                // HTTP method
                method: "GET",
                // endpoint
                url: "https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json",
                // Tipe Data
                dataType: "json",
                success: function(response) {
                    let options = "";
                    response.forEach(option => {
                        let createOption = `
                            <option value="${option.id}">${option.name}</option>
                        `;
                        options += createOption;
                    });
                    $('#province').append(options);
                }
            })
        });
    </script>
@endpush
