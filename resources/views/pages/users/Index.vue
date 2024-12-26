<template layout>
    <div class="bg-red-500 mt-60">
        <!-- <h1>List of Users</h1> -->
        <!-- <Link href="/users/create" class="btn-primary">Create User</Link> -->
        <p class="text-center text-xl text-white">
            Sorry Under Maintenance :(
        </p>
    </div>
<!--
    <hr class="my-3" />

    <div class="flex space-x-4">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Mobile Number</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user of users.data" :key="user.id">
                    <td>{{ user.id }}</td>
                    <td>{{ user.fullname }}</td>
                    <td>{{ user.mobile_number }}</td>
                    <td>{{ user.role }}</td>
                </tr>
            </tbody>
        </table>
        <div class="overflow-hidden duration-300" :class="toggle">
            <button class="btn primary" @click="toggleCreate">...</button>
            <div :class="isHidden">
                <div class="mt-4 bg-indigo-900 p-6">
                    <h3 class="text-xl mt-4 text-center text-white">
                        User Creation Form
                    </h3>
                    <form @submit.prevent="submit">
                        <div class="mb-3">
                            <label class="font-bold text-white" for="username"
                                >User Name</label
                            >
                            <input
                                v-model="form.username"
                                type="text"
                                class="field"
                                id="username"
                            />
                            <div
                                class="text-sm text-red-500 italic"
                                v-if="form.errors.username"
                            >
                                {{ form.errors.username }}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="font-bold text-white" for="password"
                                >Password</label
                            >
                            <input
                                v-model="form.password"
                                type="password"
                                class="field"
                                id="password"
                            />
                            <div
                                class="text-sm text-red-500 italic"
                                v-if="form.errors.password"
                            >
                                {{ form.errors.password }}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="font-bold text-white" for="fullname"
                                >Full Name</label
                            >
                            <input
                                v-model="form.fullname"
                                type="text"
                                class="field"
                                id="fullname"
                            />
                            <div
                                class="text-sm text-red-500 italic"
                                v-if="form.errors.fullname"
                            >
                                {{ form.errors.fullname }}
                            </div>
                        </div>
                        <div class="mb-4 flex flex-col">
                            <label
                                class="font-bold text-white"
                                for="mobile_number"
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
                            <label class="font-bold text-white" for="role"
                                >Role:</label
                            >
                            <select
                                name="role"
                                id="role"
                                v-model="form.role"
                                class="field"
                            >
                                <option value="">Select an option</option>
                                <option value="Maintenance">Maintenance</option>
                                <option value="IT Support">IT Support</option>
                                <option value="Administrative">
                                    Administrative
                                </option>
                            </select>
                            <div
                                class="text-sm text-red-500 italic"
                                v-if="form.errors.role"
                            >
                                {{ form.errors.role }}
                            </div>
                        </div>
                        <div class="flex space-x-2">
                            <button class="btn primary" type="submit">
                                Create User
                            </button>
                            <button type="reset" class="btn secondary">
                                Clear
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-between">
        <div>
            Showing <strong>{{ users.data.length }}</strong> entries.
        </div>
        <nav
            class="isolate inline-flex -space-x-px rounded-md shadow-sm"
            aria-label="Pagination"
        >
            <ul class="pagination">
                <li
                    v-for="page in users.links"
                    :key="page.url"
                    :class="{
                        ' relative z-10 inline-flex items-center text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0':
                            !page.active && page.label !== 'Previous',
                        ' relative z-10 inline-flex items-center text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600':
                            page.active,
                        'opacity-50 cursor-not-allowed relative z-10 inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-300 ring-1 ring-inset ring-gray-300':
                            !page.url && page.label === 'Previous',
                    }"
                >
                    <Link
                        v-if="page.url"
                        :href="page.url"
                        :class="{
                            'cursor-pointer relative z-10 inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0':
                                !page.active && page.label !== 'Previous',
                            'cursor-pointer relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600':
                                page.active,
                            'opacity-50 cursor-not-allowed relative z-10 inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-300 ring-1 ring-inset ring-gray-300':
                                !page.url && page.label === 'Previous',
                        }"
                    >
                        <span v-if="page.label.includes('Next')"
                            >Next <i class="fas fa-chevron-right"></i
                        ></span>

                        <span v-else-if="page.label.includes('Previous')">
                            <i class="fas fa-chevron-left"></i> Previous
                        </span>
                        <span v-else class="page-link">{{ page.label }}</span>
                    </Link>
                    <span
                        v-else-if="page.label.includes('Previous')"
                        class="cursor-not-allowed px-4 py-2"
                        ><i class="fas fa-chevron-left"></i> Previous</span
                    >
                    <span v-else class="cursor-not-allowed px-4 py-2"
                        >Next <i class="fas fa-chevron-right"></i
                    ></span>
                </li>
            </ul>
        </nav>
    </div> -->
</template>

<!-- <script setup>
// import {Link} from '@inertiajs/inertia-vue3'
import { ref } from "vue";
import { useForm } from "@inertiajs/inertia-vue3";
import { Link } from "@inertiajs/inertia-vue3";

let toggle = ref("w-[50px]");
let isHidden = ref("hidden");

defineProps({
    users: Array,
});

let toggleCreate = () => {
    toggle.value = toggle.value == "w-[50%]" ? "w-[50px]" : "w-[50%]";
    isHidden.value = isHidden.value == "hidden" ? "block" : "hidden";
    console.log("Toggle...", toggle.value);
};

let form = useForm({
    username: "",
    password: "",
    fullname: "",
    role: "",
    mobile_number: "",
});

const submit = () => {
    form.post("/users");
    form.reset();
};
</script> -->
