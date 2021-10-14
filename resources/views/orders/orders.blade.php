@extends('admin_dashboard_from_here')
@section('admin_panel_section')

    <div class=" " style="width: 70%;height: 100%;text-align:center;  text-align: center;margin-left: 50%;margin-right: 50%;margin: auto;">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
        @if (\Session::has('failed'))
            <div class="alert alert-danger">
                <ul>
                    <li>{!! \Session::get('failed') !!}</li>
                </ul>
            </div>
        @endif
        @php use App\Models\Product;$orders = \App\Models\Order::orderBy('id')->get();
        @endphp

        <table class="table table-dark table-striped" style="margin-top: 5%;">
            <tr>
                <th>Order No.</th>
                <th>User Id</th>
                <th>User Name</th>
                <th>User Email</th>
                <th>Address</th>
                <th>Amount</th>
                <th>Payment Method </th>
                <th>Payment Status</th>
                <th>Order Status</th>

            </tr>
            @foreach($orders as $order)

                <tr>

                    <td>{{$order['id']}}</td>
                    <td>{{$order['user_id']}}</td>

                    <td>{{$order['user_name']}}</td>
                    <td>{{$order['user_email']}}</td>
                    <td>{{$order['address']}}</td>
                    <td>{{$order['total_amount']}}</td>
                    <td>{{$order['payment_method']}}</td>
                    <td>
                        @if(($order->payment_status)==1)
                            <p>Payment Received</p>
                            @endif
                            @if(($order->payment_status)==0)
                                <p>Payment Pending</p>
                            @endif

                    </td>


                    <td>
                        @if(($order->status)==1)
                            <p>Delivered</p>
                        @endif
                        @if(($order->status)==0)
                            <p>Not Delivered</p>
                        @endif
                    </td>


                </tr>
            @endforeach


        </table>


    </div>


@endsection

