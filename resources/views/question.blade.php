<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>question</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
    
    <div class="container z-depth-3">
        <div class="card-panel center-align"><h4>Les Questions</h4></div>
    </div>


    <div class="container z-depth-2">
       <div class="card-panel">
        <form method="POST" action="{{route('reponse')}}">
            @csrf
            <ul>
            @foreach ($questions as $qu)
                <li class="center-align">{{ $qu->lib_question }}</li>
                <ul>
                    @foreach ($reponses as $re)
                        @if ($qu->id==$re->question_id)
                        <p>
                            <label>
                                <input class="with-gap" type="radio" name="{{$re->question_id}}" value="{{$re->corect}}"/>
                                <span class="grey-text text-darken-3">{{ $re->lib_reponse}}</span>
                            </label>
                        </p>
                        @endif
                    @endforeach
                </ul>
            @endforeach
            </ul>
            <button class="btn waves-effect waves-light" type="submit" >Send</button>
        </form>
       </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>