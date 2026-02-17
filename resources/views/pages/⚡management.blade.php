<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<section id="tab-calendar" class="space-y-8">
    <!-- Month Selection Card -->
    <div class="bg-white p-6 rounded-[32px] border border-slate-200/60 space-y-6">
        <div class="flex justify-between items-center px-1">
            <h3 class="text-lg font-bold text-slate-800">Junio 2026</h3>
            <div class="flex gap-2">
                <button class="w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center text-slate-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button class="w-8 h-8 rounded-full bg-slate-50 flex items-center justify-center text-slate-400">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Month Grid -->
        <div class="grid grid-cols-7 gap-y-3 text-center">
            <span class="text-[9px] font-bold text-slate-300 uppercase">Lu</span>
            <span class="text-[9px] font-bold text-slate-300 uppercase">Ma</span>
            <span class="text-[9px] font-bold text-slate-300 uppercase">Mi</span>
            <span class="text-[9px] font-bold text-slate-300 uppercase">Ju</span>
            <span class="text-[9px] font-bold text-slate-300 uppercase">Vi</span>
            <span class="text-[9px] font-bold text-slate-300 uppercase">Sa</span>
            <span class="text-[9px] font-bold text-slate-300 uppercase">Do</span>

            <!-- Days -->
            <span class="text-xs font-semibold py-2 text-slate-300">1</span>
            <span class="text-xs font-semibold py-2 text-slate-300">2</span>
            <span class="text-xs font-semibold py-2 text-slate-300">3</span>
            <span class="text-xs font-semibold py-2 text-slate-300">4</span>
            <span class="text-xs font-semibold py-2 text-slate-300">5</span>
            <span class="text-xs font-semibold py-2 text-slate-300">6</span>
            <span class="text-xs font-semibold py-2 text-slate-300 font-bold text-slate-800">7</span>
            <div class="relative flex justify-center py-2">
                <span
                    class="text-xs font-bold bg-emerald-500 text-white w-7 h-7 flex items-center justify-center rounded-xl shadow-lg shadow-emerald-100 relative z-10">8</span>
            </div>
            <span class="text-xs font-bold py-2 text-slate-800">9</span>
            <span class="text-xs font-bold py-2 text-slate-800">10</span>
            <span class="text-xs font-bold py-2 text-slate-800">11</span>
            <span class="text-xs font-bold py-2 text-slate-800">12</span>
            <span class="text-xs font-bold py-2 text-slate-800">13</span>
            <span class="text-xs font-bold py-2 text-slate-800">14</span>
        </div>
    </div>

    <!-- Day Schedule Timeline -->
    <div class="space-y-4">
        <h3 class="text-[11px] font-bold text-slate-400 uppercase tracking-widest px-1">Horarios de Hoy</h3>
        <div class="space-y-4">
            <!-- Time Slot -->
            <div class="flex gap-4">
                <div class="flex flex-col items-center pt-1">
                    <span class="text-[10px] font-bold text-slate-400 uppercase">09:00</span>
                    <div class="w-px h-full bg-slate-200 my-2"></div>
                </div>
                <div class="flex-1 p-4 rounded-2xl bg-white border border-slate-200/6 mb-2 opacity-50">
                    <h5 class="text-sm font-bold text-slate-400">Consulta de Seguimiento</h5>
                    <p class="text-[10px] text-slate-300">Dra. Annie Lee • Finalizado</p>
                </div>
            </div>
            <!-- Time Slot -->
            <div class="flex gap-4">
                <div class="flex flex-col items-center pt-1">
                    <span class="text-[10px] font-bold text-emerald-500 uppercase">10:30</span>
                    <div class="w-px h-full border-l-2 border-dashed border-emerald-500/30 my-2"></div>
                </div>
                <div
                    class="flex-1 p-4 rounded-2xl bg-emerald-50 border border-emerald-200/50 mb-2 border-l-4 border-l-emerald-500">
                    <h5 class="text-sm font-bold text-emerald-800">Roberto Soto</h5>
                    <p class="text-[10px] text-emerald-600 font-bold tracking-tight">Limpieza Profunda • Consultorio 02
                    </p>
                </div>
            </div>
            <!-- Time Slot -->
            <div class="flex gap-4">
                <div class="flex flex-col items-center pt-1">
                    <span class="text-[10px] font-bold text-slate-400 uppercase">12:00</span>
                    <div class="w-px h-full bg-slate-200 my-2"></div>
                </div>
                <div class="flex-1 p-4 rounded-2xl bg-white border border-slate-200/60 mb-2">
                    <h5 class="text-sm font-bold text-slate-700">Libre</h5>
                    <p class="text-[10px] text-slate-400">Disponible para Urgencias</p>
                </div>
            </div>
        </div>
    </div>
</section>
