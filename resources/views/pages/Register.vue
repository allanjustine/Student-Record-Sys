<template layout="default">
    <div class="py-4">
        <div
            class="w-[450px] bg-blue-400 border mx-auto border-gray-400 shadow p-8 shadow rounded"
        >
            <h1 class="text-4xl mb-5 text-center text-white">
                User Registration
            </h1>
            <form @submit.prevent="submit">
                <div class="mb-4 flex flex-col">
                    <label class="text-white" for="username">User Name:</label>
                    <input v-model="form.username" type="text" class="field" />
                    <div
                        class="text-sm text-red-500 italic"
                        v-if="form.errors.username"
                    >
                        {{ form.errors.username }}
                    </div>
                </div>
                <div class="mb-4 flex flex-col">
                    <label class="text-white" for="fullname">Full Name:</label>
                    <input v-model="form.fullname" type="text" class="field" />
                    <div
                        class="text-sm text-red-500 italic"
                        v-if="form.errors.fullname"
                    >
                        {{ form.errors.fullname }}
                    </div>
                </div>
                <div class="mb-4 flex flex-col">
                    <label class="text-white" for="password">Password:</label>
                    <input
                        v-model="form.password"
                        type="password"
                        class="field"
                    />
                    <div
                        class="text-sm text-red-500 italic"
                        v-if="form.errors.password"
                    >
                        {{ form.errors.password }}
                    </div>
                </div>
                <div class="mb-4 flex flex-col">
                    <label class="text-white" for="mobile_number"
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
                    <label class="text-white" for="role">Role:</label>
                    <select
                        name="role"
                        id="role"
                        v-model="form.role"
                        class="field"
                    >
                        <option value="" hidden="true">Select your role</option>
                        <option disabled>Select your role</option>
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
                <div class="mb-4">
                    <button
                        type="submit"
                        class="btn bg-blue-500 hover:bg-blue-700"
                    >
                        Register
                    </button>
                </div>
                <div>
                    <span class="text-white mt-2"
                        >Already have an account? Go to
                        <strong
                            ><u
                                ><Link
                                    class="main-link"
                                    style="color: aquamarine"
                                    href="/login"
                                    >login</Link
                                ></u
                            ></strong
                        ></span
                    >
                </div>
                <div
                    class="text-sm text-red-500 italic"
                    v-if="form.errors.authentication"
                >
                    {{ form.errors.authentication }}
                </div>
            </form>
        </div>
    </div>
</template>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import { Link } from "@inertiajs/inertia-vue3";

let form = useForm({
    username: "",
    password: "",
    fullname: "",
    role: "",
    mobile_number: "",
});

const submit = () => {
    form.post("/register");
};
</script>
