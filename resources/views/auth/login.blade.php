<x-guest-layout>
  <h4 class="mb-2">Welcome Back 👋</h4>
  <p class="mb-4">Please sign-in to your account</p>

  <x-auth-session-status class="mb-3" :status="session('status')" />

  <form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="email" name="email" class="form-control" required autofocus>
    </div>

    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>

    <div class="mb-3">
      <button class="btn btn-primary d-grid w-100">Login</button>
    </div>
  </form>

  <p class="text-center">
    <span>New here?</span>
    <a href="{{ route('register') }}">Create an account</a>
  </p>
</x-guest-layout>
