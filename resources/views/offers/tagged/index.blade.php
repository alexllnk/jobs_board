<x-layout>
    <section>
        <h3 class="p-4 bg-gradient-to-b from-amber-400/90 to-white rounded-xl text-center mb-4 font-bold"
        >Jobs tagged with {{ $tag->name }}</h3>

        <div class="flex flex-col space-y-5">
            @forelse($offers ?? [] as $offer)
                <x-job-card-wide :offer="$offer"/>

            @empty
                <p>No offers yet</p>
            @endforelse
        </div>
    </section>
    <div class="mt-4 mb-4">
        {{ $offers->links() }}
    </div>
    <footer>
        <hr>
    </footer>
</x-layout>
