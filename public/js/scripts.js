$(document).ready(function() {
	
    // dropdown menu
    $('.dropdown').click(function() {
        $(this).children('.dropdown-menu').toggle();
        });
        
    // thumbnails
    $('.thumbnail').mouseenter(function() {
        $(this).animate({
            opacity: '1'
        });
    });
    $('.thumbnail').mouseleave(function() {
        $(this).animate({
            opacity: '0.65'
        }); 
    });
    
    $("#login").submit(function(eventObject) {
        if ($("#username").val() == "") {
            $(".form-group").last().append("<p style='color: #ff0066;'>Please enter your username!</p>");
            return false;
        }
        if ($("#password").val() == "") {
            $(".form-group").last().append("<p style='color: #ff0066;'>Please enter your password!</p>");
            return false;
        }
    });
    
    $("#register").submit(function(eventObject) {
        if ($("#username").val() == "") {
            $(".form-group").last().append("<p style='color: #ff0066;'>Please enter your username!</p>");
            return false;
        }
        if ($("#password").val() == "") {
            $(".form-group").last().append("<p style='color: #ff0066;'>Please enter your password!</p>");
            return false;
        }
        if ($("#confirmation").val() == "") {
            $(".form-group").last().append("<p style='color: #ff0066;'>Please confirm your password!</p>");
            return false;
        }
        if ($("#password").val() != $("#confirmation").val()) {
            $(".form-group").last().append("<p style='color: #ff0066;'>Your passwords do not match!</p>");
            return false;
        }
        return true;
    });
    
    $("#change_username").submit(function(eventObject) {
        if ($("#password").val() == "") {
            $(".form-group").last().append("<p style='color: #ff0066;'>Please enter your password!</p>");
            return false;
        }
        if ($("#new_username").val() == "") {
            $(".form-group").last().append("<p style='color: #ff0066;'>Please enter your new username!</p>");
            return false;
        }
        return true;
    });
    
    $("#change_password").submit(function(eventObject) {
        if ($("#password").val() == "") {
            $(".form-group").last().append("<p style='color: #ff0066;'>Please enter your password!</p>");
            return false;
        }
        if ($("#new_password").val() == "") {
            $(".form-group").last().append("<p style='color: #ff0066;'>Please enter your new password!</p>");
            return false;
        }
        if ($("#confirm_password").val() == "") {
            $(".form-group").last().append("<p style='color: #ff0066;'>Please confirm your new password!</p>");
            return false;
        }
        if ($("#new_password").val() !== $("#confirm_password").val()) {
            $(".form-group").last().append("<p style='color: #ff0066;'>Your passwords do not match!</p>");
            return false;
        }
        return true
    });

    $("#redraw").submit(function(eventObject) {
        if ($("#number").val() < 5 || $("#number").val() > 500) {
            $(".form-group").last().append("<p style='color: #ff0066;'>Please choose a number between 5 and 500!</p>");
            return false;
        }
        return true
    });
});
