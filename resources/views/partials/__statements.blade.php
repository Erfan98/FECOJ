    <input type="text" value="{{Auth::user()->id}}" hidden name="author">
    <div class="mb-3">
      <label for="" class="form-label">Problem Ttile(Required)</label>
      <input required type="text" class="form-control" name="title" id="" aria-describedby="helpId" placeholder="">
    </div>
    <div class="mb-3">
      <label for="" class="form-label">Problem Body(Required)</label>
      <textarea name="statement" class="editor" type="textarea" value=""></textarea>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Sample Input</label>
        <textarea name="sample_input" class="editor" type="textarea" value=""></textarea>
      </div>

      <div class="mb-3">
        <label for="" class="form-label">Sample Output(Required)</label>
        <textarea name="sample_output" class="editor" type="textarea" value=""></textarea>
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Notes</label>
        <textarea name="notes" class="editor" type="textarea" value=""></textarea>

      </div>


  <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>





<script>
    var areas = $('.editor')
    $.each(areas, function (i,area) {
        ClassicEditor
        .create(area)
        .catch( error => {
            console.error( error );
        } );
    });

    // ClassicEditor
    //     .create( document.querySelector( '#editor' ) )
    //     .catch( error => {
    //         console.error( error );
    //     } );
</script>
