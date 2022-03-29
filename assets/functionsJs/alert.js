function createAlert(el, message) {
    console.log(el.parentElement.lastElementChild)
    if(el.parentElement.lastElementChild.classList.contains('alert')) {
        el.parentElement.lastElementChild.remove()
    }

    let alert = document.createElement("DIV");
    alert.classList.add('alert')
    alert.classList.add('alert-danger')
    let textnode = document.createTextNode(message);
    alert.appendChild(textnode)
    el.parentElement.appendChild(alert)

}