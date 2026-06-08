<div class="bg-secondary-default overflow-hidden h-full">

    <img src="{{ asset('images/projects/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-60 object-cover" >

    <div class="p-6 h-full">
        
        <span class="text-sm text-primary-600 font-medium bg-primary-100 px-2 py-1">
            {{ $project->project_type }}
        </span>

        <h3 class="text-2xl font-semibold mt-2">
            {{ $project->title }}
        </h3>

        <p class="text-primary-400 mt-3">
            {{ $project->description }}
        </p>

        <!-- <p class="mt-4 text-sm text-gray-500">
            {{ $project->tech_stack }}
        </p> -->
        <div class="">
            <a href="{{ $project->project_url }}" class="inline-flex items-center gap-3 mt-10 uppercase tracking-wide font-medium text-primary-default group/link text-sm">
                Know More
                <span
                    class="w-6 h-6 rounded-full bg-primary-default text-secondary-default
                    flex items-center justify-center
                    transition duration-300 group-hover/link:rotate-45">

                    ↗
                </span>

            </a>
        </div>
        
       <!--  <a href="{{ $project->project_url }}" class="inline-block mt-5 text-primary-600 font-medium hover:underline">
            View Project →
        </a> -->
    </div>
    
</div>