<template>
    <div class="page-actas">
        <div class="filters mb-6 flex flex-col md:flex-row gap-4">
            <select v-model="filtroBanco" class="border px-3 py-2 rounded w-full md:w-1/3">
                <option value="">Todos los Bancos</option>
                <option v-for="banco in bancosUnicos" :key="banco" :value="banco">{{ banco }}</option>
            </select>

            <select v-model="filtroAnio" class="border px-3 py-2 rounded w-full md:w-1/3">
                <option value="">Todos los Años</option>
                <option v-for="anio in aniosUnicos" :key="anio" :value="anio">{{ anio }}</option>
            </select>
        </div>

        <table class="actas-table w-full">
            <thead>
                <tr>
                    <th>Banco</th>
                    <th>Año</th>
                    <th>Referencia</th>
                    <th>PDF</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="acta in actasFiltradas" :key="acta.id">
                    <td>{{ acta.banco }}</td>
                    <td>{{ acta.anio }}</td>
                    <td>{{ acta.referencia }}</td>
                    <td>
                        <a class="btn-ver" :href="`/storage/actas/${acta.archivo}`" target="_blank" rel="noopener">
                            Ver PDF
                        </a>
                    </td>
                </tr>
                <tr v-if="actasFiltradas.length === 0">
                    <td colspan="4" class="text-center py-4">No hay actas para los filtros seleccionados.</td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script setup>
import { ref, computed } from 'vue';

const props = defineProps({
    actas: {
        type: Array,
        required: false,
        default: () => [] // valor por defecto si no se pasa el prop
    }
});

const filtroBanco = ref('');
const filtroAnio = ref('');

const bancosUnicos = computed(() =>
    props.actas ? [...new Set(props.actas.map(a => a.banco))].sort() : []
);

const aniosUnicos = computed(() =>
    props.actas ? [...new Set(props.actas.map(a => a.anio))].sort((a, b) => b - a) : []
);

const actasFiltradas = computed(() => {
    return props.actas.filter(acta => {
        return (
            (filtroBanco.value === '' || acta.banco === filtroBanco.value) &&
            (filtroAnio.value === '' || acta.anio === filtroAnio.value)
        );
    });
});
</script>

<style scoped>
.page-actas {
    font-family: sans-serif;
}

.actas-table {
    border-collapse: collapse;
    width: 100%;
}

.actas-table th,
.actas-table td {
    border: 1px solid #ddd;
    padding: 0.75rem;
    text-align: left;
}

.actas-table th {
    background-color: #f2f2f2;
}

.btn-ver {
    display: inline-block;
    background: #2ecc71;
    color: white;
    padding: 0.4rem 0.8rem;
    text-decoration: none;
    border-radius: 4px;
    transition: background 0.3s ease;
}

.btn-ver:hover {
    background: #27ae60;
}
</style>