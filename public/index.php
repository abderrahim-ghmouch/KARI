<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - KARI</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
        
        * {
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
        }
        
        .card-glass {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(20px);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
        }
        
        .input-modern {
            transition: all 0.3s ease;
        }
        
        .input-modern:focus {
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(252, 182, 159, 0.3);
        }
        
        .btn-gradient {
            background: linear-gradient(135deg, #ff6b6b 0%, #ff8e53 100%);
            transition: all 0.3s ease;
        }
        
        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 107, 107, 0.4);
        }
        
        .social-btn {
            transition: all 0.3s ease;
        }
        
        .social-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        }
        
        .floating {
            animation: floating 3.0s ease-in-out infinite;
        }
        
        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-50px); }
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-6">
    
    <div class="w-full max-w-5xl">
        <div class="grid md:grid-cols-5 gap-8 items-center">
            
            <!-- Left Illustration Section -->
            <div class="hidden md:flex md:col-span-2 flex-col items-center justify-center">
                <div class="floating mb-8">
                    <svg class="w-64 h-64" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="100" cy="100" r="80" fill="#FFE5D9" opacity="0.6"/>
                        <path d="M60 90C60 75 70 65 85 65C95 65 102 70 105 78C108 70 115 65 125 65C140 65 150 75 150 90V120C150 135 135 145 120 145H90C75 145 60 135 60 120V90Z" fill="#FF8E53"/>
                        <circle cx="85" cy="85" r="5" fill="white"/>
                        <circle cx="125" cy="85" r="5" fill="white"/>
                        <path d="M90 105C95 110 105 110 110 105" stroke="white" stroke-width="3" stroke-linecap="round"/>
                        <rect x="70" y="130" width="70" height="4" rx="2" fill="#FF6B6B" opacity="0.6"/>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-orange-800 mb-3 text-center">Welcome to KARI</h2>
                <p class="text-orange-700 text-center text-lg opacity-90">Your journey to amazing stays begins here</p>
            </div>

            <!-- Registration Form -->
            <div class="md:col-span-3">
                <div class="card-glass rounded-3xl p-8 md:p-10">
                    
                    <!-- Mobile Logo -->
                    <div class="md:hidden text-center mb-8">
                        <h1 class="text-4xl font-bold bg-gradient-to-r from-orange-500 to-red-500 bg-clip-text text-transparent">KARI</h1>
                    </div>
                    
                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-2">Create your account</h3>
                        <p class="text-gray-500">Sign up to explore unique places</p>
                    </div>

                    <form action="" id="registerForm" class="space-y-5">
        

                    
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">First Name</label>
                                <input type="text" id="firstName" required
                                    class="input-modern w-full px-4 py-3.5 bg-orange-50 border-2 border-orange-100 rounded-2xl focus:border-orange-300 focus:bg-white outline-none text-gray-800">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Last Name</label>
                                <input type="text" id="lastName" required
                                    class="input-modern w-full px-4 py-3.5 bg-orange-50 border-2 border-orange-100 rounded-2xl focus:border-orange-300 focus:bg-white outline-none text-gray-800">
                            </div>
                        </div>

                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" id="email" required
                                class="input-modern w-full px-4 py-3.5 bg-orange-50 border-2 border-orange-100 rounded-2xl focus:border-orange-300 focus:bg-white outline-none text-gray-800"
                                placeholder="you@example.com">
                        </div>

                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Password</label>
                            <input type="password" id="password" required
                                class="input-modern w-full px-4 py-3.5 bg-orange-50 border-2 border-orange-100 rounded-2xl focus:border-orange-300 focus:bg-white outline-none text-gray-800">
                            <p class="text-xs text-gray-500 mt-2 ml-1">Minimum 8 characters</p>
                        </div>

                        
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Confirm Password</label>
                            <input type="password" id="confirmPassword" required
                                class="input-modern w-full px-4 py-3.5 bg-orange-50 border-2 border-orange-100 rounded-2xl focus:border-orange-300 focus:bg-white outline-none text-gray-800">
                        </div>

                    
                        <div class="flex items-start pt-2">
                            <input type="checkbox" id="terms" required 
                                class="mt-1 w-5 h-5 text-orange-500 border-2 border-gray-300 rounded focus:ring-2 focus:ring-orange-300">
                            <label for="terms" class="ml-3 text-sm text-gray-600">
                                I agree to the <a href="#" class="text-orange-600 font-medium hover:underline">Terms</a> and <a href="#" class="text-orange-600 font-medium hover:underline">Privacy Policy</a>
                            </label>
                        </div>


                        <button type="submit" class="btn-gradient w-full py-4 rounded-2xl text-white font-semibold text-lg shadow-lg mt-6">
                            Create Account
                        </button>

                      
                        <div class="relative my-6">
                            <div class="absolute inset-0 flex items-center">
                                <div class="w-full border-t-2 border-gray-200"></div>
                            </div>
                            <div class="relative flex justify-center">
                                <span class="px-4 bg-white text-sm text-gray-500 font-medium">or sign up with</span>
                            </div>
                        </div>

                   
                        <div class="grid grid-cols-2 gap-4">
                            <button type="button" class="social-btn flex items-center justify-center py-3.5 bg-white border-2 border-gray-200 rounded-2xl hover:border-orange-300">
                                <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24">
                                    <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                    <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                    <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                                    <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                                </svg>
                                <span class="font-medium text-gray-700">Google</span>
                            </button>
                            <button type="button" class="social-btn flex items-center justify-center py-3.5 bg-white border-2 border-gray-200 rounded-2xl hover:border-orange-300">
                                <svg class="w-5 h-5 mr-2" fill="#1877F2" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                                <span class="font-medium text-gray-700">Facebook</span>
                            </button>
                        </div>

                    </form>

                    
                    <p class="text-center text-gray-600 mt-8">
                        Already have an account? 
                        <a href="#" class="text-orange-600 font-semibold hover:underline ml-1">Sign in</a>
                    </p>
                </div>
            </div>

        </div>
    </div>


</body>
</html>