@extends('layout')
@section('pagina_titulo', 'Register')
@section('pagina_conteudo')

<div class="container">

<img class="rounded mx-auto d-block" src="{{asset('/assets/images/logo/Screenshot_2.jpg')}}" alt="">
    <form name="registerForm">
        @csrf
        <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Nome">
        </div>
        <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Senha">
        </div>

        <button class="btn btn-lg btn-block" style="background-color: #221B84;color: #fff" type="submit">Cadastrar</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $('form[name="registerForm"]').submit(function(event){
                event.preventDefault();

                $.ajax({
                    url: "{{route('register.storage')}}",
                    type: "post",
                    data: $(this).serialize(),
                    dataType: "json",
                    success: function(message) {
                        if(message.status){
                            alert(message.mensagem);
                            window.location.href="{{route('login')}}";
                        } else {
                            alert(message.mensagem);
                        }
                    }
                });
            });
        });
    </script>
@stop