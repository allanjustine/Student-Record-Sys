<template layout="default">
    <div class="container bg-blue-400 w-[500px] shadow p-10 mx-auto mt-5">
        <h1 class="text-2xl font-bold mb-5 text-white text-center">
            Create Student
        </h1>
        <form @submit.prevent="add">
            <div class="flex flex-col mb-4">
                <label class="font-bold text-white mb-2" for="student_id"
                    >Student ID No. :</label
                >
                <input
                    type="number"
                    id="student_id"
                    v-model="form.student_id"
                    class="border py-2 px-3 text-grey-darkest"
                />
                <span v-if="form.errors.student_id" class="text-red-500">{{
                    form.errors.student_id
                }}</span>
            </div>
            <div class="flex flex-col mb-4">
                <label class="font-bold text-white mb-2" for="student_first_name"
                    >First Name:</label
                >
                <input
                    type="text"
                    id="student_first_name"
                    v-model="form.student_first_name"
                    class="border py-2 px-3 text-grey-darkest"
                />
                <span v-if="form.errors.student_first_name" class="text-red-500">{{
                    form.errors.student_first_name
                }}</span>
            </div>

            <div class="flex flex-col mb-4">
                <label class="font-bold text-white mb-2" for="student_last_name"
                    >Last Name:</label
                >
                <input
                    v-model="form.student_last_name"
                    type="text"
                    name="student_last_name"
                    id="student_last_name"
                    class="border py-2 px-3 text-grey-darkest"
                />
                <span v-if="form.errors.student_last_name" class="text-red-500">{{
                    form.errors.student_last_name
                }}</span>
            </div>

            <div class="flex flex-col mb-4">
                <label class="font-bold text-white mb-2" for="student_mobile_number"
                    >Mobile Number:</label
                >
                <input
                    v-model="form.student_mobile_number"
                    type="text"
                    name="student_mobile_number"
                    id="student_mobile_number"
                    class="border py-2 px-3 text-grey-darkest"
                />
                <span v-if="form.errors.student_mobile_number" class="text-red-500">{{
                    form.errors.student_mobile_number
                }}</span>
            </div>
            <div class="flex flex-col mb-4">
                <label class="font-bold text-white mb-2" for="student_email"
                    >Email:</label
                >
                <input
                    v-model="form.student_email"
                    type="student_email"
                    name="student_email"
                    id="student_email"
                    class="border py-2 px-3 text-grey-darkest"
                />
                <span v-if="form.errors.student_email" class="text-red-500">{{
                    form.errors.student_email
                }}</span>
            </div>

            <div class="flex flex-col mb-4">
                <label class="font-bold text-white mb-2" for="course_id"
                    >Course:</label
                >
                <select
                    v-model="form.course_id"
                    name="course_id"
                    id="course_id"
                    class="border py-2 px-3 text-grey-darkest"
                >
                    <option value="" hidden="true">Select Course</option>
                    <option disabled>Select Course</option>
                    <option
                        v-for="course in courses"
                        :key="course.id"
                        :value="course.id"
                    >
                        {{ course.course_name }}
                    </option>
                </select>
                <span v-if="form.errors.course_id" class="text-red-500">{{
                    form.errors.course_id
                }}</span>
            </div>

            <div class="flex items-center justify-between">
                <button
                    type="submit"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                >
                    Create Student
                </button>

                <button type="reset" class="btn secondary">Clear</button>
            </div>
        </form>
    </div>
</template>

<script setup>
import { useForm } from "@inertiajs/inertia-vue3";

const props = defineProps({
    courses: Object,
});

let form = useForm({
    student_id: "",
    student_first_name: "",
    student_last_name: "",
    student_mobile_number: "",
    student_email: "",
    course_id: "",
});

const add = () => {
    form.post("/students");
};
</script>
