<x-layouts.app title="Pasien Dashboard">
    <div class="space-y-6">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold">Dashboard Pasien</h1>
            <span class="badge badge-accent">Pasien</span>
        </div>

        <div class="card bg-base-100 shadow-xl bg-gradient-to-r from-blue-50 to-indigo-50">
            <div class="card-body">
                <h2 class="card-title">No. Rekam Medis</h2>
                <p class="text-3xl font-bold text-primary">{{ Auth::user()->no_rm ?? 'Belum ada' }}</p>
                <div class="divider"></div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <p class="text-sm text-gray-500">Nama</p>
                        <p class="font-semibold">{{ Auth::user()->nama ?? Auth::user()->name }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Email</p>
                        <p class="font-semibold">{{ Auth::user()->email }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">No. HP</p>
                        <p class="font-semibold">{{ Auth::user()->no_hp ?? '-' }}</p>
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Alamat</p>
                        <p class="font-semibold">{{ Auth::user()->alamat ?? '-' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="stats bg-base-100 shadow">
                <div class="stat">
                    <div class="stat-figure text-primary">
                        <i class="fas fa-calendar-plus text-3xl"></i>
                    </div>
                    <div class="stat-title">Janji Temu</div>
                    <div class="stat-value text-primary">0</div>
                    <div class="stat-desc">Akan datang</div>
                </div>
            </div>

            <div class="stats bg-base-100 shadow">
                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <i class="fas fa-history text-3xl"></i>
                    </div>
                    <div class="stat-title">Riwayat</div>
                    <div class="stat-value text-secondary">0</div>
                    <div class="stat-desc">Kunjungan</div>
                </div>
            </div>
        </div>

        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Selamat Datang!</h2>
                <p>Silakan buat janji temu atau lihat riwayat kunjungan Anda.</p>
                <div class="card-actions justify-end mt-4">
                    <button class="btn btn-primary">
                        <i class="fas fa-calendar-plus"></i> Buat Janji
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
