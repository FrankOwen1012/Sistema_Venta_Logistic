const toggle = document.querySelector(".toggle")
const menuDashboard = document.querySelector(".menu-dashboard")
const iconoMenu = toggle.querySelector("i")
const enlacesMenu = document.querySelectorAll(".enlace")

toggle.addEventListener("click", () => {
    menuDashboard.classList.toggle("open")

    if(iconoMenu.classList.contains("bx-menu")){
        iconoMenu.classList.replace("bx-menu", "bx-x")
    }else {
        iconoMenu.classList.replace("bx-x", "bx-menu")
    }
})

enlacesMenu.forEach(enlace => {
    enlace.addEventListener("click", () => {
        menuDashboard.classList.add("open")
        iconoMenu.classList.replace("bx-menu", "bx-x")
    })
})


window.onload=function(){
    let x=document.getElementById("Ejemplo1");
    let y=document.getElementById("Ejemplo2");
    let z=document.getElementById("Ejemplo3");
    let a=document.getElementById("Ejemplo4");
    
    

    x.style.display="block";
    y.style.display="none";
    z.style.display="none";
    a=style.display="none";


document.getElementById("MenuUno").className="active";
document.getElementById("MenuDos").className="Desactive";
document.getElementById("MenuTres").className="Desactive";
document.getElementById("MenuCuatro").className="Desactive";


}

function show(param_div_id){

       let x=document.getElementById("Ejemplo1");
       
       let y=document.getElementById("Ejemplo2");
       
       let z=document.getElementById("Ejemplo3");

       let a=document.getElementById("Ejemplo4");

     


       if(param_div_id==="Ejemplo1"){
        x.style.display="block";
        y.style.display="none";
        z.style.display="none";
        a.style.display="none";

        document.getElementById("MenuUno").className="active";
        document.getElementById("MenuDos").className="desactive";
        document.getElementById("MenuTres").className="desactive";
        document.getElementById("MenuCuatro").className="desactive";
    

       }
       else if(param_div_id==="Ejemplo2"){
        x.style.display="none";
        y.style.display="block";
        z.style.display="none";
        a.style.display="none";

        document.getElementById("MenuUno").className="desactive";
        document.getElementById("MenuDos").className="active";
        document.getElementById("MenuTres").className="desactive";
        document.getElementById("MenuCuatro").className="desactive";
        

       }
       else if(param_div_id==="Ejemplo3"){
        x.style.display="none";
        y.style.display="none";
        z.style.display="block";
        a.style.display="none";

        document.getElementById("MenuUno").className="desactive";
        document.getElementById("MenuDos").className="active";
        document.getElementById("MenuTres").className="desactive";
        document.getElementById("MenuCuatro").className="desactive";
        

       }
       else if(param_div_id==="Ejemplo4"){
        x.style.display="none";
        y.style.display="none";
        z.style.display="none";
        a.style.display="block";

        document.getElementById("MenuUno").className="desactive";
        document.getElementById("MenuDos").className="desactive";
        document.getElementById("MenuTres").className="desactive";
        document.getElementById("MenuCuatro").className="active";

       }
       else {
        x.style.display="block";
        y.style.display="none";
        z.style.display="none";
        a.style.display="none";
        document.getElementById("MenuUno").className="active";
        document.getElementById("MenuDos").className="desactive";
        document.getElementById("MenuTres").className="desactive";
        document.getElementById("MenuCuatro").className="desactive";
       }       

}