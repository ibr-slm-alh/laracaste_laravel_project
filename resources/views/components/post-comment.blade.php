@props(['comment'])
<article class="flex border rounded-xl bg-gray-50 p-6">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/60?u={{$comment->user_id}}" alt="" width="60" height="60" class="rounded-xl">
    </div>
    <div class="ml-2">
        <strong>{{$comment->author->username}}</strong>
        <p class="mb-4">posted
            <time>{{$comment->created_at->diffForHumans()}}</time>
        </p>
        <p class="">{{$comment->body}}</p>
    </div>


</article>
