<form method="POST" action="/checkout">
    <input type="hidden" name="_token" value="{{csrf_token()}}" id="">
    <button type="submit">Checkout</button>
</form>