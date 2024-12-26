<template layout>
    <div class="flex justify-between">
        <h1>Students List ({{ studentCount }})</h1>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mt-5">
        <div class="bg-white rounded-lg shadow-lg p-4">
            <div class="flex items-center">
                <div
                    class="rounded-full bg-blue-500 text-white flex items-center justify-center h-12 w-12"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        viewBox="0 0 640 512"
                    >
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"
                        />
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-medium">Total Students</h3>
                    <p class="text-gray-500 text-sm">
                        {{ studentCount }}
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-4">
            <div class="flex items-center">
                <div
                    class="rounded-full bg-green-500 text-white flex items-center justify-center h-12 w-12"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 640 512"
                        class="h-6 w-6"
                    >
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M320 32c-8.1 0-16.1 1.4-23.7 4.1L15.8 137.4C6.3 140.9 0 149.9 0 160s6.3 19.1 15.8 22.6l57.9 20.9C57.3 229.3 48 259.8 48 291.9v28.1c0 28.4-10.8 57.7-22.3 80.8c-6.5 13-13.9 25.8-22.5 37.6C0 442.7-.9 448.3 .9 453.4s6 8.9 11.2 10.2l64 16c4.2 1.1 8.7 .3 12.4-2s6.3-6.1 7.1-10.4c8.6-42.8 4.3-81.2-2.1-108.7C90.3 344.3 86 329.8 80 316.5V291.9c0-30.2 10.2-58.7 27.9-81.5c12.9-15.5 29.6-28 49.2-35.7l157-61.7c8.2-3.2 17.5 .8 20.7 9s-.8 17.5-9 20.7l-157 61.7c-12.4 4.9-23.3 12.4-32.2 21.6l159.6 57.6c7.6 2.7 15.6 4.1 23.7 4.1s16.1-1.4 23.7-4.1L624.2 182.6c9.5-3.4 15.8-12.5 15.8-22.6s-6.3-19.1-15.8-22.6L343.7 36.1C336.1 33.4 328.1 32 320 32zM128 408c0 35.3 86 72 192 72s192-36.7 192-72L496.7 262.6 354.5 314c-11.1 4-22.8 6-34.5 6s-23.5-2-34.5-6L143.3 262.6 128 408z"
                        />
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-medium">Total Courses</h3>
                    <p class="text-gray-500 text-sm">{{ courseCount }}</p>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-lg p-4">
            <div class="flex items-center">
                <div
                    class="rounded-full bg-red-500 text-white flex items-center justify-center h-12 w-12"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        viewBox="0 0 640 512"
                    >
                        <!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"
                        />
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-medium">Total Users</h3>
                    <p class="text-gray-500 text-sm">{{ userCount }}</p>
                </div>
            </div>
        </div>
    </div>
    <hr />
    <Link
        href="/students/create"
        class="btn bg-blue-400 hover:bg-blue-500 float-right mt-5 mb-4"
        >Add Student</Link
    >
    <div class="py-4">
        <table class="table mt-3">
            <thead>
                <tr>
                    <th>Student ID No.</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Mobile Number</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Age</th>
                    <th>Course</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="student of students.data" :key="student.id">
                    <td>{{ student.student_id }}</td>
                    <td>{{ student.student_last_name }}</td>
                    <td>{{ student.student_first_name }}</td>
                    <td>{{ student.student_mobile_number }}</td>
                    <td>{{ student.student_email }}</td>
                    <td>{{ student.student_address}}</td>
                    <td>{{ student.student_age }}</td>
                    <td>{{ student.course.course_name }}</td>
                    <td>
                        <span class="flex">
                            <Link
                            :href="'/students/view/' + student.id"
                            class="ml-1 btn bg-yellow-600 hover:bg-yellow-800"
                        >
                            View
                        </Link>
                        <Link
                            :href="'/students/edit/' + student.id"
                            class="btn bg-sky-600 ml-1 hover:bg-sky-700"
                        >
                            Edit
                        </Link>
                        <Link
                            :href="'/students/delete/' + student.id"
                            class="ml-1 btn bg-red-700 hover:bg-red-800"
                        >
                            Delete
                        </Link>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="flex justify-between">
        <div>
            Showing <strong>{{ students.data.length }}</strong> entries.
        </div>
        <nav
            class="isolate inline-flex -space-x-px rounded-md shadow-sm"
            aria-label="Pagination"
        >
            <ul class="pagination">
                <li
                    v-for="page in students.links"
                    :key="page.url"
                    :class="{
                        ' relative z-10 inline-flex items-center text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0':
                            !page.active && page.label !== 'Previous',
                        ' relative z-10 inline-flex items-center text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600':
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
                            'cursor-pointer relative z-10 inline-flex items-center bg-blue-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600':
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
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";

defineProps({
    students: Array,
    studentCount: Number,
    courseCount: Number,
    userCount: Number,
});
</script>
