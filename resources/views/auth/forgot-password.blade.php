<x-layout>
    <div class="container">
        @if (session('status'))
        <div class="mb-4 text-sm alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <form action="/forgot-password" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1"
                    name="email" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Reset Password</button>
        </form>
    </div>
</x-layout>