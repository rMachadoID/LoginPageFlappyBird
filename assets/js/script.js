$("#btn-submit").on("click", function(e){
    let email, senha, confirm_email;

    $("p.confirm_email").hide();
    $("p.erro-email").hide();
    $("p.erro-senha").hide();

    email = $("#email");
    localStorage.setItem('name', '#email') 
    email.css("border-bottom", "1px solid black");
    if (email.val() == ''){
         e.preventDefault();
         email.css("border-bottom", "1px solid red");
         $("p.erro-email").show();
    }
    confirm_email = $("#confirm_email");
    confirm_email.css("border-bottom", "1px solid black");
    if (confirm_email.val() == ''){
         e.preventDefault();
         confirm_email.css("border-bottom", "1px solid red");
         $("p.erro-confirm_email").show();
    }
    senha = $("#senha");
    senha.css("border-bottom", "1px solid black");
    if (senha.val() == ''){
         e.preventDefault();
         senha.css("border-bottom", "1px solid red");
         $("p.erro-senha").show();
    }
    
})


