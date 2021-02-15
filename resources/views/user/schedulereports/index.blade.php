@extends('user.layouts.dasboard')

@section('dashboard')
<section>
<link href="{{ asset('css/shedulereort.css') }}" rel="stylesheet">
<div class="container">
    <div class="heading">
        <strong>
            <h1>Schedule Reports</h1>
        </strong>
    </div>
    <div class="divDatePicker">
        <label for="">Date Range Picker</label>
        <form>
  <div class="form-row align-items-center">
    <div class="col-sm-5">
      <label class="sr-only" for="inlineFormInput">User</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
    </div>

    <div class="col-sm-5">
      <label class="sr-only" for="inlineFormInput">Category</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
    </div>
  
    <div class="col-sm-1">
    </div>
    <div class="col-sm1">
      <button type="submit" class="btn btn-primary mb-2">Submit    <span>
          <i class="fa fa-search"></i>
      </span></button>
    </div>
  </div>
</form>
        
        
    </div>
    <div>
    <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Time</th>
      <th scope="col">Trainer Name</th>
      <th scope="col">Category</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th>Tuesday, 1st September 2020</th>
      <td>Michel Bay</td>
      <td>Group</td>
      <td>
      <a href="" class="btn btn-sm btn-danger">JOIN</a>
      </td>
    </tr>
  </tbody>
</table>
    </div>
</div>
</section>
@endsection