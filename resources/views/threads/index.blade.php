<x-app-layout>
    @foreach($threads as $thread)
        <div>
            <h3 class="text-2xl">{{ $thread->title }}</h3>
            <article class="mt-2">{{ $thread->body }}</article>
        </div>
    @endforeach
</x-app-layout>
