
<x-layout>
    <x-slot:heading>
    Jobs Page
    </x-slot:heading>
    <div>
        @foreach ($jobs as $job)
            
                <a href="/jobs/{{$job['id']}}" class="block m-4 px-4 py-6 border border-gray-400 rounded-lg">
                    <div class="text-blue-700">{{$job->employer->name}} :</div>
                <div>
                    <strong>{{$job['title']}}</strong> : pays {{$job['salary']}} a year
                    </div>
                </a>
            
        @endforeach
        {{$jobs->links()}}

    </div>
</x-layout>