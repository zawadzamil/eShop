
@extends('othersLayout')
@section('bodyParts')
    <div style="margin-left: 3%;margin-right: 3%;margin-top: 3%;">
    <form action="{{url('cashOrder')}}" method="POST">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputName">Full Name</label>
                <input type="text"  name="name" class="form-control" id="inputName" placeholder="Name" value="{{Auth::user()->name}}" required>
            </div>
            <div class="form-group col-md-6">
                <label for="inputPhone">Phone</label>
                <input type="text" class="form-control" id="inputPhone" placeholder="Phone "  value="{{Auth::user()->cell}}" required>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email"  value="{{Auth::user()->email}}" required>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" name="address" id="inputAddress" placeholder="" value="{{Auth::user()->address}}">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" name="city" id="inputCity">
            </div>


        </div>

        <button type="submit" class="btn btn-primary">Sign in</button>
    </form>
    </div>


    @endsection
