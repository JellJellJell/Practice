let change_but1 = document.getElementById('change1');
let change_but2 = document.getElementById('change2');
let change_but3 = document.getElementById('change3');
let change_but4 = document.getElementById('change4');
let ok_but1 = document.getElementById('ok1');
let ok_but2 = document.getElementById('ok2');
let ok_but3 = document.getElementById('ok3');
let ok_but4 = document.getElementById('ok4');
let span1 = document.getElementById('span1');
let span2 = document.getElementById('span2');
let span3 = document.getElementById('span3');
let span4 = document.getElementById('span4');
let input1 = document.getElementById('input1');
let input2 = document.getElementById('input2');
let input3 = document.getElementById('input3');
let input4 = document.getElementById('input4');

change_but1.addEventListener('click', ()=>{
    span1.classList.add('hidden');
    input1.classList.remove('hidden');
    change_but1.classList.add('hidden');
    ok_but1.classList.remove('hidden');
});

ok_but1.addEventListener('click', ()=>{
    span1.classList.remove('hidden');
    input1.classList.add('hidden');
    change_but1.classList.remove('hidden');
    ok_but1.classList.add('hidden');
});

change_but2.addEventListener('click', ()=>{
    span2.classList.add('hidden');
    input2.classList.remove('hidden');
    change_but2.classList.add('hidden');
    ok_but2.classList.remove('hidden');
});

ok_but2.addEventListener('click', ()=>{
    span2.classList.remove('hidden');
    input2.classList.add('hidden');
    change_but2.classList.remove('hidden');
    ok_but2.classList.add('hidden');
});

change_but3.addEventListener('click', ()=>{
    span3.classList.add('hidden');
    input3.classList.remove('hidden');
    change_but3.classList.add('hidden');
    ok_but3.classList.remove('hidden');
});

ok_but3.addEventListener('click', ()=>{
    span3.classList.remove('hidden');
    input3.classList.add('hidden');
    change_but3.classList.remove('hidden');
    ok_but3.classList.add('hidden');
});

change_but4.addEventListener('click', ()=>{
    span4.classList.add('hidden');
    input4.classList.remove('hidden');
    change_but4.classList.add('hidden');
    ok_but4.classList.remove('hidden');
});

ok_but4.addEventListener('click', ()=>{
    span4.classList.remove('hidden');
    input4.classList.add('hidden');
    change_but4.classList.remove('hidden');
    ok_but4.classList.add('hidden');
});
