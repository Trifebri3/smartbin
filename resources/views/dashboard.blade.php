<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <!-- Overall Status -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <!-- System Status -->
                <div class="bg-white overflow-hidden shadow-sm rounded-lg border border-gray-100">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider">System</h3>
                            <span class="inline-flex items-center rounded-full bg-agronex-100 px-2.5 py-0.5 text-xs font-medium text-agronex-800">
                                ONLINE
                            </span>
                        </div>
                        <div class="mt-4 flex items-baseline text-2xl font-semibold text-gray-900">
                            Bin 1
                        </div>
                    </div>
                </div>

                <!-- Ultrasonic -->
                <div class="bg-white overflow-hidden shadow-sm rounded-lg border border-gray-100">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Ultrasonic</h3>
                            <span class="inline-flex items-center rounded-full bg-red-100 px-2.5 py-0.5 text-xs font-medium text-red-800">
                                FULL
                            </span>
                        </div>
                        <div class="mt-4 flex items-baseline text-3xl font-semibold text-gray-900">
                            82%
                        </div>
                    </div>
                </div>

                <!-- Servo -->
                <div class="bg-white overflow-hidden shadow-sm rounded-lg border border-gray-100">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Servo</h3>
                            <span class="inline-flex items-center rounded-full bg-yellow-100 px-2.5 py-0.5 text-xs font-medium text-yellow-800">
                                OPEN
                            </span>
                        </div>
                        <div class="mt-4 flex items-baseline text-3xl font-semibold text-gray-900">
                            90&deg;
                        </div>
                    </div>
                </div>

                <!-- Camera -->
                <div class="bg-white overflow-hidden shadow-sm rounded-lg border border-gray-100">
                    <div class="p-6">
                        <div class="flex items-center justify-between">
                            <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wider">Camera</h3>
                            <span class="inline-flex items-center rounded-full bg-agronex-100 px-2.5 py-0.5 text-xs font-medium text-agronex-800">
                                ONLINE
                            </span>
                        </div>
                        <div class="mt-4">
                            <div class="text-sm font-medium text-gray-900">Last Detection: <span class="font-bold">Plastic</span></div>
                            <div class="text-xs text-gray-500 mt-1">Confidence: 94%</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Activity Placeholder -->
            <div class="bg-white overflow-hidden shadow-sm rounded-lg border border-gray-100">
                <div class="p-6 border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900">Recent Activity</h3>
                </div>
                <div class="p-6">
                    <ul class="space-y-4">
                        <li class="flex space-x-3">
                            <div class="flex-shrink-0">
                                <span class="h-8 w-8 rounded-full bg-blue-100 flex items-center justify-center ring-8 ring-white">
                                    <svg class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                </span>
                            </div>
                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                <div>
                                    <p class="text-sm text-gray-500">Camera detected <span class="font-medium text-gray-900">Plastic</span></p>
                                </div>
                                <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                    <time datetime="2026-09-10T10:31">10:31:02</time>
                                </div>
                            </div>
                        </li>
                        <li class="flex space-x-3">
                            <div class="flex-shrink-0">
                                <span class="h-8 w-8 rounded-full bg-agronex-100 flex items-center justify-center ring-8 ring-white">
                                    <svg class="h-5 w-5 text-agronex-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                    </svg>
                                </span>
                            </div>
                            <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                <div>
                                    <p class="text-sm text-gray-500">Servo opened (90&deg;)</p>
                                </div>
                                <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                    <time datetime="2026-09-10T10:30">10:30:22</time>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
