

<div class="container container-tight py-4">
    <div class="text-center mb-4">
        <x-logo />
    </div>
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
    @endif
    <form class="card card-md" wire:submit="store" autocomplete="off" novalidate>
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Mot de passe oublier</h2>
            <p class="text-muted mb-4">Réinitialiser votre mot de passe</p>
            <div class="mb-3">
                <label class="form-label">Email </label>
                <input type="email" class="form-control" placeholder="Email" wire:model="email">
                @error('email')
                    <span class="tw-text-red-500 tw-text-sm">{{$message}}</span>
                @enderror
            </div>
            <div class="form-footer">
                <button class="btn btn-primary w-100" type="submit">
                    <!-- Download SVG icon from http://tabler-icons.io/i/mail -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z" /><path d="M3 7l9 6l9 -6" /></svg>
                    Envoyer
                </button>
            </div>
        </div>
    </form>
    <div class="text-center text-muted mt-3">
        Forget it, <a href="{{route('login')}}">send me back</a> to the sign in screen.
    </div>
</div>
