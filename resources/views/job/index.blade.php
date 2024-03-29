<x-layout>
    <x-bread-crumbs class="mb-4"
    :links="['Jobs' => route('jobs.index')]" />
    <x-card class="mb-4 text-sm">
        <form action="{{ route('jobs.index') }}" method="GET" id="filtering-form">
            <div class="mb-4 grid grid-cols-2 gap-4">
                <div>
                    <div class="mb-1 font-semibold">Search</div>
                    <x-text-input name="search" value="{{ request('search')}}" placeholder="Search Here"
                    form-id="filtering-form"/>
                </div>
                <div>
                    <div class="mb-1 font-semibold">Salary</div>
                    <div class="flex space-x-2">
                        <x-text-input name="min_salary" value="{{ request('min_salary') }}" placeholder="From" form-id="filtering-form" />
                        <x-text-input name="max_salary" value="{{ request('max_salary') }}" placeholder="To" form-id="filtering-form" />
                    </div>
                </div>
                <div>
                    <div clas="mb-1 text-semibold">Experience</div>
                   <x-radio-group name="experience_level" :options="\App\Models\Job::$experience" />
                </div>
                <div>
                    <div clas="mb-1 text-semibold">Category</div>
                   <x-radio-group name="category" :options="\App\Models\Job::$category" />
                </div>
            </div>
            <x-button class="w-full">Filter</x-button>
        </form>
    </x-card>
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
