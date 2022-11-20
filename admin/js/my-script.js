$('#add-product-form').submit(function (e) {
    e.preventDefault();

    if (!$('#image').val()) {
        toastr.warning('You havent select image!')
    } else {
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
    }
});

$('#update-product-form').submit(function (e) {
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

$('.btn-delete').on('click', function (e) {
    // Show modal and append delete link to button
    var id = $(this).data("id");
    $("#btn-confirm").click(function () {
        window.location.href = 'deleteProduct.php?id=' + id;
    });
});

// Close modal on button click
$('.btnHuy').on('click', function (e) {
    e.preventDefault();
    $('#exampleModalCenter').modal('toggle');
});