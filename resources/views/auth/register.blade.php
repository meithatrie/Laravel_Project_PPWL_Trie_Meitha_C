<x-guest-layout>
  <h4 class="mb-2">Create Account 🚀</h4>
  <p class="mb-4">Fill the form to register</p>

  <form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" name="password" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Confirm Password</label>
      <input type="password" name="password_confirmation" class="form-control" required>
    </div>

    <button class="btn btn-primary d-grid w-100">Register</button>
  </form>

  <p class="text-center mt-3">
    <span>Already have an account?</span>
    <a href="{{ route('login') }}">Login</a>
  </p>
</x-guest-layout>

