<x-guest-layout>
    <x-slot name="title">
        Login
    </x-slot>

    <div class="container-fluid min-vh-100 d-flex justify-content-center align-items-center">
        <div class="row shadow rounded-4 overflow-hidden w-100" style="max-width: 900px;">
            <!-- Left Side -->
            <div class="col-md-6 d-none d-md-flex bg-primary align-items-center justify-content-center">
                <img src="{{ asset('/dist/img/logo/logo.png') }}" alt="Logo" class="img-fluid p-4 mt-5" style="max-width: 350px;">
            </div>

            <!-- Right Side -->
            <div class="col-md-6 bg-white d-flex align-items-center justify-content-center p-4">
                <div class="w-100" style="max-width: 350px;">
                    {{-- Alert jika ada error --}}
                    <x-alert-error />

                    <h2 class="text-center mb-3 fw-bold">Login</h2>
                    <p class="text-center text-muted mb-4">Masuk ke akun Anda</p>

                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        <!-- Username -->
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" name="username" id="username" class="form-control" required>
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control" required>
                        </div>

                        <!-- Button -->
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>

                    <p class="text-center mt-4 small text-muted">
                        Belum punya akun?
                        <a href="{{ route('register') }}" class="text-decoration-none">Daftar di sini</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
