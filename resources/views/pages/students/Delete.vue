<template layout="default">
    <div class="container bg-blue-400 w-[500px] shadow p-10 mx-auto mt-5">
        <h1 class="text-2xl font-bold text-white mb-5 text-center">
            Delete Student
        </h1>
        <hr />
        <br />
        <span
            >Are you sure you want to delete
            <strong
                ><span
                    >{{ student.student_first_name }},
                    {{ student.student_last_name }}</span
                ></strong
            >
            into students list?</span
        >
        <br />
        <button
            @click="deleteStudent"
            style="width: 100%"
            class="mt-10 bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded form-control"
        >
            Yes, delete
        </button>
        <Link
            href="/students"
            class="block w-full bg-gray-500 hover:bg-gray-600 mt-1 text-center text-white font-bold py-2 px-4 rounded"
        >
            Cancel
        </Link>
    </div>
</template>

<script setup>
import { Inertia } from "@inertiajs/inertia";
import { Link } from "@inertiajs/inertia-vue3";

const props = defineProps({
    student: Object,
});

const deleteStudent = () => {
    Inertia.post(`/students/${props.student.id}`, {
        _method: "delete",
    });
};
</script>
