<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<section id="tab-quotes" class="space-y-6">
    <div class="p-6 rounded-3xl bg-emerald-50 border border-emerald-100 space-y-2">
        <h3 class="text-sm font-bold text-emerald-800">Resumen Financiero</h3>
        <div class="flex justify-between items-end">
            <div>
                <p class="text-[10px] text-emerald-600 font-bold uppercase">Aprobado Mes</p>
                <p class="text-2xl font-bold text-emerald-700">$42,500</p>
            </div>
            <div class="text-right">
                <p class="text-[10px] text-emerald-600 font-bold uppercase">Pendiente</p>
                <p class="text-sm font-bold text-slate-600">$12,800</p>
            </div>
        </div>
    </div>

    <div class="space-y-4">
        <h3 class="text-xs font-bold text-slate-400 uppercase tracking-widest">Cotizaciones Recientes</h3>
        <div class="space-y-3">
            <div class="p-4 rounded-2xl border border-slate-50 bg-white flex justify-between items-center">
                <div>
                    <h5 class="text-sm font-bold">Carlos Villaseñor</h5>
                    <p class="text-[10px] text-slate-400">Rinoplastia Estética</p>
                </div>
                <div class="text-right">
                    <p class="text-sm font-bold text-emerald-600">$35,000</p>
                    <span
                        class="text-[9px] font-bold text-emerald-500 bg-emerald-50 px-2 py-0.5 rounded">APROBADO</span>
                </div>
            </div>
        </div>
    </div>
</section>
