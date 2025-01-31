<x-app-layout>
<!-- Search and Sort Section -->
<div class="max-w-7xl mx-auto p-6 lg:p-8">
    <div class="space-y-4">
        <!-- Search Form -->
        <form action="{{ route('spares.index') }}" method="GET" class="mb-6">
            <div class="flex gap-4">
                <div class="flex-1">
                    <input 
                        type="text" 
                        name="search" 
                        placeholder="Search by name or part number..." 
                        value="{{ request('search') }}"
                        class="w-full rounded-lg border-gray-300 shadow-sm focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50"
                    >
                </div>
                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700 transition-colors duration-200">
                    Search
                </button>
            </div>
        </form>

        <!-- Sort Controls -->
        <div class="flex flex-wrap gap-2">
            <span class="text-gray-700">Sort by:</span>
            @php
                $sortOptions = [
                    'english_name' => 'English Name',
                    'myanmar_name' => 'Myanmar Name',
                    'part_number' => 'Part Number',
                    'price' => 'Price',
                    'created_at' => 'Date Added'
                ];
                $currentSort = request('sort', 'created_at');
                $direction = request('direction', 'desc');
            @endphp
            
            @foreach($sortOptions as $value => $label)
                <a 
                    href="{{ route('spares.index', [
                        'sort' => $value,
                        'direction' => $value === $currentSort && $direction === 'asc' ? 'desc' : 'asc',
                        'search' => request('search')
                    ]) }}"
                    class="px-3 py-1 text-sm rounded-full {{ $currentSort === $value ? 'bg-green-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200' }}"
                >
                    {{ $label }}
                    @if($currentSort === $value)
                        <span class="ml-1">{{ $direction === 'asc' ? '↑' : '↓' }}</span>
                    @endif
                </a>
            @endforeach
        </div>
    </div>
</div>

<!-- Spare Section -->
<div class="max-w-7xl mx-auto p-6 lg:p-8">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach ($spares as $spare)
            <a href="{{ route('spares.show', $spare) }}" class="block">
                <div class="bg-white rounded-lg shadow hover:shadow-lg transition-shadow duration-200">
                    <!-- Image Section -->
                    <div class="relative aspect-[4/3] w-full">
                        @if($spare->photo)
                            <img 
                                src="{{ $spare->photo }}" 
                                alt="{{ $spare->english_name }}"
                                class="w-full h-full object-cover rounded-t-lg"
                            >
                        @else
                            <div class="w-full h-full bg-gray-200 rounded-t-lg flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                        @endif
                    </div>

                    <!-- Content Section -->
                    <div class="p-4">
                        <!-- User info section - only show if user exists -->
                        @if($spare->user)
                            <div class="flex justify-between items-center mb-2">
                                <div>
                                    <span class="text-sm text-gray-600">{{ $spare->user->name }}</span>
                                    <small class="ml-2 text-sm text-gray-500">{{ $spare->created_at->format('j M Y') }}</small>
                                </div>
                            </div>
                        @endif

                        <p class="text-sm text-gray-600">{{ $spare->myanmar_name }}</p>
                        <h3 class="text-lg font-semibold mt-1">{{ $spare->english_name }}</h3>
                        <p class="text-sm text-gray-500 mt-1">{{ $spare->part_number }}</p>
                        
                        <!-- @if($spare->price)
                            <p class="text-sm text-gray-600 mt-2">{{ number_format($spare->price) }} MMK</p>
                        @endif -->
                    </div>
                </div>
            </a>
        @endforeach
    </div>

    <!-- Pagination -->
    @if (method_exists($spares, 'links'))
        <div class="mt-6">
            {{ $spares->links() }}
        </div>
    @endif
</div>

</x-app-layout>