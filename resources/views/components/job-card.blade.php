@props(['offer'])
<div class="p-4 bg-white rounded-xl flex flex-col">
    <div class="self-start text-sm text-blue-600">
        {{ $offer->company->name }}
    </div>
    <div>
        <h3 class="font-bold">{{ $offer->title }}</h3>
        <p>{{ $offer->description }} <br>Salary: <span class="font-bold"> ${{ Number::format((int)$offer->salary) }} </span></p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach($offer->tags as $tag)
                <x-tag href="{{ '#' }}">{{ $tag->name }}</x-tag>
            @endforeach
        </div>
        <img src="http://placehold.it/42/42" alt="" class="rounded">
    </div>
</div>
