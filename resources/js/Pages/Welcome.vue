<template>
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <inertia-link v-if="$page.props.user" :href="route('dashboard')" class="text-sm text-gray-700 underline">
                Dashboard
            </inertia-link>

            <template v-else>
                <inertia-link :href="route('login')" class="text-sm text-gray-700 underline">
                    Log in
                </inertia-link>

                <inertia-link v-if="canRegister" :href="route('register')" class="ml-4 text-sm text-gray-700 underline">
                    Register
                </inertia-link>
            </template>
        </div>
    
        
        <div class="flex  items-center  pt-8  sm:pt-0">
            <svg class=" mr-5 h-16 w-auto sm:h-20" viewBox="0 0 512 512" fill="none" xmlns="http://www.w3.org/2000/svg" >
                <g clip-path="url(#clip0)" fill="#EF3B2D">
                    <path d="M256 70.008c-8.284 0-15 6.716-15 15v53.83c0 8.284 6.716 15 15 15s15-6.716 15-15v-53.83c0-8.284-6.716-15-15-15zM162.717 481.24h-62.54c-8.284 0-15-6.716-15-15V365.173c0-8.284 6.716-15 15-15s15 6.716 15 15v86.066h47.54c8.284 0 15 6.716 15 15s-6.716 15.001-15 15.001z" fill="#47419b"/><path d="M411.823 481.24h-60.632c-8.284 0-15-6.716-15-15s6.716-15 15-15h45.632v-86.066c0-8.284 6.716-15 15-15s15 6.716 15 15V466.24c0 8.284-6.716 15-15 15z" fill="#2c3b73"/><path d="M411.823 305.038c-8.284 0-15-6.716-15-15V200.92H115.177v89.118c0 8.284-6.716 15-15 15s-15-6.716-15-15V185.92c0-8.284 6.716-15 15-15h311.646c8.284 0 15 6.716 15 15v104.118c0 8.284-6.716 15-15 15z" fill="#47419b"/><path d="M411.823 170.92H255.55v30h141.273v89.118c0 8.284 6.716 15 15 15s15-6.716 15-15V185.92c0-8.284-6.716-15-15-15z" fill="#2c3b73"/><path d="M497 280.319H326.646c-8.284 0-15 6.716-15 15v61.521c0 8.284 6.716 15 15 15H497c8.284 0 15-6.716 15-15v-61.521c0-8.284-6.716-15-15-15z" fill="#ffb44b"/><path d="M200.354 356.84v-61.521c0-8.284-6.716-15-15-15H15c-8.284 0-15 6.716-15 15v61.521c0 8.284 6.716 15 15 15h170.354c8.284 0 15-6.715 15-15z" fill="#ffd830"/><path d="M170.823 91.521h170.353c8.284 0 15-6.716 15-15V15c0-8.284-6.716-15-15-15H170.823c-8.284 0-15 6.716-15 15v61.521c0 8.284 6.716 15 15 15z" fill="#5ce6b8"/><path d="M341.177 0H256v91.521h85.177c8.284 0 15-6.716 15-15V15c0-8.284-6.716-15-15-15z" fill="#3dccb4"/><path d="M341.177 420.479H170.823c-8.284 0-15 6.716-15 15V497c0 8.284 6.716 15 15 15h170.354c8.284 0 15-6.716 15-15v-61.521c0-8.284-6.716-15-15-15z" fill="#5ce6b8"/><path d="M341.177 420.479H256V512h85.177c8.284 0 15-6.716 15-15v-61.521c0-8.284-6.716-15-15-15z" fill="#3dccb4"/><circle cx="256" cy="185.92" fill="#ff6680" transform="rotate(-67.48 256.073 185.857)" r="63.054"/><path d="M319.054 185.92c0-34.768-28.286-63.053-63.054-63.053v126.107c34.768 0 63.054-28.286 63.054-63.054z" fill="#e62e6b"/>
                </g>
                
            </svg>
            <span class="align-middle text-6xl font-bold text-red-400  ">i</span>
            <span class="align-middle text-6xl font-bold text-green-400  ">Bag</span>
        </div>
    </div>
    
</template>

<style scoped>
    .bg-gray-100 {
        background-color: #f7fafc;
        background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
    }

    .border-gray-200 {
        border-color: #edf2f7;
        border-color: rgba(237, 242, 247, var(--tw-border-opacity));
    }

    .text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }

    .text-gray-500 {
        color: #a0aec0;
        color: rgba(160, 174, 192, var(--tw-text-opacity));
    }

    .text-gray-600 {
        color: #718096;
        color: rgba(113, 128, 150, var(--tw-text-opacity));
    }

    .text-gray-700 {
        color: #4a5568;
        color: rgba(74, 85, 104, var(--tw-text-opacity));
    }

    .text-gray-900 {
        color: #1a202c;
        color: rgba(26, 32, 44, var(--tw-text-opacity));
    }

    @media (prefers-color-scheme: dark) {
        .dark\:bg-gray-800 {
            background-color: #2d3748;
            background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
        }

        .dark\:bg-gray-900 {
            background-color: #1a202c;
            background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
        }

        .dark\:border-gray-700 {
            border-color: #4a5568;
            border-color: rgba(74, 85, 104, var(--tw-border-opacity));
        }

        .dark\:text-white {
            color: #fff;
            color: rgba(255, 255, 255, var(--tw-text-opacity));
        }

        .dark\:text-gray-400 {
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--tw-text-opacity));
        }
    }
</style>

<script>
    export default {
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        }
    }
</script>
