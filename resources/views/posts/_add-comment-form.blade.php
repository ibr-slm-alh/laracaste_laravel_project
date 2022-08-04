@auth
    <form method="POST" action="/posts/{{$post->slug}}/comments"
          class="border border-gray-300 p-6 rounded-xl "
    >
        @csrf
        <header class="flex items-center">
            <img src="https://i.pravatar.cc/60?u={{auth()->id()}}" alt="" width="40" height="40" class="rounded-full">

            <h1 class="ml-4">Want's to participate?</h1>
        </header>
        <div>
                                <textarea name="body"
                                          placeholder="Make a new post... "
                                          class="w-full mt-4 text-sm focus:ring"
                                          rows="4"
                                          required
                                ></textarea>
            @error('body')
            <p class="text-red-600 text-xs">{{$message}}</p>
            @enderror
        </div>

        <x-form.button name="POST" />

    </form>
@else
    <p class="font-semibold">
        <a href="register" class="hover:underline">Register</a> OR <a href="/login" class="hover:underline">Log in</a>
        to create a comment
    </p>

@endauth
