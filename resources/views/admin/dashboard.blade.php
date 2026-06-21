<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>PointWaste - System Configuration</title>
<script src="https://cdn.tailwindcss.com?plugins=forms"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" />
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          primary: '#166534',
          'primary-dark': '#14532d',
          'primary-light': '#16a34a',
          'primary-soft': '#ecfdf3',
          'surface': '#f7faf8',
          'success-bg': '#dcfce7',
          'success-text': '#15803d',
        },
        fontFamily: {
          sans: ['Inter', 'sans-serif'],
        },
        borderRadius: {
          xl: '0.85rem',
        }
      }
    }
  }
</script>
<style>
  body { font-family: 'Inter', sans-serif; }
  .material-symbols-outlined {
    font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
    font-size: 20px;
  }
  .active-nav .material-symbols-outlined { font-variation-settings: 'FILL' 1; }
  ::-webkit-scrollbar { width: 6px; height: 6px; }
  ::-webkit-scrollbar-thumb { background: #d1d5db; border-radius: 4px; }
</style>
</head>

<body class="text-on-surface">
    <!-- SideNavBar Shell -->
    <aside class="w-sidebar-width h-screen fixed left-0 top-0 bg-surface-container-lowest border-r border-outline-variant flex flex-col p-md z-50">
        <div class="mb-xl px-sm">
            <h1 class="font-headline-md text-headline-md font-bold text-primary">PointWaste</h1>
            <p class="font-label-md text-label-md text-on-surface-variant">System Administrator</p>
        </div>
        <nav class="flex-1 space-y-sm overflow-y-auto">
            <!-- Dashboard (Active) -->
            <a class="flex items-center gap-md p-md bg-secondary-container text-primary rounded-xl font-bold transition-transform active:scale-95" href="#">
                <span class="material-symbols-outlined active-nav-item" data-icon="dashboard">dashboard</span>
                <span class="font-body-md text-body-md">Dashboard</span>
            </a>
            <a class="flex items-center gap-md p-md text-on-surface-variant hover:bg-surface-container rounded-xl transition-colors" href="#">
                <span class="material-symbols-outlined" data-icon="group">group</span>
                <span class="font-body-md text-body-md">User Management</span>
            </a>
            <a class="flex items-center gap-md p-md text-on-surface-variant hover:bg-surface-container rounded-xl transition-colors" href="#">
                <span class="material-symbols-outlined" data-icon="category">category</span>
                <span class="font-body-md text-body-md">Waste Categories</span>
            </a>
            <a class="flex items-center gap-md p-md text-on-surface-variant hover:bg-surface-container rounded-xl transition-colors" href="#">
                <span class="material-symbols-outlined" data-icon="monitoring">monitoring</span>
                <span class="font-body-md text-body-md">System Monitoring</span>
            </a>
            <a class="flex items-center gap-md p-md text-on-surface-variant hover:bg-surface-container rounded-xl transition-colors" href="#">
                <span class="material-symbols-outlined" data-icon="settings">settings</span>
                <span class="font-body-md text-body-md">Configurations</span>
            </a>
            <a class="flex items-center gap-md p-md text-on-surface-variant hover:bg-surface-container rounded-xl transition-colors" href="#">
                <span class="material-symbols-outlined" data-icon="person">person</span>
                <span class="font-body-md text-body-md">Profile</span>
            </a>
        </nav>
        <div class="mt-auto border-t border-outline-variant pt-md space-y-sm">
            <button class="w-full flex items-center justify-center gap-sm bg-primary text-white py-md rounded-xl font-bold hover:opacity-90 transition-opacity">
                <span class="material-symbols-outlined" data-icon="add">add</span>
                <span>New Report</span>
            </button>
            <a class="flex items-center gap-md p-md text-on-surface-variant hover:bg-surface-container rounded-xl transition-colors" href="#">
                <span class="material-symbols-outlined" data-icon="help">help</span>
                <span class="font-body-md text-body-md">Help Center</span>
            </a>
            <a class="flex items-center gap-md p-md text-on-surface-variant hover:bg-surface-container rounded-xl transition-colors" href="#">
                <span class="material-symbols-outlined" data-icon="logout">logout</span>
                <span class="font-body-md text-body-md">Logout</span>
            </a>
        </div>
    </aside>
    <!-- TopNavBar Shell -->
    <header class="h-16 w-[calc(100%-260px)] sticky top-0 z-40 bg-surface flex justify-between items-center px-lg ml-sidebar-width border-b border-outline-variant">
        <div class="flex items-center gap-lg">
            <div class="relative w-64">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline" data-icon="search">search</span>
                <input class="w-full pl-10 pr-4 py-1.5 bg-surface-container text-body-md border-none rounded-full focus:ring-2 focus:ring-primary" placeholder="Search system logs..." type="text" />
            </div>
            <h2 class="font-headline-md text-headline-md font-extrabold text-primary">PointWaste Admin</h2>
        </div>
        <img src="https://i.pravatar.cc/80?img=12" alt="Avatar Budi Santoso" class="w-10 h-10 rounded-full object-cover border border-gray-200" />
      </div>
    </header>
    <!-- Main Content Canvas -->
    <main class="ml-sidebar-width p-lg max-w-[1280px] mx-auto min-h-screen">
        <!-- Header Section -->
        <section class="mb-lg">
            <h3 class="font-headline-lg text-headline-lg text-on-surface mb-xs">Platform Performance</h3>
            <p class="font-body-lg text-body-lg text-on-surface-variant">Real-time oversight of waste management across all regional units.</p>
        </section>
        <!-- Global Stats Bento Grid -->
        <section class="grid grid-cols-1 md:grid-cols-4 gap-lg mb-xl">
            <div class="bg-white p-lg border border-outline-variant rounded-xl flex flex-col gap-xs relative overflow-hidden">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
                <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Total Registered Users</span>
                <div class="flex items-end gap-xs">
                    <span class="font-display-lg text-headline-lg font-bold text-on-surface">12,482</span>
                    <span class="text-primary font-bold text-sm mb-2 flex items-center"><span class="material-symbols-outlined text-sm" data-icon="arrow_upward">arrow_upward</span> 4.2%</span>
                </div>
                <p class="text-xs text-on-surface-variant mt-2 italic">Global platform count</p>
            </div>
            <div class="bg-white p-lg border border-outline-variant rounded-xl flex flex-col gap-xs relative overflow-hidden">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
                <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Active RT Units</span>
                <div class="flex items-end gap-xs">
                    <span class="font-display-lg text-headline-lg font-bold text-on-surface">156</span>
                    <span class="text-on-surface-variant font-bold text-sm mb-2">/ 180 total</span>
                </div>
                <p class="text-xs text-on-surface-variant mt-2 italic">86% participation rate</p>
            </div>
            <div class="bg-white p-lg border border-outline-variant rounded-xl flex flex-col gap-xs relative overflow-hidden">
                <div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
                <span class="font-label-md text-label-md text-on-surface-variant uppercase tracking-wider">Total Waste Processed</span>
                <div class="flex items-end gap-xs">
                    <span class="font-display-lg text-headline-lg font-bold text-on-surface">412.5</span>
                    <span class="text-on-surface-variant font-bold text-sm mb-2">Tonnes</span>
                </div>
                <p class="text-xs text-on-surface-variant mt-2 italic">Past 30 days global average</p>
            </div>
            <h3 class="font-bold text-gray-800 text-sm">Batas Setoran</h3>
          </div>
          <p class="text-xs text-gray-500 mb-4 leading-relaxed">Maksimal berat sampah yang dapat disetorkan per warga setiap harinya.</p>
          <label class="text-xs font-semibold text-gray-600 mb-1.5 block">Batas Harian (kg)</label>
          <div class="flex items-center rounded-lg border border-gray-300 overflow-hidden focus-within:ring-2 focus-within:ring-primary/30 focus-within:border-primary">
            <input type="number" value="0" class="w-full px-3 py-2.5 text-sm outline-none border-none" />
            <span class="px-3 text-sm font-bold text-gray-600 bg-gray-50 border-l border-gray-300 py-2.5">kg</span>
          </div>
        </div>

        <!-- Saluran Notifikasi -->
        <div class="bg-white border border-gray-200 rounded-xl p-5">
          <div class="flex items-center gap-2.5 mb-2">
            <div class="w-9 h-9 rounded-lg bg-primary-soft flex items-center justify-center text-primary">
              <span class="material-symbols-outlined" style="font-size:18px;">campaign</span>
            </div>
        </section>
        <!-- Middle Row: Chart & Quick Actions -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-lg mb-xl">
            <!-- Performance Chart Card -->
            <section class="lg:col-span-2 bg-white border border-outline-variant rounded-xl p-lg">
                <div class="flex justify-between items-center mb-lg">
                    <div>
                        <h4 class="font-title-lg text-title-lg text-on-surface">Waste Collection Growth</h4>
                        <p class="font-body-md text-body-md text-on-surface-variant">6-month trend analysis (Tonnes vs Points)</p>
                    </div>
                    <select class="bg-surface-container border-none text-body-md rounded-lg py-1 px-4 focus:ring-primary">
                        <option>Last 6 Months</option>
                        <option>Last Year</option>
                    </select>
                </div>
                <!-- Simple Bar Chart Mockup -->
                <div class="h-64 flex items-end justify-between gap-sm px-4 border-b border-outline-variant pb-2">
                    <div class="flex flex-col items-center gap-2 w-full">
                        <div class="w-full bg-primary-fixed rounded-t h-[40%] chart-bar"></div>
                        <span class="text-xs text-on-surface-variant font-medium">Jan</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 w-full">
                        <div class="w-full bg-primary-fixed rounded-t h-[55%] chart-bar"></div>
                        <span class="text-xs text-on-surface-variant font-medium">Feb</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 w-full">
                        <div class="w-full bg-primary-fixed rounded-t h-[50%] chart-bar"></div>
                        <span class="text-xs text-on-surface-variant font-medium">Mar</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 w-full">
                        <div class="w-full bg-primary-fixed rounded-t h-[75%] chart-bar"></div>
                        <span class="text-xs text-on-surface-variant font-medium">Apr</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 w-full">
                        <div class="w-full bg-primary-fixed rounded-t h-[65%] chart-bar"></div>
                        <span class="text-xs text-on-surface-variant font-medium">May</span>
                    </div>
                    <div class="flex flex-col items-center gap-2 w-full">
                        <div class="w-full bg-primary rounded-t h-[90%] chart-bar shadow-lg"></div>
                        <span class="text-xs text-primary font-bold">Jun</span>
                    </div>
                </div>
            </section>
            <!-- Quick Management Actions -->
            <section class="bg-white border border-outline-variant rounded-xl p-lg">
                <h4 class="font-title-lg text-title-lg text-on-surface mb-lg">System Commands</h4>
                <div class="grid grid-cols-1 gap-md">
                    <button class="flex items-center gap-md p-md bg-secondary-mint/10 border border-secondary-mint text-primary rounded-xl hover:bg-primary hover:text-white transition-all group">
                        <div class="h-10 w-10 flex items-center justify-center bg-primary/10 group-hover:bg-white/20 rounded-lg">
                            <span class="material-symbols-outlined" data-icon="domain_add">domain_add</span>
                        </div>
                        <div class="text-left">
                            <p class="font-bold text-body-md">Add New RT Unit</p>
                            <p class="text-xs opacity-70">Expand platform coverage</p>
                        </div>
                    </button>
                    <button class="flex items-center gap-md p-md bg-tertiary-fixed/30 border border-tertiary-fixed text-tertiary rounded-xl hover:bg-tertiary hover:text-white transition-all group">
                        <div class="h-10 w-10 flex items-center justify-center bg-tertiary/10 group-hover:bg-white/20 rounded-lg">
                            <span class="material-symbols-outlined" data-icon="campaign">campaign</span>
                        </div>
                        <div class="text-left">
                            <p class="font-bold text-body-md">Broadcast Message</p>
                            <p class="text-xs opacity-70">Notify all system users</p>
                        </div>
                    </button>
                    <button class="flex items-center gap-md p-md bg-surface-container border border-outline-variant text-on-surface-variant rounded-xl hover:bg-on-surface hover:text-white transition-all group">
                        <div class="h-10 w-10 flex items-center justify-center bg-outline/10 group-hover:bg-white/20 rounded-lg">
                            <span class="material-symbols-outlined" data-icon="edit_calendar">edit_calendar</span>
                        </div>
                        <div class="text-left">
                            <p class="font-bold text-body-md">Update Master Data</p>
                            <p class="text-xs opacity-70">Modify waste categories</p>
                        </div>
                    </button>
                </div>
                <div class="mt-lg pt-lg border-t border-dashed border-outline-variant">
                    <div class="flex items-center justify-between text-on-surface-variant text-sm">
                        <span>Last backup:</span>
                        <span class="font-bold">2h ago</span>
                    </div>
                </div>
            </section>
        </div>
        <!-- Bottom Row: Regional Table & System Activity -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-lg">
            <!-- Regional Overview Table -->
            <section class="lg:col-span-2 bg-white border border-outline-variant rounded-xl overflow-hidden">
                <div class="p-lg border-b border-outline-variant bg-surface-container/50 flex justify-between items-center">
                    <h4 class="font-title-lg text-title-lg text-on-surface">Top-Performing RT Units</h4>
                    <button class="text-primary font-bold text-sm flex items-center gap-xs hover:underline">View All <span class="material-symbols-outlined text-sm" data-icon="open_in_new">open_in_new</span></button>
                </div>
                <table class="w-full text-left">
                    <thead class="bg-[#F0FDF4] text-on-surface-variant font-label-md text-label-md">
                        <tr>
                            <th class="px-lg py-md">Neighborhood (RT)</th>
                            <th class="px-lg py-md">Active Residents</th>
                            <th class="px-lg py-md">Waste Collected</th>
                            <th class="px-lg py-md">Sustainability Score</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-outline-variant font-body-md">
                        <tr class="hover:bg-surface-container-low transition-colors">
                            <td class="px-lg py-md font-bold">RT 005 - Cilandak</td>
                            <td class="px-lg py-md">428 Users</td>
                            <td class="px-lg py-md">1.2 Tons</td>
                            <td class="px-lg py-md">
                                <span class="px-3 py-1 bg-primary text-white rounded-full text-xs">98.2</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-container-low transition-colors">
                            <td class="px-lg py-md font-bold">RT 012 - Kemang</td>
                            <td class="px-lg py-md">315 Users</td>
                            <td class="px-lg py-md">0.9 Tons</td>
                            <td class="px-lg py-md">
                                <span class="px-3 py-1 bg-primary text-white rounded-full text-xs">94.5</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-container-low transition-colors">
                            <td class="px-lg py-md font-bold">RT 003 - Menteng</td>
                            <td class="px-lg py-md">289 Users</td>
                            <td class="px-lg py-md">0.85 Tons</td>
                            <td class="px-lg py-md">
                                <span class="px-3 py-1 bg-primary text-white rounded-full text-xs">92.1</span>
                            </td>
                        </tr>
                        <tr class="hover:bg-surface-container-low transition-colors">
                            <td class="px-lg py-md font-bold">RT 008 - Kebayoran</td>
                            <td class="px-lg py-md">210 Users</td>
                            <td class="px-lg py-md">0.6 Tons</td>
                            <td class="px-lg py-md">
                                <span class="px-3 py-1 bg-primary text-white rounded-full text-xs">89.4</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
            <!-- Recent System Activity -->
            <section class="bg-white border border-outline-variant rounded-xl flex flex-col">
                <div class="p-lg border-b border-outline-variant">
                    <h4 class="font-title-lg text-title-lg text-on-surface">System Activity Log</h4>
                </div>
                <div class="flex-1 p-lg space-y-lg overflow-y-auto max-h-[400px]">
                    <div class="flex gap-md">
                        <div class="flex flex-col items-center">
                            <div class="h-8 w-8 rounded-full bg-primary-container/20 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined text-sm" data-icon="add_circle">add_circle</span>
                            </div>
                            <div class="w-0.5 h-full bg-outline-variant mt-2"></div>
                        </div>
                        <div>
                            <p class="font-bold text-body-md text-on-surface">New RT Onboarded</p>
                            <p class="text-xs text-on-surface-variant">RT 014 - Pasar Minggu now active.</p>
                            <span class="text-[10px] text-outline uppercase font-bold mt-1 block">12 Minutes ago</span>
                        </div>
                    </div>
                    <div class="flex gap-md">
                        <div class="flex flex-col items-center">
                            <div class="h-8 w-8 rounded-full bg-error-container/20 flex items-center justify-center text-error">
                                <span class="material-symbols-outlined text-sm" data-icon="warning">warning</span>
                            </div>
                            <div class="w-0.5 h-full bg-outline-variant mt-2"></div>
                        </div>
                        <div>
                            <p class="font-bold text-body-md text-on-surface">User Limit Warning</p>
                            <p class="text-xs text-on-surface-variant">RT 005 reached 95% capacity.</p>
                            <span class="text-[10px] text-outline uppercase font-bold mt-1 block">45 Minutes ago</span>
                        </div>
                    </div>
                    <div class="flex gap-md">
                        <div class="flex flex-col items-center">
                            <div class="h-8 w-8 rounded-full bg-tertiary-fixed/20 flex items-center justify-center text-tertiary">
                                <span class="material-symbols-outlined text-sm" data-icon="sync">sync</span>
                            </div>
                            <div class="w-0.5 h-full bg-outline-variant mt-2"></div>
                        </div>
                        <div>
                            <p class="font-bold text-body-md text-on-surface">System Update Complete</p>
                            <p class="text-xs text-on-surface-variant">Version 2.4.1 deployment successful.</p>
                            <span class="text-[10px] text-outline uppercase font-bold mt-1 block">2 Hours ago</span>
                        </div>
                    </div>
                    <div class="flex gap-md">
                        <div class="flex flex-col items-center">
                            <div class="h-8 w-8 rounded-full bg-primary-container/20 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined text-sm" data-icon="person_add">person_add</span>
                            </div>
                        </div>
                        <div>
                            <p class="font-bold text-body-md text-on-surface">Bulk Admin Created</p>
                            <p class="text-xs text-on-surface-variant">Created 5 regional manager accounts.</p>
                            <span class="text-[10px] text-outline uppercase font-bold mt-1 block">5 Hours ago</span>
                        </div>
                    </div>
                </div>
                <div class="p-md bg-surface-container-low border-t border-outline-variant text-center">
                    <button class="text-on-surface-variant text-xs font-bold hover:text-primary transition-colors">LOAD MORE LOGS</button>
                </div>
            </section>
        </div>
      </section>

    </main>
  </div>
</div>

</body>
</html>