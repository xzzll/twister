
@extends('layouts.app')

@section('content')

<div class="col-sm-offset-2 col-sm-6">

<form action="{{ url('pingadd') }}" class="form-horizontal" role="form" method="POST" >
{{ csrf_field() }}

  <div class="form-group">
    <label for="lastname" class="col-sm-2 control-label">PINGLUN</label>
    <div class="col-sm-10">

      <textarea name="ping_content" class="form-control" id="lastname" placeholder="请输入内容" rows="8" cols="80"></textarea>
    </div>
  </div>




  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">publish</button>
    </div>
  </div>

<input type="hidden" name="art_id" value="{{ Auth::user()->id }}">
</form>
</div>







@endsection
