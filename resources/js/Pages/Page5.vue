<script setup>
    import { useForm, usePage } from '@inertiajs/vue3';
    import NavBar from './Components/NavBar.vue';
    const page = usePage();
    const form = useForm({ image_files: ""})

    function submit() {
        form.post('/UploadRequest', {
            forceFormData: true,
            preserveScroll: true,
            onSuccess: () => {
                alert(page.props.flash.message)
                alert(JSON.stringify(page.props.flash.share_data))
                form.reset()
            }
        })
    }
</script>
<template>
    <nav-bar/>
    <form @submit.prevent="submit" class="mt-10 bg-white p-2 mr-5 rounded-lg shadow-lg ml-4">
        <h2 class="ml-4 text-2xl font-semibold mb-6 text-gray-800">Files Upload</h2>

        <!-- Files Upload -->
        <div class="mb-4 ml-4">
            <label for="first_name" class="block text-gray-700 font-medium mb-2">First Name</label><br>
            <input type="file" @input="form.image_files = $event.target.files[0]" class="w-full px-4 py-2 border border-gray-300" required />
        </div>
        <progress class="w-full px-4 py-2" v-if="form.progress" :value="form.progress.percentage" max="100">
            {{ form.progress.percentage }}%
        </progress><br>

        <!-- Submit Button -->
        <button type="submit" class="ml-4 mt-3 px-3 py-1 rounded"> Submit </button>

        
    </form>
</template>