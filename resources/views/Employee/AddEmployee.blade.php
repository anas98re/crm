@extends('employee.layout')

@section('content')
<style>
  .jops {
    font-family: "Courier New", Courier, monospace;
  }

  body {
    /*background-image: url("../images/audrey1.jpg");*/
    background-size: cover;
  }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script>
  function checkOnlyOne(b) {

    var x = document.getElementsByClassName('daychecks');
    var i;

    for (i = 0; i < x.length; i++) {
      if (x[i].value != b) x[i].checked = false;
    }
  }
</script>
<div class="container" style="padding-top: 3%">
  <div class="container">
    <div class="row">

      <div class="col">
        {{-- <a class="btn btn-success btn-lg" href="{{ route('home')}}" role="button" style="float: right">Home</a>--}}

        <div class="jumbotron" style="background-color:rgba(243,199,0,0.47);">
          <h1 class="display-4">Add Employee</h1>



        </div>
      </div>

    </div>
    <div class="row">

      @if (count($errors) > 0)
      <ul>
        @foreach ( $errors->all() as $item )
        <li>
          {{$item}}
        </li>
        @endforeach
      </ul>
      @endif

      <div class="col">
        <form action="{{route('employee.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input type="text" name="name" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">password</label>
            <input type="password" name="password" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">phone</label>
            <input type="text" name="phone" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">address</label>
            <input type="text" name="address" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">description</label>
            <input type="text" name="description" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">department_id</label>
            <input type="text" name="department_id" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">role</label>
            <input type="text" name="role" class="form-control">
          </div>



          {{-- <div class="form-group">
            <label for="exampleFormControlSelect1">workTime</label>
            <select class="form-control" name="workTime" id="exampleFormControlSelect1">
              <option>morning</option>
              <option>evening</option>
            </select>
          </div>
          <br>
          <br> --}}



          {{-- <div class="form-group">
            <label for="exampleFormControlSelect1">gender</label>
            <select class="form-control" name="regions" id="exampleFormControlSelect1">
              <option>male</option>
              <option>female</option>
            </select>
          </div> --}}

          <br>
          <br>
          {{-- {{-- <div class="form-group">
            <div>
              <h3 style="color: red">DEPARTMENTS:</h3>
            </div>
            {{-- @foreach ($varDepartment as $item)
            <input type="checkbox" name="department[]" value="{{$item->id}}">
            <label for="">{{$item->department_Name}}</label><br>
            @endforeach --}}
            {{-- <a style="float:left" class="btn btn-outline-dark" href="{{ route('department.create')}}" role="button">Add department</a> --}}


          </div>
          <br>
          <br>
          <br>
          <br>
          <br>



              {{-- <div>1: Systems Development </div> <div>1: Systems Development </div> --}}

              {{-- @foreach ($varJop as $item)
              <input type="checkbox" name="jop[]" onclick="onlyOne(this)" value="{{$item->id}}">
              <label for="">{{$item->id}}: {{$item->jop_title}}</label><br>
              @endforeach --}}
            </div>
            {{-- <select class="form-control" name="jop_id" id="exampleFormControlSelect1">
              @foreach ($varJop as $item)
              <label for="">
                <option>{{$item->id}}</option>
              </label><br>
              @endforeach
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                  <option>8</option>
                  <option>9</option>
                  <option>10</option>
            </select> --}}
            <br>
            {{-- <a style="float:left" class="btn btn-outline-dark" href="{{ route('jop.create')}}" role="button">Add Jop</a> --}}


            {{-- <input type="text" name="city_name" class="form-control" placeholder="street" >


                    <input type="text" name="street_adress" class="form-control" placeholder="street_adress" >
                    <input type="text" name="state_province" class="form-control" placeholder="street_adress" > --}}


          <div class="form-group">
            <button class="btn btn-primary" type="submit">save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  @endsection
