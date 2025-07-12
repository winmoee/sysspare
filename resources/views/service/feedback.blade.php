<x-app-layout>
    <!-- Remove this line -->
    <!-- <meta http-equiv="Content-Security-Policy" content="frame-src 'self' https://www.youtube.com https://www.youtube-nocookie.com;"> -->

    <!-- Header Section -->
    <div class="bg-gradient-to-r from-green-600 to-green-700">
        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <h3 class="text-3xl font-bold text-white text-center">
                {{__('messages.feedback_title')}}
            </h3>
            <p class="text-green-100 text-center mt-2">{{__('messages.feedback_subtitle')}}</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto p-6 lg:p-8 space-y-12">
        <!-- Success/Error Messages -->
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('error') }}</span>
            </div>
        @endif

        <!-- Video Testimonials Section -->
        <div class="bg-white rounded-xl shadow-xl p-8">
            <div class="text-center mb-8">
                <h4 class="text-3xl font-bold text-gray-800 mb-4">{{__('messages.customer_testimonials')}}</h4>
                <p class="text-gray-600 max-w-2xl mx-auto">{{__('messages.testimonials_description')}}</p>
            </div>

            <!-- Video Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Video 1 -->
                <div class="video-container bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <div class="practical-video-wraper">
                        <div class="video-item">
                            <iframe style="height: 300px;" class="w-full h-64 rounded-t-xl"
                                    src="https://www.youtube-nocookie.com/embed/yBUSSs_DMfM"
                                    title="Customer Testimonial 1"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="text-lg font-semibold text-gray-800 text-center">Video Title 1</h5>
                    </div>
                </div>

                <!-- Video 2 -->
                <div class="video-container bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <div class="practical-video-wraper">
                        <div class="video-item">
                            <iframe style="height: 300px;" class="w-full h-64 rounded-t-xl"
                                    src="https://www.youtube-nocookie.com/embed/VRNsjaVnyOE"
                                    title="Customer Testimonial 2"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <div class="p-4">
                        <h5 class="text-lg font-semibold text-gray-800 text-center">Video Title 2</h5>
                    </div>
                </div>

                <!-- Video 3 -->
                <div class="video-container bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <div class="practical-video-wraper">
                        <div class="video-item">
                            <iframe style="height: 300px;" class="w-full h-64 rounded-t-xl"
                                    src="https://www.youtube-nocookie.com/embed/rM9zjop9170"
                                    title="Customer Testimonial 3"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Video 4 -->
                <div class="video-container bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <div class="practical-video-wraper">
                        <div class="video-item">
                            <iframe style="height: 300px;" class="w-full h-64 rounded-t-xl"
                                    src="https://www.youtube-nocookie.com/embed/WL_U5-O6sK0"
                                    title="Customer Testimonial 4"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Video 5 -->
                <div class="video-container bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <div class="practical-video-wraper">
                        <div class="video-item">
                            <iframe style="height: 300px;" class="w-full h-64 rounded-t-xl"
                                    src="https://www.youtube-nocookie.com/embed/nq3EfkunWwA"
                                    title="Customer Testimonial 5"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Video 6 -->
                <div class="video-container bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <div class="practical-video-wraper">
                        <div class="video-item">
                            <iframe style="height: 300px;" class="w-full h-64 rounded-t-xl"
                                    src="https://www.youtube-nocookie.com/embed/5K8jMeZb1rU"
                                    title="Customer Testimonial 6"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Video 7 -->
                <div class="video-container bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <div class="practical-video-wraper">
                        <div class="video-item">
                            <iframe style="height: 300px;" class="w-full h-64 rounded-t-xl"
                                    src="https://www.youtube-nocookie.com/embed/RzT0R9qLT3A"
                                    title="Customer Testimonial 7"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Video 8 -->
                <div class="video-container bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <div class="practical-video-wraper">
                        <div class="video-item">
                            <iframe style="height: 300px;" class="w-full h-64 rounded-t-xl"
                                    src="https://www.youtube-nocookie.com/embed/bvEWBqJD7Oc"
                                    title="Customer Testimonial 8"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Video 9 -->
                <div class="video-container bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <div class="practical-video-wraper">
                        <div class="video-item">
                            <iframe style="height: 300px;" class="w-full h-64 rounded-t-xl"
                                    src="https://www.youtube-nocookie.com/embed/tL-H2jKo6xU"
                                    title="Customer Testimonial 9"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>

                <!-- Video 10 -->
                <div class="video-container bg-white rounded-xl shadow-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <div class="practical-video-wraper">
                        <div class="video-item">
                            <iframe style="height: 300px;" class="w-full h-64 rounded-t-xl"
                                    src="https://www.youtube-nocookie.com/embed/4R8CgzT9v2M"
                                    title="Customer Testimonial 10"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Feedback Form -->
        <div class="bg-gradient-to-br from-green-50 to-blue-50 rounded-xl shadow-xl p-8">
            <div class="max-w-2xl mx-auto">
                <div class="text-center mb-8">
                    <h4 class="text-3xl font-bold text-gray-800 mb-4">{{__('messages.share_experience')}}</h4>
                    <p class="text-gray-600">{{__('messages.share_experience_description')}}</p>
                </div>

                <form action="{{ route('feedback.submit') }}" method="POST" class="space-y-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">{{__('messages.your_name')}} {{__('messages.required_field')}}</label>
                            <input type="text" name="name" value="{{ old('name') }}" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200 @error('name') border-red-500 @enderror">
                            @error('name')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">{{__('messages.email_address')}} {{__('messages.required_field')}}</label>
                            <input type="email" name="email" value="{{ old('email') }}" required
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200 @error('email') border-red-500 @enderror">
                            @error('email')
                                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">{{__('messages.your_feedback')}} {{__('messages.required_field')}}</label>
                        <textarea rows="5" name="feedback" required placeholder="{{__('messages.feedback_placeholder')}}"
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all duration-200 resize-none @error('feedback') border-red-500 @enderror">{{ old('feedback') }}</textarea>
                        @error('feedback')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="px-8 py-3 bg-gradient-to-r from-green-600 to-green-700 text-white font-semibold rounded-lg hover:from-green-700 hover:to-green-800 transform hover:scale-105 transition-all duration-200 shadow-lg hover:shadow-xl">
                            {{__('messages.submit_feedback')}}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
@include('layouts.footer')

<!-- Continue this pattern for all 10 videos... -->


