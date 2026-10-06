<x-layouts.app title="Admin Dashboard">
    <div class="space-y-6">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold">Dashboard Admin</h1>
            <span class="badge badge-primary">Admin</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            <div class="stats bg-base-100 shadow">
                <div class="stat">
                    <div class="stat-figure text-primary">
                        <i class="fas fa-users text-3xl"></i>
                    </div>
                    <div class="stat-title">Total Pasien</div>
                    <div class="stat-value text-primary">0</div>
                    <div class="stat-desc">Jan 1 - Oct 6</div>
                </div>
            </div>

            <div class="stats bg-base-100 shadow">
                <div class="stat">
                    <div class="stat-figure text-secondary">
                        <i class="fas fa-user-doctor text-3xl"></i>
                    </div>
                    <div class="stat-title">Total Dokter</div>
                    <div class="stat-value text-secondary">0</div>
                    <div class="stat-desc">Aktif</div>
                </div>
            </div>

            <div class="stats bg-base-100 shadow">
                <div class="stat">
                    <div class="stat-figure text-accent">
                        <i class="fas fa-calendar-check text-3xl"></i>
                    </div>
                    <div class="stat-title">Janji Temu</div>
                    <div class="stat-value text-accent">0</div>
                    <div class="stat-desc">Hari ini</div>
                </div>
            </div>

            <div class="stats bg-base-100 shadow">
                <div class="stat">
                    <div class="stat-figure">
                        <i class="fas fa-dollar-sign text-3xl"></i>
                    </div>
                    <div class="stat-title">Pendapatan</div>
                    <div class="stat-value">0</div>
                    <div class="stat-desc">Bulan ini</div>
                </div>
            </div>
        </div>

        <div class="card bg-base-100 shadow-xl">
            <div class="card-body">
                <h2 class="card-title">Selamat Datang, Admin!</h2>
                <p>Selamat bekerja mengelola sistem poliklinik.</p>
            </div>
        </div>
    </div>
</x-layouts.app>
