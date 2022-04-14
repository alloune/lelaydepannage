console.log('test')


function validateDataVehicule() {

    let articleToAdd =
        {
        'brand': '',
        'model': '',
        'engine': '',
        'fuel': '',
        'km': '',
        'price': '',
        'photo': '',

        }


    articleToAdd.brand = $("#brandInput").val()
    articleToAdd.model= $("#modelInput").val()
    articleToAdd.engine= $("#engineInput").val()
    articleToAdd.fuel= $("#fuelInput").val()
    articleToAdd.km= $("#kmInput").val()
    articleToAdd.price= $("#priceInput").val()
    articleToAdd.photo= $("#photoInput").val()

    console.log(articleToAdd)
    for (const [key, value] of Object.entries(articleToAdd)) {
        console.log(`${key}: ${value}`);
    }
    // Object.values(articleToAdd).forEach(element =>
    //     if(!element){
    //         console.log("toto")
    //     }


    // if (!$('#brandInput').val() && !$('#modelInput').val() && !$('#engineInput').val() && !$('#fuelInput').val() && !$('#kmInput').val() && !$('#priceInput').val() && !$('#photoInput').val()) {
    //     alert('Vous n\'avez rien entré !')
    // }
    // else {
    //
    //     if (!$('#brandInput').val()) {
    //         $('#divbrandInput').append(`<div class="alert alert-warning">La marque est vide ...</div>`)
    //     }
    //     if (!$('#modelInput').val()) {
    //         $('#divmodelInput').append(`<div class="alert alert-warning">Le model est vide ...</div>`)
    //     }
    //     if (!$('#engineInput').val()) {
    //         $('#divengineInput').append(`<div class="alert alert-warning">Le type de moteur est vide ...</div>`)
    //     }
    //     if (!$('#fuelInput').val()) {
    //         $('#divfuelInput').append(`<div class="alert alert-warning">Le carburant est vide ...</div>`)
    //     }
    //     if (!$('#kmInput').val()) {
    //         $('#divkmInput').append(`<div class="alert alert-warning">Le kilometrage est vide ...</div>`)
    //     }
    //     if (!$('#priceInput').val()) {
    //         $('#divpriceInput').append(`<div class="alert alert-warning">Le prix est vide ...</div>`)
    //     }
    //     if (!$('#photoInput').val()) {
    //         $('#divphotoInput').append(`<div class="alert alert-warning">L'image est vide ...</div>`)
    //     }
    //
    //
    //
    //
    // }


}
