// Print messagem succefull into resultado div
$("#FormCadastro").on('submit', function (event) {
    event.preventDefault();
    var dados= $(this).serialize();
    
    $.ajax({
        url: 'controllers/controllerCreate.php',
        type: 'post',
        dataType: 'html',
        data: dados,
        success: function(dados){
            $('.result').show().html(dados);
        }
    })
});

/* Confirmar antes de deletar os dados */
$('.delete').on('click',function(event){
    event.preventDefault();

    var Link=$(this).attr('href');
    if(confirm("Deseja mesmo apagar esse dado?")){
        window.location.href=Link;
    }else{
        return false;
    }
});