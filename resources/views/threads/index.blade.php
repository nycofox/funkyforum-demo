<x-app-layout>
    @foreach($threads as $thread)
        <div class="mt-4 p-4 bg-gray-100 rounded-lg">
            <h3 class="text-2xl">
                <a href="{{ route('threads.show', $thread) }}">
                    {{ $thread->title }}
                </a>
            </h3>
            <p>{{ $thread->user->name }} wrote {{ $thread->created_at->diffForHumans() }}:</p>
            <article class="mt-2">{{ $thread->body }}</article>
        </div>
    @endforeach
</x-app-layout>
