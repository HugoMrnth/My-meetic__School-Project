let compteList = document.querySelector('.list-group')
let title = document.querySelector('.title')
window.addEventListener('load', (e) => {
    fetch('/Controller/user_compte.php', {
        method: 'GET'
    }).then(reponse => {
        return reponse.json()
    }).then(json => {
        console.log(json.id)

            let infos = json.infos[0]
            // console.log(infos)
            let innerList = ""
            title.innerHTML = infos['prenom']
            for(let donne in infos) {
                    if( donne == "anniversaire") {
                        let birthday = check18(infos[donne]);
                        donne = "Age"
                        let li = "<li class='list-group-item text-capitalize'><strong>" + donne + ":</strong> " + birthday + "</li>"
                        innerList += li
                    } else if(donne == "email") {
                        donneCap = donne.charAt(0).toUpperCase() + donne.slice(1)
                        let li = "<li class='list-group-item'><strong>" + donneCap + ":</strong> " + infos[donne] + "</li>"
                        innerList += li
                    } 
                    else {
                        // donneCap = donne.charAt(0).toUpperCase() + donne.slice(1)
                        let li = "<li class='list-group-item text-capitalize'><strong>" + donne + ":</strong> " + infos[donne] + "</li>"
                        innerList += li
                    }
            }
                    
            innerList += `<li class='list-group-item text-capitalize' id="modal-btn"><a disable class="btn btn-warning">Modifier les infos du compte</a></li>`
            compteList.innerHTML = innerList

            let modalBtn = document.getElementById('modal-btn')
            let modal = document.querySelector('.modal')
            modalBtn.addEventListener('click', (e) => {
                modal.style.display = 'block'
                window.onclick = function(event) {
                    if (event.target == modal) {
                      modal.style.display = "none"
                    }
                  }
            })
    })
})

let modalRegister = document.getElementById('modal-form')
let modalTilte = document.querySelector('.modal-title')
modalRegister.addEventListener('submit', (e) => {
    e.preventDefault()
    modalForm = new FormData(modalRegister)
    let valid = validation(modalForm)
    if(valid) {
        fetch('../Controller/checkpass.php', {
            method: "POST",
            body: modalForm
        }).then(reponse => {
            return reponse.json()
        }).then(json => {
            console.log(json.check)
            if(json.check != 'sucess') {
                createAlert(modalTilte, 'Mot de passe incorrect')
            } else {
                window.location.href = "../View/modif_compte.php"
            }
        })
    }
})