
if(error == 'usr'){

    let element = document.createElement("div");
    element.className = "error_usr";
    element.innerHTML = '<div class="header"><h1>Error</h1></div><div class="content">Your giving E-mail address has been already taken . Please try another one</div><div><button id="ok">Ok</button></div>';
    document.querySelector("body").appendChild(element);
    document.querySelector(".main_section").setAttribute("style","filter: blur(4px);");
    document.querySelector("body").addEventListener('click',function(){
    document.querySelector(".error_usr").setAttribute("style","display:none");
    document.querySelector(".main_section").setAttribute("style","filter: none;");
    });

    document.querySelector("#ok").onclick = function(){
        document.querySelector(".error_usr").setAttribute("style","display:none");

    };
}else if (error = 'error') {
    alert("an error occurt please try again")
    
} else {
    
}