@extends('dashboard')
@section('content-blog')
<p>Silahkan tulis artikel WeBlog di form dibawah ini!</p>
<form action="/article/add" method="post">
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Judul Post</label>
            <input name="title" type="text" class="form-control" placeholder="Judul Post" id="name" required data-validation-required-message="Please enter your name.">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Isi</label>
            <textarea name="content" rows="5" class="form-control" placeholder="Isi" id="message" required data-validation-required-message="Please enter a message."></textarea>
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <br>
    <div id="success"></div>
    <div class="row">
        <div class="form-group col-xs-12">
           <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
            <input type="submit" class="btn btn-default" value="SIMPAN KIRIMAN"/>
        </div>
    </div>
</form>
@endsection
