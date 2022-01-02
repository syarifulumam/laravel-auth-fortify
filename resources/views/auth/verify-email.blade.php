<x-layout title="Home">
    <div class="container">
        <div class="position-absolute top-50 start-50 translate-middle">
            <h4>
                @if (session('status') == 'verification-link-sent')
                A new email verification link has been emailed to you!
                @endif
            </h4>
            <form action="/email/verification-notification" method="post">
                @csrf
                <button type="submit" class="btn btn-primary">Verifikasi E-mail</button>
            </form>
        </div>
    </div>
</x-layout>