<x-layout>
    @foreach ($jobs as $job)
    <x-card class="mb-4">
        <x-job-card class="mb-4" :$job>
            <div>
                <x-link-button :href="route('jobs.show', $job)">
                    Show More
                </x-link-button>
            </div>

        </x-job-card>
    </x-card>
    @endforeach
</x-layout>
