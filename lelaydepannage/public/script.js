
function submitForm(){
    console.log('entré func submit')
    event.preventDefault();
    $('.alert').remove()
    let validateStatus = 1
    let articleToAdd =
        {
            'brand': '',
            'model': '',
            'engine': '',
            'fuels': '',
            'km': '',
            'price': '',
            'photo': '',
        }
    let validateClientInput = [
        {
            'id': 'brand',
            'phrase': 'La marque n\'est pas renseignée'
        },
        {
            'id': 'model',
            'phrase': 'Le modèle n\'est pas renseigné'
        },
        {
            'id': 'engine',
            'phrase': 'Le type de moteur n\'est pas renseigné'
        },
        {
            'id': 'fuels',
            'phrase': 'Le carburant n\'est pas renseigné'
        },
        {
            'id': 'km',
            'phrase': 'Le kilométrage n\'est pas renseigné'
        },
        {
            'id': 'price',
            'phrase': 'Le prix n\'est pas renseignée'
        },
        {
            'id': 'photo',
            'phrase': 'Le lien de la photo n\'est pas renseignée'
        },
        {
            'id': 'year',
            'phrase': 'L\'année n\'est pas renseignée'
        }
    ]


    articleToAdd.brand = $("#brandInput").val()
    articleToAdd.model = $("#modelInput").val()
    articleToAdd.engine = $("#engineInput").val()
    articleToAdd.fuels = $("#fuelsInput").val()
    articleToAdd.km = $("#kmInput").val()
    articleToAdd.price = $("#priceInput").val()
    articleToAdd.photo = $("#photoInput").val()
    articleToAdd.year = $("#yearInput").val()

    console.log(articleToAdd)
    console.log(validateClientInput)
    for (const [key, value] of Object.entries(articleToAdd)) {
        if (!value) {
            let toto = validateClientInput.find(element => element.id == key)
            $('#div' + key + 'Input').append(`<div class="alert alert-warning">` + toto.phrase + `</div>`)
            validateStatus = 0
        }
    }
    if(validateStatus){
        console.log('lunch submit')
        $('#form').submit()
    }

}


function submitOk(){
    $("#validatedAddVehicule").submit()
}




