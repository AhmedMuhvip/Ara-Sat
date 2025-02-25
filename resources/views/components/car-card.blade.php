@props(['job'])

<x-panel
        class="p-4 flex flex-col text-center">
    <div class="self-start text-sm">{{$job->employer->name}}</div>
    <div class="py-8 ">
        <h3 class="group-hover:text-blue-800 transition-colors duration-700 text-xl font-bold">{{$job->title}}</h3>
        <p class="text-sm mt-4">{{$job->salary}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div class="">
            @foreach($job->tags as $tag)
                <x-tag size="small" :$tag/>
            @endforeach
        </div>
        <x-car-logo :width="42"/>
    </div>
</x-panel>