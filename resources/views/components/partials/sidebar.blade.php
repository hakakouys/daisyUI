<aside class="bg-base-100 text-base-content min-h-full w-64 p-4 border-r border-base-300">
    <div class="px-4 py-4 text-xl font-bold border-b border-base-200 mb-4 flex items-center gap-3">
        <i class="fas fa-hospital text-primary"></i>
        <span>Poliklinik</span>
    </div>
    <ul class="menu w-full gap-1">
        @auth
            @if(Auth::user()->role === 'admin')
                <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->is('admin/*') ? 'active' : '' }}">
                    <i class="fas fa-home"></i> Dashboard
                </a></li>
                <li><a href="#"><i class="fas fa-users"></i> Pengguna</a></li>
                <li><a href="#"><i class="fas fa-user-doctor"></i> Dokter</a></li>
                <li><a href="#"><i class="fas fa-user-injured"></i> Pasien</a></li>
                <li><a href="#"><i class="fas fa-cog"></i> Pengaturan</a></li>
            @elseif(Auth::user()->role === 'dokter')
                <li><a href="{{ route('dokter.dashboard') }}" class="{{ request()->is('dokter/*') ? 'active' : '' }}">
                    <i class="fas fa-home"></i> Dashboard
                </a></li>
                <li><a href="#"><i class="fas fa-calendar-check"></i> Jadwal</a></li>
                <li><a href="#"><i class="fas fa-stethoscope"></i> Pemeriksaan</a></li>
                <li><a href="#"><i class="fas fa-file-medical"></i> Rekam Medis</a></li>
            @elseif(Auth::user()->role === 'pasien')
                <li><a href="{{ route('pasien.dashboard') }}" class="{{ request()->is('pasien/*') ? 'active' : '' }}">
                    <i class="fas fa-home"></i> Dashboard
                </a></li>
                <li><a href="#"><i class="fas fa-calendar-plus"></i> Buat Janji</a></li>
                <li><a href="#"><i class="fas fa-history"></i> Riwayat</a></li>
                <li><a href="#"><i class="fas fa-file-medical-alt"></i> Rekam Medis</a></li>
            @endif
        @else
            <li><a href="/" class="active"><i class="fas fa-home"></i> Beranda</a></li>
        @endauth
    </ul>
</aside>
