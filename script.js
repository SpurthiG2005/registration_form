$(document).ready(function () {

    $("#regForm").submit(function () {

        let phone = $("#phone").val();

        if (isNaN(phone) || phone.length != 10) {
            alert("Phone number must be 10 digits!");
            return false;
        }

        return true; 
    });

});
