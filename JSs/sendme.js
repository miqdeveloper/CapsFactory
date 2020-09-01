    $('#formsend').ready(function(){
        $('#btns').click(
            function(){                

            var model = document.getElementsByName('capsM');
            for(var x=0; x < model.length; x++){
                if(model[x].checked)
                    var modelo = model[x].value;
            }


            var quant = $("input[type=number][name=capsN]");
            var quantidade = quant.val();

            var quantc = $("input[type=text][name=capstQ]");
            var amount =  quantc.val();
            
            var tecido = document.getElementsByName("capsT");
            for(var i=0; i< tecido.length; i++){
                if(tecido[i].checked)
                   var teci =  tecido[i].value;
            }

            var capsfl = document.getElementsByName('capsFL');
            for(var z=0; z < capsfl.length; z++){
                if(capsfl[z].checked)
                   var fnd = capsfl[z].value;
            }        


            var ataca = document.getElementsByName('capsA');
            for(var w=0; w < ataca.length; w++){
                if(ataca[w].checked)
                    var atac =  ataca[w].value;
            }  

            var dublagem = document.getElementsByName('capsD');
            for(var r=0; r < dublagem.length; r++){
                if(dublagem[r].checked)
                    var dub = dublagem[r].value;
            }  
            
            var colorA = $('input[type=text][name=Aba-colorid]');
            var coloraba = colorA.val();

            var colorF = $('input[type=text][name=Frente-colorid]');
            var colorf = colorF.val();

            var colorFL = $('input[type=text][name=FundoL-colorid]');
            var colorfl = colorFL.val();

            var aplic = document.getElementsByName('capsAL');
            for(var apli=0; apli < aplic.length; apli++){
                if(aplic[apli].checked)
                   var apl =  aplic[apli].value;
            } 

            var info = document.getElementsByName('capsIA');
            for(var inf=0; inf < info.length; inf++){
                if(info[inf].checked)
                    var infoadd = info[inf].value;
            }

            var inf2 = $('input[type=text][name=I-addd]');
            var infaddtwo = inf2.val();

            var files = $('#uppic')[0].files;
            for (var f = 0; f < files.length; f++){

                console.log(files[i]);
            }

            var data = {
                'modelo': modelo,
                'qauntidade': [quantidade, amount],
                'tecido': teci,
                'fndltrs': fnd,
                'ataca': atac,
                'dublagem': dub,
                'corAbaFrenteFL': [coloraba, colorf, colorfl],
                'apllogo': apl,
                'ifadd': [infoadd, infaddtwo]
            }

            $.ajax({
                type: 'POST',
                url: "sendcap.php",
                dataType: 'json',
                contentType: 'application/x-www-form-urlencoded',
                data: data,
                async: true,
                error: function(state, data, arg){
                    alert('Pedido enviado com sucesso!');

                }, 
                success: function(status){
                    if(status == 'success');
                        alert('Pedido enviado com sucesso!');
                }
            });


        });

    });