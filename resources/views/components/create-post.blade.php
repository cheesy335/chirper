<div class="w-full max-w-2xl mx-auto">
    <div class="card bg-base-100 shadow mt-8">
        <div class="card-body">
            <form method="POST" action="/posts">
                @csrf

                <div class="form-control w-full">
                    <textarea name="message" class="textarea textarea-bordered w-full resize-none @error('message') textarea-error @enderror"
                        rows="4"></textarea>

                    @error('message')
                        <div class="label">
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        </div>
                    @enderror
                </div>

                <div class="card-actions justify-between mt-4">
                    <button type="reset" class="btn btn-outline btn-sm">
                        Cancel
                    </button>
                    {{-- <a href="/" class="btn btn-ghost btn-sm">
                        Cancel
                    </a> --}}
                    <button type="submit" class="btn btn-primary btn-sm">
                        Post Chirp
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
