
@extends('layouts.app')

@section('content')

<div class="col-sm-offset-2 col-sm-6">

<form action="{{ url('test') }}" class="form-horizontal" role="form" method="POST" enctype="multipart/form-data">
{{ csrf_field() }}

  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">TWISTER</label>
    <div class="col-sm-10">

      <textarea name="art_content" class="form-control" id="lastname" placeholder="请输入内容" rows="8" cols="80"></textarea>
    </div>
  </div>

  <div class="form-group">
    <label  for="inputfile" class="col-sm-2 control-label">PICTURE</label>
    <div class="col-sm-10">

    <input  type="file" id="inputfile" name="pic">

    </div>
  </div>
   <div class="form-group">
      <div class="col-sm-6 col-md-10">
          <label for="inputfile" class="col-sm-2 control-label">WITCH</label>
          <img src="" alt="通用的占位符缩略图" class="col-sm-6 control-label">

      </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">publish</button>
    </div>
  </div>
  <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
  <input type="hidden" name="art_id" value="{{ Auth::user()->id }}">
  <input type="hidden" name="art_group" value="{{ Auth::user()->name }}">

</form>
</div>







@endsection
