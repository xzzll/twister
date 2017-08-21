
@extends('layouts.app')

@section('content')

<div class="col-sm-offset-2 col-sm-6">

<form action="" class="form-horizontal" role="form" method="POST">
  <div class="form-group">
    <label for="firstname" class="col-sm-2 control-label">TETLE</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="firstname" placeholder="请输入标题">
    </div>
  </div>
  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">TWISTER</label>
    <div class="col-sm-10">

      <textarea class="form-control" id="lastname" placeholder="请输入内容" rows="8" cols="80"></textarea>
    </div>
  </div>

  <div class="form-group">
    <label for="inputfile" class="col-sm-2 control-label">PICTURE</label>
    <div class="col-sm-10">
    <input type="file" id="inputfile">

    </div>
  </div>
   <div class="form-group">
      <div class="col-sm-6 col-md-10">
          <label for="inputfile" class="col-sm-2 control-label">WITCH</label>
          <img src="{{URL::asset('img/4.jpg')}}" alt="通用的占位符缩略图" class="col-sm-6 control-label">

      </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">publish</button>
    </div>
  </div>
</form>
</div>







@endsection
