<script setup>
    import NavBar from './Components/NavBar.vue';
    import { useForm, usePage } from '@inertiajs/vue3';
    const page = usePage();
    const form = useForm({
        first_name: 'Tamzid',
        last_name: 'Hossain',
        email: 'tamzid@hossain.com',
    });
    
    function submit() {
        form.post('/PostBackRequest', {
            preserveScroll: true,
            onSuccess: () => {
                alert(page.props.flash.message);
                alert(JSON.stringify(page.props.flash.share_data));
                form.reset();
            }
        })
    }
</script>
<template>
    <nav-bar/>
    <form @submit.prevent="submit" class="mt-10 bg-white p-2 mr-5 rounded-lg shadow-lg ml-4">
        <h2 class="text-2xl font-semibold mb-6 text-gray-800">Contact Form</h2>

        <!-- First Name -->
        <div class="mb-4 ml-4">
            <label for="first_name" class="block text-gray-700 font-medium mb-2">First Name</label><br>
            <input type="text" id="first_name" name="first_name" v-model="form.first_name" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required />
        </div>

        <!-- Last Name -->
        <div class="mb-4 ml-4">
            <label for="last_name" class="block text-gray-700 font-medium mb-2">Last Name</label><br>
            <input type="text" id="last_name" name="last_name" v-model="form.last_name" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required />
        </div>

        <!-- Email -->
        <div class="mb-6 ml-4">
            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label><br>
            <input type="email" id="email" name="email" v-model="form.email" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500" required />
        </div>

        <!-- Submit Button -->
        <button type="submit" class="ml-4 mt-3 px-3 py-1 rounded"> Submit </button>
    </form>
</template>