$('#add-product-form').submit(function (e) {
    e.preventDefault();

    // Get description text
    var description = $('.ck-content').text();
    $('#description').val(description);

    var data = new FormData(this); // <-- 'this' is your form element

    $.ajax({
        url: location.href,
        type: 'POST',
        data: data,
        cache: false,
        contentType: false,
        processData: false,
    }).done(function () {
        window.location.href = 'index.php';
    });
});

var loadFile = function (event) {
    var image = document.getElementById('imgOutput');
    image.src = URL.createObjectURL(event.target.files[0]);
};