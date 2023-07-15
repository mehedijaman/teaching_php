@extends('layouts.master')
@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Email</h1>
        
        {{ Form::open(['url' => '/email/send','method' => 'POST', 'enctype' => 'multipart/form-data']) }}
          <textarea name="Content" id="editor"></textarea>
          <input type="submit" name="submit" value="Send Email">
        {{ Form::close() }}

      <script src="https://cdn.ckeditor.com/ckeditor5/33.0.0/classic/ckeditor.js"></script>
      <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>


    </main>
@endsection

