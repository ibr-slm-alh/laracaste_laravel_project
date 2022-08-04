@if(session()->has('success'))
    <div x-data="{show:true}"
         x-init="setTimeout(()=>  show = false , 4000)"
         x-show="show"
         class="bg-blue-500 fixed px-4 py-2 rounded-xl text-sm text-white top-1/4">
        {{session('success')}}
    </div>
@endif
