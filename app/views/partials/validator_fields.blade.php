@if (isset($errors) AND count($errors))
  <ul>
    @foreach($errors->all() as $msg)
      <li>{{ $msg }}</li>
    @endforeach
  </ul>
@endif
