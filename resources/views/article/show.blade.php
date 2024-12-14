<x-layout>

        <div class="flex flex-col gap-4">

            <a href="{{ route('article.index') }}"
            class="text-slate-800 font-semibold text-sm hover:underline flex items-center">
            &laquo; Back to Article
        </a>

                <div class="relative flex flex-col md:flex-row w-full mt-6 mb-2 bg-white shadow-sm border border-slate-200 rounded-lg ">
                    <div class="relative p-2.5 md:w-2/5 shrink-0 overflow-hidden">
                        <img src="{{ asset('storage/' . $report->image) }}" alt="card-image"
                            class="h-full w-full rounded-md md:rounded-lg object-cover" />
                    </div>
                    <div class="p-6 flex flex-col justify-between">

                        <div class="flex justify-between">
                            <div
                                class="mb-4 rounded-full bg-teal-600 py-0.5 px-2.5 border border-transparent text-xs text-white transition-all shadow-sm inline">
                                {{ $report->type }}
                            </div>
                            <span>{{ $report->created_at->isoFormat('D MMMM YYYY') }}</span>
                        </div>
                        <a href="" class="hover:underline">
                            <h4 class="my-2 text-slate-800 text-xl font-semibold uppercase">
                                {{ Str::limit($report->title, 43) }}
                            </h4>
                        </a>
                        <p class="mb-3 text-slate-600 leading-normal font-light">
                            {{ $report->description }}
                        </p>
                        <div class="font-semibold text-gray-500 tracking-wide">Lokasi : {{ $report->village }}\{{ $report->subdistrict }}\{{ $report->regency }}\{{ $report->province }}</div>
                        <span class="font-semibold text-gray-400">By {{ $report->user->email }}</span>
            
                    </div>
                </div>
                <div class="relative flex flex-col w-full my-6 bg-white shadow-sm border border-slate-200 rounded-lg">

                    <div id="commentWrapper" class="px-4 py-10 border-b-2">
                        
<div class="flex items-start gap-2.5">
    <img class="w-8 h-8 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="Jese image">
    <div class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
       <div class="flex items-center space-x-2 rtl:space-x-reverse">
          <span class="text-sm font-semibold text-gray-900 dark:text-white">Bonnie Green</span>
          <span class="text-sm font-normal text-gray-500 dark:text-gray-400">11:46</span>
       </div>
       <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">That's awesome. I think our users will really appreciate the improvements.</p>
       <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span>
    </div>
 </div>
 
                    </div>

                    <div class=" flex items-center">
                        <h1 class="p-4 text-xl font-bold">Komentar</h1><i class="fa-regular fa-comment fa-2xl"></i>
                    </div>

                    <form action="" method="post" class="">
                        <div class="p-4 flex gap-2">
                            <i class="mt-3 fa-solid fa-user fa-xl"></i> :     
                            <div class="w-full ">              
                                <textarea id="comment" name="comment" required
                                class="py-3 px-4 w-full border border-gray-300 rounded-lg text-sm focus:border-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-50"
                                rows="4" placeholder="Apa yang anda pikirkan?"></textarea>
                                <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded-md flex items-center gap-1">Kirim<i class="ph ph-paper-plane-right text-ce"></i></button>
                            </div> 
                        </div>
                    </form>
                
        </div>

</x-layout>
