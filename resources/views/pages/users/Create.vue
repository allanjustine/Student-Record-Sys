<template layout="default">
    <div class="bg-red-500 mt-60">
        <!-- <h1>List of Users</h1> -->
        <!-- <Link href="/users/create" class="btn-primary">Create User</Link> -->
        <p class="text-center text-xl text-white">Sorry Under Maintenance :(</p>
    </div>
    <!-- <h1>Create User</h1>
    <hr> -->

    <!-- <div class="w-[500px] shadow p-4 ">
        <form @submit.prevent="submit">
            <div clas="mb-3">
                <label for="username">User Name</label>
                <input v-model="form.username" type="text" class="field" id="username">
                <div class="text-sm text-red-500 italic" v-if="form.errors.username">{{ form.errors.username }}</div>
            </div>
            <div clas="mb-3">
                <label for="password">Password</label>
                <input v-model="form.password" type="password" class="field" id="password">
                <div class="text-sm text-red-500 italic" v-if="form.errors.password">{{ form.errors.password }}</div>
            </div>
            <div class="mb-3">
                <label for="fullname">Full Name</label>
                <input v-model="form.fullname" type="text" class="field" id="fullname">
                <div class="text-sm text-red-500 italic" v-if="form.errors.fullname">{{ form.errors.fullname }}</div>
            </div>
            <div class="mb-4 flex flex-col">
                    <label class="font-bold text-white" for="mobile_number"
                        >Mobile Number:</label
                    >
                    <input
                        v-model="form.mobile_number"
                        type="text"
                        class="field"
                    />
                    <div
                        class="text-sm text-red-500 italic"
                        v-if="form.errors.mobile_number"
                    >
                        {{ form.errors.mobile_number }}
                    </div>
                </div>
                <div class="mb-4 flex flex-col">
                    <label class="font-bold text-white" for="role">Role:</label>
                    <select name="role" id="role" v-model="form.role" class="field">
                        <option value="">Select an option</option>
                        <option value="Maintenance">Maintenance</option>
                        <option value="IT Support">IT Support</option>
                        <option value="Administrative">Administrative</option>
                    </select>
                    <div
                        class="text-sm text-red-500 italic"
                        v-if="form.errors.role"
                    >
                        {{ form.errors.role }}
                    </div>
                </div>
            <div>
                <button class="btn btn-primary" type="submit">
                    Create User
                </button>
            </div>
        </form>
    </div> -->
</template>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";

let form = useForm({
    username: "",
    password: "",
    fullname: "",
    designation: "",
    department: "",
});

const submit = () => {
    form.post("/users");
};
</script>
