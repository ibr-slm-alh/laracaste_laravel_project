<x-layout>
    <section>
    @include('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($posts->count())
           <x-post-grid :posts="$posts"/>

            {{$posts->links()}}
        @else
            <h6 class="text-center">No Post yet check the back... .</h6>
        @endif
{{--        <div class="lg:grid lg:grid-cols-3">--}}
{{--            <x-post-card/>--}}
{{--            <x-post-card/>--}}
{{--            <x-post-card/>--}}
{{--        </div>--}}
    </main>

    {{--    @foreach ($posts as $post)--}}

{{--        <article>--}}
{{--            <h1>--}}
{{--                <a href="/posts/<?= $post->slug; ?>">--}}

{{--                {{$post->title}}--}}
{{--                </a>--}}
{{--            </h1>--}}

{{--            <p>--}}
{{--                By <a href="/authors/{{$post->author->username}}">{{$post->author->name}}</a> in    <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>--}}
{{--            </p>--}}

{{--            <div>--}}
{{--                {{$post->excerpt}}--}}
{{--            </div>--}}
{{--        </article>--}}
{{--    @endforeach--}}
    </section>
</x-layout>

