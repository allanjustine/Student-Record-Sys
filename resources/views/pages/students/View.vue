<template layout="default">
    <div class="container bg-blue-400 w-[600px] shadow p-10 mx-auto m-10">
        <h1 class="text-2xl font-bold text-white mb-5 text-center">
            View Student: {{ student.student_last_name }},
            {{ student.student_first_name }}
        </h1>
        <hr />
        <div v-if="student" class="text-white mt-2">
            <p><strong>Student ID No.:</strong> {{ student.student_id }}</p>
            <p><strong>Email:</strong> {{ student.student_email }}</p>
            <p>
                <strong>Mobile Number:</strong>
                {{ student.student_mobile_number }}
            </p>
            <p>
                <strong>Address:</strong>
                {{ student.student_address }}
            </p>
            <p>
                <strong>Age:</strong>
                {{ student.student_age }}
            </p>

            <h2 class="text-lg font-bold text-white mt-5">
                Course Taken: {{ student.course.course_name }}
            </h2>
        </div>
        <br />
        <Link
            class="block w-full bg-gray-500 hover:bg-gray-600 mt-1 text-center text-white font-bold py-2 px-4 rounded"
            href="/students"
        >
            Back
        </Link>
    </div>
</template>

<script setup>
import { Inertia } from "@inertiajs/inertia";
import { Link } from "@inertiajs/inertia-vue3";

const props = defineProps({
    student: Array,
    courses: Array,
});
</script>
