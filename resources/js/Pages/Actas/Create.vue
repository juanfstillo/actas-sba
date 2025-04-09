<script setup>
import { reactive } from 'vue'
import { useForm } from '@inertiajs/vue3'

const form = useForm({
  banco: '',
  anio: '',
  referencia: '',
  archivo: null,
})
</script>

<template>
  <div class="p-6">
    <h1 class="text-2xl font-bold mb-4">Subir nueva acta</h1>

    <form @submit.prevent="form.post('/actas')" enctype="multipart/form-data">
      <div class="mb-4">
        <label>Banco</label>
        <input v-model="form.banco" type="text" class="w-full border rounded p-2" />
      </div>

      <div class="mb-4">
        <label>Año</label>
        <input v-model="form.anio" type="text" class="w-full border rounded p-2" />
      </div>

      <div class="mb-4">
        <label>Referencia</label>
        <input v-model="form.referencia" type="text" class="w-full border rounded p-2" />
      </div>

      <div class="mb-4">
        <label>Archivo PDF</label>
        <input type="file" @change="e => form.archivo = e.target.files[0]" class="w-full border rounded p-2" />
      </div>

      <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">
        Subir Acta
      </button>
    </form>
  </div>
</template>
