$('.accountForm').on('submit',function(e){
    var p = $("input[name=password]").val();
    var cp = $("input[name=conf_password]").val();
    var msg = '';
    if(p.length < 6){
        $('.confError').text('')
        $('.pwdError').text('Your password should contain at least 6 characters')
        e.preventDefault();
    } else if(cp != p){
        $('.pwdError').text('')
        $('.confError').text('Password confirmation should be identic')
        e.preventDefault();
    } else {
        $('.confError').text('');
    }
});
