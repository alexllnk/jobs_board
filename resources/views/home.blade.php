<x-layout>
    <section>
        <h3 class="p-4 bg-gradient-to-b from-amber-400/90 to-white rounded-xl text-center mb-4 font-bold"
        >Top Jobs</h3>
        <div class="grid lg:grid-cols-3 gap-7">
            @forelse($topOffers ?? [] as $offer)
                <x-job-card :offer="$offer"/>

            @empty
                <p>No offers yet</p>
            @endforelse
        </div>

        <h4 class="p-4 bg-gradient-to-b from-amber-400/90 to-white rounded-xl text-center mb-4 mt-4 font-bold"
        >Recent Jobs</h4>
        <div class="flex flex-col space-y-5">
            @forelse($recentOffers ?? [] as $offer)
                <x-job-card-wide :offer="$offer"/>

            @empty
                <p>No offers yet</p>
            @endforelse
        </div>
    </section>
    <div class="mt-4 mb-4">
        {{ $recentOffers->links() }}
    </div>
    <footer>
        <hr>
    </footer>
</x-layout>
