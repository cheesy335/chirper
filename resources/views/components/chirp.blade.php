@props(['chirp'])

<div class="card bg-base-100 shadow">
    <div class="card-body">
        <div class="flex space-x-3 justify-between">
            <div class="min-w-0">
                <div class="flex items-center gap-1">
                    <span class="text-sm font-semibold">{{ $chirp->user->name }}</span>
                    <span class="text-base-content/60">·</span>
                    <span class="text-sm text-base-content/60">{{ $chirp->created_at->diffForHumans() }}</span>
                </div>

                <p class="mt-1">
                    {{ $chirp->message }}
                </p>
            </div>
            @auth
                @if (Auth::user()->id === $chirp->user->id)
                    <div class="actions flex items-end gap-2">
                        <a href="/chirps/{{ $chirp->id }}/edit" class="btn btn-outline">Edit</a>

                        <form action="/chirps/{{ $chirp->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="Delete" class="btn btn-error">
                        </form>
                    </div>
                @endif
            @endauth

        </div>
    </div>
</div>
