// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
    'use strict'

    /* FETCH ALL THE FORMS WE WANT TO APPLY CUSTOM BOOTSTRAP VALIDATION STYLES TO */
    var forms = document.querySelectorAll('.needs-validation')

    /* LOOP OVER THEM AND PREVENT SUBMISSION */
    Array.prototype.slice.call(forms)
        .forEach(function(form) {
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
})()