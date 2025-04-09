<template>
  <div class="page-actas">
    <h1>Gestor de Actas</h1>

    <ul>
      <li v-for="acta in actas" :key="acta.id" class="acta-card">
        <p><strong>Banco:</strong> {{ acta.banco }}</p>
        <p><strong>Año:</strong> {{ acta.anio }}</p>
        <p><strong>Referencia:</strong> {{ acta.referencia }}</p>
        <a
          class="btn-ver"
          :href="`/storage/actas/${acta.archivo}`"
          target="_blank"
          rel="noopener"
        >
          Ver PDF
        </a>
      </li>
    </ul>
  </div>
</template>

<script setup>
const props = defineProps({
  actas: {
    type: Array,
    required: true
  }
})
</script>

<style scoped>
.page-actas {
  max-width: 800px;
  margin: 2rem auto;
  padding: 1rem;
  font-family: sans-serif;
}

.acta-card {
  border: 1px solid #ccc;
  padding: 1rem;
  margin-bottom: 1rem;
  border-radius: 8px;
}

.btn-ver {
  display: inline-block;
  margin-top: 0.5rem;
  background: #2ecc71;
  color: white;
  padding: 0.5rem 1rem;
  text-decoration: none;
  border-radius: 4px;
  transition: 0.3s ease;
}

.btn-ver:hover {
  background: #27ae60;
}
</style>
