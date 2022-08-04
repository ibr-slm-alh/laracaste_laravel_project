<x-layout>

    <x-setting hidden="Edit Post">
        <form method="POST" action="/admin/posts/{{$post->id}}" class="-backdrop-hue-rotate-15 bg-white flex-1 pl-10 pr-10 rounded-2xl text-lg" enctype="multipart/form-data">
            @csrf

            @method('PATCH')
            <x-form.input name="title" :value="old('title',$post->title)"/>
            <x-form.input name="slug" :value="old('slug',$post->slug)"/>

            <div class="flex mt-6">

                <div class="flex-1">
                    <x-form.input name="thumbnails" type="file" :value="old('thumbnails',$post->thumbnails)"/>
                </div>

                <img src="{{asset('storage/'.$post->thumbnails)}}" alt="" class="h-2/4 rounded-xl ml-4" width="100">

            </div>



            <x-form.textarea name="excerpt">{{old('excerpt',$post->excerpt)}}</x-form.textarea>
            <x-form.textarea name="body">{{old('body',$post->body)}}</x-form.textarea>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category_id">
                    Category
                </label>

                <select name="category_id" id="category_id" class="border-2 h-8 rounded-xl w w-3/6">
                    {{--                        @php--}}
                    {{--                            $categories = App\Models\Category::all();--}}
                    {{--                        @endphp--}}
                    @foreach(App\Models\Category::all() as $category)
                        <option value="{{$category->id}}"
                                 {{old('category_id',$post->category_id) == $category->id ? 'selected' : ''}}
                        >
                            {{ucwords($category->name)}}
                        </option>

                    @endforeach
                </select>
            </div>

            <x-form.button name="Updated" />
            @if($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li class="text-xs text-red-500">{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </form>
    </x-setting>



</x-layout>
