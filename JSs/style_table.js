
var state = document.getElementsByName("status_");
for(var variant=0; variant < state.length; variant++){

    var status = state[variant].innerText;

    if(status == 'Pendente')
        document.getElementById("status_").style.backgroundColor = "lightblue";



};