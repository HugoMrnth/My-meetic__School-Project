function validation(form) {
    for(let key of form.keys()) {
        let input = document.querySelector('[name="' + key +'"]')
        // console.log(key, form.get(key))
        if(form.get(key) == '') {
                if(input.parentElement.lastElementChild.classList.contains('invalid-feedback')){
                        // console.log(input.parentElement.lastElementChild)
                        input.parentElement.lastElementChild.remove()
                }
                input.classList.add('is-invalid')
                input.parentElement.innerHTML += '<div id="validationServer04Feedback" class="invalid-feedback">Entrez une valeur pour le champ ' + key + '</div>'
                
        } else {
            input.classList.remove('is-invalid')
            input.classList.add('is-valid')
            if(input.parentElement.lastElementChild.classList.contains('invalid-feedback')){
                input.parentElement.lastElementChild.remove()
            }
            
        }
        if(key == 'anniversaire'){
            birthday = check18(form.get(key))
            if(birthday < 18) {
                input.classList.add('is-invalid')
                createAlert(titre, 'No Inscription under 18')
            } else {
                input.classList.remove('is-invalid')
                input.classList.add('is-valid')
            }
        }
    }
    for(let key of form.keys()) {
        let input = document.querySelector('[name="' + key +'"]')
        if(input.classList.contains('is-invalid')){
            return false
        }
    }
    return true
}