<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
</head>
<body class="m-10">
    @if($errors->any())
    <div class="bg-red-200 p-3">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{url('login')}}" method="POST">
        @csrf
        <div class="mb-5">
            <label for="email" class="block">Email:</label>
            <input type="text" id="email" name="email" class="border border-gray-300 p-1">
        </div>
        <div class="mb-5">
            <label for="password" class="block">Password:</label>
            <input type="password" id="password" name="password" class="border border-gray-300 p-1">
        </div>
        <div class="mb-5">
            <label for="remember" class="block">
                <input type="checkbox" name="rember" id="remember"/>Remember Me 
            </label>
        </div>
        <button type="submit" class="rounded bg-blue-800 text-white px-4 py-2">Login</button>
    </form>
</body>
</html>