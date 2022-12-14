@extends('layouts.masterWithoutside')

@section('body')
<form action="/contest/create" method="post">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Openness</label>
        <select class="form-select form-select-lg" name="" id="">
            <option selected>Select one</option>
            <option value="">Public</option>
            <option value="">Private</option>
            <option value="">Protected</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Title</label>
        <input name="title" type="text"
          class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
      </div>

    <div class="mb-3">
      <label for="" class="form-label">Begin Time</label>
      <input name="begin_time" type="text"
        class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Length</label>
        <input name="length" type="text"
          class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Announcement</label>
      <textarea name="announcement" class="form-control" name="" id="" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Description</label>
        <textarea name="description" class="form-control" name="" id="" rows="3"></textarea>
    </div>

    <div class="mb-3">
      <label for="" class="form-label">Choose Problems</label>
      <select name="problems[]" multiple class="form-select form-select-lg" id="">
            <option selected>Select one</option>
            @foreach ($problems as $problem)
                <option value="{{$problem->id}}">{{$problem->title}}</option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
