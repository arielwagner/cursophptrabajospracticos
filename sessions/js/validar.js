$(document).ready(function() {
    
    $('#txtPasswordRegister1').change(function() {
        errorEqual();
    }); 
    
    $('#txtPasswordRegister2').change(function() {
        errorEqual();
    }); 
});

function errorEqual()
{
    if($('#txtPasswordRegister1').val() != $('#txtPasswordRegister2').val())
    {
        $('#err1').html('No coinciden las claves.');
        $('#err2').html('No coinciden las claves.');
    }
    else
    {
        $('#err1').html('');
        $('#err2').html('');      
    }
}