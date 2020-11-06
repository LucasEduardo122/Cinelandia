@extends('layout')
@section('pagina_titulo', 'Admin')
@section('pagina_conteudo')

<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="{{asset('assets/css/admin.css')}}">

<div class="container">
    <div class="drawer">
        <div class="menu">
            <a href="{{route('admin')}}"><i class="icon ion-home"></i></a>
            <a href="{{route('admin.criar.diretor')}}"><i class="icon ion-person-stalker"></i></a>
            <a data-dialog="logout" href="#"><i class="icon ion-log-out"></i></a>
            <a href="{{route('admin.criar.filme')}}" class="active"><i class="icon ion-code-download"></i></a>
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
        <div class="page noflex" data-page="users">
            <div class="header">
                <div class="title">
                    <h2>Adicionar Diretor</h2>
                </div>
                <form name="formFilme">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            @csfr
                            <input type="text" class="form-control" placeholder="Nome do filme">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Sinopse do filme">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" name="imagem1">
                    </div>
                    <div class="form-group">
                        <input type="text" name="imagem2">
                    </div>

                    <div class="form-group">
                        <input type="text" name="imagem3">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <select name="legend_id">
                                @foreach($legenda as $legend)
                                <option value="<?php echo $legend->id ?>"><?php echo $legend->nome_legenda ?></option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <select name="audio_id">
                                @foreach($audio as $audios)
                                <option value="<?php echo $audios->id ?>"><?php echo $audios->nome_audio ?></option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <select name="director_id">
                                @foreach($director as $diretor)
                                <option value="<?php echo $diretor->id ?>"><?php echo $diretor->name_director ?></option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">

                        <select name="ano">
                            @for($c = 1980; $c <= 2020; $c++) <option value="<?php echo $c; ?>"><?php echo $c; ?></option>
                                @endfor
                        </select>

                        <input type="text" placeholder="url do filme" name="url_film">
                    </div>

                    <button class="btn btn-lg btn-block" style="background-color: #221B84;color: #fff" type="submit" id="button-alert">Cadastrar Filme</button>


                    <small id="button-alert" class="form-text text-center text-danger mt-4" style="font-weight: 700;">
                        Atenção, caso haja mais de um studio para o filme, coloque os nomes entre virgulas!
                    </small>
                </form>
                <h2 class="text-center" style="margin-top: 150px;">Cinelandia</h2>
            </div>
        </div>
        <div class="page active" data-page="download">
            <div class="header">
                <div class="title">
                    <h2>Criar Filme</h2>
                </div>

                <form name="formFilme">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            @csrf
                            <input type="text" class="form-control" placeholder="Nome do filme">
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" placeholder="Sinopse do filme">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            @csrf
                            <input type="text" class="form-control" name="imagem1" placeholder="Imagem do filme1">
                        </div>
                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="imagem2" placeholder="Imagem do filme2">
                        </div>

                        <div class="form-group col-md-4">
                            <input type="text" class="form-control" name="imagem3" placeholder="Imagem do filme3">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <select class="custom-select mr-sm-2" name="legend_id">
                            <option selected >Selecione a legenda</option>
                                @foreach($legenda as $legend)
                                <option value="<?php echo $legend->id ?>"><?php echo $legend->nome_legenda ?></option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <select class="custom-select mr-sm-2" name="audio_id">
                            <option selected >Selecione o audio</option>
                                @foreach($audio as $audios)
                                <option value="<?php echo $audios->id ?>"><?php echo $audios->nome_audio ?></option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <select class="custom-select mr-sm-2" name="director_id">
                                <option selected >Selecione o diretor</option>
                                @foreach($director as $diretor)
                                <option value="<?php echo $diretor->id ?>"><?php echo $diretor->name_director ?></option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">

                        <select class="custom-select mr-sm-2" name="ano">
                        <option selected >Selecione o ano</option>
                            @for($c = 1980; $c <= 2020; $c++) <option value="<?php echo $c; ?>"><?php echo $c; ?></option>
                                @endfor
                        </select>

                        <input type="text" class="form-control mt-3" name="url_film" placeholder="url do filme">
                    </div>

                    <button class="btn btn-lg btn-block" style="background-color: #221B84;color: #fff" type="submit" id="button-alert">Cadastrar Filme</button>

                </form>
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
        $('form[name="formFilme"]').submit(function(event) {
            event.preventDefault();

            $.ajax({
                url: "{{route('admin.criar.filme.storage')}}",
                type: "post",
                data: $(this).serialize(),
                dataType: "json",
                success: function(retorno) {
                    if (retorno.status) {
                        window.location.href = "{{route('admin.criar.filme')}}";
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


<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>