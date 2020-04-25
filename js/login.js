window.onload=function(){

    function my$(id) {
            return document.getElementById(id);
        }
        my$("phone_login").style.display="none";
        my$("email").onclick=function(){
            if(my$("email_login").style.display="none"){
                my$("email_login").style.display="block"
                my$("phone_login").style.display="none"
                my$("email").style.bgcolor=yellow;
            }
        };
        my$("phone").onclick=function(){
            if(my$("phone_login").style.display="none"){
                my$("phone_login").style.display="block"
            }
        };
    };