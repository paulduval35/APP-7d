
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


function slider(ID) {

    var slider_temperature = document.getElementById("slider_"+ID);
    var output_temperature = document.getElementById("val_"+ID);
    output_temperature.innerHTML = slider_temperature.value; // Affiche la valeur par défaut

// Update la valeur du slider à chaque fois qu'on le bouge
    slider_temperature.oninput = function () {
        output_temperature.innerHTML = this.value;
    }
}

var slider_temperature = document.getElementById("slider_1");
var output_temperature = document.getElementById("val_1");
output_temperature.innerHTML = slider_temperature.value; // Affiche la valeur par défaut

// Update la valeur du slider à chaque fois qu'on le bouge
slider_temperature.oninput = function () {
    output_temperature.innerHTML = this.value;
}