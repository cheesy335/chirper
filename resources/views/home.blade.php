<x-layout>
    <div class="w-[90%] lg:w-160 flex flex-col items-center justify-center">
        <div class="w-full">
            <h1 class="text-3xl">Welcome to Chirper</h1>
            <div class="w-full">
                <fieldset class="fieldset w-full">
                    <legend class="fieldset-legend textx">Post a Chirp</legend>
                    <textarea class="textarea h-24 w-full" placeholder="A beautiful Day!"></textarea>
                    <div class="label">Optional</div>
                    <input type="submit" value="Post" class="btn btn-primary">
                </fieldset>
            </div>
        </div>

        <div>
            <h1>The Chirp</h1>
        </div>
    </div>
</x-layout>
