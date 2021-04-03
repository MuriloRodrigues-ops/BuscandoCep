$(document).ready(function(){
    function limpaFormulario(){
        $('#logradouro').val('');
        $('#complemento').val('');
        $('#bairro').val('');
        $('#localidade').val('');
        $('#uf').val('');
    }
    $('#cep').blur(function(){
        var cep = $(this).val().replace(/\D/g, '');
        var validacep = /^[0-9]{8}$/;
        if (validacep.test(cep)){
            $.getJSON('http://viacep.com.br/ws/'+cep+'/json/', function(dados){
                $('#logradouro').val(dados.logradouro);
                $('#complemento').val(dados.complemento);
                $('#bairro').val(dados.bairro);
                $('#localidade').val(dados.localidade);
                $('#uf').val(dados.uf);
            });
        }else{
            limpaFormulario();
        }
        
    });
});
