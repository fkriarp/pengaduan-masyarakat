<x-layout>
   <form action="{{ route('report.article') }}" method="get" class="flex">
      @csrf
      <select id="province" name="province"
         class="py-3 px-4 pe-9 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
         <option value="" disabled selected>Pilih Provinsi</option>
      </select>
      <button type="submit"
         class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
         <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
            viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
               d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
         </svg>
         Cari
      </button>
   </form>
   @if ($reports->isEmpty())
   <div class="w-full h-full flex flex-col justify-center items-center">
      <img src="{{ asset('assets/image/empty-box.png') }}" alt="">
      <h1 class="text-2xl uppercase font-semibold tracking-wide">tidak ada artikel</h1>
   </div>
   @else
   <div class="flex flex-col gap-4">
      @foreach ($reports as $report)
      <div
         class="relative flex flex-col md:flex-row w-full my-6 bg-white shadow-sm border border-slate-200 rounded-lg ">
         <div class="relative p-2.5 md:w-2/5 shrink-0 overflow-hidden">
            <img src="{{ asset('storage/' . $report->image) }}" alt="Bukti Gambar"
               class="h-full w-full rounded-md md:rounded-lg object-cover" />
         </div>
         <div class="p-6 flex flex-col justify-between">
            <div class="flex justify-between">
               <div>
                  <span class="mb-4 rounded-full bg-teal-600 py-0.5 px-2.5 border border-transparent text-xs text-white transition-all shadow-sm inline">{{ $report->type }}</span>
                  <span class="text-[11px] font-semibold text-gray-400">{{ $report->user->email }}</span>
               </div>
               <div>
                  <span class="text-[13px]">{{ $report->created_at->diffForHumans() }}</span>
               </div>
            </div>
            <a href="{{ route('report.show', $report->id) }}" class="hover:underline">
               <h4 class="my-2 text-slate-800 text-xl font-semibold uppercase">
                  {{ Str::limit($report->title, 43) }}
               </h4>
            </a>
            <p class="mb-3 text-slate-600 leading-normal font-light">
               {{ Str::limit($report->description, 183) }}
            </p>
            <div class="text-[12px] font-semibold text-gray-500 tracking-wide">{{ $report->village }}\{{ $report->subdistrict }}\{{ $report->regency }}\{{ $report->province }}</div>
            <div class="mt-3 flex justify-between items-end">
               <div class="flex gap-8">
                    <span><i class="fa-regular fa-heart"></i></span>
                    <span><i class="fa-regular fa-eye"></i></span>
               </div>
               <a href="{{ route('report.show', $report->id) }}" class="text-slate-800 font-semibold text-sm hover:underline flex items-center">Baca Selengkapnya &raquo;</a>
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
                  let options = "";
                  response.forEach(option => {
                      options +=
                          `<option value="${option.name}" name="province">${option.name}</option>`;
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