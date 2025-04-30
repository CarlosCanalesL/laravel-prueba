<script setup>
import { Link, usePage } from '@inertiajs/vue3';

const { notas } = defineProps(['notas']);
</script>

<template>
  <div>
    <h1 class="text-2xl font-bold mb-4">Notas</h1>
    <Link href="/notas/create" class="text-blue-500">+ Nueva Nota</Link>

    <ul class="mt-4">
      <li v-for="nota in notas" :key="nota.id" class="mb-2 p-2 border">
        <h2 class="font-bold">{{ nota.titulo }}</h2>
        <p>{{ nota.contenido }}</p>
        <Link :href="`/notas/${nota.id}/edit`" class="text-sm text-blue-600">Editar</Link>
      </li>
    </ul>
  </div>
</template>
