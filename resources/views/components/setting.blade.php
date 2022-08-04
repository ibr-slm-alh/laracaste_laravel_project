@props(['hidden'])
<section class="px-6 py-8">
    <main class="max-w-lg mx-auto mt-10 bg-gray-300 border border-gray-250 p-6 rounded-xl  max-w-4xl max-auto">
        <h1 class="font-bold text-lg mb-8 pb-2 border-b">{{$hidden}}</h1>
        <div class="flex ">
            <aside class="w-48 flex-shrink-0">
                <h4 class="font-semibold mb-4">Links</h4>

                <ul>
                    <li>
                        <a href="/admin/posts" class="{{request()->is('admin/posts') ? 'text-blue-500':''}}">
                           All Post
                        </a>
                    </li>

                    <li>
                        <a href="/admin/posts/create" class="{{request()->is('admin/posts/create') ? 'text-blue-500':''}}">
                            New Post
                        </a>
                    </li>
                </ul>
            </aside>

            <main class="-backdrop-hue-rotate-15 bg-white flex-1 mr-12 rounded-2xl text-lg">
               <span class="font-serif ml-2.5">
                   {{$slot}}
               </span>
            </main>
        </div>
    </main>
</section>
