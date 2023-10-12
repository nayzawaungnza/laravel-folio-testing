
<?php
 
use function Laravel\Folio\{middleware};
use App\Http\Middleware\AuthMiddleware;


 
middleware(AuthMiddleware::class);
 
?>
@php
    use Illuminate\Support\Facades\Gate;
    auth()->loginUsingId(2);
    if(Gate::denies('view',$blog)){
        abort(403);
    }
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blogs Detail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/argon-design-system-free@1.2.0/assets/css/argon-design-system.min.css">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-dark">{{ $blog->title }} </h1>
                <h3 class="heading-title text-warning mb-0">Blog ID : {{ $blog->id }}</h3>
                
                <span class="badge badge-pill badge-primary text-uppercase">Author : {{ $blog->author->name }}</span></li>

            </div>
           
                
                    
               
           
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/argon-design-system-free@1.2.0/gulpfile.min.js"></script>

</body>
</html>