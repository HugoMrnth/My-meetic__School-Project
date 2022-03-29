
let register = document.getElementById("register")
let email = document.getElementById("email")
let titre = document.querySelector(".titre")
register.addEventListener('submit', (e) => {
    e.preventDefault()
    let form = new FormData(register)
    
     let valid = validation(form)
     console.log(valid)
     if(valid) {
         fetch('../Controller/register.php', {
             method : 'POST',
             body: form
            }).then(reponse =>{
                // console.log(reponse.status
                return reponse.json()
            }).then( json => {
                console.log(json.check)
                
                if(json.check != undefined) {
                    email.classList.remove('is-valid')
                    email.classList.add('is-invalid')
                    createAlert(titre, json.check)
                } else {
                    window.location.href = "../View/connexion_page.php"
                }

            })
    }
})

// '<div class="alert alert-danger">' + json.check + '</div>'

