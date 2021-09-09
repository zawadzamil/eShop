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
        @php use App\Models\Brand;$brands = Brand::orderBy('id')->get();
        @endphp

        <table class="table table-dark table-striped" style="margin-top: 5%;">
            <tr>
                <th> Brand Name</th>
                <th> Image</th>
                <th> Description</th>

            </tr>
            @foreach($brands as $brand)

                <tr style="text-align: left;">
                    <td>{{$brand['name']}}</td>
                    <td><img src="../public/images/{{$brand['image']}}" alt="" border="3" height="100" width="100"/>
                    </td>
                    <td>{{$brand['description']}}</td>


                </tr>
            @endforeach


        </table>


    </div>


@endsection

