<x-layout>
    <x-slot name="heading">
        Current Job Listings
    </x-slot>

    <ul class="space-y-4">
        @foreach($jobs as $job)
            <li class="p-5 border border-gray-300 rounded-lg shadow-sm hover:bg-gray-100 transition duration-200">
                <p class="text-sm text-gray-500">Posted by:
                    <span class="font-medium text-gray-700">{{ $job->employer->name }}</span>
                </p>
                <a href="/jobs/{{ $job->id }}" class="block mt-2 text-lg font-semibold text-blue-600 hover:underline">
                    {{ $job->title }}
                </a>
                <p class="text-gray-700 mt-1">💰 Salary: <span class="font-semibold">{{ $job->salary }}</span></p>
            </li>
        @endforeach
    </ul>

</x-layout>
