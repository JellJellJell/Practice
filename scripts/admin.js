let add_but = document.getElementById('add-but')
let add = document.getElementById('add')
let change_but = document.getElementById('change-but')
let change = document.getElementById('change')
let delete_but = document.getElementById('delete-but')
let del = document.getElementById('delete')

add_but.addEventListener('click',()=>{
    add.classList.replace('hidden', 'main-panel')
    change.classList.replace('main-panel', 'hidden')
    del.classList.replace('main-panel', 'hidden')
});

change_but.addEventListener('click', ()=>{
    change.classList.replace('hidden', 'main-panel')
    add.classList.replace('main-panel', 'hidden')
    del.classList.replace('main-panel', 'hidden')
});

delete_but.addEventListener('click', ()=>{
    del.classList.replace('hidden', 'main-panel')
    change.classList.replace('main-panel', 'hidden')
    add.classList.replace('main-panel', 'hidden')
});
