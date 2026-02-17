<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<section id="tab-home" class="space-y-8">
    <!-- Updated Appointment Card: Light & Less Distracting -->
    <div class="space-y-4">
        <div class="flex justify-between items-center px-1">
            <h3 class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Siguiente Cita</h3>
            <span
                class="flex items-center gap-1.5 text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded-full">
                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span> PACIENTE EN ESPERA
            </span>
        </div>

        <div class="p-6 rounded-[32px] bg-white border border-slate-200/60 flex flex-col gap-5 relative">
            <div class="flex justify-between items-start">
                <div class="flex gap-4 items-center">
                    <div class="w-12 h-12 bg-emerald-50 rounded-2xl flex items-center justify-center text-emerald-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-slate-800">Roberto Soto</h4>
                        <p class="text-[11px] font-medium text-slate-400 uppercase tracking-tighter">Limpieza Profunda •
                            Consultorio 02</p>
                    </div>
                </div>
                <div class="text-right">
                    <span class="text-lg font-bold text-emerald-600 block">10:30</span>
                    <span class="text-[9px] font-bold text-slate-300 uppercase">En 15 min</span>
                </div>
            </div>

            <!-- Schedule Details -->
            <div class="grid grid-cols-2 gap-4 pt-4 border-t border-slate-50">
                <div>
                    <span class="text-[9px] font-bold text-slate-300 uppercase block mb-1">Doctor Asignado</span>
                    <div class="flex items-center gap-2">
                        <div
                            class="w-5 h-5 rounded-md bg-emerald-100 flex items-center justify-center text-[8px] font-bold text-emerald-700">
                            HV</div>
                        <span class="text-xs font-semibold text-slate-600">Hurtado Vidal</span>
                    </div>
                </div>
                <div>
                    <span class="text-[9px] font-bold text-slate-300 uppercase block mb-1">Duración Est.</span>
                    <div class="flex items-center gap-2 text-slate-600">
                        <svg class="w-4 h-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span class="text-xs font-semibold">45 minutos</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats: More Refined -->
    <div class="grid grid-cols-2 gap-4">
        <div class="p-5 rounded-3xl bg-white border border-slate-200/60 flex flex-col justify-between h-28">
            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-wider">Citas Pendientes</span>
            <div class="flex items-baseline gap-1">
                <span class="text-3xl font-bold text-slate-800">08</span>
                <span class="text-[10px] text-emerald-500 font-bold">/ 14</span>
            </div>
        </div>
        <div class="p-5 rounded-3xl bg-white border border-slate-200/60  flex flex-col justify-between h-28">
            <span class="text-[9px] font-bold text-slate-400 uppercase tracking-wider">Presupuestos</span>
            <div class="flex items-baseline gap-1">
                <span class="text-3xl font-bold text-slate-800">03</span>
                <span class="text-[10px] text-emerald-500 font-bold">Nuevos</span>
            </div>
        </div>
    </div>

    <!-- Next in line Agenda -->
    <div class="space-y-4 pb-4">
        <h3 class="text-[11px] font-bold text-slate-400 uppercase tracking-widest px-1">Resto de la Tarde</h3>
        <div class="space-y-3">
            <div class="flex items-center gap-4 p-4 rounded-2xl bg-white border border-slate-200/40">
                <span class="text-xs font-bold text-slate-400 w-12">11:15</span>
                <div class="flex-1">
                    <h5 class="text-sm font-bold text-slate-700">Adriana Mendoza</h5>
                    <p class="text-[10px] text-slate-400 font-medium italic">Revisión Post-Op</p>
                </div>
                <div class="w-8 h-8 rounded-lg bg-slate-50 flex items-center justify-center">
                    <svg class="w-4 h-4 text-slate-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>
