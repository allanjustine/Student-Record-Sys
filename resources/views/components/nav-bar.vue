<template>
    <section class="bg-blue-400">
        <div class="wrapper flex">
            <div id="brand" class="text-lg text-white font-bold py-4" style="font-family: cursive;">
                Students Record App
            </div>
            <nav class="main-nav ml-auto">
                <Link class="main-link" href="/">Home</Link>
                <!-- <Link v-if="user" class="main-link" href="/users"
                    >Users</Link
                > -->
                <Link v-if="user" class="main-link" href="/students"
                    >Students</Link
                >
                <Link v-if="user" class="main-link" href="/courses"
                    >Courses</Link
                >
            </nav>
            <div class="flex">
                <!-- <Link
                    v-if="!user"
                    class="py-4 text-white font-semibold hover:bg-blue-900 px-2"
                    href="/login"
                    >Log In</Link
                > -->
                <Link
                    v-if="user"
                    class="py-4 text-white font-semibold hover:bg-blue-500 px-2"
                    href="/logout"
                    method="post"
                    as="button"
                    >Log Out</Link
                >
            </div>
        </div>
    </section>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";
import { defineProps } from "vue";

defineProps({
    user: "",
});
</script>
