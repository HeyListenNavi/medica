<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<section id="tab-patients" class="space-y-6">
    <!-- Search Bar -->
    <div class="relative">
        <input type="text" placeholder="Nombre, ID o teléfono..."
            class="w-full py-4 pl-12 pr-4 bg-white border border-slate-200/60 rounded-2xl text-sm outline-none focus:ring-4 focus:ring-emerald-500/10 transition-all">
        <svg class="w-5 h-5 absolute left-4 top-3.5 text-slate-300" fill="none" stroke="currentColor"
            viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
    </div>

    <!-- Directory List -->
    <div class="space-y-4">
        <div class="flex justify-between items-center px-1">
            <h3 class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Registros Recientes</h3>
            <span class="text-[10px] font-bold text-emerald-600">Total: 1,240</span>
        </div>

        <!-- Patient Cards -->
        <div class="space-y-3">
            <!-- Patient Item -->
            <div
                class="bg-white p-4 rounded-[28px] border border-slate-200/60  flex items-center justify-between group active:scale-[0.98] transition-all">
                <div class="flex items-center gap-4">
                    <div
                        class="w-12 h-12 rounded-2xl bg-emerald-50 flex items-center justify-center text-emerald-600 font-bold text-sm">
                        AM</div>
                    <div>
                        <h5 class="text-sm font-bold text-slate-800">Adriana Mendoza</h5>
                        <div class="flex items-center gap-2">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">ID:
                                #4492</span>
                            <span class="w-1 h-1 rounded-full bg-slate-200"></span>
                            <span
                                class="text-[10px] text-emerald-500 font-bold uppercase tracking-tighter">Activo</span>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button
                        class="w-9 h-9 rounded-xl bg-slate-50 flex items-center justify-center text-slate-400 border border-slate-100">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Patient Item 2 -->
            <div
                class="bg-white p-4 rounded-[28px] border border-slate-200/60  flex items-center justify-between group active:scale-[0.98] transition-all">
                <div class="flex items-center gap-4">
                    <div
                        class="w-12 h-12 rounded-2xl bg-slate-50 flex items-center justify-center text-slate-400 font-bold text-sm">
                        JM</div>
                    <div>
                        <h5 class="text-sm font-bold text-slate-800">Juan Mendoza</h5>
                        <div class="flex items-center gap-2">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">ID:
                                #4493</span>
                            <span class="w-1 h-1 rounded-full bg-slate-200"></span>
                            <span
                                class="text-[10px] text-slate-300 font-bold uppercase tracking-tighter">Inactivo</span>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button
                        class="w-9 h-9 rounded-xl bg-slate-50 flex items-center justify-center text-slate-400 border border-slate-100">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Patient Item 3 -->
            <div
                class="bg-white p-4 rounded-[28px] border border-slate-200/60  flex items-center justify-between group active:scale-[0.98] transition-all">
                <div class="flex items-center gap-4">
                    <div
                        class="w-12 h-12 rounded-2xl bg-emerald-50 flex items-center justify-center text-emerald-600 font-bold text-sm">
                        AM</div>
                    <div>
                        <h5 class="text-sm font-bold text-slate-800">Ana Mendoza</h5>
                        <div class="flex items-center gap-2">
                            <span class="text-[10px] font-bold text-slate-400 uppercase tracking-tighter">ID:
                                #4494</span>
                            <span class="w-1 h-1 rounded-full bg-slate-200"></span>
                            <span
                                class="text-[10px] text-emerald-500 font-bold uppercase tracking-tighter">Activo</span>
                        </div>
                    </div>
                </div>
                <div class="flex gap-2">
                    <button
                        class="w-9 h-9 rounded-xl bg-slate-50 flex items-center justify-center text-slate-400 border border-slate-100">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>
