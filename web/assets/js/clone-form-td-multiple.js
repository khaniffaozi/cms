/*
Author: Tristan Denyer (based on Charlie Griefer's original clone code, and some great help from Dan - see his comments in blog post)
Plugin repo: https://github.com/tristandenyer/Clone-section-of-form-using-jQuery
Demo at http://tristandenyer.com/using-jquery-to-duplicate-a-section-of-a-form-maintaining-accessibility/
Ver: 0.9.4.3
Last updated: Mar 22, 2015

The MIT License (MIT)

Copyright (c) 2011 Tristan Denyer

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
*/
$(function () {
    $('#btnAdd_1').click(function () {
//        var a = newElem.find('.input_email').attr('id', 'ID' + newNum + '_responsibilities');
//        alert('yes==a);
        var num     = $('.clonedInput_1').length, // Checks to see how many "duplicatable" input fields we currently have
            newNum  = new Number(num + 1),      // The numeric ID of the new input field being added, increasing by 1 each time
            newElem = $('#entry' + num).clone().attr('id', 'entry' + newNum).fadeIn('slow'); // create the new element via clone(), and manipulate it's ID using newNum value
    
    /*  This is where we manipulate the name/id values of the input inside the new, cloned element
        Below are examples of what forms elements you can clone, but not the only ones.
        There are 2 basic structures below: one for an H2, and one for form elements.
        To make more, you can copy the one for form elements and simply update the classes for its label and input.
        Keep in mind that the .val() method is what clears the element when it gets cloned. Radio and checkboxes need .val([]) instead of .val('').
    */
        // Label for email field
        newElem.find('.label_email').attr('id', 'ID' + newNum + '_reference').attr('name', 'ID' + newNum + '_reference').html('Email #' + newNum);

        // Email input - text
        newElem.find('.label_email').attr('for', 'ID' + newNum + '_responsibilities');
        newElem.find('.input_email').attr('id', 'ID' + newNum + '_responsibilities').attr('name', 'ID' + newNum + '_responsibilities').val('');

    // Insert the new element after the last "duplicatable" input field
        $('#entry' + num).after(newElem);
        $('#ID' + newNum + '_title').focus();

    // Enable the "remove" button. This only shows once you have a duplicated section.
        $('#btnDel_1').attr('disabled', false);

    // Right now you can only add 4 sections, for a total of 5. Change '5' below to the max number of sections you want to allow.
        // This first if statement is for forms using input type="button" (see older demo). Delete if using button element.
        if (newNum == 10)
        $('#btnAdd_1').attr('disabled', true).prop('value', "You've reached the limit"); // value here updates the text in the 'add' button when the limit is reached
        // This second if statement is for forms using the new button tag (see Bootstrap demo). Delete if using input type="button" element.
        if (newNum == 10)
        $('#btnAdd_1').attr('disabled', true).text("You've reached the limit"); // value here updates the text in the 'add' button when the limit is reached 
    });

    $('#btnDel_1').click(function () {
    // Confirmation dialog box. Works on all desktop browsers and iPhone.
        if (confirm("Are you sure you wish to remove? This cannot be undone."))
            {
                var num = $('.clonedInput_1').length;
                // how many "duplicatable" input fields we currently have
                $('#entry' + num).slideUp('slow', function () {$(this).remove();
                // if only one element remains, disable the "remove" button
                    if (num -1 === 1)
                $('#btnDel_1').attr('disabled', true);
                // enable the "add" button. IMPORTANT: only for forms using input type="button" (see older demo). DELETE if using button element.
                $('#btnAdd_1').attr('disabled', false).prop('value', "Add");
                // enable the "add" button. IMPORTANT: only for forms using the new button tag (see Bootstrap demo). DELETE if using input type="button" element.
                $('#btnAdd_1').attr('disabled', false).text("Add");});
            }
        return false; // Removes the last section you added
    });
    // Enable the "add" button
    $('#btnAdd_1').attr('disabled', false);
    // Disable the "remove" button    
    var num     = $('.clonedInput_1').length;
    if(num > 1){
         $('#btnDel_1').attr('disabled', false);
    }else{
        $('#btnDel_1').attr('disabled', true);
    }
    
    
    
    
    $('#btnAdd_2').click(function () {
        var num     = $('.clonedInput_2').length, // Checks to see how many "duplicatable" input fields we currently have
            newNum  = new Number(num + 1),      // The numeric ID of the new input field being added, increasing by 1 each time
            newElem = $('#req' + num).clone().attr('id', 'req' + newNum).fadeIn('slow'); // create the new element via clone(), and manipulate it's ID using newNum value
    
    /*  This is where we manipulate the name/id values of the input inside the new, cloned element
        Below are examples of what forms elements you can clone, but not the only ones.
        There are 2 basic structures below: one for an H2, and one for form elements.
        To make more, you can copy the one for form elements and simply update the classes for its label and input.
        Keep in mind that the .val() method is what clears the element when it gets cloned. Radio and checkboxes need .val([]) instead of .val('').
    */
        // Label for email field
        newElem.find('.label_req').attr('id', 'ID' + newNum + '_reference').attr('name', 'ID' + newNum + '_reference').html('Req #' + newNum);

        // Email input - text
        newElem.find('.label_req').attr('for', 'ID' + newNum + '_req');
        newElem.find('.input_req').attr('id', 'ID' + newNum + '_required').attr('name', 'ID' + newNum + '_required').val('');

    // Insert the new element after the last "duplicatable" input field
        $('#req' + num).after(newElem);
        $('#ID' + newNum + '_title').focus();

    // Enable the "remove" button. This only shows once you have a duplicated section.
        $('#btnDel_2').attr('disabled', false);

    // Right now you can only add 4 sections, for a total of 5. Change '5' below to the max number of sections you want to allow.
        // This first if statement is for forms using input type="button" (see older demo). Delete if using button element.
        if (newNum == 10)
        $('#btnAdd_2').attr('disabled', true).prop('value', "You've reached the limit"); // value here updates the text in the 'add' button when the limit is reached
        // This second if statement is for forms using the new button tag (see Bootstrap demo). Delete if using input type="button" element.
        if (newNum == 10)
        $('#btnAdd_2').attr('disabled', true).text("You've reached the limit"); // value here updates the text in the 'add' button when the limit is reached 
    });

    $('#btnDel_2').click(function () {
    // Confirmation dialog box. Works on all desktop browsers and iPhone.
        if (confirm("Are you sure you wish to remove? This cannot be undone."))
            {
                var num = $('.clonedInput_2').length;
                // how many "duplicatable" input fields we currently have
                $('#req' + num).slideUp('slow', function () {$(this).remove();
                // if only one element remains, disable the "remove" button
                    if (num -1 === 1)
                $('#btnDel_2').attr('disabled', true);
                // enable the "add" button. IMPORTANT: only for forms using input type="button" (see older demo). DELETE if using button element.
                $('#btnAdd_2').attr('disabled', false).prop('value', "Add");
                // enable the "add" button. IMPORTANT: only for forms using the new button tag (see Bootstrap demo). DELETE if using input type="button" element.
                $('#btnAdd_2').attr('disabled', false).text("Add");});
            }
        return false; // Removes the last section you added
    });
    // Enable the "add" button
    $('#btnAdd_2').attr('disabled', false);
    // Disable the "remove" button
    var num     = $('.clonedInput_2').length;
    if(num > 1){
         $('#btnDel_2').attr('disabled', false);
    }else{
        $('#btnDel_2').attr('disabled', true);
    }
    
    //Desirable
    
    $('#btnAdd_3').click(function () {
        var num     = $('.clonedInput_3').length, // Checks to see how many "duplicatable" input fields we currently have
            newNum  = new Number(num + 1),      // The numeric ID of the new input field being added, increasing by 1 each time
            newElem = $('#des' + num).clone().attr('id', 'des' + newNum).fadeIn('slow'); // create the new element via clone(), and manipulate it's ID using newNum value
    
    /*  This is where we manipulate the name/id values of the input inside the new, cloned element
        Below are examples of what forms elements you can clone, but not the only ones.
        There are 2 basic structures below: one for an H2, and one for form elements.
        To make more, you can copy the one for form elements and simply update the classes for its label and input.
        Keep in mind that the .val() method is what clears the element when it gets cloned. Radio and checkboxes need .val([]) instead of .val('').
    */
        // Label for email field
        newElem.find('.label_des').attr('id', 'ID' + newNum + '_reference').attr('name', 'ID' + newNum + '_reference').html('Des #' + newNum);

        // Email input - text
        newElem.find('.label_des').attr('for', 'ID' + newNum + '_des');
        newElem.find('.input_des').attr('id', 'ID' + newNum + '_desirable').attr('name', 'ID' + newNum + '_desirable').val('');

    // Insert the new element after the last "duplicatable" input field
        $('#des' + num).after(newElem);
        $('#ID' + newNum + '_title').focus();

    // Enable the "remove" button. This only shows once you have a duplicated section.
        $('#btnDel_3').attr('disabled', false);

    // Right now you can only add 4 sections, for a total of 5. Change '5' below to the max number of sections you want to allow.
        // This first if statement is for forms using input type="button" (see older demo). Delete if using button element.
        if (newNum == 10)
        $('#btnAdd_3').attr('disabled', true).prop('value', "You've reached the limit"); // value here updates the text in the 'add' button when the limit is reached
        // This second if statement is for forms using the new button tag (see Bootstrap demo). Delete if using input type="button" element.
        if (newNum == 10)
        $('#btnAdd_3').attr('disabled', true).text("You've reached the limit"); // value here updates the text in the 'add' button when the limit is reached 
    });

    $('#btnDel_3').click(function () {
    // Confirmation dialog box. Works on all desktop browsers and iPhone.
        if (confirm("Are you sure you wish to remove? This cannot be undone."))
            {
                var num = $('.clonedInput_3').length;
                // how many "duplicatable" input fields we currently have
                $('#des' + num).slideUp('slow', function () {$(this).remove();
                // if only one element remains, disable the "remove" button
                    if (num -1 === 1)
                $('#btnDel_3').attr('disabled', true);
                // enable the "add" button. IMPORTANT: only for forms using input type="button" (see older demo). DELETE if using button element.
                $('#btnAdd_3').attr('disabled', false).prop('value', "Add");
                // enable the "add" button. IMPORTANT: only for forms using the new button tag (see Bootstrap demo). DELETE if using input type="button" element.
                $('#btnAdd_3').attr('disabled', false).text("Add");});
            }
        return false; // Removes the last section you added
    });
    // Enable the "add" button
    $('#btnAdd_3').attr('disabled', false);
    // Disable the "remove" button
    var num     = $('.clonedInput_3').length;
    if(num > 1){
         $('#btnDel_3').attr('disabled', false);
    }else{
        $('#btnDel_3').attr('disabled', true);
    }
    
    
});