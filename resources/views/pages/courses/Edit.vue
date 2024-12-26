<template layout="default">
    <div class="container w-[600px] bg-blue-400 shadow p-10 mx-auto mt-5">
        <h1 class="text-2xl font-bold mb-5 text-white text-center">
            Edit Course
        </h1>
        <form @submit.prevent="updateCourse">
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

            <div class="">
                <button
                    type="submit"
                    class="block w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                >
                    Update Course
                </button>
                <Link
                    class="block w-full bg-gray-500 hover:bg-gray-600 mt-1 text-center text-white font-bold py-2 px-4 rounded"
                    href="/courses"
                >
                    Back
                </Link>
            </div>
        </form>
    </div>
</template>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";
import { Link } from "@inertiajs/inertia-vue3";
import { Inertia } from "@inertiajs/inertia";

const props = defineProps({
    course: Object,
});

let form = useForm({
    course_name: props.course.course_name,
    course_description: props.course.course_description,
});

const updateCourse = () => {
    Inertia.post(`/courses/${props.course.id}`, {
        _method: "put",
        course_name: form.course_name,
        course_description: form.course_description,
    });
};
</script>
