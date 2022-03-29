let connexionF = document.getElementById("connexion")
let titre = document.querySelector(".titre")
connexionF.addEventListener('submit', (e) => {
    e.preventDefault()

    let form = new FormData(connexionF) 
    validation(form)
    fetch('../Controller/connexion.php', {
        method: "POST",
        body: form
    }).then(reponse => {
        return reponse.json()
    }).then(json => {
        if(json.check != undefined) {
            if(json.check === 'failed') {
                for(let key of form.keys()) {
                    let input = document.querySelector('[name="' + key +'"]')
                    input.classList.remove('is-valid')
                    input.classList.add('is-invalid')
                }
                createAlert(titre, json.message)

            } else if(json.check === 'sucess') {
                // console.log(json.id)
                window.location.href = "../View/compte.php"
            }
        }
    })
})
