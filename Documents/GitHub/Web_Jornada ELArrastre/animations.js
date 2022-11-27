const active_desactive_btn = () =>{
    button = document.getElementById('btn')
    input = document.getElementById('inpt')
    console.log(input.value.length)
    if (input.value.length >= 5)
        button.disabled = false
    else
        button.disabled =true
}