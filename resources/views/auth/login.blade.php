<x-layout>
    <div class="container">
        <form action="{{ route('login') }}" method="POST">
            @csrf
            @if (session('status'))
            <div class="mb-4 text-sm alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1"
                    name="email" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror"
                    id="exampleInputPassword1" name="password">
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-text mb-3 text-end"><a href="/forgot-password">Lupa Password?</a></div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</x-layout>