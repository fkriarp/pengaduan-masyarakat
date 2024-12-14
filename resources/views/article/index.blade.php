<x-layout>

    <form action="" method="post" class="flex">
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
            </svg>Search
        </button>
    </form>

    <div class="flex flex-col gap-4">

        <div
            class="relative flex flex-col md:flex-row w-full my-6 bg-white shadow-sm border border-slate-200 rounded-lg ">
            <div class="relative p-2.5 md:w-2/5 shrink-0 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80"
                    alt="card-image" class="h-full w-full rounded-md md:rounded-lg object-cover" />
            </div>
            <div class="p-6">
                <div
                    class="mb-4 rounded-full bg-teal-600 py-0.5 px-2.5 border border-transparent text-xs text-white transition-all shadow-sm w-20 text-center">
                    STARTUP</div>
                <h4 class="mb-2 text-slate-800 text-xl font-semibold">
                    Lyft launching cross-platform service this week
                </h4>
                <p class="mb-8 text-slate-600 leading-normal font-light">
                    Like so many organizations these days, Autodesk is a company in
                    transition. It was until recently a traditional boxed software company
                    selling licenses. Yet its own business model disruption is only part
                    of the story
                </p>
                <div>
                    <a href="#" class="text-slate-800 font-semibold text-sm hover:underline flex items-center">
                        Learn More
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div
            class="relative flex flex-col md:flex-row w-full my-6 bg-white shadow-sm border border-slate-200 rounded-lg ">
            <div class="relative p-2.5 md:w-2/5 shrink-0 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80"
                    alt="card-image" class="h-full w-full rounded-md md:rounded-lg object-cover" />
            </div>
            <div class="p-6">
                <div
                    class="mb-4 rounded-full bg-teal-600 py-0.5 px-2.5 border border-transparent text-xs text-white transition-all shadow-sm w-20 text-center">
                    STARTUP</div>
                <h4 class="mb-2 text-slate-800 text-xl font-semibold">
                    Lyft launching cross-platform service this week
                </h4>
                <p class="mb-8 text-slate-600 leading-normal font-light">
                    Like so many organizations these days, Autodesk is a company in
                    transition. It was until recently a traditional boxed software company
                    selling licenses. Yet its own business model disruption is only part
                    of the story
                </p>
                <div>
                    <a href="#" class="text-slate-800 font-semibold text-sm hover:underline flex items-center">
                        Learn More
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div
            class="relative flex flex-col md:flex-row w-full my-6 bg-white shadow-sm border border-slate-200 rounded-lg ">
            <div class="relative p-2.5 md:w-2/5 shrink-0 overflow-hidden">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=1471&amp;q=80"
                    alt="card-image" class="h-full w-full rounded-md md:rounded-lg object-cover" />
            </div>
            <div class="p-6">
                <div
                    class="mb-4 rounded-full bg-teal-600 py-0.5 px-2.5 border border-transparent text-xs text-white transition-all shadow-sm w-20 text-center">
                    STARTUP</div>
                <h4 class="mb-2 text-slate-800 text-xl font-semibold">
                    Lyft launching cross-platform service this week
                </h4>
                <p class="mb-8 text-slate-600 leading-normal font-light">
                    Like so many organizations these days, Autodesk is a company in
                    transition. It was until recently a traditional boxed software company
                    selling licenses. Yet its own business model disruption is only part
                    of the story
                </p>
                <div>
                    <a href="#" class="text-slate-800 font-semibold text-sm hover:underline flex items-center">
                        Learn More
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

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
                        let options = "";
                        response.forEach(option => {
                            options += `<option value="${option.id}">${option.name}</option>`;
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
