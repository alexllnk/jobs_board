<x-layout>
    <section>
        <h3>Top Jobs</h3>
        <div class="grid lg:grid-cols-3 gap-7">
            @forelse($topOffers ?? [] as $offer)
                <x-job-card :offer="$offer"/>

            @empty
                <p>No offers yet</p>
            @endforelse
        </div>
    </section>
</x-layout>
