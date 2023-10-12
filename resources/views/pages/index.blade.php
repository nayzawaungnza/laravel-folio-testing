@php
    use App\Models\Blog;

    $blogs = Blog::all();

@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/argon-design-system-free@1.2.0/assets/css/argon-design-system.min.css">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-dark">My Blogs</h1>
            </div>
            <ul>
                @foreach ($blogs as $blog)
                <li>{{ $blog->title }} <span class="badge badge-pill badge-primary text-uppercase">Author : {{ $blog->author->name }}</span> <a href="/blogs/{{ $blog->id }}" class="badge badge-pill badge-success text-uppercase">view</a></li>
                    
                @endforeach
            </ul>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/argon-design-system-free@1.2.0/gulpfile.min.js"></script>

</body>
</html>