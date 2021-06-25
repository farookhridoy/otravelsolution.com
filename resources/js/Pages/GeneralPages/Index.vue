<template>
  <div>
    <h1 class="mb-8 font-bold text-3xl">Generel Pages</h1>
    <div class="mb-6 flex justify-between items-center">

      <inertia-link class="btn-indigo" :href="route('generalpages.create')">
        <span>Create</span>
        <span class="hidden md:inline">Pages</span>
    </inertia-link>
</div>
<div class="bg-white rounded-md shadow overflow-x-auto">
  <table class="w-full whitespace-nowrap">
    <tr class="text-left font-bold">
      <th class="px-6 pt-6 pb-4">Name</th>
      <th class="px-6 pt-6 pb-4">Slug</th>
      <th class="px-6 pt-6 pb-4">Status</th>
      <th class="px-6 pt-6 pb-4">Images</th>
      <th class="px-6 pt-6 pb-4">Action</th>
  </tr>
  <tr v-for="values in generalpages.data" :key="values.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
      <td class="border-t">
          {{ values.title }}
      </td>
      <td class="border-t">

          {{ values.slug }}

      </td>
      <td class="border-t">

          {{ values.status }}

      </td>
      <td class="border-t">

      </td>
      <td class="border-t">
        <inertia-link class="px-4 flex items-center" :href="route('generalpages.edit', values.id)" tabindex="-1">
          <icon name="cheveron-right" class="block w-6 h-6 fill-gray-400" /> Edit
      </inertia-link>
      <button v-if="!values.deleted_at" class="text-red-600 hover:underline" tabindex="-1" type="button" @click="destroy">
        <icon name="trash" class="block w-6 h-6 fill-gray-400" />Delete
    </button>
  </td>
</tr>
<tr v-if="generalpages.data.length === 0">
  <td class="border-t px-6 py-4" colspan="4">No data found.</td>
</tr>
</table>
</div>
<pagination class="mt-6" :links="generalpages.links" />
</div>
</template>

<script>
import Icon from '@/Shared/Icon'
import pickBy from 'lodash/pickBy'
import Layout from '@/Shared/Layout'
import throttle from 'lodash/throttle'
import mapValues from 'lodash/mapValues'
import Pagination from '@/Shared/Pagination'
import SearchFilter from '@/Shared/SearchFilter'

export default {
  metaInfo: { title: 'Generel Pages' },
  components: {
    Icon,
    Pagination,
    SearchFilter,
},
layout: Layout,
props: {
    generalpages: Object,
},
watch: {
    form: {
      handler: throttle(function() {
        let query = pickBy(this.form)
        this.$inertia.replace(this.route('generalpages', Object.keys(query).length ? query : { remember: 'forget' }))
    }, 150),
      deep: true,
  },
},
methods: {
    destroy() {
      if (confirm('Are you sure you want to delete this organization?')) {
         generalpages._method = 'DELETE';
        this.$inertia.post('/generalpages/' + generalpages.id, generalpages)
      }
    },
    
  },
}
</script>
