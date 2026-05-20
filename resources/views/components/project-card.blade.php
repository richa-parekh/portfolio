<div class="bg-white rounded-3xl overflow-hidden shadow-sm hover:shadow-lg transition">

    <img src="{{ asset('images/projects/' . $project->image) }}" alt="{{ $project->title }}" class="w-full h-60 object-cover" >

    <div class="p-6">
        <span class="text-sm text-blue-600 font-medium">
            {{ $project->project_type }}
        </span>

        <h3 class="text-2xl font-semibold mt-2">
            {{ $project->title }}
        </h3>

        <p class="text-gray-600 mt-3">
            {{ $project->description }}
        </p>

        <p class="mt-4 text-sm text-gray-500">
            {{ $project->tech_stack }}
        </p>

        <a href="{{ $project->project_url }}" class="inline-block mt-5 text-blue-600">
            View Project →
        </a>
    </div>
    
</div>