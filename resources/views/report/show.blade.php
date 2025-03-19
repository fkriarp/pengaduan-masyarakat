<x-layout>
   <div class="h-full flex flex-col gap-4">
      <a href="{{ route('report.article') }}"
         class="text-slate-800 font-semibold text-sm hover:underline flex items-center">
      &laquo; Kembali
      </a>
      <div
         class="relative flex flex-col md:flex-row w-full mt-3 bg-white shadow-sm border border-slate-200 rounded-lg ">
         <div class="relative p-2.5 md:w-2/5 shrink-0 overflow-hidden">
            <img src="{{ asset('storage/' . $report->image) }}" alt="card-image"
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
            <h4 class="my-2 text-slate-800 text-xl font-semibold uppercase">
               {{ $report->title }}
            </h4>
            <p class="mb-3 w-full h-52 text-slate-600 leading-normal font-light overflow-y-auto border-b border-t">
               {{ $report->description }}
            </p>
            <div class="text-[12px] font-semibold text-gray-500 tracking-wide">{{ $report->village }}\{{ $report->subdistrict }}\{{ $report->regency }}\{{ $report->province }}</div>
         </div>
      </div>
      <div class="relative flex flex-col w-full my-2 bg-white shadow-sm border border-slate-200 rounded-lg">
         <div class="flex justify-center border-b-2">
            <h1 class="p-4 text-xl font-bold text-gray-600">Komentar</h1>
         </div>
         <div id="commentWrapper" class="p-10 max-h-72 border-b-2 overflow-y-auto">
            @if ($report->comments->isEmpty())
            <div class="w-full h-full flex justify-center items-center">
               <h1 class="font-semibold text-gray-600 uppercase">Tidak Ada Komentar</h1>
            </div>
            @else
            @foreach ($report->comments as $comment)
            <div class="mb-4 flex items-start gap-2.5">
               <img class="w-8 h-8 rounded-full border bg-neutral-200"
                  src="{{ asset('assets/image/user.png') }}" alt="Avatar">
               <div
                  class="flex flex-col w-full max-w-[320px] leading-1.5 p-4 border-gray-200 bg-gray-100 rounded-e-xl rounded-es-xl dark:bg-gray-700">
                  <div class="flex items-center space-x-2 rtl:space-x-reverse">
                     <span
                        class="text-xs font-semibold text-gray-900 dark:text-white">{{ $comment->user->email }}</span>
                     <span
                        class="text-xs font-normal text-gray-500 dark:text-gray-400">{{ $comment->created_at->diffForHumans() }}</span>
                     @unless ($comment->created_at->eq($comment->updated_at))
                     <small class="text-sm text-gray-500"> &middot; {{ __('edited') }}</small>
                     @endunless
                  </div>
                  <p class="text-sm font-normal py-2.5 text-gray-900 dark:text-white">
                     {{ $comment->comment }}
                  </p>
                  {{-- <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Delivered</span> --}}
               </div>
               @if ($comment->user->is(Auth::user()))
               <button id="dropdownMenuIconButton" data-dropdown-toggle="dropdownDots"
                  data-dropdown-placement="bottom-start"
                  class="inline-flex self-center items-center p-2 text-sm font-medium text-center text-gray-900 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-800 dark:focus:ring-gray-600"
                  type="button">
                  <svg class= "w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                     <path
                        d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z" />
                  </svg>
               </button>
               <div id="dropdownDots"
                  class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-40 dark:bg-gray-700 dark:divide-gray-600">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                     aria-labelledby="dropdownMenuIconButton">
                     <li>
                        <a href="#"
                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reply</a>
                     </li>
                     <li>
                        <a href="#"
                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                     </li>
                     <li>
                        <a href="#"
                           class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
                     </li>
                  </ul>
               </div>
               @endif
            </div>
            @endforeach
            @endif
         </div>
         <form action="{{ route('comment.store') }}" method="post" class="p-6 w-full flex items-center gap-2">
            @csrf
            <img class="w-8 h-8  rounded-full border bg-neutral-200" src="{{ asset('assets/image/user.png') }}"
               alt="Avatar">
            <input type="hidden" name="reportId" value="{{ $report->id }}">
            <input type="text" id="comment" name="comment"
               class="py-3 px-5 block w-full border-gray-200 rounded-full text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
               placeholder="Apa yang anda pikirkan?" autocomplete="off">
            <button type="submit"
               class="px-4 py-2 text-white bg-blue-500 rounded-full flex items-center gap-1 hover:bg-blue-600">SEND<i
               class="ph ph-paper-plane-right"></i>
            </button>
         </form>
      </div>
   </div>
</x-layout>