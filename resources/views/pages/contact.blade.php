@extends('layouts.app')
@section('title', 'Contact')

@section('content')
<section class="py-20 md:py-20 md:py-24">
    <div class="max-w-4xl mx-auto px-6">
        <x-section-heading
            title="Let's Work Together"
            subtitle="Have a project in mind? Send me a message."
        />
        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded-xl mb-8">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-3xl shadow-sm p-8">
            <form method="POST" action="{{ route('contact.store') }}" class="space-y-6">

                @csrf

                <!-- Name -->
                <div>
                    <label class="font-medium">Name</label>

                    <input type="text" name="name" value="{{ old('name') }}" class="w-full border rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Your Name">

                    @error('name')
                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <!-- Email -->
                <div>
                    <label class="font-medium">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="w-full border rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="your@email.com">

                    @error('email')
                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>
                    @enderror

                </div>
                <!-- Project Type -->
                <div>
                    <label class="font-medium">Project Type</label>

                    <select name="project_type" class="w-full border rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">Select Project Type</option>
                        <option value="WordPress">WordPress Website</option>
                        <option value="Laravel">Laravel Development</option>
                        <option value="Design">Website Design</option>
                    </select>

                    @error('project_type')
                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <!-- Message -->
                <div>
                    <label class="font-medium">Message</label>

                    <textarea name="message" rows="6" class="w-ful mt-2 border rounded-xl p-4" placeholder="Tell me about your project...">{{ old('message') }}</textarea>

                    @error('message')
                        <p class="text-red-500 text-sm mt-2">
                            {{ $message }}
                        </p>
                    @enderror

                </div>

                <button class="bg-black text-white px-8 py-4 rounded-xl hover:opacity-90 transition">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>

@endsection