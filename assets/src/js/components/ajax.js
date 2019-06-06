// Print messagem succefull into resultado div
$("#FormCadastro").on('submit', function (event) {
    event.preventDefault();
    var dados= $(this).serialize();
    
    $.ajax({
        url: 'controllers/controllerCreateSeller.php',
        type: 'post',
        dataType: 'html',
        data: dados,
        success: function(dados){
            $('.result').show().html(dados);
        }
    })
});

$(".delete").on('click', function (event) {
    event.preventDefault();
    var url = $(this).attr('data-href');
    console.log(url);
    $.ajax({
        url: url,
        success: function(){
            $('.result').show().html('<span>Vendedor removido com sucesso!</span>');
        }
    })
});

$("#FormSearchSales").on('submit', function (event) {
    event.preventDefault();
    var dados= $(this).serialize();
    $.ajax({
        url: 'controllers/controllerSearchSales.php?' + dados,
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