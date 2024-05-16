<div class="container container-tight py-4">
    <div class="text-center mb-4">
        <x-logo />
    </div>
    <form class="card card-md" wire:submit="save" autocomplete="off" novalidate>
        <div class="card-body">
            <h2 class="card-title text-center mb-4">S'inscrire</h2>
            <div class="mb-3">
                <label class="form-label" for="name">Nom</label>
                <input type="text" class="form-control" wire:model.live="form.name" id="name" placeholder="Nom">
                @error('form.name')
                    <span class="tw-text-red-500 tw-text-sm">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input type="email" class="form-control" wire:model.blur="form.email" id="email" placeholder="Email">
                @error('form.email')
                    <span class="tw-text-red-500 tw-text-sm">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="password">Mot de passe</label>
                <div class="input-group input-group-flat">
                    <input type="password" class="form-control" wire:model="form.password" id="password"  placeholder="Mot de passe"  autocomplete="off">
                    <span class="input-group-text">
                      <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                      </a>
                    </span>
                </div>
                @error('form.password')
                    <span class="tw-text-red-500 tw-text-sm">{{$message}}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label" for="password_confirmation">Confirmer le mot de passe</label>
                <div class="input-group input-group-flat">
                    <input type="password" class="form-control" wire:model="form.password_confirmation" id="password_confirmation"  placeholder="Confirmer le mot de passe"  autocomplete="off">
                    <span class="input-group-text">
                      <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                      </a>
                    </span>
                </div>
                @error('form.password_confirmation')
                    <span class="tw-text-red-400 tw-text-sm">{{$message}}</span>
                @enderror
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">Inscription</button>
            </div>
        </div>
    </form>
    <div class="text-center text-muted mt-3">
        Avez-vous déjà un compte? <a href="{{route('login')}}" tabindex="-1">Se connecter</a>
    </div>
</div>
