<!DOCTYPE html>
<html>
    <head>
        <title>Categorias</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Categorias</div>
                <ul>
                	@foreach($categories as $cat)
                		<li>{{ $cat->name }}</li>
                	@endforeach
                </ul>
            </div>
        </div>
    </body>
</html>
