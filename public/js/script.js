const reserve = document.querySelector(".reserv")
//#######################################################
const nores = document.createElement('div');
nores.innerHTML = '<h1>Vous avez 0 réservations</h1>';
nores.classList.add("nores");
reserve.appendChild(nores);
//####################################################################
const form = document.createElement('form');
form.action="/checkout.html"
form.classList.add("form")
//#############################################################
const submit = document.createElement('button');
submit.type = "submit";
submit.innerHTML='<h5>Compléter la réservation</h5>';
submit.classList.add("submit");
var i = 1
$(document).ready(function(){
$('.reserver').on('click', function(s){
        if(form.children.length<=3){
            event.preventDefault();
            console.log(i);
            console.log(form.children.length);
            if(reserve.children.length = 2 && i === 1){
                        document.querySelector(".nores").remove();
                    }
                    reserve.appendChild(form);
                    const newDiv = document.createElement("div");
                    newDiv.classList.add("newdiv")
                    form.appendChild(newDiv)
                    // // hna ndir text 
                    const titre = document.createElement("div");
                    titre.innerHTML = "<h5>Titre mémoire 1</h5>";
                    titre.classList.add("title");
                    newDiv.appendChild(titre);
                    const btn = document.createElement("button");
                    const img = document.createElement("img")
                    img.src = "/src/Vector1.svg";
                    btn.appendChild(img);
                    btn.classList.add("btn")
                    titre.appendChild(btn);
                    btn.addEventListener('click', remover);
                    //################################################################
                    const sousTitre = document.createElement("div");
                    sousTitre.innerHTML = '<h5>Disponible du 05/05/2025</h5><h4>Réserver de: 05/05/205 à 05/06/2030</h4>';
                    sousTitre.classList.add("soustitre")
                    newDiv.appendChild(sousTitre);
                    //@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
                    i+=1;
                    if(form.children.length >= 0){
                        form.appendChild(submit);
                    }
        }
            
                    
})
});
function remover(e){
    const item = e.target;
    const paren = item.parentNode.parentNode.parentNode ;
    paren.remove();
    i--;
    if(reserve.children.length = 2 && i === 1){
        reserve.appendChild(nores);
        submit.remove();
    }
}