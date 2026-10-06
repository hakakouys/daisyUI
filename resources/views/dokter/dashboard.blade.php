<x-layouts.app title="Dokter Dashboard">
    <div class="space-y-6">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold">Dashboard Dokter</h1>
            <span class="badge badge-secondary">Dokter</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="stats bg-base-100 shadow">
                <div class="stat">
                    <div class="stat-figure text-primary">
                        <i class="fas fa-user-injured text-3xl"></i>
                    </div>
                    <div class="stat-title">Pasien Hari Ini</div>
                    <div class="stat-value text-primary">0</div>
                    <div class="stat-desc">Total</div>
                </div>
            </div>

            <div class="stats bg-base-100 shadow">
                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <i class="fas fa-clock text-3xl"></i>
                    </div>
                    <div class="stat-title">Menunggu</div>
                    <div class="stat-value text-secondary">0</div>
                    <div class="stat-desc">Antrian</div>
                </div>
            </div>

            <div class="stats bg-base-100 shadow">
                <div class="stat">
                    <div class="stat-figure text-accent">
                        <i class="fas fa-check-circle text-3xl"></i>
                    </div>
                    <div class="stat-title">Selesai</div>
                    <div class="stat-value text-accent">0</div>
                    <div class="stat-desc">Hari ini</div>
                </div>
            </div>
        </div>

        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Selamat Datang, Dokter!</h2>
                <p>Silakan kelola jadwal dan pemeriksaan pasien Anda.</p>
            </div>
        </div>
    </div>
</x-layouts.app>
