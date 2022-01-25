<! --
обычная форма для работы с постом использовая имя в роуте orders.store
-->
<form method="post" action="{{route('orders.debag')}}">
    <! --   добавление токена что бы все работала  -->
    @csrf
    <label>Name</label>
    <br>
    <input name="name">
    <br><br>
    <label>total_price</label>
    <br>
    <input name="total_price">
    <br><br>
    <label>comment</label>
    <br>
    <input name="comment">
    <br><br>
    <label>customer_address</label>
    <br>
    <input name="customer_address">
    <br><br>
    <label>product_count</label>
    <br>
    <input name="product_count">
    <br><br>
    <input type="submit">
</form>

