$(document).ready((function(){$("#cep").blur((function(){var a=$(this).val().replace(/\D/g,"");/^[0-9]{8}$/.test(a)?$.getJSON("http://viacep.com.br/ws/"+a+"/json/",(function(a){$("#logradouro").val(a.logradouro),$("#complemento").val(a.complemento),$("#bairro").val(a.bairro),$("#localidade").val(a.localidade),$("#uf").val(a.uf)})):($("#logradouro").val(""),$("#complemento").val(""),$("#bairro").val(""),$("#localidade").val(""),$("#uf").val(""))}))}));