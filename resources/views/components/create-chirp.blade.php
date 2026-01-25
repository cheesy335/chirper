<form action="/chirps" method="POST">
    @csrf
    <fieldset class="fieldset w-full">
        <legend class="fieldset-legend textx">Post a Chirp</legend>
        <textarea placeholder="A beautiful Day!" class="textarea h-24 w-full"></textarea>
        <div class="label">Optional</div>
        <input type="submit" value="Post" class="btn btn-primary">
    </fieldset>
</form>
