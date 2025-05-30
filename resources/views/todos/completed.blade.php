<!DOCTYPE html>
<html>
<head>
    <title>Todo List | Do Your List</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link href="{{ asset('logo/logo.png') }}" rel="shortcut icon">

</head>
<body>
    <h1>Completed</h1>
    <div class="container" role="main">
        <nav aria-label="Sidebar navigation" class="sidebar">
         <div class="sidebar-nav">
            <a class="user-info" onclick="document.getElementById('id01').style.display='block'">
                <div class="user-details">
                    <h5 class="user-name">{{ Auth::user()->name }}</h5>
                    <p class="user-email">{{ Auth::user()->email }}</p>
                </div>
            </a>

<div id="id01" class="modal">
        <form class="modal-content animate" action="/action_page.php" method="post">
        <div class="imgcontainer">
        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>        </div>

        <div class="user-edit">
        <label for="uname"><b>Username</b></label>
        <input type="text" value="{{ Auth::user()->name }}" name="uname" required>

        <div class="action-buttons">
        <a href="{{ route('todos.edit', ['user' => Auth::user()->id]) }}" class="btn-edit">Edit</a>
        <a class="cancelbtn" onclick="document.getElementById('id01').style.display='none'">Cancel</a>
        </div>
    </div>
</form>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
modal.style.display = "none";
}
}
</script>
          <a href="{{ route('todos.create') }}">
           <button aria-label="Add Task" role="listitem">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M6 12H18M12 6V18" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            Add New Task
           </button></a>
          <a href="{{ route('todos.index') }}" class="notification"><button aria-label="Completed" role="listitem">           <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M3 12H7.26393C8.02148 12 8.714 12.428 9.05279 13.1056L9.44721 13.8944C9.786 14.572 10.4785 15 11.2361 15H12.9296C13.5983 15 14.2228 14.6658 14.5937 14.1094L15.4063 12.8906C15.7772 12.3342 16.4017 12 17.0704 12H21M3 12V18C3 19.1046 3.89543 20 5 20H19C20.1046 20 21 19.1046 21 18V12M3 12L5.51334 5.29775C5.80607 4.51715 6.55231 4 7.386 4H16.614C17.4477 4 18.1939 4.51715 18.4867 5.29775L21 12" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
            Inbox
          </button><span class="badge">{{ $inbox->count() }}</span></a>
          <a href="{{ route('completed.index') }}"><button aria-label="Completed" role="listitem">
            <svg viewBox="0 0 1024 1024" fill="#000000" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M824.8 1003.2H203.2c-12.8 0-25.6-2.4-37.6-7.2-11.2-4.8-21.6-12-30.4-20.8-8.8-8.8-16-19.2-20.8-30.4-4.8-12-7.2-24-7.2-37.6V260c0-12.8 2.4-25.6 7.2-37.6 4.8-11.2 12-21.6 20.8-30.4 8.8-8.8 19.2-16 30.4-20.8 12-4.8 24-7.2 37.6-7.2h94.4v48H203.2c-26.4 0-48 21.6-48 48v647.2c0 26.4 21.6 48 48 48h621.6c26.4 0 48-21.6 48-48V260c0-26.4-21.6-48-48-48H730.4v-48H824c12.8 0 25.6 2.4 37.6 7.2 11.2 4.8 21.6 12 30.4 20.8 8.8 8.8 16 19.2 20.8 30.4 4.8 12 7.2 24 7.2 37.6v647.2c0 12.8-2.4 25.6-7.2 37.6-4.8 11.2-12 21.6-20.8 30.4-8.8 8.8-19.2 16-30.4 20.8-11.2 4.8-24 7.2-36.8 7.2z" fill=""></path><path d="M752.8 308H274.4V152.8c0-32.8 26.4-60 60-60h61.6c22.4-44 67.2-72.8 117.6-72.8 50.4 0 95.2 28.8 117.6 72.8h61.6c32.8 0 60 26.4 60 60v155.2m-430.4-48h382.4V152.8c0-6.4-5.6-12-12-12H598.4l-5.6-16c-12-33.6-43.2-56-79.2-56s-67.2 22.4-79.2 56l-5.6 16H334.4c-6.4 0-12 5.6-12 12v107.2zM432.8 792c-6.4 0-12-2.4-16.8-7.2L252.8 621.6c-4.8-4.8-7.2-10.4-7.2-16.8s2.4-12 7.2-16.8c4.8-4.8 10.4-7.2 16.8-7.2s12 2.4 16.8 7.2L418.4 720c4 4 8.8 5.6 13.6 5.6s10.4-1.6 13.6-5.6l295.2-295.2c4.8-4.8 10.4-7.2 16.8-7.2s12 2.4 16.8 7.2c9.6 9.6 9.6 24 0 33.6L449.6 784.8c-4.8 4-11.2 7.2-16.8 7.2z" fill=""></path></g></svg>
           Completed
          </button></a>

          <form class="logout" action="{{ route('logout') }}" method="post">
            @csrf
            <svg class="icon-logout" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M14 4L17.5 4C20.5577 4 20.5 8 20.5 12C20.5 16 20.5577 20 17.5 20H14M3 12L15 12M3 12L7 8M3 12L7 16" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
         <button type="submit" class="btn btn-danger">Logout</button>
        </form>
         </div>
        </nav>
    </div>
    <div class="todo-container">
    <ul class="todo-list-completed">
        @foreach ($todos as $todo)
            <li>
                {{ $todo->task }}
                {{ $todo->date }}
            </li>
        @endforeach
    </ul>
</body>
</html>
