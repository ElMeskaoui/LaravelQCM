<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>fourmler</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    
    <div class="container hide-on-small-only">
            @foreach ($form as $f)
            <div class="divider"></div>
            <div class="section card-panel hoverable">
                <div class="center-align"><a href="{{ route('question',['id'=>$f->id]) }}"><h4>{{ $f->lib_formuler}}</h4></a></div>
            </div>
            @endforeach
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>