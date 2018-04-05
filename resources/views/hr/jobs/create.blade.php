@extends('layouts.dashboard.master')
@section('content')
<div class="panel panel-default">
  <div class="panel-body">
    <div class="well">
      <h1>Crate a Job Post</h1>
    </div>
    <form action="{{url('/job-board')}}" method="post">
      {{csrf_field()}}

      <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        <label for="title" class="control-label">Job Title</label>
        <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" >
        @if ($errors->has('title'))
            <span class="help-block">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
        <label for="location" class="control-label">Job Location</label>
        <input id="location" type="text" class="form-control" name="location" value="{{ old('location') }}" >
        @if ($errors->has('location'))
            <span class="help-block">
                <strong>{{ $errors->first('location') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('vacancy') ? ' has-error' : '' }}">
        <label for="vacancy" class="control-label">Job vacancy</label>
        <input id="vacancy" type="text" class="form-control" name="vacancy" value="{{ old('vacancy') }}" >
        @if ($errors->has('vacancy'))
            <span class="help-block">
                <strong>{{ $errors->first('vacancy') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('experience') ? ' has-error' : '' }}">
        <label for="experience" class="control-label">Required Experience</label>
        <input id="experience" type="text" class="form-control" name="experience" value="{{ old('experience') }}" >
        @if ($errors->has('experience'))
            <span class="help-block">
                <strong>{{ $errors->first('experience') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group">
          <label for="job_status">Job Status</label>
          <select name="job_status" class="form-control">
            <option value="published">Published</option>
            <option value="draft">Draft</option>
          </select>
      </div>
      <div class="form-group{{ $errors->has('experience') ? ' has-error' : '' }}">
          <label for="deadline">Deadline</label>
          <div class="input-group date" data-provide="datepicker" data-date-format="yyyy/mm/dd" >
            <input name="deadline" type="text" class="form-control">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
          </div>
          @if ($errors->has('deadline'))
              <span class="help-block">
                  <strong>{{ $errors->first('deadline') }}</strong>
              </span>
          @endif
      </div>


      <div class="form-group">
          <label for="short_description">Job Key Description</label>
          <textarea name="short_description" id="short_description" class="form-control">{{old('short_description')}}</textarea>
      </div>

      <div class="form-group{{ $errors->has('experience') ? ' has-error' : '' }}">
          <label for="description">Description</label>
          <textarea name="description" id="description" class="form-control">{{old('description')}}</textarea>
          @if ($errors->has('description'))
              <span class="help-block">
                  <strong>{{ $errors->first('description') }}</strong>
              </span>
          @endif
      </div>

      <div class="form-group">
          <label for="keywords">Required Skills for the job (comma separated)</label>
          <input type="text" name="keywords" class="form-control" id="keywords" placeholder="php, asp, management, programming">
      </div>

      <div class="form-group">
        <input type="submit" class="btn btn-primary">
      </div>


    </form>
  </div>
</div>
@endsection
@section('footer_script')
<script>
    var editor_config = {
    path_absolute : "{{ url('/') }}/",
    selector: "#description",
    height: 300,
    plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern codesample"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | codesample | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

      var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      tinyMCE.activeEditor.windowManager.open({
        file : cmsURL,
        title : 'Filemanager',
        width : x * 0.8,
        height : y * 1,
        resizable : "yes",
        close_previous : "no"
      });
    }
  };

  tinymce.init(editor_config);
        </script>
@endsection
