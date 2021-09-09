@extends('admin_dashboard_from_here')
@section('admin_panel_section')

    <div class=" "
         style="width: 70%;height: 100%;text-align:center;  text-align: center;margin-left: 50%;margin-right: 50%;margin: auto;">
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
        @php use App\Models\User;$users = User::orderBy('id')->get();
        @endphp

        <table class="table table-dark table-striped" style="margin-top: 5%;">
            <tr>
                <th>Name</th>
                <th> Email</th>
                <th> Cell</th>
                <th> Address</th>


            </tr>
            @foreach($users as $user)


                <tr style="text-align: left;">

                    <td>{{$user['name']}}</td>
                    <td>{{$user['email']}}</td>

                    <td>{{$user['cell']}}</td>
                    <td>{{$user['address']}}</td>


                </tr>
            @endforeach


        </table>


    </div>


@endsection

