
function validateY() {
    document.forms["form"].elements["Y"].onkeypress = function (event) {
        if ((event.keyCode < 48 || event.keyCode > 57) && event.keyCode!==127 && event.keyCode!==46 && event.keyCode!==189) {
            document.getElementById("errY").innerHTML = 'Не отчаивайтесь, на клавиатуре<br> не так уж много кнопок.';
            document.getElementById("errY").style.visibility = 'visible';
            return false;
        }
    };
}


function validateForm(){
    onsubmit = function () {
        if ((!document.forms["form"].elements["Y"].value)||(document.forms["form"].elements["Y"].value<=-3)||(document.forms["form"].elements["Y"].value>=5)) {
            document.getElementById("errY").innerHTML = 'Введите значение Y<br>в диапазоне (-3; 5)';
            document.getElementById("errY").style.visibility = 'visible';
        }
        else {
            document.getElementById("errY").style.visibility = 'hidden';
        }
        if (!document.forms["form"].elements["R"].value)
            document.getElementById("errR").style.visibility = 'visible';
        else {
            document.getElementById("errR").style.visibility = 'hidden';
        }
        if ((!document.forms["form"].elements["Y"].value)||(!document.forms["form"].elements["R"].value)||document.getElementById("errY").style.visibility === 'visible')
            return false;
      
    }
}
