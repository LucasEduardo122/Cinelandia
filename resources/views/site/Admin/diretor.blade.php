@extends('layout')
@section('pagina_titulo', 'Admin')
@section('pagina_conteudo')

<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">

<div class="container">
    <div class="drawer">
        <div class="menu">
            <a href="{{route('admin')}}"><i class="icon ion-home"></i></a>
            <a href="{{route('admin.criar.diretor')}}" class="active"><i class="icon ion-person-stalker"></i></a>
            <a data-dialog="logout" href="#"><i class="icon ion-log-out"></i></a>
            <a href="{{route('admin.criar.filme')}}"><i class="icon ion-code-download"></i></a>
            <a data-menu="about" href="#"><i class="icon ion-information-circled"></i></a>
        </div>
    </div>
    <div class="content">
        <div class="page noflex" data-page="dashboard">
            <div class="header">
                <div class="title">
                    <h2>Dashboard</h2>
                </div>
            </div>
            <div class="grid">
                <div class="card">
                    <div class="head">
                        <span class="icon">
                            <i class="icon ion-pound"></i>
                        </span>
                        <span class="stat">
                            Server Status
                        </span>
                        <div class="status">
                        </div>
                    </div>
                    <div class="body">
                        <h2>Server is currently $_status</h2>
                        <p>
                            The server is running normally and no issues have recently been detected. If you notice an outage, please report it to the administrator.
                        </p>
                    </div>
                    <div class="footer">
                        <div class="user">
                            <div class="user-icon">
                            </div>
                            <span class="username">
                                Administrator
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="head">
                        <span class="icon">
                            <i class="icon ion-code-working"></i>
                        </span>
                        <span class="stat">
                            CSGO Status
                        </span>
                        <div class="status">
                        </div>
                    </div>
                    <div class="body">
                        <h2>Cheat is currently $_status</h2>
                        <p>
                            The server is running normally and no issues have recently been detected. If you notice an outage, please report it to the administrator.
                        </p>
                    </div>
                    <div class="footer">
                        <div class="user">
                            <div class="user-icon">
                            </div>
                            <span class="username">
                                uplusion23
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-verticle">
                    <div class="card-small">
                        <span class="title">
                            Active Users
                        </span>
                        <h2 class="text">12</h2>
                        <div class="graph">
                            <div class="bar" data-day="sunday">
                                <div class="bar-content"></div>
                            </div>
                            <div class="bar" data-day="monday">
                                <div class="bar-content"></div>
                            </div>
                            <div class="bar" data-day="tuesday">
                                <div class="bar-content"></div>
                            </div>
                            <div class="bar" data-day="wednesday">
                                <div class="bar-content"></div>
                            </div>
                            <div class="bar" data-day="thursday">
                                <div class="bar-content"></div>
                            </div>
                            <div class="bar" data-day="friday">
                                <div class="bar-content"></div>
                            </div>
                            <div class="bar" data-day="saturday">
                                <div class="bar-content"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card-small">
                        <span class="title">
                            Overview
                        </span>
                    </div>
                </div>
            </div>
            <div class="stats">
            </div>
        </div>
        <div class="page active" data-page="users">
            <div class="header">
                <div class="title">
                    <h2>Adicionar Diretor</h2>
                </div>
                <form name="formDiretor">
                    <div class="form-group">
                        <input type="text" name="name_director" class="form-control" placeholder="Nome do ditetor">
                    </div>
                    <div class="form-group">
                        <input type="text" name="studio" class="form-control" placeholder="Studio que fez o filme">
                    </div>

                    <button class="btn btn-lg btn-block" style="background-color: #221B84;color: #fff" type="submit" id="button-alert">Cadastrar Diretor</button>


                    <small id="button-alert" class="form-text text-center text-danger mt-4" style="font-weight: 700;">
                        Atenção, caso haja mais de um studio para o filme, coloque os nomes entre virgulas!
                    </small>
                </form>
                <h2 class="text-center" style="margin-top: 150px;">Cinelandia</h2>
            </div>
        </div>
        <div class="page noflex" data-page="download">
            <div class="header">
                <div class="title">
                    <h2>Download</h2>
                </div>
            </div>
            <div class="grid">
                <div class="card wide">
                    <div class="head">
                        <span class="icon">
                            <i class="icon ion-code-working"></i>
                        </span>
                        <span class="stat">
                            Cheat Client
                        </span>
                        <div class="status">
                        </div>
                    </div>
                    <div class="body">
                        <h2>Latest Version: v$_VERSION</h2>
                        <p>
                            changelog here
                        </p>
                    </div>
                    <div class="footer">
                        <div class="user">
                            <div class="user-icon">
                            </div>
                            <span class="username">
                                Administrator
                            </span>
                        </div>
                        <a class="download" href="#">Download <i class="icon ion-archive"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="page noflex" data-page="about">
            <div class="header">
                <div class="title">
                    <h2>Mais</h2>
                </div>
            </div>
            <div class="info-container">
                <div class="info">
                    <a href="https://github.com/LucasEduardo122" target="_blank">Desenvolvedor</a>
                    <span>LucasEduardo122</span>
                </div>
                <div class="info">
                    <a href="#" target="_blank">Dashboard Version</a>
                    <span>1.0.0</span>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar">

    </div>
     <div class="dialog">
        <div class="dialog-block">
            <h2>Deseja mesmo deslogar?</h2>
            <div class="controls">
                <a href="{{route('login.logout')}}" class="button">Sair</a>
                <a data-dialog-action="cancel" href="#" class="button">Cancelar</a>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/admin.js')}}"></script>

<script>
    $(function() {
        $('form[name="formDiretor"]').submit(function(event) {
            event.preventDefault();

            $.ajax({
                url: "{{route('admin.criar.diretor.storage')}}",
                type: "post",
                data: $(this).serialize(),
                dataType: "json",
                success: function(retorno) {
                    if (retorno.status) {
                        window.location.href = "{{route('admin.criar.diretor')}}";
                        alert(retorno.mensagem);
                    } else {
                        alert(retorno.mensagem);
                    }
                }
            });
        });
    });
</script>

@stop