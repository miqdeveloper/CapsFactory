$('#form_register').ready(function(){
    $('#btn_register').click(function() {

        var name = $('input[type=text][name=name]');
        var nome = name.val();

        var cat = document.getElementsByName('category');
        for(var i=0; i < cat.length; i++){
                if(cat[i].checked)
                    var cate = cat[i].value;
                }

        var cpf_ = $('input[type=text][name=cnpj]');
        var cpf = cpf_.val();

        var end_= $('input[type=text][name=endereco1]');
        var end = end_.val();

        var email_ = $('input[type=email][name=email_t]');
        var email = email_.val();


        var fone = $('input[type=text][name=telefone]');
        var tell = fone.val();

        var pass = $('input[type=password][name=passwd]');
        var pass_ = pass.val();



 
        var data = {
            'nome': nome,
            'category': cate, 
            'cpf': cpf,
            'end': end,
            'email': email,
            'telefone': tell,
            'pass': pass_
        }
        
        
        $.ajax({
            method: 'POST',
            url: "log_in.php",
            dataType: 'json',           
            contentType:'application/x-www-form-urlencoded',
            data: data,
            error: function(state, data, arg){
                console.log('ERRO');
                console.log(state.status);
            },
            success: function(){
                console.log('sucess');
            }
        });
    });
});