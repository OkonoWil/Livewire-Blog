

<div class="container container-tight py-4">
    <x-logo/>
    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>
    @endif
    @if(session('error'))
        <div class="alert alert-error">
            {{session('error')}}
        </div>
    @endif
    <form class="card card-md" wire:submit="store" autocomplete="off" novalidate>
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Réinitialiser votre mot de passe</h2>
            <p class="text-muted mb-4">Veillez entrer votre nouveau mot de passe</p>
            <div class="mb-3">
                <label class="form-label" for="password">Mot de passe</label>
                <div class="input-group input-group-flat">
                    <input type="password" class="form-control" wire:model="password" id="password"  placeholder="Mot de passe"  autocomplete="off">
                    <span class="input-group-text">
                      <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                      </a>
                    </span>
                </div>
                @error('password')
                <span class="tw-text-red-500 tw-text-sm">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="password_confirmation">Confirmer le mot de passe</label>
                <div class="input-group input-group-flat">
                    <input type="password" class="form-control" wire:model="password_confirmation" id="password_confirmation"  placeholder="Confirmer le mot de passe"  autocomplete="off">
                    <span class="input-group-text">
                      <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                      </a>
                    </span>
                </div>
                @error('password_confirmation')
                <span class="tw-text-red-400 tw-text-sm">{{$message}}</span>
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
