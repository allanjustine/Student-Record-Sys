<template layout="default">
    <div class="container bg-blue-400 w-[400px] shadow p-10 mx-auto mt-5">
        <h1 class="text-2xl font-bold mb-5 text-white text-center">
            Create Course
        </h1>
        <form @submit.prevent="add">
            <div class="flex flex-col mb-4">
                <label class="font-bold text-white mb-2" for="course_name"
                    >Course Name:</label
                >
                <input
                    type="text"
                    id="course_name"
                    v-model="form.course_name"
                    class="border py-2 px-3 text-grey-darkest"
                />
                <span v-if="form.errors.course_name" class="text-red-500">{{
                    form.errors.course_name
                }}</span>
            </div>

            <div class="flex flex-col mb-4">
                <label
                    class="font-bold text-white mb-2"
                    for="course_description"
                    >Course Description:</label
                >
                <input
                    v-model="form.course_description"
                    type="text"
                    name="course_description"
                    id="course_description"
                    class="border py-2 px-3 text-grey-darkest"
                />
                <span
                    v-if="form.errors.course_description"
                    class="text-red-500"
                    >{{ form.errors.course_description }}</span
                >
            </div>

            <div class="flex items-center justify-between">
                <button
                    type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                >
                    Create Course
                </button>
                <button type="reset" class="btn secondary">Clear</button>
            </div>
        </form>
    </div>
</template>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";

let form = useForm({
    course_name: "",
    course_description: ""
});

const add = () => {
    form.post("/courses");
};
</script>
