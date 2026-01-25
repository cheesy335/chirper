<form action="/chirps" method="POST">
    @csrf
    <fieldset class="fieldset w-full">
        <legend class="fieldset-legend">Post a Chirp</legend>
        <textarea type="text" name="chirp" placeholder="A beautiful Day!" class="textarea h-24 w-full"></textarea>
        <div class="label">
            @error('chirp')
                {{ $message }}
            @enderror
        </div>
        <input type="submit" value="Post" class="btn btn-primary">
    </fieldset>
</form>
