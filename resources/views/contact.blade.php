<x-storefront-layout>
    <section class="bg-gray-50 py-16 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h1 class="text-3xl sm:text-4xl font-bold text-gray-900 mb-4 relative inline-block">
                    Get In Touch
                    <span class="absolute -bottom-2 left-1/2 -translate-x-1/2 w-16 h-1 bg-primary-600 rounded"></span>
                </h1>
                <p class="text-gray-600 mt-6 leading-relaxed">
                    We'd love to hear from you. Whether you have a question about our concerns, pricing, or anything else, our team is ready to answer all your questions.
                </p>
            </div>

            <!-- Content -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-12">
                <!-- Form Side -->
                <div class="bg-white rounded-2xl shadow-sm p-8 sm:p-10 border border-gray-100">
                    <h2 class="text-2xl font-bold text-gray-900 mb-8 text-primary-700">Send us a message</h2>
                    
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <div>
                                <label for="first_name" class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                <input type="text" id="first_name" name="first_name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition shadow-sm" placeholder="John">
                            </div>
                            <div>
                                <label for="last_name" class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                <input type="text" id="last_name" name="last_name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition shadow-sm" placeholder="Doe">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <div class="relative">
                                <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition shadow-sm" placeholder="john@example.com">
                                <div class="absolute inset-y-0 right-0 flex items-center pr-4 pointer-events-none text-gray-400">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <input type="text" id="subject" name="subject" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition shadow-sm" placeholder="How can we help you?">
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-primary-500 focus:border-primary-500 transition shadow-sm resize-none" placeholder="Your message here..."></textarea>
                        </div>

                        <button type="submit" class="w-full bg-primary-600 text-white font-bold py-3.5 px-6 rounded-lg hover:bg-primary-700 transition shadow-md">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Info Side -->
                <div class="bg-primary-900 rounded-2xl shadow-xl p-8 sm:p-10 text-white flex flex-col">
                    <h2 class="text-2xl font-bold mb-10 text-primary-200">Contact Information</h2>
                    
                    <div class="space-y-8 flex-grow">
                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 bg-primary-800 rounded-full flex items-center justify-center shrink-0 border border-primary-700">
                                <i class="fa-solid fa-location-dot text-primary-200"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-white mb-1">Office Address</h3>
                                <p class="text-primary-100 text-sm leading-relaxed">Dag-189, Satarkul Road, Uttar Badda, Gulshan-01 Dhaka-1212</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 bg-primary-800 rounded-full flex items-center justify-center shrink-0 border border-primary-700">
                                <i class="fa-solid fa-phone text-primary-200"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-white mb-1">Phone</h3>
                                <p class="text-primary-100 text-sm">+88 01705 264 853</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 bg-primary-800 rounded-full flex items-center justify-center shrink-0 border border-primary-700">
                                <i class="fa-solid fa-envelope text-primary-200"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-white mb-1">Email Address</h3>
                                <p class="text-primary-100 text-sm">homefreshagroprocessor@gmail.com</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-5">
                            <div class="w-12 h-12 bg-primary-800 rounded-full flex items-center justify-center shrink-0 border border-primary-700">
                                <i class="fa-solid fa-globe text-primary-200"></i>
                            </div>
                            <div>
                                <h3 class="font-bold text-lg text-white mb-1">Website</h3>
                                <p class="text-primary-100 text-sm">homefreshagroprocessor.com</p>
                            </div>
                        </div>
                    </div>

                    <!-- Map -->
                    <div class="mt-12 rounded-xl overflow-hidden border border-primary-700 relative">
                        <iframe 
                            src="https://www.google.com/maps?q=Satarkul+Road,+Uttar+Badda,+Dhaka&output=embed" 
                            width="100%" 
                            height="200" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade"
                            class="block w-full">
                        </iframe>
                        <a href="https://maps.app.goo.gl/mUVXM74qwhBrXNq1A?g_st=aw" target="_blank" class="absolute top-3 left-3 bg-white text-gray-800 text-xs font-bold px-3 py-2 rounded shadow-md hover:bg-gray-100 transition flex items-center gap-2">
                            <span>Maps</span> <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-storefront-layout>
