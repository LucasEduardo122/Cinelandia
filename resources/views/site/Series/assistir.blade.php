<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($serie as $serie)
        <iframe src="{{$serie->url_serie}}" style="width:100%; height:600px" frameborder="0"></iframe>
    @endforeach
</body>
</html>