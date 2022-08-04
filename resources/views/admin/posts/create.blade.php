<x-layout>

    <x-setting hidden="publish new post">
        <form method="POST" action="/admin/posts" class="-backdrop-hue-rotate-15 bg-white flex-1 pl-10 pr-10 rounded-2xl text-lg" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title"/>
            <x-form.input name="thumbnails" type="file"/>
            <x-form.input name="slug"/>



            <x-form.textarea name="excerpt"/>
            <x-form.textarea name="body"/>

            <div class="mb-6">
                <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="category_id">
                    Category
                </label>

                <select name="category_id" id="category_id" class="border-2 h-8 rounded-xl w w-3/6">
                    {{--                        @php--}}
                    {{--                            $categories = App\Models\Category::all();--}}
                    {{--                        @endphp--}}
                    @foreach(App\Models\Category::all() as $category)
                        <option value="{{$category->id}}">{{ucwords($category->name)}}</option>

                    @endforeach
                </select>
            </div>

            <x-form.button name="Publish" />
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
