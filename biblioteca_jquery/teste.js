

// $(document).ready( function() { // Wait until document is fully parsed
//     $("#teste").on('submit', function(e){

//        e.preventDefault();

//     });
//   })

$(document).ready(()=>{
    
$("#teste").submit((e)=>{
    e.preventDefault();

    var teste_valor = $("#teste1").val();

    $.ajax({
        url: 'http://localhost/minha_biblioteca/biblioteca_jquery/inserir.php',
        method: 'GET',
        data: {teste: teste_valor},
        dataType: 'json' 
    }).done((results)=>{
        console.log(results);
    })

});
});


