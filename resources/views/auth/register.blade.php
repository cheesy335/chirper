<x-layout>
<div class="w-full flex items-center justify-center mt-10">
<form action="/register" method="post" class="flex flex-col items-center w-[90%] lg:w-90 bg-base-200 rounded-2xl p-10">
@csrf

<div>
    <h1 class="text-3xl font-bold mb-5">Sign Up</h1>
</div>
<fieldset class="fieldset w-full">
  <legend class="fieldset-legend">Full Name</legend>
  <input type="text" name="name" placeholder="Will Smith" class="input w-full" />
  @error('name')
  <p class="label">{{ $message }}</p>
  @enderror
</fieldset>

<fieldset class="fieldset w-full">
  <legend class="fieldset-legend">Email</legend>
  <input type="email" name="email" placeholder="willsmith@chirper.com" class="input w-full" />
  @error('email')
  <p class="label">{{ $message }}</p>
  @enderror
</fieldset>

<fieldset class="fieldset w-full">
  <legend class="fieldset-legend">Password</legend>
  <input type="email" name="email" placeholder="Password" class="input w-full" />
  @error('email')
  <p class="label">{{ $message }}</p>
  @enderror
</fieldset>

<div class="w-full mt-5">
    <input type="submit" value="Sign Up" class="btn btn-primary w-full">
</div>


</form>
</div>
</x-layout>