function rozwin(){
    var men = document.getElementById("men");
    var menu = document.getElementById("menu");
    var h3 = document.getElementById("h3");
    menu.style.display="flex";
    h3.innerHTML="<img src='bell.svg' alt='notifications' id='bell' onclick='rozwin2()'><div id='ntf'></div><script src='skrypt.js'></script><img src='menu2.svg' alt='menu' id='men2' onclick='zwin()'><div id='menu' style='display:flex;'><table><tr><th class='m1'>Profil</th></tr><tr><th class='m1'>Polubione</th></tr><tr><th class='m1'>Twoje posty</th></tr><tr><th class='m1'>Bezpieczeństwo</th></tr><tr><th class='m1'>Ustawienia</th></tr></table></div>";
}
function zwin(){
    var men2 = document.getElementById("men2");
    var menu = document.getElementById("menu");
    var h3 = document.getElementById("h3");
    menu.style.display="none";
    h3.innerHTML="<img src='bell.svg' alt='notifications' id='bell' onclick='rozwin2()'><div id='ntf'></div><script src='skrypt.js'></script><img src='menu.svg' alt='menu' id='men' onclick='rozwin()'><div id='menu'><table><tr><th class='m1'>Profil</th></tr><tr><th class='m1'>Polubione</th></tr><tr><th class='m1'>Twoje posty</th></tr><tr><th class='m1'>Bezpieczeństwo</th></tr><tr><th class='m1'>Ustawienia</th></tr></table></div>";
}
function rozwin2(){
    var bell = document.getElementById("bell");
    var ntf = document.getElementById("ntf");
    var h3 = document.getElementById("h3");
    ntf.style.display="flex";
     h3.innerHTML="<img src='menu2.svg' alt='notifications' id='bell2' onclick='zwin2()'><div id='ntf' style='display:flex;'></div><script src='skrypt.js'></script><img src='menu.svg' alt='menu' id='men' onclick='rozwin()'><div id='menu'><table><tr><th class='m1'>Profil</th></tr><tr><th class='m1'>Polubione</th></tr><tr><th class='m1'>Twoje posty</th></tr><tr><th class='m1'>Bezpieczeństwo</th></tr><tr><th class='m1'>Ustawienia</th></tr></table></div>";
}
function zwin2(){
    var bell = document.getElementById("bell2");
    var ntf = document.getElementById("ntf");
    var h3 = document.getElementById("h3");
    ntf.style.display="none";
     h3.innerHTML="<img src='bell.svg' alt='notifications' id='bell' onclick='rozwin2()'><div id='ntf'></div><script src='skrypt.js'></script><img src='menu.svg' alt='menu' id='men' onclick='rozwin()'><div id='menu'><table><tr><th class='m1'>Profil</th></tr><tr><th class='m1'>Polubione</th></tr><tr><th class='m1'>Twoje posty</th></tr><tr><th class='m1'>Bezpieczeństwo</th></tr><tr><th class='m1'>Ustawienia</th></tr></table></div>";
}
function pokazhaslo1(){
    var password = document.getElementById("pass");
    if(password.type === "password"){
        password.type = "text";
    } else {
        password.type = "password";
    }
}
function pokazhaslo2(){
    var password = document.getElementById("powpass");
    if(password.type === "password"){
        password.type = "text";
    } else {
        password.type = "password";
    }
}
function sprawdzpola(){
    var email = document.getElementById("email2").value;
    var imie = document.getElementById("imie").value;
    var nazwisko = document.getElementById("nazwisko").value;
    var pseudonim = document.getElementById("pseudonim").value;
    if(email == ""){
        alert("Uzupełnij wszystkie pola!");
        return false;
    }
    else if(imie == ""){
        alert("Uzupełnij wszystkie pola!!");
        return false;
    }
    else if(nazwisko == ""){
        alert("Uzupełnij wszystkie pola!!");
        return false;
    }
    else if(pseudonim == ""){
        alert("Uzupełnij wszystkie pola!!");
        return false;
    }
    var password1 = document.getElementById("pass").value;
    var password2 = document.getElementById("powpass").value;
    if(password1 == ""){
        alert("Pole hasła nie może być puste");
        return false;
    }
    else if(password1 != password2){
        alert("Hasła nie są zgodne");
        return false;
    }
    if(email != "" && imie != "" && nazwisko != "" && pseudonim != "" && password1 != "" && password2 != ""){
        var gotowe = document.getElementById("gotowe");
        gotowe.style.display="inline";
    }
    event.preventDefault;
    return true;
}
