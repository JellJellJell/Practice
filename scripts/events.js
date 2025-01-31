// Принять участие

let but_accept =  document.getElementById('but-accept-event')
let but_add_rider = document.getElementById('but-add-rider')
let all_riders = document.getElementById('all-riders')
let error_text = document.getElementById('error-text')
let input1 = document.querySelector('.input-check')
let rider_number_text = document.querySelector('.name-text')
let input2 = document.querySelector('.input-check1')
let modal_accept = document.getElementById('modal-accept')
let close_but = document.getElementById('close-but')

let rider_number = 1
// rider_number_text.innerHTML = `Ваш номер участника: ${rider_number}`

but_accept.addEventListener('click', ()=>{
    modal_accept.classList.replace('hidden', 'wrap-for-modal')
})

close_but.addEventListener('click', ()=>{
    modal_accept.classList.replace('wrap-for-modal', 'hidden')
})

but_add_rider.addEventListener('click', ()=>{
    let name = input1.value 
    let car = input2.value

    if(input1.value != '' && input2.value != ''){
        rider_number++
        modal_accept.classList.replace('wrap-for-modal', 'hidden')
        all_riders.innerHTML += `<div class="main__riders_rider-card" data-aos="fade-up">
                <div class="main__rider-card_text-container">
                    <div class="main__rider-card_name-rider">
                        <p>${rider_number-1}</p>
                        <p>${name}</p>
                    </div>
                    <p>Авто: ${car}</p>
                </div>
            </div>`
        error_text.classList.replace('error-text', 'hidden')
        rider_number_text.innerHTML = `Ваш номер участника: ${rider_number}`
    }else{
        error_text.classList.replace('hidden', 'error-text')
    }
    
})

// Конец Принять участие