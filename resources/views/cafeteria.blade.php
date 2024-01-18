<html lang="en">

<head>
    @include('layouts/head')
    <title>Cafeteria</title>
    <script>
        $(document).ready(function() {
            $(".deduct_button").click(function() {
                $pid = $(this).attr('id');
                $new_val = Number($("input.order_" + $pid).val()) - 1;
                if ($new_val >= 0) {
                    $("input.order_" + $pid).val($new_val);
                }
            });

            $(".add_button").click(function() {
                $pid = $(this).attr('id');
                $new_val = Number($("input.order_" + $pid).val()) + 1;
                if ($new_val < 99) {
                    $("input.order_" + $pid).val($new_val);
                }
            });
        });
    </script>
</head>

<body>
    @include('layouts/navbar')
    <h1>Cafeteria</h1>
    <div class="container">
        <form action="/cafeteria" method="POST">
            @csrf
            <div class="row">
                @foreach ($menu as $m)
                <div class="col-lg-3">
                    <div class="card">
                        <img src="img/food/{{$m->image}}" class="card-img-top" alt="{{$m->name}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$m->name}} - PHP<span>{{$m->price}}</span></h5>
                            <a class="btn btn-danger deduct_button" id="{{$m->product_id}}">-</a>
                            <input type="number" style="width: 50px" min="0" max="99" class="order_{{$m->product_id}}" name="order_{{$m->product_id}}" value="0">
                            <a class="btn btn-primary add_button" id="{{$m->product_id}}">+</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <input type="submit" class="btn btn-success mt-3">
        </form>
    </div>
    {{$menu -> links('pagination::bootstrap-5')}}
</body>

</html>