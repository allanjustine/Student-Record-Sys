<template layout>
    <img
        src="/images/slide3.jpg"
        alt="image"
        style="width: 70%; margin-top: -32px"
        class="mx-auto"
    />
    <div class="home-page mt-3 text-center">
        <h1>Welcome, {{ auth.user ? auth.user.fullname : "Guest" }}!</h1>
        <p>This is the home page of the Student Record App.</p>
        <p>
            You can start managing student records and perform various actions.
        </p>
        <p>Total Users: {{ userCount }}</p>
        <p>Total Students: {{ studentCount }}</p>
        <p>Total Courses: {{ courseCount }}</p>
        <br>
        <Link
            v-if="!auth.user"
            class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded"
            href="/login"
            >Log In</Link
        >
        <Link
            v-if="!auth.user"
            class="ml-1 bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded"
            href="/register"
            >Register</Link
        >
    </div>
</template>

<script setup>
import { Link, usePage } from "@inertiajs/inertia-vue3";

const props = defineProps({
    auth: Array,
    userCount: Number,
    studentCount: Number,
    courseCount: Number,
});

const user = usePage().props.auth;

console.log(user);
</script>
