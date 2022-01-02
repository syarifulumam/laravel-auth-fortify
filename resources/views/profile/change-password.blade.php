<x-layout>
    <div class="container">
        @if (session('status'))
        <div class="mb-4 text-sm alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('user-password.update') }}" method="POST">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="name" class="form-label">Password Lama</label>
                <input type="password" class="form-control @error('current_password','updatePassword') is-invalid @enderror" id="name" name="current_password">
                    {{-- parameter ke 2 dari validateWithBag di app/action/fortify/UpdateUserProfileInformation--}}
                @error('current_password','updatePassword') 
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password Baru</label>
                <input type="password" class="form-control @error('password','updatePassword') is-invalid @enderror" id="exampleInputEmail1"
                    name="password">
                @error('password','updatePassword')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password Baru</label>
                <input type="password" class="form-control" id="exampleInputEmail1"
                    name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</x-layout>