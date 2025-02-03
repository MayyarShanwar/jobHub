<x-layout>
    <x-slot:heading>
        Jobs Page

    </x-slot:heading>
    <div class="flex-initial space-y-4">
        <h1>{{ $job['title'] }}</h1>
        <h1>this job pays {{ $job['salary'] }} a year</h1>
        <a href="/jobs/{{$job->id}}/edit" class="relative inline-block mt-2 border rounded-md px-3 py-2 text-sm font-medium border-gray-800 bg-gray-50">Edit the
            job info</a>
            <form method="POST" action="/jobs/{{$job->id}}">
                @csrf
                @method('DELETE')
            <button type="submit" class="relative inline-block mt-2 border rounded-md px-3 py-2 text-sm font-medium border-gray-800 bg-red-600">Delete the job</button>
            </form>
        </div>
</x-layout>
