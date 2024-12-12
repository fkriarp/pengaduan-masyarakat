<div
  class="relative h-screen flex w-full max-w-[20rem] flex-col rounded-xl bg-white bg-clip-border p-4 text-gray-700 shadow-xl shadow-blue-gray-900/5">
  <div class="p-4 mb-2">
    <h5 class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal uppercase  text-blue-gray-900">
      suara<span class="text-blue-600">kita</span>
    </h5>
  </div>
  <nav class="flex min-w-[240px] flex-col gap-1 p-2 font-sans text-base font-normal text-blue-gray-700">
    <x-nav-link href="{{ route('dashboard') }}" :active="request()->is('dashboard')"><i class="ph ph-hash"></i>Dashboard</x-nav-link>
    <x-nav-link href="{{ route('report.show') }}" :active="request()->is('report/show')"><i class="ph ph-globe"></i>Artikel Pengaduan</x-nav-link>
    <x-nav-link href="{{ route('report.create') }}" :active="request()->is('report/create')"><i class="ph ph-files"></i>Buat Pengaduan</x-nav-link>
    <x-nav-link href="{{ route('logout') }}"><i class="ph ph-sign-out"></i>Sign out</x-nav-link>
  </nav>
</div>