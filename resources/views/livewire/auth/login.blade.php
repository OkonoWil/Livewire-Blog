<div class="container container-tight py-4">
    <div class="text-center mb-4">
        <a href="/" class="navbar-brand navbar-brand-autodark"><img src="{{Vite::asset('resources/static/logo.svg')}}" class="tw-h-32 tw-w-60" alt="Logo"></a>
    </div>
    <div class="card tw-min-w-max">
        <div class="card-body">
            <h2 class="h2 text-center mb-4">Se connecter à votre compte</h2>
            <form wire:submit="login" autocomplete="off" novalidate>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" wire:model="form.email" class="form-control" placeholder="your@email.com" autocomplete="off">
                    @error('form.email')
                        <span class="tw-text-red-500 tw-text-sm">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="form-label">
                        Mot de passe
                        <span class="form-label-description">
                            <a href="./forgot-password.html">Mot de passe oubliez</a>
                        </span>
                    </label>
                    <div class="input-group input-group-flat">
                        <input type="password" class="form-control" wire:model="form.password"  placeholder="Mot de passe"  autocomplete="off">
                        <span class="input-group-text">
                            <a href="#" class="link-secondary" title="Afficher le mot de passe" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                            </a>
                        </span>
                    </div>
                    @error('form.password')
                        <span class="tw-text-red-500 tw-text-sm">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-2">
                    <label class="form-check">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="form-check-label">Se souvenir de moi sur cet appareil</span>
                    </label>
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Se connecter</button>
                </div>
            </form>
        </div>
        <div class="hr-text">ou</div>
        <div class="card-body tw-min-w-max">
            <div class="row">
                <div class="col"><a href="#" class="btn tw-min-w-max">
                        <!-- Download SVG icon from http://tabler-icons.io/i/brand-github -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-github" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5" /></svg>
                        Se connecter avec Github
                    </a></div>
                <div class="col"><a href="#" class="btn tw-min-w-max">
                        <!-- Download SVG icon from http://tabler-icons.io/i/brand-twitter -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon text-twitter" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M22 4.01c-1 .49 -1.98 .689 -3 .99c-1.121 -1.265 -2.783 -1.335 -4.38 -.737s-2.643 2.06 -2.62 3.737v1c-3.245 .083 -6.135 -1.395 -8 -4c0 0 -4.182 7.433 4 11c-1.872 1.247 -3.739 2.088 -6 2c3.308 1.803 6.913 2.423 10.034 1.517c3.58 -1.04 6.522 -3.723 7.651 -7.742a13.84 13.84 0 0 0 .497 -3.753c0 -.249 1.51 -2.772 1.818 -4.013z" /></svg>
                        Se connecter avec Twitter
                    </a></div>
            </div>
        </div>
    </div>
    <div class="text-center text-muted mt-3">
        Vous n'avez pas de compte? <a href="{{route('register')}}" tabindex="-1">S'inscrire</a>
    </div>
</div>