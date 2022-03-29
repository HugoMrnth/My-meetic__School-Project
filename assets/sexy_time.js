let input = document.getElementById('search')
let searchForm = document.getElementById('formSearch')
let tagContainer = document.querySelector('.tag-container')
let arrowContainer = document.querySelector('.arrow-container')
let categorie = document.getElementById('categorie')
let genreInput = document.getElementById('genre')
let ageInput = document.getElementById('age')
let ville = new Array()
let hobby = new Array()
let genre = new Array()
let age = new Array()
let tagToPost = {
    ville : ville,
    hobby : hobby,
    genre : genre,
    age : age
}

// searchForm et input sont dans le fichier tagSearch.js
let searchContainer = document.querySelector('.carousel')
searchFunc()
searchForm.addEventListener('submit', (e) => {
    e.preventDefault()
    if(input.value != "") {
        if(categorie.value == "city") {
            tagContainer.innerHTML += `<div class='badge bg-warning p-2'><span>${input.value}</span><i class="bi bi-x" data-item="${input.value} ${categorie.value}"></i></div> `
            if(input.value != "") {
                ville.push(input.value)
            }
            
        } else if (categorie.value == "hobby") {
            tagContainer.innerHTML += `<div class='badge bg-primary p-2'><span>${input.value}</span><i class="bi bi-x" data-item="${input.value} ${categorie.value}"></i></div> `
            hobby.push(input.value)
        }
    }
    input.value = ""
    searchFunc()
})

genreInput.addEventListener('change', (e) => {
    if(genreInput.value != "") {
        if(genre.length < 1) {
            genre.push(genreInput.value)
        } else {
            genre.pop()
            genre.push(genreInput.value)
        }
    } else if(genreInput.value == "" && genre.length > 0 ) {
        genre.pop()
    }
    searchFunc()

})
ageInput.addEventListener('change', (e) => {
    if(ageInput.value != "") {
        if(age.length < 1) {
            age.push(ageInput.value)
        } else {
            age.pop()
            age.push(ageInput.value)
        }
    } else if(ageInput.value == "" && age.length > 0 ) {
        age.pop()
    }
    console.log(tagToPost)

    searchFunc()

})

function searchFunc(){

    

    console.log(tagToPost)

    form = new FormData()
    form.set('submit', JSON.stringify(tagToPost))
    
    fetch('../Controller/sexy_search.php', {
        method: 'post',
        body : form
    }).then(reponse => {
        return reponse.json()

    }).then( json => {
        let resultats = json.resultats

        let result_container = document.getElementById('result_container')
        
        let card = ""
        if(json.resultats = "") {
            
        }
        let i= 0 
        for(let info in resultats) {
            if(resultats[info]['hobby'] == null) {
                resultats[info]['hobby'] = 'Pas de Hobby'
            }
            let birthday = check18(resultats[info]['anniversaire']);

            let item = ""
            if(i == 0) {
                item = "active"
            }

            // console.log(resultats[info])
            card += `<div class="item ${item} m-auto">
                        <div class="card">
                            <div class="card-header bg-dark text-white">
                                <h2>${resultats[info]['prenom']} <span class='text-warning'>${resultats[info]['nom']}</span></h2>
                            </div>
                            <div class="card-body d-flex">
                                <img class="card-img-right" src="https://placekitten.com/g/150/200" alt="Card image cap">
                                <ul class="list-group list-group-flush">
                                    <li class='list-group-item text-capitalize'><strong>Genre: </strong>${resultats[info]['genre']}</li>
                                    <li class='list-group-item text-capitalize'><strong>Age: </strong>${birthday}</li>
                                    <li class='list-group-item text-capitalize'><strong>Ville: </strong>${resultats[info]['ville']}</li>
                                    <li class='list-group-item text-capitalize'><strong>Hobby: </strong>${resultats[info]['hobby']}</li>
                                </ul>
                            </div>
                        </div>
                    </div>`
                
            i++
            
            
        }
        if(card == "") {
            result_container.innerHTML = `<h2>Personne n'a été trouvé avec cette recherche. Revois tes exigence à la baisse, Prince(sse)!</h2>`
            arrowContainer.style.display = "none"
        } else {
            result_container.innerHTML = card
            // let firstCard = document.querySelectorAll('.carousel-item')[0]
            // firstCard.classList.add('active')
            arrowContainer.style.display = "block"
        }
        
    
    })
}

document.addEventListener('click', (e) => {
    if(e.target.tagName === "I") {
        const datas = e.target.getAttribute('data-item')
        const words = datas.split(' ')
        const value = words[0]
        const kat = words[1]
        if(kat == "city") {
            const index = ville.indexOf(value)
            ville.splice(index,1)
        } else if (kat ==="hobby") {
            const index = hobby.indexOf(value)
            hobby.splice(index,1)
        }
        e.target.parentElement.remove()
    
        console.log(tagToPost)
        searchFunc()
    }
})