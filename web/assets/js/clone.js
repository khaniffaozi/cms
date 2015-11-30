jQuery(document).ready(function($) {
    $("body").css('min-height', $(window).height() + 1);
    $(window).resize(function() {
        $("body").css('min-height', $(window).height() + 1);
    });
    
    //--- Responsibilities ---------------------------------------------------------------
    //Add More
    $(".form .form-responsibilities .add-responsibilities").click(function() {
        var more_textbox = $(
                '<div class="form-responsibilities">'+
                    '<div class="input-group">'+
                        '<span class="input-group-addon"  style="cursor:pointer"><i class="glyphicon glyphicon-move handle" ></i></span>'+
                        '<textarea id="responsibilities1" name="responsibilities[]" type="text" class="form-control" rows="3"></textarea>'+
                        '<span class="input-group-addon btn btn-danger remove-responsibilities"><i class="glyphicon glyphicon-remove"></i></span>'+
                    '</div>'+
                '</div>');

        more_textbox.hide();
        $(".form-responsibilities:last").after(more_textbox);
        more_textbox.fadeIn("slow");
        return false;
    });

    //Remove
    $('.form').on('click', '.remove-responsibilities', function() {
        $(this).parent().parent().css('background-color', '#FF6C6C');
        $(this).parent().parent().fadeOut("slow", function() {
            $(this).parent().parent().css('background-color', '#FFFFFF');
            $(this).remove();
        });
        return false;
    });

    //--- Required ---------------------------------------------------------------
    //Add More
    $(".form .form-required .add-required").click(function() {
        var more_textbox = $(
                '<div class="form-required">'+
                    '<div class="input-group">'+
                        '<span class="input-group-addon" style="cursor:pointer"><i class="glyphicon glyphicon-move handle" ></i></span>'+
                        '<textarea id="required1" name="required[]" type="text" class="form-control" rows="3"></textarea>'+
                        '<span class="input-group-addon btn btn-danger remove-required"><i class="glyphicon glyphicon-remove"></i></span>'+
                    '</div>'+
                '</div>');

        more_textbox.hide();
        $(".form-required:last").after(more_textbox);
        more_textbox.fadeIn("slow");
        return false;
    });

    //Remove
    $('.form').on('click', '.remove-required', function() {
        $(this).parent().parent().css('background-color', '#FF6C6C');
        $(this).parent().parent().fadeOut("slow", function() {
            $(this).parent().parent().css('background-color', '#FFFFFF');
            $(this).remove();
        });
        return false;
    });

    //--- Desirable ---------------------------------------------------------------
    //Add More
    $(".form .form-desirable .add-desirable").click(function() {
        var more_textbox = $(
                '<div class="form-desirable">'+
                    '<div class="input-group">'+
                        '<span class="input-group-addon" style="cursor:pointer"><i class="glyphicon glyphicon-move handle" ></i></span>'+
                        '<textarea id="desirable1" name="desirable[]" type="text" class="form-control" rows="3"></textarea>'+
                        '<span class="input-group-addon btn btn-danger remove-desirable"><i class="glyphicon glyphicon-remove"></i></span>'+
                    '</div>'+
                '</div>');

        more_textbox.hide();
        $(".form-desirable:last").after(more_textbox);
        more_textbox.fadeIn("slow");
        return false;
    });

    //Remove
    $('.form').on('click', '.remove-desirable', function() {
        $(this).parent().parent().css('background-color', '#FF6C6C');
        $(this).parent().parent().fadeOut("slow", function() {
            $(this).parent().parent().css('background-color', '#FFFFFF');
            $(this).remove();
        });
        return false;
    });
});