<html>
<head>
    <title>To-do List Application</title>
    <link rel="stylesheet" href="assets/css/style/css">
    <!--[if lt IE 9]>
        <script src"//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
        <section id="data_section" class="todo">
            <ul class="todo-controls">
                <li><img src="/assets/img/add.png" width="14px" onclick="show_form('add_task');"></li>
            </ul>
                <ul id="task_list" class="todo_list">
                    @foreach($todos as $todo)
                        @if($todo->status)
                            <li id="{{ $todo->id }}" class="done">
                                <a href="#" class="toggle"></a>
                                <span id="span_{{$todo->id}}">
                                    {{$todo->title}}
                                </span>
                                <a href="#" onclick="delete_task('{{$todo->id}}');" class="icon-delete">Delete</a>
                                <a href="#" onclick="edit_task('{{$todo->id}}', '{{$todo->title}}');" class="icon-edit">Edit</a>
                            </li>
                        @else
                            <li id="{{$todo->id}}">
                                <a href="#" onclick="task_done('{{$task->id}}');" class="toggle"></a>
                                <span id="span_{{$todo->id}}">
                                    {{$todo->title}}
                                </span>
                                <a href="#" onclick="delete_task('{{$todo->id}}');" class="icon-delete">Delete</a>
                                <a href="#" onclick="edit_task('{{$todo->id}}', '{{$todo->title}}');" class="icon-edit">Edit</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
        </section>
        <section id="form_section">
            <form id="add_task" class="todo" style="display: none">
                <input id="edit_task_id" type="hidden" value="">
                <input id="edit_task_title" type="text" name="title" value="">
                <button name="submit">Edit Task</button>
            </form>
        </section>
    </div>
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="assets/js/todo.js" type="text/javascript"></script>
</body>
</html>