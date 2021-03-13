var messageBox = document.getElementById("Xvalue");

function isAN(value) {
    return(parseInt(value) || value === "0")
}

function isunderthree (value){
    if(isAN(value))
        return(parseInt(value) <= 3 && parseInt(value) >= -3)
}

document.getElementById("postform").oninput = function (){
    document.getElementById("submt").disabled = !isunderthree(messageBox.value);
}


