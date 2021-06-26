<template>
  <div>
    <h1 class="mb-8 font-bold text-3xl">
      <inertia-link class="text-indigo-400 hover:text-indigo-600" :href="route('generalpages')">General Pages</inertia-link>
      <span class="text-indigo-400 font-medium">/</span> Create
    </h1>
    <div class="bg-white rounded-md shadow overflow-hidden max-w-3xl">
      <form @submit.prevent="store">
        <div class="p-8 -mr-6 -mb-8 flex flex-wrap">
          <text-input id="title" v-model="form.title" :error="form.errors.title" class="pr-12 pb-8 w-full " label="Title" />
          
          <textarea-input v-model="form.short_description" :error="form.errors.short_description" class="pr-12 pb-8 w-full" label="Short Description" />
          <textarea-input v-model="form.description" :error="form.errors.description" class="pr-12 pb-8 w-full" label="Description" />

           <select-input v-model="form.status" :error="form.errors.status" class="pr-6 pb-8 w-full lg:w-1/2" label="Status">
            <option :value="null" />
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
            <option value="cancel">Cancel</option>
          </select-input>

          <text-input v-model="form.meta_title" :error="form.errors.meta_title" class="pr-6 pb-8 w-full lg:w-1/2" label="Meta Title" />
          <textarea-input v-model="form.meta_description" :error="form.errors.meta_description" class="pr-12 pb-8 w-full " label="Meta Description" />
          <text-input v-model="form.meta_image_link" :error="form.errors.meta_image_link" class="pr-6 pb-8 w-full lg:w-1/2" label="Meta Image Link" />

         <file-input v-model="form.image_link" :error="form.errors.image_link" class="pr-6 pb-8 w-full lg:w-1/2" type="file" accept="image/*" label="Photo" />
          
        </div>
        <div class="px-8 py-4 bg-gray-50 border-t border-gray-100 flex justify-end items-center">
          <loading-button :loading="form.processing" class="btn-indigo" type="submit">Create Pages</loading-button>
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
  metaInfo: { title: 'Create General Pages' },
  components: {
    LoadingButton,
    SelectInput,
    TextInput,
    TextareaInput,
    FileInput,
  },
  layout: Layout,
  remember: 'form',
  data() {
    return {
      form: this.$inertia.form({
        title: null,
        slug: null,
        short_description: null,
        description: null,
        image_link: null,
        meta_title: null,
        meta_description: null,
        meta_image_link: null,
        status: null,
      }),
    }
  },
  methods: {
    store() {
      this.form.post(this.route('generalpages.store'))
    }
  },
}
</script>
