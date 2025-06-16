<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <title>
        TODUDE | Do Your List.
        </title>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href="{{ asset('logo/logo.png') }}" rel="shortcut icon">
    </head>

<body>
    <header>
        <a aria-label="Todoist homepage" class="logo-container" href="/main">
            <div aria-hidden="true" class="logo-icon">
                <img src="{{ asset('logo/logo.png') }}" alt="Logo" width="100" height="100"/>
            </div>
            <span class="logo-text">
                TODUDE
            </span>
        </a>

        <nav>
            <div aria-hidden="true" class="divider">
            </div>
            <a href="/register" style="font-weight: 400; color: white; font-weight: bold;">
                Sign In
            </a>
            <a href="/login" style="font-weight: 400; color: white; font-weight: bold;">
                Login
            </a>
            <a  href="/login" class="btn-start" type="button">
                Start for free
            </a>
        </nav>
    </header>
<main>
<section class="left-content">
    <h1 class="headline" style="color: white">
        <span id="typed-text"></span><span id="cursor">|</span>
    </h1>

    <p class="subtext" style="color: white">
        Organize Your Life With The World’s #1 Task Manager and To-Do List App.
    </p>

    <a  href="/login" class="btn-start-large" type="button">
        Start for free
    </a>

</section>

<section class="right-content">
<img src="{{ asset('img/dud.png') }}" width="720"/>
</section>

</main>

<section id="about" class="about-section">

<div class="about-content">
    <div class="about-text">
        <h1 style="color: white; font-weight: bold; font-size: 60px;">About Todude</h1>
        <p style="color: white; font-weight: bold; font-size: 20px;">
            <strong>Todude</strong> adalah sebuah web to-do list modern yang dirancang untuk membantu pengguna
            mengelola tugas harian mereka secara efisien, rapi, dan menyenangkan. Dengan antarmuka yang bersih dan
            intuitif, pengguna dapat fokus mengerjakan tugas tanpa gangguan.
        </p>
        <p style="color: white; font-weight: bold; font-size: 20px;">
            Cocok untuk pelajar, profesional, dan siapa pun yang ingin menjaga produktivitas dengan gaya yang sederhana dan elegan.
        </p>
        </div>
        <div class="about-image">
        <img src="{{ asset('img/todud.png') }}" alt="Ilustrasi Todude">
    </div>
</div>

</section>

<section id="features" class="section features">

<h2 style="color: white; font-weight: bold;">Why You Should Use TODUDE</h2>
    <div class="feature-grid">
        <div class="feature">
        <h3>Fast & Easy</h3>
        <p>Create, edit, and organize tasks with a few clicks.</p>
        </div>

        <div class="feature">
        <h3>Priority Feature</h3>
        <p>There is a priority feature, so you can organize tasks well.</p>
        </div>

        <div class="feature">
        <h3>Clean UI</h3>
        <p>Enjoy a distraction-free, modern design that keeps you focused and productive.</p>
        </div>

    </div>
</section>

<footer>
<p>&copy; 2025 Todude. All rights reserved.</p>
</footer>

</body>
</html>

<script>
const text = "Write it Down, Focus, Get it Done.";
const speed = 60; // kecepatan ketik per huruf (ms)
let i = 0;

function typeWriter() {
if (i < text.length) {
    document.getElementById("typed-text").textContent += text.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
} else {
    // Hapus cursor setelah selesai
    document.getElementById("cursor").style.display = "none";
}
}

window.onload = typeWriter;
</script>


{{-- <div aria-label="App store and Google Play reviews" class="reviews">
    <span>
    500K+ ★★★★★ reviews
    </span>
</div> --}}
