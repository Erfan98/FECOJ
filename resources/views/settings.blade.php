@extends('layouts.masterWithoutside')
@section('body')
    <h1>Settings</h1>
    <form action="/profile_update" method="POST" class="row g-3">
        @csrf
       <picture>
        <source id="frame" srcset="https://placehold.jp/300x300.png" type="image/svg+xml">
        <img src="image source" class="img-fluid" alt="image desc">
        </picture>
        {{-- <label for="Image" class="form-label">Bootstrap 5 image Upload with Preview</label>
        <input class="form-control" type="file" id="formFile" onchange="preview()">
        <button onclick="clearImage()" class="btn btn-primary mt-3">Click me</button> --}}



        <div class="col-md-6">
          <label for="" class="form-label">Name</label>
          <input type="text" class="form-control" id="" name="name" value="{{Auth::user()->name}}">
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Website</label>
          <input type="text" class="form-control" id="" name="website" value="{{Auth::user()->website}}">
        </div>
        <div class="col-6">
          <label for="inputAddress" class="form-label">Company</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="" value="{{Auth::user()->company}}" name="company">
        </div>
        <div class="col-6">
          <label for="inputAddress2" class="form-label">Institutions</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="" name="institution" value="{{Auth::user()->institution}}">
        </div>
        <div class="col-md-4">
          <label for="inputCity" class="form-label">Graduation Year</label>
          <select class="form-select" id="language" name="grad_year" value="{{Auth::user()->grad_year}}">
            <option selected value="{{Auth::user()->grad_year}}">{{Auth::user()->grad_year}}</option>
            @for($year=2000;$year<=2036;$year++)
            <option value='{{$year}}'>{{$year}}</option>
            @endfor
            </select>
        </div>
        <div class="col-md-4">
          <label for="inputState" class="form-label">Location</label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="" name="location" value="{{Auth::user()->location}}">
        </div>

        <div class="col-md-4">
            <label for="language">Choose Default Language:</label>
            <select class="form-select" id="language" name="default_lang">
                <option selected value="{{Auth::user()->default_lang}}">{{Auth::user()->lang_name->lang}}</option>
                @foreach ($langs as $lang)
            <option value={{$lang->id}}>{{$lang->lang}}</option>
            @endforeach
            </select>
        </div>
        {{-- <div class="col-md-6">
            <label for="inputAddress2" class="form-label">Old Password</label>
          <input type="password" class="form-control" id="inputAddress2" placeholder="">
        </div> --}}
        <div class="col-md-6">
            <label for="inputAddress2" class="form-label">New Password</label>
          <input type="password" name="password" class="form-control" id="inputAddress2" placeholder="">
        </div>


        <div class="col-12 text-center">
          <button type="submit" class="btn btn-success">Update</button>
        </div>
      </form>
@endsection

@section('script')
<script>
    function preview() {
        frame.srcset = URL.createObjectURL(event.target.files[0]);
    }
    function clearImage() {
        document.getElementById('formFile').value = null;
        frame.src = "";
    }
</script>
@endsection

