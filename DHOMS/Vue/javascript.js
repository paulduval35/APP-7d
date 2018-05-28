
function afficher(id)
{
    if(document.getElementById(id).style.display == "block")
    {
        document.getElementById(id).style.display = "none";
    }
    else
    {
        document.getElementById(id).style.display = "block";
    }
}

function modifier_box_nom_maison(id)
{

}

function modifier_nom_maison(id)
{

}

function modifier_maison_tableaubord(id)
{
    if(document.getElementById(id).style.backgroundColor == "rgb(68, 68, 68)")
    {
        document.getElementById(id).style.backgroundColor = "rgb(75,75,75)";
    }
    else
    {
        document.getElementById(id).style.backgroundColor = "rgb(68, 68, 68)";
    }
}


var slider_temperature = document.getElementById("slider_temperature");
var output_temperature = document.getElementById("val_slider_temperature");
output_temperature.innerHTML = slider_temperature.value; // Affiche la valeur par défaut

// Update la valeur du slider à chaque fois qu'on le bouge
slider_temperature.oninput = function() {
    output_temperature.innerHTML = this.value;
}


var slider_store = document.getElementById("slider_store");
var output_store = document.getElementById("val_slider_store");
output_store.innerHTML = slider_store.value; // Affiche la valeur par défaut

// Update la valeur du slider à chaque fois qu'on le bouge
slider_store.oninput = function() {
    output_store.innerHTML = this.value;
}

