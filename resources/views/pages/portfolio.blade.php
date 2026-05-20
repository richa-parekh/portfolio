@extends('layouts.app')
@section('title', 'Portfolio')

@section('content')

<section class="py-24">
    <div class="max-w-7xl mx-auto px-6">
        <x-section-heading
            title="My Portfolio"
            subtitle="Projects showcasing my web development work."
        />
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
                <x-project-card :project="$project"/>
            @endforeach
        </div>
    </div>
</section>

@endsection