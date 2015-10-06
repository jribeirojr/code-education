<!DOCTYPE html>
<html>
    <head>
        <title>Produtos</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Produtos</div>
                <ul>
                	@foreach($product as $prod)
                		<li>{{ $prod->name }}</li>
                	@endforeach
                </ul>
            </div>
        </div>
    </body>
</html>
