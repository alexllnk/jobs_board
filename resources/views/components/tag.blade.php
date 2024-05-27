<a {{ $attributes->merge([
    'class' => 'bg-gray-200 hover:bg-gray-400 transition-colors duration-500 px-2 rounded text-sm space-y-3 inline-block'
]) }}
>
    {{ $slot }}
</a>
