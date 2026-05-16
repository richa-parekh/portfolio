<form method="POST" action="{{ route('contact.store') }}" class="space-y-5">
    @csrf
    <input type="text" name="name" placeholder="Your Name" class="w-full border p-3">
    <input type="email" name="email" placeholder="Your Email" class="w-full border p-3">
    <select name="project_type" class="w-full border p-3"> 
        <option>WordPress</option>
        <option>Laravel</option>     
        <option>Website Design</option>  
    </select>
    <textarea name="message" class="w-full border p-3"></textarea>
    <button class="bg-black text-white px-6 py-3 rounded">Send Message</button>
</form>