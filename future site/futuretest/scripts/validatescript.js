function validateForm(form){
    var nameError = validateName(form.name.value);
    var tetxError = validateText(form.text.value);

    if(nameError === "" && tetxError === ""){
        var name = $("#name").val();
        var text = $("#text").val();
        
        $.ajax({
            type: 'POST',
            url: 'insertcomments.php',
            dataType: 'html',
            data: {name:name, text:text},
            success: function(){
                $(".commentary").load("loadcomments.php");
                $("#name").val("");
                $("#text").val("");
            }
        });
    }else{
        console.log(2);
        $("#nameError").text(nameError);
        $("#textError").text(tetxError);
    }
    return false;
}

function validateName(field)
{
 if (field === "") 
    return "//Не введено имя пользователя.";
 else if ( field.length < 4)
    return "//В имени пользователя должно быть не менее 4 символов.";
 else if (/[^a-zа-яА-ЯA-Z0-9_-]/.test(field))
    return "//В имени пользователя разрешены только a- z, A- Z, 0-9, - и _.";
 return "";
}

function validateText(field){
    if (field === "") 
        return "//Введите комментарий";
    else
        return "";
}

