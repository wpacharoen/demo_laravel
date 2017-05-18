<form class="" action="{{url('tasks')}}" method="post">
  {{ csrf_field() }}
  <input type="text" name="newtask" value="">
  <button type="submit">add</button>
</form>
