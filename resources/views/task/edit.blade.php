<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    {{-- <form class="" action="{{url('tasks/'.$task->id)}}" method="post"> --}}
    <form class="" action="{{url('tasks/'.$task->id)}}" method="post">
      {{method_field('PUT')}}
      {{csrf_field()}}
      <input type="text" name="content" value="{{ $task->content}}">
      <button type="submit">update</button>
    </form>
  </body>
</html>
