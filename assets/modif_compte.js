let register = document.getElementById('form');
let email = document.getElementById('email')
let ville = document.getElementById('ville')
window.addEventListener('load', (e) => {
    fetch('/Controller/user_compte.php', {
        method: 'GET'
    }).then(reponse => {
        return reponse.json()
    }).then(json => {
        results = json.infos[0]
        email.value = results['email']
        // console.log(results['ville'])
        // ville.value = results['ville']
        
    })
})

register.addEventListener('submit', (e) => {
    e.preventDefault()
    let form = new FormData(register)
    
         fetch('../Controller/modify_account.php', {
             method : 'POST',
             body: form
            }).then(reponse =>{
                // console.log(reponse.status)
                return reponse.json()
            }).then( json => {
                if(json.check === 'failed') {
                    alert('echec')
                } else if (json.check === "no match") {
                    alert('Les deux nouveaux mot de passe ne correspondent pas ou sont vides')
                }else {
                    window.location.href = "../View/compte.php"
                }

            })
})
