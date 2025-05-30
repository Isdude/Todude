<style>
    body {
        font-family: 'Segoe UI', sans-serif;
        background:#fcfaf8;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
        margin: 0;
    }

    .profile-card {
        background: #fff;
        padding: 2rem;
        border-radius: 20px;
        box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        width: 100%;
        max-width: 400px;
        text-align: center;
    }

    .profile-card h2 {
        margin-bottom: 1.5rem;
        color: #620c0c;
    }

    .profile-image-container {
        position: relative;
        margin-bottom: 1.5rem;
    }

    .profile-image-container img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid #620c0c;
    }

    .profile-image-container input[type="file"] {
        display: none;
    }

    .upload-btn {
        margin-top: 0.5rem;
        display: inline-block;
        background-color: #620c0c;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 25px;
        font-size: 0.9rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .upload-btn:hover {
        background-color: #620c0c;
    }

    .form-group {
        text-align: left;
        margin-bottom: 1rem;
    }

    .form-group label {
        display: block;
        margin-bottom: 0.5rem;
        color: #620c0c;
        font-weight: bold;
    }

    .form-group input {
        width: 100%;
        padding: 0.75rem;
        border: 1px solid #ccc;
        border-radius: 10px;
        font-size: 1rem;
    }

    .save-btn {
        background-color: #620c0c;
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 30px;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
        margin-top: 1rem;
    }

    .save-btn:hover {
        background-color: #004d40;
    }
</style>

<div class="profile-card">
    <h2>Edit Profile</h2>
    <form action="{{ route('todos.update', ['user' => $user->id]) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <!-- Username Input -->
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="name" name="name" value="{{ Auth::user()->name }}"  placeholder="Enter Your Username"required>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="save-btn">Save Changes</button>
    </form>
</div>

