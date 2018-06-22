/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
document.getElementById("addemail").addEventListener("click", function () {
    i = this.name;
    if (i == 7) {
        alert("Excedeu o numero de emails");
    } else {
        val = 0;
        y = 1;
        while (y <= i && val == 0) {
            emailadd = document.getElementById("validate_email" + y);
            if (emailadd.checkValidity() == false) {
                val = y;
            }
            y++;
        }
        if (val != 0) {
            alert("Para adicionar insira um email valido no " + val + "º Email");
        } else
        {
            i++;
            div = document.getElementById("emailsend");
            newdiv1 = document.createElement("div");
            newdiv1.setAttribute("class", "col-md-4");
            newdiv1.setAttribute("id", "em" + i);

            newdiv2 = document.createElement("div");
            newdiv2.setAttribute("class", "input-group");

            span = document.createElement("span");
            span.setAttribute("class", "input-group-addon");
            
            ielem = document.createElement("i");
            ielem.setAttribute("class", "fa fa-envelope");
            span.appendChild(ielem);
            
            newdiv2.appendChild(span);

            input = document.createElement("input");
            input.setAttribute("type", "email");
            input.setAttribute("class", "form-control");
            input.setAttribute("id", "validate_email" + i);
            input.setAttribute("name", "validate_email" + i);
            input.setAttribute("placeholder", "" + i + "ºEmail");
            input.setAttribute("required", "true");
            newdiv2.appendChild(input);

            rem = document.createElement("button");
            rem.setAttribute("type", "button");
            rem.setAttribute("id", "rememail" + i);
            rem.setAttribute("name", "" + i);
            rem.setAttribute("class", "btn btn-block btn-info btn-sm");
            rem.addEventListener("click", remov);
            rem.innerHTML = "remover";

            newdiv1.appendChild(newdiv2);
            newdiv1.appendChild(rem);

            div.appendChild(newdiv1);

            this.name = i;
        }
    }
});

$(document).ready(function () {
    var classname = document.getElementsByClassName("remo");
    for (var i = 0; i < classname.length; i++) {
        classname[i].addEventListener('click', remov, false);
    }
});

function remov() {
    i2 = this.name;
    document.getElementById("emailsend").removeChild(document.getElementById("em" + i2));
    remem = document.getElementById("addemail");
    ind = document.getElementById("addemail").name;
    remem.name = remem.name - 1;
    i2++;
    while (i2 <= ind) {
        document.getElementById("em" + i2).id = "em" + (i2 - 1);
        alert(i2);
        document.getElementById("validate_email" + i2).id = "validate_email" + (i2 - 1);
        document.getElementById("validate_email" + (i2 - 1)).name = "validate_email" + (i2 - 1);
        document.getElementById("validate_email" + (i2 - 1)).placeholder = "" + (i2 - 1)+"ºEmail";
        document.getElementById("rememail" + i2).id = "rememail" + (i2 - 1);
        document.getElementById("rememail" + (i2 - 1)).name = (i2 - 1);
        i2++;
    }
};

