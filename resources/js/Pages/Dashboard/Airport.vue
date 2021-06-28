<template>
  <div>
    <h1 class="mb-8 font-bold text-3xl">Airport List</h1>
    <div class="mb-6 flex justify-between items-center">
        <div class="w-full max-w-md mr-4"></div>
</div>
<div class="bg-white rounded-md shadow overflow-x-auto">
   <table class="w-full whitespace-nowrap">
      <tr class="text-left font-bold">
         <th class="px-6 pt-6 pb-4">Name</th>
         <th class="px-6 pt-6 pb-4">Email</th>
         <th class="px-6 pt-6 pb-4">Phone</th>
         <th class="px-6 pt-6 pb-4">Pickup Date</th>
         <th class="px-6 pt-6 pb-4">Pickup</th>
         <th class="px-6 pt-6 pb-4">Dropoff</th>
         <th class="px-6 pt-6 pb-4">Return Date</th>
         <th class="px-6 pt-6 pb-4">Vehicle Type</th>
         <th class="px-6 pt-6 pb-4">Passengers</th>
         <th class="px-6 pt-6 pb-4">Flight</th>
         <th class="px-6 pt-6 pb-4">Luggage</th>
         <th class="px-6 pt-6 pb-4">Payment Type</th>
         <th class="px-6 pt-6 pb-4">Driver Note</th>
         <th class="px-6 pt-6 pb-4">Status</th>
      </tr>
      <tr v-for="values in airport_data.data" :key="values.id" class="hover:bg-gray-100 focus-within:bg-gray-100">
         <td class="border-t px-6 pt-6 pb-4">{{ values.name }}</td>
         <td class="border-t px-6 pt-6 pb-4">{{ values.email }}</td>
         <td class="border-t px-6 pt-6 pb-4">{{ values.phone }}</td>
         <td class="border-t px-6 pt-6 pb-4">{{ values.pickup_date }}</td>
         <td class="border-t px-6 pt-6 pb-4">{{ values.pickup }}</td>
         <td class="border-t px-6 pt-6 pb-4">{{ values.dropoff }}</td>
         <td class="border-t px-6 pt-6 pb-4">{{ values.return_date }}</td>
         <td class="border-t px-6 pt-6 pb-4">{{ values.vehicle_type }}</td>
         <td class="border-t px-6 pt-6 pb-4">{{ values.no_of_passengers }}</td>
         <td class="border-t px-6 pt-6 pb-4">{{ values.flight_details }}</td>
         <td class="border-t px-6 pt-6 pb-4">{{ values.luggage }}</td>
         <td class="border-t px-6 pt-6 pb-4">{{ values.paymnet_type }}</td>
         <td class="border-t px-6 pt-6 pb-4">{{ values.driver_note }}</td>
         <td class="border-t px-6 pt-6 pb-4">{{ values.status }}</td>
      </tr>
      <tr v-if="airport_data.data.length === 0">
         <td class="border-t px-6 py-4" colspan="14">No data found.</td>
      </tr>
   </table>
</div>
<pagination class="mt-6" :links="airport_data.links" />
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
   metaInfo: { title: 'Booking List' },
   components: {
      Icon,
      Pagination,
      SearchFilter,
   },
   layout: Layout,
   props: {
      airport_data: Object,
   },
   watch: {
      form: {
         handler: throttle(function() {
            let query = pickBy(this.form)
            this.$inertia.replace(this.route('airport_data', Object.keys(query).length ? query : { remember: 'forget' }))
         }, 150),
         deep: true,
      },
   }
}
</script>
