@if (isset($errors) AND $errors->has($field))
  @foreach($errors->get($field) as $msg)
    <p class="help-block">{{ $msg }}</p>
  @endforeach
@endif
