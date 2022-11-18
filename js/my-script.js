$('.btnAddToCart').on('click', function(e) {
    toastr.options.positionClass = 'toast-bottom-right';
    toastr.success('Thêm thành công!');
    e.preventDefault();
    $.ajax({
        url: $(this).attr('href'),
    }).done(function(data) {
        location.reload();
    });
});

$('.mini-cart-item-delete').on('click', function(e) {
    var result = confirm('Are you sure to remove cart item?');
    if (result == true) {
        // Delete cart item
        var id = $(this).data('id');
        $.ajax({
            url: 'cartAction.php?action=removeCartItem&id=' + id,
        }).done(function(data) {
            location.reload();
        });
    } else {
        return false;
    }
});