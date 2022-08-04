@props(['trigger'])
<div x-data="{show: false}" @click.away="show = false" class="relative px-8">
{{-- trigger --}}
    <div @click="show = !show">
        {{$trigger}}
    </div>
{{--Links--}}
    <div x-show="show" class="py-2 absolute bg-gray-100 w-full overflow-auto max-h-52 mt-2 rounded-xl z-50">
        {{$slot}}
    </div>
</div>
