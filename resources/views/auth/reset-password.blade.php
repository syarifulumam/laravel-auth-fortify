<x-layout>
    <div class="container">
        <form action="/reset-password" method="POST">
            @csrf
            <input type="hidden" name="token" value="{{ request()->route('token') }}">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" name="email" value="{{ old('email', request()->email) }}" readonly>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">New Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password">
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="passwordVerify" class="form-label">Password Verify</label>
                <input type="password" class="form-control" id="passwordVerify" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary">Update Password</button>
        </form>
    </div>
</x-layout>