<template>
  <div>
    <h1 class="mb-8 font-bold text-3xl">
      <inertia-link class="text-indigo-400 hover:text-indigo-600" :href="route('slider')">Slider</inertia-link>
      <span class="text-indigo-400 font-medium">/</span>
      {{ form.title }}
       
    </h1>
    
     <div class="bg-white rounded-md shadow overflow-hidden max-w-3xl">
      <form @submit.prevent="update">
        <div class="p-8 -mr-6 -mb-8 flex flex-wrap">
          <text-input id="title" v-model="form.title" :error="form.errors.title" class="pr-12 pb-8 w-full " label="Title" />
          
          <textarea-input v-model="form.caption" :error="form.errors.caption" class="pr-12 pb-8 w-full" label="Caption" />


           <select-input v-model="form.status" name="status" :error="form.errors.status" class="pr-6 pb-8 w-full lg:w-1/2" label="Status">
            <option v-for="sts in status" :value="sts">{{sts}}</option>
          </select-input>

          <text-input v-model="form.route" :error="form.errors.route" class="pr-6 pb-8 w-full lg:w-1/2" label="Route" />
        
          <text-input v-model="form.short_order" :error="form.errors.short_order" type="number" class="pr-6 pb-8 w-full lg:w-1/2" label="Short order" />

         <file-input v-model="form.image_link" :error="form.errors.image_link" class="pr-6 pb-8 w-full lg:w-1/2" type="file" accept="image/*" label="Photo" />

         <img :src="`/uploads/slider/${slider.image_link}`" v-if="slider.image_link" :alt="slider.title" class="block w-30 h-20 ml-4">
          
        </div>
        <div class="px-8 py-4 bg-gray-50 border-t border-gray-100 flex justify-end items-center">
          <loading-button :loading="form.processing" class="btn-indigo" type="submit">Update Pages</loading-button>
        </div>
      </form>
    </div>
    
  </div>
</template>

<script>
import Layout from '@/Shared/Layout'
import TextInput from '@/Shared/TextInput'
import SelectInput from '@/Shared/SelectInput'
import LoadingButton from '@/Shared/LoadingButton'
import TextareaInput from '@/Shared/TextareaInput'
import FileInput from '@/Shared/FileInput'

export default {
  metaInfo() {
    return { title: this.form.title }
  },
  components: {
    LoadingButton,
    SelectInput,
    TextInput,
    TextareaInput,
    FileInput,
  },
  layout: Layout,
  props: {
    slider: Object,
    status,
  },
  remember: 'form',
  data() {
    return {
      form: this.$inertia.form({
        _method: 'put',
        title: this.slider.title,
        caption: this.slider.caption,
        route: this.slider.route,
        image_link: '',
        short_order: this.slider.short_order,
        status: this.slider.status,
      }),
    }
  },
  methods: {
    update() {
      this.form.post(this.route('slider.update', this.slider.id))
    }
  },
}
</script>
