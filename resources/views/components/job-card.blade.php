@props(['offer'])
<div class="p-4 bg-white rounded-xl flex flex-col text-center">
    <div class="self-start text-sm text-blue-600">
        {{ $offer->company }}
    </div>
    <div>
        <h3>{{ $offer->title }}</h3>
        <p>{{ $offer->description }} {{ $offer->salary }}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            <x-tag>Tag</x-tag>
        </div>
        <img src="http://placehold.it/42/42" alt="" class="rounded">
    </div>
</div>
