// Modal pour contact
let modal = null

const openModal = function (e) {
    e.preventDefault()
    const target = document.querySelector(e.target.getAttribute('href'))
    target.style.display = null
    target.removeAttribute('aria-hidden')
    target.setAttribute('aria-modal', 'true')
    modal = target
    modal.addEventListener('click', closeModal)
    modal.querySelector('.js-modal-close').addEventListener('click', closeModal)
    modal.querySelector('.js-modal-stop').addEventListener('click', stopPropagation)
}

const closeModal = function(e) {
    if (modal === null) return
    e.preventDefault()
    modal.style.display = "none"
    modal.removeAttribute('aria-hidden', 'true')
    modal.removeEventListener('click', closeModal)
    modal.querySelector('.js-modal-close').removeEventListener('click', closeModal)
    modal.querySelector('.js-modal-stop').removeEventListener('click', stopPropagation)
    modal = null
}

const stopPropagation = function(e) {
    e.stopPropagation()
}

document.querySelectorAll('.js-modal', ).forEach(a => {
    a.addEventListener('click', openModal)
})

window.addEventListener('keydown', function (e) {
    if (e.key === "Escape" || e.key === "Esc")
        closeModal(e)
})

//affichage alert

// divAlert = document.getElementById('alert')
// btnSubmit = document.getElementById('submit')
// param = window.location.search
// btnSubmit.addEventListener('click', function () {
//     if (param === "?success=true") { divAlert.style.display = 'visible' }
// })

// if (param === "?success=true") { alert.style.display = 'visible' }

// success = document.cookie['success']
// function alert() {
//     if (success === true) {
//         document.getElementById('alert').style.visibility = 'visible'
//     }
//     setTimeout('alert()', 30000)
// }

// Vérif contact form
// formContact = document.forms["contact-form"]
// Pour respecter la spécification HTML5
// var emailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/

 // function valider() {
 //    // pour mail
 //    if (formContact.input['name'] === emailRegExp) {
 //        //it's ok
 //    } else {console.log.error('vous devez saisir un email valide')}
 // }