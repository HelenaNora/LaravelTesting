<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body class="antialiased m-10">
    <h1 class="text-3xl font-bold mb-10">Posts</h1>
    <ul>
        @foreach($posts as $post)
        <li class="flex items-center mb-5">
            <span class="w-1/5">{{$post->user->name}}:</span>
            <p class="w-2/5">{{$post->content}}</p>
            <div class="w-1/5 flex">
                <a href="{{url('/posts/'.$post->id)}}" class="rounded-md bg-indigo-500 text-white p-2">Update</a>
                <form action="{{url('/posts/'.$post->id)}}" method="POST" class="p-2 ml-2 rounded-md bg-red-500">
                    @method('DELETE')
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </div>
        </li>
        @endforeach
    </ul>
</body>
</html>