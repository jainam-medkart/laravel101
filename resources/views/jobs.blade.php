<x-layout>
    <x-slot name="heading">
        <h2 class="text-2xl font-semibold text-gray-800">Current Job Listings</h2>
    </x-slot>

    <ul class="space-y-3">
        @foreach($jobs as $job)
            <li class="p-4 border rounded-lg hover:bg-gray-100 transition">
                <a href="/jobs/{{$job['id']}}" class="text-lg font-medium  hover:underline">
                    <strong>{{$job['title']}}</strong> pays {{$job['salary']}}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
