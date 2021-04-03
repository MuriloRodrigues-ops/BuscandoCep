<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('bootstrap/5.0.0-beta3-dist/css/bootstrap.min.css')}}"/>
    </head>
    <body>
        <div class="container">
            <h1>Buscando CEP</h1>
            <div class="mb-3">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep">
            </div>
            <div class="mb-3">
                <label for="logradouro" class="form-label">Logradouro</label>
                <input type="text" class="form-control" id="logradouro">
            </div>
            <div class="mb-3">
                <label for="complemento" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="complemento">
            </div>
            <div class="mb-3">
                <label for="bairro" class="form-label">Bairro</label>
                <input type="text" class="form-control" id="bairro">
            </div>
            <div class="mb-3">
                <label for="localidade" class="form-label">Localidade</label>
                <input type="text" class="form-control" id="localidade">
            </div>
            <div class="mb-3">
                <label for="uf" class="form-label">UF</label>
                <input type="text" class="form-control" id="uf">
            </div>
        </div>
        <script src="{{ asset('jquery/3.6.0/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('bootstrap/5.0.0-beta3-dist/js/bootstrap.bundle.js')}}"></script>
        <script src="{{ asset('js/formulario.js') }}"></script>
    </body>
</html>
