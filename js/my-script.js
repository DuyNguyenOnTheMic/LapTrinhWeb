$('.btnAddToCart').on('click', function (e) {
    toastr.options.positionClass = 'toast-bottom-right';
    toastr.success('Thêm thành công!');
    e.preventDefault();
    // Call action to add product to cart
    $.ajax({
        url: $(this).attr('href'),
    }).done(function (data) {
        // Reload page after adding product
        location.reload();
    });
});

$('.cart-product-remove').on('click', function (e) {
    var result = confirm('Are you sure to remove cart item?');
    if (result == true) {
        // Delete cart item
        var id = $(this).data('id');
        $.ajax({
            url: 'cartAction.php?action=removeCartItem&id=' + id,
        }).done(function (data) {
        // Reload page after delete product
            location.reload();
        });
    } else {
        return false;
    }
});

$("input[name='quantity']").TouchSpin({
    min: 0,
    max: 100,
    buttondown_class: "btn theme-btn-1 border-0 px-4",
    buttonup_class: "btn theme-btn-1 border-0 px-4"
});

$('#btnHehe').on('click', function () {
    orderForm.submit();
});

function updateCartItem(obj, id) {
    $.get("cartAction.php", {
        action: "updateCartItem",
        id: id,
        qty: obj.value
    }, function (data) {
        if (data == 'ok') {
            location.reload();
        } else {
            alert('Cart update failed, please try again.');
        }
    });
}