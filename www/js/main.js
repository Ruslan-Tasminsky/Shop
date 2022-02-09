$('#cart').click(function() {
    var res = confirm('Product added to cart');
    if (!res) return false;
});