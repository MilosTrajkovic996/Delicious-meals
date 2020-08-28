$(document).ready(function(){
    $('.btn btn-primary').click(function(){
        var ime = $('#dmeals-user-register-name').val();
        var prezime = $('#dmeals-user-register-surname').val();
        var email = $('#dmeals-user-register-email').val();
        var korisnicko_ime = $('#dmeals-user-register-username').val();
        var lozinka = $('#dmeals-user-register-password').val();
        
        $.ajax({
            url:"ajax_registracija.php",
            method:"POST"
        });
    });
});