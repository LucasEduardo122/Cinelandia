<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="formAtualizarUser">
    @csrf
    @foreach($dados as $user)
        <input type="text" name="name" value="{{$user->name}}">
        <input type="email" name="email" value="{{$user->email}}">
    @endforeach

        <button type="submit">Atualizar</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>
        $(function(){
            $('form[name="formAtualizarUser"]').submit(function(event){
                event.preventDefault();

                $.ajax({
                    url: "{{route('user.perfil.update.do')}}",
                    type: "post",
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(message){
                        if(message.status){
                            alert(message.mensagem);
                            window.location.href = "{{route('user.perfil')}}";
                        } else {
                            alert(message.mensagem);
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>