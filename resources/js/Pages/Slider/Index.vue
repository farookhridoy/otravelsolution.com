<template>
  <div>
    <h1 class="mb-8 font-bold text-3xl">Slider Pages</h1>
    <div class="mb-6 flex justify-between items-center">
        <div class="w-full max-w-md mr-4"></div>
      <inertia-link class="btn-indigo" :href="route('slider.create')">
        <span>Create</span>
        <span class="hidden md:inline">Slider</span>
    </inertia-link>
</div>
<div class="bg-white rounded-md shadow overflow-x-auto">
   <table class="w-full whitespace-nowrap">
      <tr class="text-left font-bold">
         <th class="px-6 pt-6 pb-4">Name</th>
         <th class="px-6 pt-6 pb-4">Slug</th>
         <th class="px-6 pt-6 pb-4">Caption</th>
         <th class="px-6 pt-6 pb-4">Route</th>
         <th class="px-6 pt-6 pb-4">Status</th>
         <th class="px-6 pt-6 pb-4">Images</th>
         <th class="px-6 pt-6 pb-4">Action</th>
      </tr>
      <tr v-for="values in slider.data" :key="values.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
         <td class="border-t px-6 pt-6 pb-4">{{ values.title }}</td>
         <td class="border-t px-6 pt-6 pb-4">{{ values.slug }}</td>
         <td class="border-t px-6 pt-6 pb-4">{{ values.caption }}</td>
         <td class="border-t px-6 pt-6 pb-4">{{ values.route }}</td>
         <td class="border-t px-6 pt-6 pb-4">{{ values.status }}</td>
         <td class="border-t px-6 pt-6 pb-4"><img :src="`/uploads/slider/${values.image_link}`" v-if="values.image_link" :alt="values.title" class="h-20 w-20">
         </td>
         <td class="border-t px-6 pt-6 pb-4">
            <inertia-link :href="route('slider.edit', values.id)" class="btn-indigo hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-2">Edit</inertia-link>

            <button v-if="!values.deleted_at" @click="destroy(values)" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
         </td>
      </tr>
      <tr v-if="slider.data.length === 0">
         <td class="border-t px-6 py-4" colspan="7">No data found.</td>
      </tr>
   </table>
</div>
<pagination class="mt-6" :links="slider.links" />
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
   metaInfo: { title: 'Slider' },
   components: {
      Icon,
      Pagination,
      SearchFilter,
   },
   layout: Layout,
   props: {
      slider: Object,
   },
   watch: {
      form: {
         handler: throttle(function() {
            let query = pickBy(this.form)
            this.$inertia.replace(this.route('slider', Object.keys(query).length ? query : { remember: 'forget' }))
         }, 150),
         deep: true,
      },
   },
   methods: {
      destroy: function (data) {
        if (!confirm('Are you sure want to remove?')) return;
        data._method = 'DELETE';
        this.$inertia.post('/slider/' + data.id, data)
     }

   },
}
</script>
