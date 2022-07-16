$(document).ready(function() {
    console.log( "ready!" );
});

//оповещение о действии
function displayMessage(text, color) {
    $("body").prepend('<div class="msg alert alert-' + color + '">' +
        '  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> <span>' + text + '</span></div>');
    function second_passed() {
        $(".alert").alert('close');
    }
    setTimeout(second_passed, 2000);
}
