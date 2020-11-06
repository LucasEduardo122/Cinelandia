<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach($dados as $user)
    
        <p>Seja bem vindo {{$user->name}}</p>
        <p>{{$user->email}}</p>
    @endforeach

    <a href="{{route('user.perfil.formUpdate')}}">Atualizar Dados</a>
</body>
</html>