<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @dump($data); --}}
    <ul>

    @forelse ($data as $name)
    <li>{{ $name }}</li>
    @empty
    <p>No users</p>
    @endforelse
    </ul>
    <a href="{{ route('admin.products.getAll') }}">products</a>
    <a href="{{ route('admin.products.show',['id'=>5,'name'=>'omnia']) }}">show product</a>
</body>
</html>
