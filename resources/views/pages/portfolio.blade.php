@extends('layouts.app')

@section('title', 'Portfolio')

@section('content')

<section class="py-16">
    <div class="max-w-7xl mx-auto">
        <h2 class="text-4xl font-bold mb-10">
            My Projects
        </h2>
        <div class="grid md:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    <x-project-card :project="$project"/>
                @endforeach
            </div>
        </div>
</section>

@endsection