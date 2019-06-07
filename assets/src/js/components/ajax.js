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
    });
    setTimeout(function(){
        location.reload();
    },1500);
});

$("#FormCreateSale").on('submit', function (event) {
    event.preventDefault();
    var dados= $(this).serialize();
    
    $.ajax({
        url: 'controllers/controllerCreateSale.php',
        type: 'post',
        dataType: 'html',
        data: dados,
        success: function(dados){
            $('.result').show().html(dados);
        }
    });
    setTimeout(function(){
        location.reload();
    },1500);
});

$("#FormSearchSales").on('submit', function (event) {
    event.preventDefault();
    $('.content__table').remove();
    $('.showing-all').remove();
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