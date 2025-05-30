@extends('layouts.app')
@section('content')
<div class="card p-4" style="width: 22rem;">
    <div class="card-header">
        Login
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="form-input d-flex align-items-center gap-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 7.00005L10.2 11.65C11.2667 12.45 12.7333 12.45 13.8 11.65L20 7" stroke="#000"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <rect x="3" y="5" width="18" height="14" rx="2" stroke="#000"
                        stroke-width="2" stroke-linecap="round"></rect>
                </svg>
                <input type="text" name="email" placeholder="Enter your email" class="form-control" required>
            </div>

            @csrf

            <div class="form-input position-relative mt-3">
                <div class="d-flex align-items-center gap-2">
                    <svg width="24" height="24" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000">
                        <path d="M39,18H35V13A11,11,0,0,0,24,2H22A11,11,0,0,0,11,13v5H7a2,2,0,0,0-2,2V44a2,2,0,0,0,2,2H39a2,2,0,0,0,2-2V20A2,2,0,0,0,39,18ZM15,13a7,7,0,0,1,7-7h2a7,7,0,0,1,7,7v5H15ZM37,42H9V22H37Z"></path>
                        <circle cx="15" cy="32" r="3"></circle>
                        <circle cx="23" cy="32" r="3"></circle>
                        <circle cx="31" cy="32" r="3"></circle>
                    </svg>
                    <input type="password" name="password" id="password" placeholder="Enter your password"
                        class="form-control" required>
                    <span id="togglePassword" style="cursor: pointer;">
                        <svg id="eye" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 12s4-7 11-7 11 7 11 7-4 7-11 7S1 12 1 12z" stroke="#000" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <circle cx="12" cy="12" r="3" stroke="#000" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <svg id="eyeSlash" style="display: none;" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.94 17.94C16.11 19.25 14.13 20 12 20c-7 0-11-8-11-8a19.25 19.25 0 0 1 4.31-5.28M9.88 9.88A3 3 0 0 0 12 15c.45 0 .88-.1 1.26-.26M9.88 9.88L4.22 4.22M9.88 9.88L14.12 14.12M14.12 14.12l5.66 5.66M14.12 14.12L9.88 9.88"
                                stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </div>
            </div>

            <button type="submit" class="btn-login mt-3">Login</button>
            <div class="register-link mt-2">
                <span>Don't have an account? <a class="register-link" href="/register">Register</a></span>
            </div>
        </form>
    </div>
</div>

<script>
    const passwordInput = document.getElementById('password');
    const togglePassword = document.getElementById('togglePassword');
    const eye = document.getElementById('eye');
    const eyeSlash = document.getElementById('eyeSlash');

    togglePassword.addEventListener('click', () => {
        const isPassword = passwordInput.type === 'password';
        passwordInput.type = isPassword ? 'text' : 'password';
        eye.style.display = isPassword ? 'none' : 'inline';
        eyeSlash.style.display = isPassword ? 'inline' : 'none';
    });
</script>


@endsection
