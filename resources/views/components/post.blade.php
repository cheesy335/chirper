@props(['post'])

<div class="card bg-base-100 shadow">
    <div class="card-body">
        <div class="flex space-x-3 justify-between">
            <div class="min-w-0">
                <div class="flex items-center gap-1">
                    <span class="text-sm font-semibold">{{ $post->user->name }}</span>
                    <span class="text-base-content/60">·</span>
                    <span class="text-sm text-base-content/60">{{ $post->created_at->diffForHumans() }}</span>
                </div>

                <p class="mt-1">
                    {{ $post->message }}
                </p>
            </div>
            @auth
                @if (Auth::user()->id === $post->user->id)
                    <div class="actions flex items-end gap-2">
                        <a href="/posts/{{ $post->id }}/edit" class="btn btn-outline btn-sm">Edit</a>

                        <form action="/posts/{{ $post->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-error btn-sm">
                        </form>
                    </div>
                @endif
            @endauth

        </div>
    </div>
</div>
