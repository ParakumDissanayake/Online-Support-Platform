@extends('layouts.main')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      <h1 class="h2">Tickets</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <button class="btn btn-sm btn-outline-secondary">Share</button>
          <button class="btn btn-sm btn-outline-secondary">Export</button>
        </div>
        <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
          <span data-feather="calendar"></span>
          This week
        </button>
      </div>
    </div>

   <form action="" method="post">
     {{ csrf_field() }}

     <div class="form-group">
       <label for="customerName">Customer Name</label>
       <input type="text" id="customerName" name="customerName" class="form-control{{ $errors->has('customerName') ? 'is-invalid' : '' }}"/>
       @if($errors->has('customerName'))
       <span class="help-block">
         <strong>{{ $errors->first('customerName') }}</strong>
       </span>  
   @endif
      </div>

     <div class="form-group">
       <label for="description">Description</label>
       <input type="text" id="description" name="description" class="form-control{{ $errors->has('description') ? 'is-invalid' : '' }}"/>
     
       @if($errors->has('description'))
       <span class="help-block">
         <strong>{{ $errors->first('description') }}</strong>
       </span>  
   @endif
      </div>

     <div class="form-group">
       <label for="email">E-mail</label>
       <input type="email" id="email" name="email" class="form-control{{ $errors->has('email') ? 'is-invalid' : '' }}"/>
       @if($errors->has('email'))
       <span class="help-block">
         <strong>{{ $errors->first('email') }}</strong>
       </span>  
   @endif
      </div>

     <div class="form-group">
       <label for="phoneNumber">Phone Number</label>
       <input type="number" id="phoneNumber" name="phoneNumber" class="form-control{{ $errors->has('phoneNumber') ? 'is-invalid' : '' }}"/>
       @if($errors->has('phoneNumber'))
       <span class="help-block">
         <strong>{{ $errors->first('phoneNumber') }}</strong>
       </span>  
   @endif
      </div>

     <div class="form-group">
       <label for="status">Status</label>
       <input type="text" id="status" name="status" class="form-control{{ $errors->has('status') ? 'is-invalid' : '' }}"/>
       @if($errors->has('status'))
       <span class="help-block">
         <strong>{{ $errors->first('status') }}</strong>
       </span>  
   @endif
      </div> 
     
     <button class="btn btn-primary" type="submit">Add</button>
     <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Back</a>
   </form>
    
    
   
  </main>
@endsection