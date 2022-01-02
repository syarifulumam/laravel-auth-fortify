<x-layout>
    <div class="container">
        @if (session('status'))
        <div class="mb-4 text-sm alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <form action="{{ route('user-profile-information.update') }}" method="POST">
            @csrf
            @method("PUT")
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name','updateProfileInformation') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name', Auth::user()->name) }}">
                    {{-- parameter ke 2 dari validateWithBag di app/action/fortify/UpdateUserProfileInformation--}}
                @error('name','updateProfileInformation') 
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control @error('email','updateProfileInformation') is-invalid @enderror" id="exampleInputEmail1"
                    name="email" value="{{ old('email', Auth::user()->email) }}">
                @error('email','updateProfileInformation')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</x-layout>