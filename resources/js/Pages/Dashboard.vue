<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref, onMounted } from 'vue';
import TablaActas from '@/Components/TablaActas.vue'; // Importa el componente
import { Link } from '@inertiajs/vue3'
import NavLink from '@/Components/NavLink.vue';


const actas = ref([]);

// Simulamos el "fetch" de datos, puedes reemplazar esto por tu llamada a la API real
const obtenerActas = () => {
    // Simulando datos
    actas.value = [
        { id: 1, banco: 'Banco 1', anio: 2022, referencia: 'Acta 1', archivo: 'acta1.pdf' },
        { id: 2, banco: 'Banco 2', anio: 2023, referencia: 'Acta 2', archivo: 'acta2.pdf' },
        { id: 3, banco: 'Banco 1', anio: 2023, referencia: 'Acta 3', archivo: 'acta3.pdf' },
        { id: 4, banco: 'Banco 3', anio: 2022, referencia: 'Acta 4', archivo: 'acta4.pdf' }
    ];
};

onMounted(() => {
    obtenerActas(); // Llama la función cuando se monta el componente
});
</script>

<template>
    <AuthenticatedLayout>
      <!-- <Head> DENTRO del layout -->
      <Head title="Actas" />
  
      <!-- slot header -->
      <template #header>
        <div class="flex justify-between items-center">
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">Actas</h2>
          <NavLink
            :href="route('actas.create')"
          >
            Crear
          </NavLink>
        </div>
      </template>
  
      <!-- cuerpo de la página -->
      <div class="pt-2 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <TablaActas :actas="actas" />
      </div>
    </AuthenticatedLayout>
  </template>
