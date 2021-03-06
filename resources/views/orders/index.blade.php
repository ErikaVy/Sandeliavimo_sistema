@extends ('layouts.app')

@section ('content')
    <h1>Orders</h1>
    <table class="table">
        @if (count($orders) >= 1)
        <tr>
                <th>Order ID</th>
                <th>Order date</th>
                <th>Customer ID</th>
                <th>Empoyee ID</th>

            </tr>
    
    <div class="well">
        @foreach($orders as $order)
                        <tr>
                            <td>{{$order->order_id}}</td> 
                            <td>{{$product->order_date}}</td>
                            <td>{{$product->customer_id}}</td>
                            <td>{{$product->employee_id}}</td>
                        <td><a href="/Sandeliavimo_sistema/public/orders/{{$product->product_id}}">Order info</a></td>   
                    </tr>          
        @endforeach      
    </div>
</table>

    {{$orders->links()}}

    @else
        <p>No orders made</p>
    @endif
    <a class="btn btn-primary" href="/Sandeliavimo_sistema/public/orders/create">Create new order</a>
@endsection