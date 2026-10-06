<x-layouts.guest title="Login">

    <div class="card bg-base-100 shadow-2xl rounded-2xl w-full max-w-[420px] mx-auto">
        <div class="card-body p-8">

            {{-- Logo & Title --}}
            <div class="text-center mb-6">
                <img src="{{ asset('images/logo-bengkot.png') }}"
                    class="w-[60px] h-[60px] rounded-[16px] object-cover mx-auto mb-3 block">

                <h1 class="text-2xl font-extrabold text-[#1e2d6b] m-0 mb-1">
                    Poliklinik
                </h1>

                <p class="text-sm text-slate-400 m-0">
                    Masuk ke akun Anda
                </p>
            </div>

            {{-- Error Alert --}}
            @if ($errors->any())
            <div class="alert alert-error mb-5 rounded-xl text-sm py-2 px-4 flex items-center gap-2">
                <i class="fas fa-circle-xmark"></i>
                <span>{{ $errors->first() }}</span>
            </div>
            @endif

            <form action="{{ route('login') }}" method="POST">
                @csrf

                {{-- Email --}}
                <div class="form-control mb-4">
                    <label class="label pb-1">
                        <span class="text-xs font-semibold text-gray-700">
                            Email
                        </span>
                    </label>

                    <label class="input input-bordered flex items-center gap-3 rounded-xl border-slate-200 bg-slate-50 focus-within:border-indigo-500">
                        <i class="fas fa-envelope text-slate-400 text-xs"></i>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email..."
                            class="grow bg-transparent text-slate-800 text-sm focus:outline-none" required />
                    </label>
                </div>

                {{-- Password --}}
                <div class="form-control mb-6">
                    <label class="label pb-1">
                        <span class="text-xs font-semibold text-gray-700">
                            Password
                        </span>
                    </label>

                    <label class="input input-bordered flex items-center gap-3 rounded-xl border-slate-200 bg-slate-50 focus-within:border-indigo-500">
                        <i class="fas fa-lock text-slate-400 text-xs"></i>
                        <input type="password" name="password" id="password_login" placeholder="Masukkan password..."
                            class="grow bg-transparent text-slate-800 text-sm focus:outline-none" required />
                        <i class="fas fa-eye text-slate-400 text-xs cursor-pointer hover:text-slate-600" id="toggle_login"
                            onclick="togglePassword('password_login', 'toggle_login')"></i>
                    </label>
                </div>

                {{-- Submit Button --}}
<button type="submit" class="btn w-full !bg-[#1e2d6b] hover:!bg-[#162252] !text-white font-bold border-none rounded-xl shadow-md flex items-center justify-center gap-2 text-base">
    <i class="fas fa-right-to-bracket"></i>
    <span>Login</span>
</button>

            {{-- Register --}}
            <p class="text-center mt-6 text-xs text-slate-400">
                Belum punya akun?
                <a href="{{ route('register') }}" class="text-[#2d4499] font-bold hover:underline">
                    Register
                </a>
            </p>

        </div>
    </div>

    @push('scripts')
    <script>
        function togglePassword(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon  = document.getElementById(iconId);

            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }
    </script>
    @endpush

</x-layouts.guest>