$("#contactForm").submit(function(event){
    // cancels the form submission
    event.preventDefault();
    submitForm();
});

function submitForm(){
    // Initiate Variables With Form Content
    var name = $("#nom").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var message = $("#message").val();
 
    $.ajax({
        type: "POST",
        url: "php/script.php",
        data: "nom=" + name + "&email=" + email + "&phone=" + phone + "&message=" + message,
        success : function(text){
            if (text == "success"){
                formSuccess();
            }
        }
    });
}
function formSuccess(){
    $( "#msgSubmit" ).removeClass( "hidden" );
}