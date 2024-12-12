@props(['active' => false])

<a {{ $attributes }}>
    <div role="button"
         class="{{ $active ? 'text-blue-gray-900 bg-opacity-80 bg-blue-gray-50' : 'hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900'}} flex items-center w-full p-3 leading-tight transition-all rounded-lg outline-none text-start focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900">
    {{ $slot }}
    </div>
</a>