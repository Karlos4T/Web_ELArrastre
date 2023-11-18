const active_desactive_btn = () =>{
    button = document.getElementById('btn')
    input = document.getElementById('inpt')
    console.log(input.value.length)
    if (input.value.length >= 5)
        button.disabled = false
    else
        button.disabled =true
}

var contadorInputs = 1;

generarInput = (e) => {
    event.preventDefault();
    var inputsContainer = document.getElementById("inputsContainer")

    var nuevoInput = document.createElement("input");
    var nuevoDiv = document.createElement("div");
    var nuevoDelBtn = document.createElement("button");
    var nuevoI = document.createElement("i");

    nuevoDiv.id = "inputDiv" + contadorInputs;
    nuevoDiv.className = "d-flex";

    nuevoInput.type = "text";
    nuevoInput.placeholder = "Nombre y apellidos de tu acompañante";
    nuevoInput.className = "form-control my-3 p-2 w-100";
    nuevoInput.name = "name" + contadorInputs;
    
    nuevoDelBtn.className = "btn-del-input";
    nuevoDelBtn.id = contadorInputs;
    nuevoDelBtn.addEventListener("click", function(e){
        e.preventDefault()
        nuevoDiv.remove();
    })
    nuevoI.className = "fa-solid fa-trash";
    contadorInputs++;

    nuevoDelBtn.appendChild(nuevoI);
    nuevoDiv.appendChild(nuevoInput);
    nuevoDiv.appendChild(nuevoDelBtn);
    inputsContainer.appendChild(nuevoDiv);
}