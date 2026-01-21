<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Turnos Rotativos 24/7</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Ajustes específicos para Impresión */
        @media print {
            @page {
                size: landscape;
                margin: 0.5cm;
            }

            .no-print {
                display: none !important;
            }

            body {
                background: white !important;
                padding: 0 !important;
                -webkit-print-color-adjust: exact;
                print-color-adjust: exact;
            }

            .max-w-7xl {
                max-width: 100% !important;
                width: 100% !important;
                padding: 0 !important;
                margin: 0 !important;
            }

            #resultContainer {
                box-shadow: none !important;
                border: 1px solid #ddd !important;
                border-radius: 0 !important;
                width: 100% !important;
            }

            table {
                width: 100% !important;
                table-layout: auto !important;
                font-size: 8pt !important;
            }

            th,
            td {
                padding: 4px 2px !important;
                border: 1px solid #e2e8f0 !important;
            }

            /* Desactivar el sticky en impresión para evitar cortes */
            .sticky-col {
                position: relative !important;
                box-shadow: none !important;
                background: white !important;
            }

            .shift-m {
                background-color: #fef3c7 !important;
                color: #92400e !important;
            }

            .shift-t {
                background-color: #dcfce7 !important;
                color: #166534 !important;
            }

            .shift-n {
                background-color: #dbeafe !important;
                color: #1e40af !important;
            }

            .shift-d {
                background-color: #fee2e2 !important;
                color: #991b1b !important;
            }
        }

        /* Estilos Web */
        .shift-m {
            background-color: #fef3c7;
            color: #92400e;
        }

        .shift-t {
            background-color: #dcfce7;
            color: #166534;
        }

        .shift-n {
            background-color: #dbeafe;
            color: #1e40af;
        }

        .shift-d {
            background-color: #fee2e2;
            color: #991b1b;
        }

        .sticky-col {
            position: sticky;
            left: 0;
            background: white;
            z-index: 10;
            box-shadow: 2px 0 5px -2px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-slate-50 min-h-screen font-sans text-slate-900">

    <div class="max-w-7xl mx-auto px-4 py-8">
        <!-- Header -->
        <header class="text-center mb-8 no-print">
            <h1 class="text-3xl font-extrabold text-slate-800 mb-2">Planificador de Turnos 24/7</h1>
            <p class="text-slate-500">4 Personas • Rotación Semanal • Configuración Personalizada</p>
        </header>

        <!-- Panel de Control -->
        <div class="bg-white rounded-2xl shadow-xl p-6 mb-8 no-print border border-slate-200">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                <!-- Configuración de Tiempo -->
                <div class="space-y-4">
                    <h3 class="font-bold text-slate-700 border-b pb-2">1. Periodo y Horario</h3>
                    <div class="grid grid-cols-2 gap-3">
                        <div>
                            <label class="block text-xs font-semibold text-slate-500 uppercase mb-1">Mes</label>
                            <select id="selMonth"
                                class="w-full border-slate-200 rounded-lg p-2 text-sm focus:ring-blue-500 border">
                                <option value="0">Enero</option>
                                <option value="1">Febrero</option>
                                <option value="2">Marzo</option>
                                <option value="3">Abril</option>
                                <option value="4">Mayo</option>
                                <option value="5">Junio</option>
                                <option value="6">Julio</option>
                                <option value="7">Agosto</option>
                                <option value="8">Septiembre</option>
                                <option value="9">Octubre</option>
                                <option value="10">Noviembre</option>
                                <option value="11">Diciembre</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-xs font-semibold text-slate-500 uppercase mb-1">Año</label>
                            <input type="number" id="selYear"
                                class="w-full border-slate-200 rounded-lg p-2 text-sm focus:ring-blue-500 border">
                        </div>
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-slate-500 uppercase mb-1">Inicio Turno
                            Mañana</label>
                        <input type="time" id="startTime" value="06:00"
                            class="w-full border-slate-200 rounded-lg p-2 text-sm focus:ring-blue-500 border">
                    </div>
                </div>

                <!-- Personal -->
                <div class="space-y-2 md:col-span-2">
                    <h3 class="font-bold text-slate-700 border-b pb-2">2. Nombres del Personal</h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div class="flex items-center gap-2">
                            <span class="text-xs font-bold text-slate-400 w-4">1</span>
                            <input type="text" id="p1" value="Ana García"
                                class="flex-1 border-slate-200 rounded-lg p-2 text-sm border">
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-xs font-bold text-slate-400 w-4">2</span>
                            <input type="text" id="p2" value="Carlos Ruiz"
                                class="flex-1 border-slate-200 rounded-lg p-2 text-sm border">
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-xs font-bold text-slate-400 w-4">3</span>
                            <input type="text" id="p3" value="Elena Sanz"
                                class="flex-1 border-slate-200 rounded-lg p-2 text-sm border">
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="text-xs font-bold text-slate-400 w-4">4</span>
                            <input type="text" id="p4" value="David León"
                                class="flex-1 border-slate-200 rounded-lg p-2 text-sm border">
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex flex-wrap justify-center gap-4 border-t pt-6">
                <button onclick="generateSchedule()"
                    class="bg-indigo-600 hover:bg-indigo-700 text-white px-10 py-3 rounded-xl font-bold transition-all shadow-lg active:scale-95">
                    Generar Cuadrante
                </button>
                <button onclick="window.print()"
                    class="bg-slate-800 hover:bg-slate-900 text-white px-8 py-3 rounded-xl font-bold transition-all shadow-lg flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z"
                            clip-rule="evenodd" />
                    </svg>
                    Imprimir Cuadrante
                </button>
            </div>
        </div>

        <!-- Resultados -->
        <div id="resultContainer"
            class="bg-white rounded-2xl shadow-2xl overflow-hidden border border-slate-200 hidden">
            <div class="p-6 bg-slate-50 border-b border-slate-200">
                <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                    <div>
                        <h2 id="tableTitle" class="text-xl font-black text-slate-800 uppercase italic">Cuadrante de
                            Turnos</h2>
                        <p id="tableSubtitle" class="text-sm text-slate-500"></p>
                    </div>
                    <div id="legend" class="flex flex-wrap justify-center gap-2">
                        <!-- La leyenda de horarios se genera aquí -->
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr id="tableHeader" class="bg-slate-100">
                            <!-- Días generados por JS -->
                        </tr>
                    </thead>
                    <tbody id="tableBody" class="divide-y divide-slate-100">
                        <!-- Filas generadas por JS -->
                    </tbody>
                </table>
            </div>

            <div class="p-4 bg-amber-50 border-t border-amber-100 text-[11px] text-amber-800 text-center">
                * El sistema utiliza un ciclo de 4 días para garantizar cobertura 24/7. Cada persona descansa 1 de cada
                4 días.
            </div>
        </div>
    </div>

    <script>
        // Inicializar fecha
        const today = new Date();
        document.getElementById('selMonth').value = today.getMonth();
        document.getElementById('selYear').value = today.getFullYear();

        function addHours(timeStr, hoursToAdd) {
            const [h, m] = timeStr.split(':').map(Number);
            const totalHours = (h + hoursToAdd) % 24;
            return `${String(totalHours).padStart(2, '0')}:${String(m).padStart(2, '0')}`;
        }

        function generateSchedule() {
            const month = parseInt(document.getElementById('selMonth').value);
            const year = parseInt(document.getElementById('selYear').value);
            const startTime = document.getElementById('startTime').value;

            document.getElementById('resultContainer').classList.remove('hidden');

            const names = [
                document.getElementById('p1').value || 'Persona 1',
                document.getElementById('p2').value || 'Persona 2',
                document.getElementById('p3').value || 'Persona 3',
                document.getElementById('p4').value || 'Persona 4'
            ];

            const hMañana = `${startTime} - ${addHours(startTime, 8)}`;
            const hTarde = `${addHours(startTime, 8)} - ${addHours(startTime, 16)}`;
            const hNoche = `${addHours(startTime, 16)} - ${startTime}`;

            const legend = document.getElementById('legend');
            legend.innerHTML = `
                <div class="flex items-center gap-1 px-3 py-1 rounded-full text-[10px] font-bold shift-m border border-yellow-200">
                    <span>M: ${hMañana}</span>
                </div>
                <div class="flex items-center gap-1 px-3 py-1 rounded-full text-[10px] font-bold shift-t border border-green-200">
                    <span>T: ${hTarde}</span>
                </div>
                <div class="flex items-center gap-1 px-3 py-1 rounded-full text-[10px] font-bold shift-n border border-blue-200">
                    <span>N: ${hNoche}</span>
                </div>
                <div class="flex items-center gap-1 px-3 py-1 rounded-full text-[10px] font-bold shift-d border border-red-200">
                    <span>D: Descanso</span>
                </div>
                <div class="w-full text-center text-xs text-slate-400 mt-1 italic">
                    Sistema Continental: 2 Mañanas ➔ 2 Tardes ➔ 2 Noches ➔ 2 Descansos
                </div>
            `;

            // Calcular días del mes
            const startDate = new Date(year, month, 1);
            const lastDay = new Date(year, month + 1, 0);
            const totalDays = lastDay.getDate();

            const monthName = new Intl.DateTimeFormat('es-ES', {
                month: 'long'
            }).format(startDate);
            document.getElementById('tableSubtitle').textContent = `Programación para ${monthName} ${year}`;

            const tableHeader = document.getElementById('tableHeader');
            const tableBody = document.getElementById('tableBody');
            tableHeader.innerHTML = '<th class="p-4 sticky-col font-bold text-slate-700 border-r border-slate-200 text-sm w-48">Personal</th>';
            tableBody.innerHTML = '';

            // Generar cabecera de días
            for (let i = 1; i <= totalDays; i++) {
                const current = new Date(year, month, i);
                const dayName = new Intl.DateTimeFormat('es-ES', {
                    weekday: 'short'
                }).format(current);
                const isWeekend = current.getDay() === 0 || current.getDay() === 6;

                const th = document.createElement('th');
                th.className = `p-2 text-center border-r border-slate-200 text-[10px] min-w-[50px] ${isWeekend ? 'bg-red-50 text-red-600 font-bold' : 'text-slate-500 font-medium'}`;
                th.innerHTML = `<div>${i}</div><div class="uppercase">${dayName}</div>`;
                tableHeader.appendChild(th);
            }

            // Patrón Continental: M M T T N N D D (ciclo de 8 pasos)
            // Offsets fijos para asegurar cobertura perfecta: 0, 2, 4, 6
            const pattern = ['M', 'M', 'T', 'T', 'N', 'N', 'D', 'D'];
            const personOffsets = [0, 2, 4, 6];

            // Para continuidad entre meses, calculamos el "global day index" desde una fecha epoch arbitraria
            // Usamos 1 de Enero del año seleccionado como base simple para este ejemplo,
            // o mejor, simplemente days desde inicio de mes para simplicidad visual del usuario en esta versión.
            // *Mejora*: Para que ruede perfecto mes a mes, necesitamos persistencia o calcular desde epoch.
            // Usaremos timestamp // dias para continuidad real.

            const oneDay = 1000 * 60 * 60 * 24;
            const epoch = new Date(year, 0, 1).getTime(); // Base: Inicio del año

            names.forEach((name, pIdx) => {
                const tr = document.createElement('tr');
                const nameTd = document.createElement('td');
                nameTd.className = "p-4 sticky-col font-bold text-slate-800 border-r border-slate-200 text-sm whitespace-nowrap";
                nameTd.textContent = name;
                tr.appendChild(nameTd);

                let daysWorked = 0;
                let daysOff = 0;

                for (let i = 1; i <= totalDays; i++) {
                    const current = new Date(year, month, i);
                    // Días absolutos desde principio de año para mantener rotación continua
                    const daysSinceEpoch = Math.floor((current.getTime() - epoch) / oneDay);

                    // Indice en el patrón de 8 días
                    // (DiasGlobales + OffsetPersona) % 8
                    const patternIdx = (daysSinceEpoch + personOffsets[pIdx]) % 8;
                    const shiftCode = pattern[patternIdx];

                    let shiftInfo;
                    if (shiftCode === 'M') {
                        shiftInfo = {
                            label: 'M',
                            class: 'shift-m',
                            time: hMañana
                        };
                        daysWorked++;
                    } else if (shiftCode === 'T') {
                        shiftInfo = {
                            label: 'T',
                            class: 'shift-t',
                            time: hTarde
                        };
                        daysWorked++;
                    } else if (shiftCode === 'N') {
                        shiftInfo = {
                            label: 'N',
                            class: 'shift-n',
                            time: hNoche
                        };
                        daysWorked++;
                    } else {
                        shiftInfo = {
                            label: 'D',
                            class: 'shift-d',
                            time: 'Día Libre'
                        };
                        daysOff++;
                    }

                    const td = document.createElement('td');
                    td.className = `p-2 text-center border-r border-slate-100 text-xs font-black ${shiftInfo.class}`;
                    td.innerHTML = `<span title="${shiftInfo.time}">${shiftInfo.label}</span>`;
                    tr.appendChild(td);
                }

                // Celda de estadísticas
                const statTd = document.createElement('td');
                statTd.className = "p-2 text-center text-xs text-slate-500 font-bold border-l border-slate-300 bg-slate-50";
                statTd.innerHTML = `<div>${daysWorked}w</div><div>${daysOff}d</div>`;
                // Añadimos cabecera para stats si no existe (hack simple: añadir al final del loop principal)
                if (pIdx === 0) {
                    const thStat = document.createElement('th');
                    thStat.className = "p-2 text-center bg-slate-200 text-slate-700 font-bold text-[10px]";
                    thStat.textContent = "TOTAL";
                    tableHeader.appendChild(thStat);
                }

                tr.appendChild(statTd);
                tableBody.appendChild(tr);
            });
        }
    </script>
</body>

</html>