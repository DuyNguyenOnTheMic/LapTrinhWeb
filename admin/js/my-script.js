$('#add-product-form').submit(function(e) {
    e.preventDefault();

    // Get description text
    var description = $('.ck-content').text();
    $('#description').val(description);

    // Get form data
    var $form = $(this);
    var serializedData = $form.serialize();

    $.ajax({
        url: location.href,
        type: 'POST',
        data: serializedData
    })
});

var loadFile = function(event) {
    var image = document.getElementById('imgOutput');
    image.src = URL.createObjectURL(event.target.files[0]);
};