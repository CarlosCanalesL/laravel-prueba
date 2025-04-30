<script setup>
import { useForm } from '@inertiajs/vue3';

const { nota } = defineProps(['nota']);

const form = useForm({
  titulo: nota.titulo,
  contenido: nota.contenido,
});

function submit() {
  form.put(`/notas/${nota.id}`);
}
</script>

<template>
  <div>
    <h1 class="text-2xl mb-4">Editar Nota</h1>

    <form @submit.prevent="submit">
      <div>
        <label>Título:</label>
        <input v-model="form.titulo" class="border p-2 w-full" />
        <div v-if="form.errors.titulo" class="text-red-500">{{ form.errors.titulo }}</div>
      </div>

      <div class="mt-4">
        <label>Contenido:</label>
        <textarea v-model="form.contenido" class="border p-2 w-full" rows="5"></textarea>
        <div v-if="form.errors.contenido" class="text-red-500">{{ form.errors.contenido }}</div>
      </div>

      <button type="submit" class="mt-4 bg-green-600 text-white px-4 py-2">Actualizar</button>
    </form>
  </div>
</template>
