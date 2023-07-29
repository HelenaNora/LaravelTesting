<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body class="antialiased m-10">
    <h1 class="text-3xl font-bold mb-10">Create Post</h1>
    <form action="{{url('/create')}}" method="POST">
        @csrf
        <select name="user_id" class="block border border-gray-500 w-80 mb-3 p-2">
            @foreach($users as $user)
             <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
            <textarea name="content" rows="3" class="block border border-gray-500 w-80 mb-3"></textarea>
            <button type="submit" class="p-2 rounded-md bg-indigo-500 text-white">Create</button>
        </select>
    </form>
</body>
</html>