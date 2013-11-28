<script>

var validator = new FormValidator('contactForm', [{

    name: 'name',

    display: 'name',    

    rules: 'required'

},

{

    name: 'email',

    rules: 'valid_email'

}, {

    name: 'message',

    display: 'message',

    rules: 'min_length[10]'

}], function(errors, event) {

        var SELECTOR_ERRORS = $('.error_box'),

        SELECTOR_SUCCESS = $('.success_box');

        

    if (errors.length > 0) {

        SELECTOR_ERRORS.empty();

        

        for (var i = 0, errorLength = errors.length; i < errorLength; i++) {

            SELECTOR_ERRORS.append(errors[i].message + '<br />');

        }

        

        SELECTOR_SUCCESS.css({ display: 'none' });

        SELECTOR_ERRORS.fadeIn(200);

    } else {

        SELECTOR_ERRORS.css({ display: 'none' });

        SELECTOR_SUCCESS.fadeIn(200);

        $("#contactForm").submit(return true;);

    }

    

    if (event && event.preventDefault) {

        event.preventDefault();

    } else if (event) {

        event.returnValue = false;

    }

});



</script>