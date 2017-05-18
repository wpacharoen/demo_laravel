<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    {{-- <a href="{{url('tasks/create')}}">+ add new task</a> --}}
    @foreach($tasks as $task)
      <ul>
        <li>
          {{ $task->created_at }}
          <a href="tasks/{{$task->id}}">{{ $task->content }}</a>
          [<a href="tasks/{{$task->id}}/edit">edit</a>]

          <form class="" action="{{url('tasks/'.$task->id)}}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit">DELETE</button>
          </form>
        </li>
      </ul>
    @endforeach
    <form class="" action="{{url('tasks')}}" method="post">
      {{ csrf_field() }}
      <input type="text" name="newtask" value="">
      <button type="submit">add</button>
    </form>
  </body>
</html>
