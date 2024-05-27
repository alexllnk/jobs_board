@php use Illuminate\Support\Number; @endphp
@props(['offer'])
<div class="p-4 bg-white rounded-xl flex">
    <div class="max-w-24">
        <img src="http://placehold.it/42/42" alt="" class="rounded min-h-24 min-w-24">
        <div class="self-start text-sm text-blue-600">
            {{ $offer->company->name }}
        </div>
    </div>

    <div class="pl-4">
        <h3 class="font-bold">{{ $offer->title }}</h3>
        <p>{{ $offer->description }} Salary: <span class="font-bold"> ${{ Number::format((int)$offer->salary) }} </span></p>
        <div>
            @foreach($offer->tags as $tag)
                <x-tag href="{{ '#' }}">{{ $tag->name }}</x-tag>
            @endforeach
        </div>
    </div>


</div>

