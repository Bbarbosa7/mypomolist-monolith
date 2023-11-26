<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Pomolist</title>
    <link rel="shortcut icon" href="build/assets/mypomolist.png" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="build/assets/home-b851e034.css" />
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8160286030075996"
            crossorigin="anonymous"></script>

</head>

<body>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Main content -->
<div class="container center">
    <div class="title">
        <h2>🍅<strong> My Pomolist </strong>🍅</h2>
        <br>
    </div>
    <div class="settings">
        <div class="break">
            <div class="description">⏱️ <br/>Break</div>
            <div class="value">
                <span class="control decrement-pause">-</span> <span class="v">5</span> <span
                    class="control increment-pause">+</span>
            </div>
        </div>
        <div class="session">
            <div class="description">⏱️ <br/>Pomodoro</div>
            <div class="value">
                <span class="control decrement-pomo">-</span> <span class="v">25</span> <span
                    class="control increment-pomo">+</span>
            </div>
        </div>
    </div>
    <div class="pomodoro">
        <div class="fill session"></div>
        <div class="fill break"></div>
        <div class="time-left"></div>
        <div class="status">Start</div>
    </div>
    <div class="next-pomodoro">
        <span>Next</span>
    </div>
    <div class="reset-pomodoro">
        <span>Reset</span>
    </div>
</div>
<div class="container todo-list">
    <h2 class="todo-text">📝<strong> To-Do List </strong>📝</h2>
    <input type="text" id="newTask" class="form-control" placeholder="New task">
    <br/>
    <button type="button" id="addTask" class="btn btn-success mt-2">Add task</button>
    <ul id="taskList" class="list-group mt-3"></ul>
</div>

<!-- Footer -->
<div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-2 border-top">
        <p class="col-md-4 mb-0 text-body-secondary footer-text">
            &copy; <a href="https://github.com/Bbarbosa7" target="_blank">Bbarbosa7</a>
        </p>

        <ul class="nav col-md-4 justify-content-end">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary footer-text">Home</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary footer-text">Features</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary footer-text">Pricing</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary footer-text">About</a></li>
        </ul>
    </footer>
</div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
<script type="text/javascript" src="build/assets/home-c21e1a32.js"></script>

</html>
