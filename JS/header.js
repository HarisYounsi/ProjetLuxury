function refreshCountPanier()
{
    $.ajax({
        url: 'gestionPanier.php?action=refreshPanier',
        type: 'get',
        success: function(response) {
            $('#panierQte').text(response);//# = recherche par id   //. recherche par classe css
        },
        error: function()
        {
            $.toast({
                text :"Une erreur s'est produite !",
                icon: 'error',
                position: 'top-right'
            });
        }
    });
}