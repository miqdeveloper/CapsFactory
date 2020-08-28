$('#form_register').ready(function(){
    $('btn').click(function() {

        var name = $('input[type=text][name=name]');
        var cpf_cnpj = $('input[type=text][name=cnpj]');
        var edereco = $('input[type=text][name=endereco]');
        var email = $('input[type=email][name=email]');
        var fone = $('input[type=text][name=telefone]');

        var cat = document.getElementsByName('category');
        for(var i=0; i < cat.length; i++){
                if(cat[i].checked)
                    console.log(cat[i].value);
                    }
    });
});