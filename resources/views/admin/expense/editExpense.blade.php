@extends('admin.layout.master')
@section('title', 'Insert Expense')
@section('parentPageTitle', 'Dashboard')


@section('content')



<div class="card">
    <div class="card-header">
      <h3>
        
      </h3>
    </div>
    <div class="card-body">
      <form method="post" action="{{route('updateExpense')}}" method="post" class="form-horizontal" id="form" enctype="multipart/form-data">
          @csrf
          <input name="id" type="hidden" class="form-control" id="fname" value="{{$edits->id}}">
          <div class="form-row col-md-6">
              <label for="description">Category</label>
              <select class="form-control col-sm-11" id="category_id" name="category_id" required>
                <option required>Select Category</option>

            @foreach($categories as $categorie)         
                <option value="{{$categorie->id}}" required>{{$categorie->name}}</option>
            @endforeach
              </select>

              @error('category_id')
              <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          </div>

          <div class="form-row col-md-6">
            <label for="description">Amount</label>
            <input type="number" id="amount" class="form-control @error('amount') is-invalid @enderror" name="amount" value="{{$edits->amount}}" >
            @error('amount')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>

        <div class="form-row col-md-6">
            <label for="description">Note</label>
            <input type="text" id="note" class="form-control @error('note') is-invalid @enderror" name="note" value="{{$edits->note}}" required>
            @error('note')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        </div>

              <div class="form-group col-md-6" style="padding-left: 10px;padding-top:30px">
                <button name="submit" type="submit" class="btn btn-primary">Update</button>

              </div>

          </form>
      </div>

    </div>








@stop
