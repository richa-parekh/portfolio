@extends('layouts.app')
@section('title', 'Portfolio')

@section('content')

<section class="bg-primary-default py-20 md:py-24">
    <div class="max-w-7xl mx-auto px-4 md:px-6">
        <x-section-heading
            title="Portfolio"
            subtitle="Projects showcasing my web development work."
            variant="secondary"
        />
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
                <x-project-card :project="$project"/>
            @endforeach
        </div>
    </div>
</section>

@endsection