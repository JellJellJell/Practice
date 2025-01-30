// Показать ещё

const more  = document.getElementById('more')
const itemsLength = document.querySelectorAll('.event').length;
let items = 3
more.addEventListener('click', () => {
    items += 3
    const array = Array.from(document.querySelector('.events-block').children)
    const visItems = array.slice(0,items)
    visItems.forEach(el => el.classList.add('is-visible'))
    if (visItems.length === itemsLength) {
        more.style.display = "none"
    }
})

// Конец Показать ешё

// Обратная связь

let but_letter =  document.getElementById('but-letter')
let error_text = document.getElementById('error-text')
let input1 = document.querySelector('.input-check')
let name_text = document.querySelector('.name-text')
let input2 = document.querySelector('.input-check1')
let modal_letter = document.getElementById('modal-letter')
let but_in_modal_letter = document.getElementById('but_in_letter')

but_letter.addEventListener('click', ()=>{
    let name = input1.value
    if(input1.value != '' && input2.value != ''){
        name_text.innerHTML = `${name}, Ваша заявка отправлена.<br> Мы свяжемся с Вами в ближайшее время.`
        modal_letter.classList.replace('hidden', 'wrap-for-modal')
        error_text.classList.replace('error-text', 'hidden')
    }else{
        error_text.classList.replace('hidden', 'error-text')
    }
})

but_in_modal_letter.addEventListener('click', ()=>{
    modal_letter.classList.replace('wrap-for-modal', 'hidden')
})

// Конец Обратная связь

// Принять участие

let but_accept =  document.getElementById('but-accept-event')
// let error_text = document.getElementById('error-text')
// let input1 = document.querySelector('.input-check')
// let name_text = document.querySelector('.name-text')
// let input2 = document.querySelector('.input-check1')
let modal_accept = document.getElementById('modal-accept')
let close_but = document.getElementById('close-but')

but_accept.addEventListener('click', ()=>{
    // let name = input1.value
    // if(input1.value != '' && input2.value != ''){
        // name_text.innerHTML = `${name}, Ваша заявка отправлена.<br> Мы свяжемся с Вами в ближайшее время.`
        modal_accept.classList.replace('hidden', 'wrap-for-modal')
        // error_text.classList.replace('error-text', 'hidden')
    // }else{
    //     error_text.classList.replace('hidden', 'error-text')
    // }
})

close_but.addEventListener('click', ()=>{
    modal_accept.classList.replace('wrap-for-modal', 'hidden')
})

// Конец Принять участие
