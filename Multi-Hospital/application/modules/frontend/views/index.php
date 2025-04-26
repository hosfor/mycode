<!DOCTYPE html>
<html lang="en">
<?php
$settings = $this->frontend_model->getSettings();
$title = explode(' ', $settings->title);
?>

<head>
  <base href="<?php echo base_url(); ?>" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $settings->title; ?></title>

    <!-- SEO Meta Tags -->
    <meta name="description" content="<?php echo $settings->description; ?>" />
    <meta name="keywords" content="software development, HMS software, hospital management system, custom software development" />
    <meta name="author" content="<?php echo $settings->title; ?>">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo $settings->title; ?>" />
    <meta property="og:description" content="<?php echo $settings->description; ?>" />
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo base_url(); ?>">
    <meta property="og:site_name" content="<?php echo $settings->title; ?>">
    
    <!-- Stylesheets -->
  <link rel="stylesheet" href="new-fnt/index.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/country-select-js@2.1.0/build/css/countrySelect.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: {
                            50: '#f0f9ff',
                            100: '#e0f2fe',
                            200: '#bae6fd',
                            300: '#7dd3fc',
                            400: '#38bdf8',
                            500: '#0ea5e9',
                            600: '#0284c7',
                            700: '#0369a1',
                            800: '#075985',
                            900: '#0c4a6e',
                        },
                        secondary: {
                            50: '#f8fafc',
                            900: '#0f172a',
                        }
                    },
                    boxShadow: {
                        'custom': '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
                        'custom-lg': '0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.1)',
                        'custom-2xl': '0 25px 50px -12px rgba(0, 0, 0, 0.25)',
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-20px)' },
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #0ea5e9 0%, #3b82f6 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .hero-gradient {
            background: radial-gradient(circle at 30% 107%, rgba(14, 165, 233, 0.05) 0%, rgba(255, 255, 255, 0) 50%),
                        radial-gradient(circle at 70% 40%, rgba(59, 130, 246, 0.05) 0%, rgba(255, 255, 255, 0) 50%);
        }
        
        .service-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
        }
        
        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        
        .animate-blob {
            animation: blob 7s infinite;
        }
        
        .animation-delay-2000 {
            animation-delay: 2s;
        }
        
        .animation-delay-4000 {
            animation-delay: 4s;
        }

        body{
            overflow-x: hidden;
        }

        @media (max-width: 640px) {
            body {
                overflow-x: hidden;
            }
        }

        /* Hide horizontal scrollbar on mobile */
        html, body {
            max-width: 100%;
            overflow-x: hidden;
            position: relative;
        }

        /* Ensure content stays within viewport width */
        .container {
            width: 100%;
            max-width: 100vw;
            margin: 0 auto;
            padding-left: 1rem;
            padding-right: 1rem;
            box-sizing: border-box;
        }

        /* Handle overflow on grid layouts */
        .grid {
            width: 100%;
            margin: 0;
            padding: 0;
        }

        @media (max-width: 640px) {
            .grid {
                margin-left: 0;
                margin-right: 0;
            }
        }


    </style>
</head>

<body class="font-sans antialiased text-secondary-900 selection:bg-primary-200 selection:text-primary-900">
    <!-- Navbar -->
    <nav class="bg-white/80 backdrop-blur-md shadow-custom fixed w-full z-50 border-b border-gray-200/50">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex justify-between items-center h-20">
                <div class="flex-shrink-0">
                    <a href="#" class="flex items-center space-x-3">
                        <div class="relative w-10 h-10">
                            <div class="absolute inset-0 bg-gradient-to-r from-primary-600 to-primary-500 rounded-lg transform rotate-6 transition-transform group-hover:rotate-12"></div>
                            <div class="absolute inset-0 bg-white rounded-lg shadow-sm flex items-center justify-center">
                                <span class="text-xl font-bold text-primary-600">
                                    <?php echo substr($settings->title, 0, 1); ?>
                                </span>
                            </div>
                        </div>
                        <div>
                            <span class="text-2xl font-extrabold">
                                <span class="text-secondary-900"><?php echo $title[0]; ?></span><span class="text-primary-600"><?php echo isset($title[1]) ? $title[1] : ''; ?></span>
                            </span>
                            <span class="hidden lg:block text-xs text-gray-500 -mt-1">Healthcare Management Solutions</span>
                        </div>
                    </a>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-primary-600 transition-colors duration-200 font-medium">Home</a>
                    <a href="#features" class="text-gray-700 hover:text-primary-600 transition-colors duration-200 font-medium"><?php echo lang('service'); ?></a>
                    <a href="#package" class="text-gray-700 hover:text-primary-600 transition-colors duration-200 font-medium"><?php echo lang('package'); ?></a>
                    <a href="#review" class="text-gray-700 hover:text-primary-600 transition-colors duration-200 font-medium"><?php echo lang('review'); ?></a>
                    <a href="#contact" class="text-gray-700 hover:text-primary-600 transition-colors duration-200 font-medium"><?php echo lang('contact'); ?></a>

                    <?php if ($this->ion_auth->logged_in() == '1') { ?>
                        <a href="home" target="_blank" class="inline-flex items-center px-4 py-2 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 transition duration-300">
                            <i class="fas fa-user mr-2"></i>
                            <?php
                            $current_user = $this->ion_auth->get_user_id();
                            $username = $this->db->get_where('users', array('id' => $current_user))->row()->username;
                            echo $username;
                            ?>
                        </a>
                    <?php } else { ?>
                        <a href="auth/login" target="_blank" class="inline-flex items-center px-4 py-2 bg-green-600 text-white font-medium rounded-lg hover:bg-green-700 transition duration-300">
                            <i class="fas fa-sign-in-alt mr-2"></i>
                            <?php echo lang('login'); ?>
                        </a>
                    <?php } ?>

                    <a href="#register" class="inline-flex items-center px-6 py-2.5 bg-primary-600 text-white font-medium rounded-lg hover:bg-primary-700 transition duration-300 shadow-sm">
                        <?php echo lang('register_hospital'); ?>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="w-10 h-10 flex items-center justify-center text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                        <svg class="w-6 h-6 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-b border-gray-200 py-4">
            <div class="px-4 space-y-3">
                <a href="#home" class="block px-4 py-2 text-gray-700 hover:bg-primary-50 rounded-lg transition-colors">Home</a>
                <a href="#features" class="block px-4 py-2 text-gray-700 hover:bg-primary-50 rounded-lg transition-colors"><?php echo lang('service'); ?></a>
                <a href="#package" class="block px-4 py-2 text-gray-700 hover:bg-primary-50 rounded-lg transition-colors"><?php echo lang('package'); ?></a>
                <a href="#review" class="block px-4 py-2 text-gray-700 hover:bg-primary-50 rounded-lg transition-colors"><?php echo lang('review'); ?></a>
                <a href="#contact" class="block px-4 py-2 text-gray-700 hover:bg-primary-50 rounded-lg transition-colors"><?php echo lang('contact'); ?></a>
                
                <?php if ($this->ion_auth->logged_in() == '1') { ?>
                    <a href="home" target="_blank" class="block px-4 py-2 text-white bg-green-600 hover:bg-green-700 rounded-lg transition-colors">
                        <i class="fas fa-user mr-2"></i>
                        <?php
                        $current_user = $this->ion_auth->get_user_id();
                        $username = $this->db->get_where('users', array('id' => $current_user))->row()->username;
                        echo $username;
                        ?>
                    </a>
                <?php } else { ?>
                    <a href="auth/login" target="_blank" class="block px-4 py-2 text-white bg-green-600 hover:bg-green-700 rounded-lg transition-colors">
                        <i class="fas fa-sign-in-alt mr-2"></i>
                        <?php echo lang('login'); ?>
                    </a>
                <?php } ?>

                <a href="#register" class="block px-4 py-2 text-white bg-primary-600 hover:bg-primary-700 rounded-lg transition-colors font-medium">
                    <?php echo lang('register_hospital'); ?>
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen bg-gradient-to-b from-gray-50 to-white pt-32">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 left-0 w-full h-full bg-grid-pattern opacity-[0.02]"></div>
            <div class="absolute top-1/4 right-1/3 w-96 h-96 bg-primary-600/30 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
            <div class="absolute top-1/3 right-1/2 w-96 h-96 bg-purple-300/30 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
            <div class="absolute top-1/2 left-1/4 w-96 h-96 bg-pink-300/30 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-4000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center py-20">
                <!-- Left Column - Content -->
                <div class="text-center lg:text-left">
                    <!-- Announcement Badge -->
                    <a href="#features" class="inline-flex items-center px-4 py-2 bg-primary-50 rounded-full mb-8 group cursor-pointer hover:bg-primary-100 transition-all duration-300">
                        <span class="animate-pulse w-2 h-2 bg-primary-600 rounded-full mr-2"></span>
                        <span class="text-primary-800 font-medium">Discover Our Latest Features</span>
                        <svg class="w-4 h-4 ml-2 text-primary-600 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>

                    <h1 class="text-5xl lg:text-7xl font-extrabold mb-8">
                        <span class="block mb-2 text-secondary-900">Empowering</span>
                        <span class="relative inline-block">
                            <span class="relative z-10 gradient-text">Healthcare</span>
                            <div class="absolute -bottom-2 left-0 w-full h-3 bg-primary-200/60 -rotate-1"></div>
                        </span>
                        <span class="block mt-2 text-secondary-900">Management</span>
                    </h1>
                    <p class="text-xl text-gray-600 mb-10 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                        Streamline your healthcare facility with our comprehensive hospital management system. Efficient, secure, and user-friendly.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start mb-12">
                        <a href="#register" class="group inline-flex items-center px-8 py-4 bg-primary-600 text-white rounded-xl hover:bg-primary-700 transition-all duration-300 transform hover:scale-105">
                            <span class="font-semibold text-lg"><?php echo lang('start_your_free_trial'); ?></span>
                            <svg class="w-6 h-6 ml-2 transform transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                        <a href="#package" class="group inline-flex items-center px-8 py-4 bg-white text-gray-900 rounded-xl hover:bg-gray-50 transition-all duration-300 border-2 border-gray-200 transform hover:scale-105">
                            <span class="font-semibold text-lg"><?php echo lang('view_pricing'); ?></span>
                            <svg class="w-6 h-6 ml-2 transform transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </a>
                    </div>

                    <!-- Stats Section -->
                    <div class="grid grid-cols-3 gap-8">
                        <div class="text-center">
                            <div class="text-4xl font-bold text-primary-600 mb-2">1000+</div>
                            <div class="text-sm text-gray-600"><?php echo lang('active_hospitals'); ?></div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-primary-600 mb-2">50M+</div>
                            <div class="text-sm text-gray-600"><?php echo lang('patients_served'); ?></div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold text-primary-600 mb-2">24/7</div>
                            <div class="text-sm text-gray-600"><?php echo lang('support_available'); ?></div>
                        </div>
                    </div>
                </div>

                <!-- Right Column - Visual Elements -->
                <div class="relative hidden lg:block">
                    <!-- Main Image Grid -->
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Large Feature Image -->
                        <div class="col-span-2">
                            <div class="relative rounded-2xl overflow-hidden shadow-2xl transform hover:scale-[1.02] transition-transform duration-500">
                                <img src="https://images.unsplash.com/photo-1516549655169-df83a0774514?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                                     alt="Modern Hospital" 
                                     class="w-full h-64 object-cover">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                                <div class="absolute bottom-4 left-4 text-white">
                                    <div class="text-sm font-medium">Featured</div>
                                    <div class="text-lg font-bold">Modern Healthcare</div>
                                </div>
                            </div>
                        </div>

                        <!-- Smaller Images -->
                        <div class="relative rounded-2xl overflow-hidden shadow-xl transform hover:scale-[1.02] transition-transform duration-500">
                            <img src="https://images.unsplash.com/photo-1581594693702-fbdc51b2763b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80" 
                                 alt="Medical Technology" 
                                 class="w-full h-48 object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        </div>
                        <div class="relative rounded-2xl overflow-hidden shadow-xl transform hover:scale-[1.02] transition-transform duration-500">
                            <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2080&q=80" 
                                 alt="Patient Care" 
                                 class="w-full h-48 object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                        </div>
                    </div>

                    <!-- Floating Tech Cards -->
                    <div class="absolute -top-6 -right-6 bg-white p-4 rounded-xl shadow-xl animate-float">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-user-md text-2xl text-blue-600"></i>
                            </div>
                            <div>
                                <div class="text-sm font-medium text-gray-500">Latest Tech</div>
                                <div class="text-lg font-bold text-blue-600">HMS Pro</div>
                            </div>
                        </div>
                    </div>

                    <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-xl shadow-xl animate-float animation-delay-2000">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                                <i class="fas fa-heartbeat text-2xl text-green-600"></i>
                            </div>
                            <div>
                                <div class="text-sm font-medium text-gray-500">Powered by</div>
                                <div class="text-lg font-bold text-green-600">AI Care</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="relative py-24 bg-gradient-to-b from-white to-gray-50" id="features">
        <!-- Background Elements -->
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 -left-64 w-96 h-96 bg-indigo-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
            <div class="absolute top-0 -right-64 w-96 h-96 bg-purple-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-64 left-64 w-96 h-96 bg-pink-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="max-w-3xl mx-auto text-center mb-20">
                <span class="text-sm font-bold tracking-wider text-indigo-600 uppercase mb-4 block">
          <?php echo lang('features'); ?>
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold mb-6 text-gray-900">
          <?php echo $settings->partner_header_title; ?>
        </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 mx-auto rounded-full mb-6"></div>
                <p class="text-xl text-gray-600 leading-relaxed">
          <?php echo $settings->partner_header_description; ?>
        </p>
            </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-t-2xl"></div>
                    <div class="mb-6 inline-block">
                        <div class="w-16 h-16 bg-indigo-100 rounded-2xl flex items-center justify-center group-hover:bg-indigo-200 transition-colors duration-300">
                            <img src="new-fnt/assets/images/1.svg" class="w-8 h-8 transform group-hover:scale-110 transition-transform duration-300" alt="" />
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-indigo-600 transition-colors duration-300">
              <?php echo $settings->section_title_1; ?>
            </h3>
                    <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
              <?php echo $settings->section_description_1; ?>
            </p>
          </div>

                <!-- Feature 2 -->
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-green-500 to-emerald-500 rounded-t-2xl"></div>
                    <div class="mb-6 inline-block">
                        <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center group-hover:bg-green-200 transition-colors duration-300">
                            <img src="new-fnt/assets/images/support.svg" class="w-8 h-8 transform group-hover:scale-110 transition-transform duration-300" alt="" />
            </div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-green-600 transition-colors duration-300">
              <?php echo $settings->section_title_2; ?>
            </h3>
                    <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
              <?php echo $settings->section_description_2; ?>
            </p>
          </div>

                <!-- Feature 3 -->
                <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
                    <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-purple-500 to-pink-500 rounded-t-2xl"></div>
                    <div class="mb-6 inline-block">
                        <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center group-hover:bg-purple-200 transition-colors duration-300">
                            <img src="new-fnt/assets/images/health.svg" class="w-8 h-8 transform group-hover:scale-110 transition-transform duration-300" alt="" />
            </div>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4 group-hover:text-purple-600 transition-colors duration-300">
              <?php echo $settings->section_title_3; ?>
            </h3>
                    <p class="text-gray-600 leading-relaxed group-hover:text-gray-700 transition-colors duration-300">
              <?php echo $settings->section_description_3; ?>
            </p>
          </div>
        </div>

            <!-- Stats Section -->
            <div class="mt-24 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-4xl font-bold text-indigo-600 mb-2 flex items-center justify-center gap-2">
                        <span class="counter">1000</span>
                        <span>+</span>
                    </div>
                    <p class="text-gray-600 font-medium"><?php echo lang('active_hospitals'); ?></p>
                </div>
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-4xl font-bold text-green-600 mb-2 flex items-center justify-center gap-2">
                        <span class="counter">50</span>
                        <span>M+</span>
                    </div>
                    <p class="text-gray-600 font-medium"><?php echo lang('patients_served'); ?></p>
                </div>
                <div class="bg-white rounded-2xl p-8 text-center shadow-lg hover:shadow-xl transition-shadow duration-300">
                    <div class="text-4xl font-bold text-purple-600 mb-2">24/7</div>
                    <p class="text-gray-600 font-medium"><?php echo lang('support_available'); ?></p>
                </div>
            </div>
      </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="relative py-32 bg-gradient-to-br from-gray-900 via-indigo-950 to-purple-950">
        <!-- Background Elements -->
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 -left-64 w-96 h-96 bg-indigo-500/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
            <div class="absolute top-0 -right-64 w-96 h-96 bg-purple-500/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-64 left-64 w-96 h-96 bg-pink-500/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="max-w-3xl mx-auto text-center mb-20">
                <span class="text-sm font-bold tracking-wider text-yellow-400 uppercase mb-4 block">
            <?php echo lang('main_factors'); ?>
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold mb-6 text-white">
            <?php echo $settings->team_title; ?>
          </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-yellow-400 to-yellow-300 mx-auto rounded-full mb-6"></div>
                <p class="text-xl text-gray-300 leading-relaxed">
            <?php echo $settings->team_description; ?>
          </p>
        </div>

            <!-- Features Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-12">
                <!-- Left Column -->
                <div class="space-y-8">
                    <!-- Card 1 -->
                    <div class="group bg-white/10 backdrop-blur-lg rounded-2xl p-8 border border-white/10 hover:bg-white/20 transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-yellow-300 rounded-xl flex items-center justify-center">
                                <i class="fas fa-star text-gray-900 text-xl"></i>
                            </div>
                            <h4 class="text-2xl font-bold text-white">
                <?php echo $settings->team_button_link; ?>
              </h4>
                        </div>
                        <p class="text-gray-300 text-lg leading-relaxed">
                <?php echo $settings->section_1_text_1; ?>
              </p>
            </div>

                    <!-- Card 2 -->
                    <div class="group bg-white/10 backdrop-blur-lg rounded-2xl p-8 border border-white/10 hover:bg-white/20 transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-400 to-blue-300 rounded-xl flex items-center justify-center">
                                <i class="fas fa-shield-alt text-gray-900 text-xl"></i>
                            </div>
                            <h4 class="text-2xl font-bold text-white">
                <?php echo $settings->section_1_text_2; ?>
              </h4>
                        </div>
                        <p class="text-gray-300 text-lg leading-relaxed">
                <?php echo $settings->section_1_text_3; ?>
              </p>
            </div>

                    <!-- Card 3 -->
                    <div class="group bg-white/10 backdrop-blur-lg rounded-2xl p-8 border border-white/10 hover:bg-white/20 transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-400 to-green-300 rounded-xl flex items-center justify-center">
                                <i class="fas fa-check-circle text-gray-900 text-xl"></i>
                            </div>
                            <h4 class="text-2xl font-bold text-white">
                <?php echo $settings->section_2_text_1; ?>
              </h4>
                        </div>
                        <p class="text-gray-300 text-lg leading-relaxed">
                <?php echo $settings->section_2_text_2; ?>
              </p>
            </div>
          </div>

                <!-- Right Column -->
                <div class="space-y-8 mt-8 md:mt-16">
                    <!-- Card 4 -->
                    <div class="group bg-white/10 backdrop-blur-lg rounded-2xl p-8 border border-white/10 hover:bg-white/20 transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-400 to-purple-300 rounded-xl flex items-center justify-center">
                                <i class="fas fa-rocket text-gray-900 text-xl"></i>
                            </div>
                            <h4 class="text-2xl font-bold text-white">
                <?php echo $settings->section_2_text_3; ?>
              </h4>
                        </div>
                        <p class="text-gray-300 text-lg leading-relaxed">
                <?php echo $settings->section_3_text_1; ?>
              </p>
            </div>

                    <!-- Card 5 -->
                    <div class="group bg-white/10 backdrop-blur-lg rounded-2xl p-8 border border-white/10 hover:bg-white/20 transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-12 h-12 bg-gradient-to-br from-pink-400 to-pink-300 rounded-xl flex items-center justify-center">
                                <i class="fas fa-heart text-gray-900 text-xl"></i>
                            </div>
                            <h4 class="text-2xl font-bold text-white">
                <?php echo $settings->section_3_text_2; ?>
              </h4>
                        </div>
                        <p class="text-gray-300 text-lg leading-relaxed">
                <?php echo $settings->section_3_text_3; ?>
              </p>
            </div>

                    <!-- Testimonial Card -->
                    <div class="group bg-gradient-to-br from-indigo-600 to-purple-600 rounded-2xl p-8 shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="flex items-center gap-4 mb-4">
                            <div class="w-16 h-16 bg-white rounded-xl flex items-center justify-center">
                                <i class="fas fa-quote-right text-indigo-600 text-2xl"></i>
                            </div>
                            <div>
                                <h4 class="text-2xl font-bold text-white">
                <?php echo $settings->team_commentator_name; ?>
              </h4>
                                <p class="text-indigo-200 text-lg">
                <?php echo $settings->team_commentator_designation; ?>
              </p>
                            </div>
                        </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <style>
    .text1 {
        display: none;
    }
</style>
    <!-- Pricing Section -->
    <section class="relative py-32 bg-gradient-to-b from-white to-gray-50" id="package">
        <!-- Background Elements -->
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 -left-64 w-96 h-96 bg-indigo-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
            <div class="absolute top-0 -right-64 w-96 h-96 bg-purple-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-64 left-64 w-96 h-96 bg-pink-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="max-w-3xl mx-auto text-center mb-20">
                <span class="text-sm font-bold tracking-wider text-indigo-600 uppercase mb-4 block">
                    <?php echo lang('pricing'); ?>
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold mb-6 text-gray-900">
            <?php echo lang('License & Pricing'); ?>
          </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 mx-auto rounded-full mb-6"></div>
                
                <!-- Toggle Button -->
                <div class="inline-flex items-center bg-gray-100 rounded-full p-1 mb-8">
    <button id="yearly" class="px-6 py-2 rounded-full text-sm font-medium bg-indigo-600 text-white transition-all duration-300" onclick="switchPlan('yearly')">
                        <?php echo lang('yearly'); ?>
                    </button>
    <button id="monthly" class="px-6 py-2 rounded-full text-sm font-medium text-gray-700 hover:bg-indigo-50 transition-all duration-300" onclick="switchPlan('monthly')">
                        <?php echo lang('monthly'); ?>
                    </button>
          </div>
        </div>

            <!-- Pricing Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <?php
          foreach ($packages as $package) {
            $all_packages[] = $package;
          }
          $modules_list = ['accountant', 'appointment', 'lab', 'bed', 'department', 'donor', 'finance', 'pharmacy', 'laboratorist', 'medicine', 'nurse', 'patient', 'pharmacist', 'prescription', 'receptionist', 'report', 'notice', 'email', 'sms', 'file', 'payroll', 'attendance', 'leave', 'chat'];

          if (!empty($all_packages)) {
            foreach ($all_packages as $package1) {
              if ($package1->show_in_frontend == 'Yes') {
                ?>
                    <div class="group bg-white rounded-2xl shadow-xl hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                        <!-- Package Header -->
                        <div class="bg-gradient-to-r from-indigo-600 to-purple-600 p-8 rounded-t-2xl text-white text-center">
                            <h3 class="text-2xl font-bold mb-2"><?php echo $package1->name; ?></h3>
                            <div class="text-4xl font-extrabold mb-2 text1">
                                <span class="text-sm font-normal">
                                    <?php echo $settings1->currency; ?>
                                </span>
                                <?php echo $package1->monthly_price; ?>
                                <span class="text-sm font-normal">/month</span>
                  </div>
                            <div class="text-4xl font-extrabold text2">
                                <span class="text-sm font-normal">
                                    <?php echo $settings1->currency; ?>
                                </span>
                                <?php echo $package1->yearly_price; ?>
                                <span class="text-sm font-normal">/year</span>
                            </div>
                        </div>

                        <!-- Package Features -->
                        <div class="p-8">
                    <?php $modules = explode(',', $package1->module); ?>
                            <ul class="space-y-4 mb-8">
                                <?php foreach ($modules_list as $module) {
                        $isIncluded = in_array($module, $modules);
                      ?>
                                    <li class="flex items-center gap-3 <?php echo $isIncluded ? 'text-gray-900' : 'text-gray-400'; ?>">
                                        <span class="flex-shrink-0 w-5 h-5 <?php echo $isIncluded ? 'text-green-500' : 'text-gray-300'; ?>">
                                            <?php if ($isIncluded) { ?>
                                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                </svg>
                                            <?php } else { ?>
                                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            <?php } ?>
                          </span>
                          <?php echo ucfirst($module); ?>
                        </li>
                      <?php } ?>
                    </ul>
                            <a href="#register" class="block w-full py-3 px-6 text-center bg-gradient-to-r from-indigo-600 to-purple-600 text-white font-bold rounded-xl hover:from-indigo-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105">
                      <?php echo lang('buy_license'); ?>
                    </a>
                  </div>
                </div>
          <?php
              }
            }
          }
          ?>
        </div>
      </div>
    </section>

    <!-- Registration Section -->
    <section class="relative py-32 bg-gradient-to-br from-indigo-900 via-purple-900 to-indigo-900" id="register">
        <!-- Background Elements -->
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 -left-64 w-96 h-96 bg-indigo-500/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
            <div class="absolute top-0 -right-64 w-96 h-96 bg-purple-500/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-64 left-64 w-96 h-96 bg-pink-500/20 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="max-w-3xl mx-auto text-center mb-16">
                <span class="text-sm font-bold tracking-wider text-indigo-300 uppercase mb-4 block">
                    <?php echo lang('join_us'); ?>
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold mb-6 text-white">
            <?php echo lang('subscribe_your_hospital'); ?>
          </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-indigo-400 to-purple-400 mx-auto rounded-full mb-6"></div>
                <p class="text-xl text-indigo-200 leading-relaxed">
            <?php echo lang('enter_your_hospital_details_below'); ?>
          </p>
        </div>

            <!-- Registration Form -->
            <div class="max-w-4xl mx-auto">
                <div class="bg-white/10 backdrop-blur-lg rounded-2xl overflow-hidden shadow-2xl">
                    <div class="p-8 bg-gradient-to-r from-indigo-600/20 to-purple-600/20 border-b border-white/10">
                        <h3 class="text-2xl font-bold text-white mb-2">
              <?php echo lang('subscribe'); ?>
            </h3>
                        <p class="text-indigo-200">
              <?php echo lang('enter_your_hospital_details_below'); ?>
            </p>
          </div>

                    <form action="frontend/addNewHospitalPayment" method="post" id="addNewHospital" enctype="multipart/form-data" class="p-8 space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <input type="text" name="name" placeholder="<?php echo lang('Hospital Name'); ?>*" 
                                   class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:border-indigo-500">
                            
                            <input type="text" name="address" placeholder="<?php echo lang('Hospital Address'); ?>*"
                                   class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                            
                            <input type="email" name="email" placeholder="<?php echo lang('Hospital Email'); ?>*"
                                   class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                            
                            <input type="text" name="phone" placeholder="<?php echo lang('Hospital Phone'); ?>*"
                                   class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">

              <div class="package_select_div">
                                <select name="package" id="package_select" 
                                        class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                                    <option class="bg-gray-900 text-white"><?php echo lang('select'); ?> <?php echo lang('package'); ?></option>
                  <?php foreach ($packages as $package) {
                    if ($package->show_in_frontend == 'Yes') { ?>
                                            <option class="bg-gray-900 text-white" value="<?php echo $package->id; ?>"><?php echo $package->name; ?></option>
                  <?php }
                  } ?>
                </select>
              </div>

              <div class="package_duration_div">
                                <select name="package_duration" id="package_duration"
                                        class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                                    <option class="bg-gray-900 text-white" value="monthly"><?php echo lang('monthly'); ?></option>
                                    <option class="bg-gray-900 text-white" value="yearly"><?php echo lang('yearly'); ?></option>
                </select>
              </div>

                            <select name="language"
                                    class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                                <option class="bg-gray-900 text-white"><?php echo lang('select'); ?> <?php echo lang('language'); ?></option>
                                <option class="bg-gray-900 text-white" value="arabic"><?php echo lang('arabic'); ?></option>
                                <option class="bg-gray-900 text-white" value="english"><?php echo lang('english'); ?></option>
                                <option class="bg-gray-900 text-white" value="spanish"><?php echo lang('spanish'); ?></option>
                                <option class="bg-gray-900 text-white" value="french"><?php echo lang('french'); ?></option>
                                <option class="bg-gray-900 text-white" value="italian"><?php echo lang('italian'); ?></option>
                                <option class="bg-gray-900 text-white" value="portuguese"><?php echo lang('portuguese'); ?></option>
                                <option class="bg-gray-900 text-white" value="turkish"><?php echo lang('turkish'); ?></option>
              </select>

                            <input type="text" name="price" placeholder="<?php echo lang('Price'); ?>*"
                                   class="price-input w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                                   <input type="text" name="username" id="username" placeholder="<?php echo lang('frontend_website_link'); ?>*"
                                   class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                                   
                            <input type="text" name="country" placeholder="<?php echo lang('Country'); ?>*"
                                   class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                                   <p id="web_link"></p>
                                </div>

                        <textarea name="remarks" placeholder="<?php echo lang('remarks'); ?>*" rows="4"
                                  class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500"></textarea>

                        <div class="payment_div space-y-6">
              <?php if ($settings1->payment_gateway == 'PayPal') { ?>
                                <select name="card_type"
                                        class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                  <option value="Mastercard"><?php echo lang('mastercard'); ?></option>
                  <option value="Visa"><?php echo lang('visa'); ?></option>
                  <option value="American Express"><?php echo lang('american_express'); ?></option>
                </select>
                                <input type="text" name="cardholder" placeholder="<?php echo lang('cardholder'); ?> <?php echo lang('name'); ?>"
                                       class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
              <?php } ?>

                            <?php if ($settings1->payment_gateway != 'Pay U Money' && $settings1->payment_gateway != 'Paystack') { ?>
                                <input type="text" name="card_number" id="card" placeholder="<?php echo lang('Card Number'); ?>*"
                                       class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                                
                                <div class="grid grid-cols-2 gap-6">
                                    <input type="text" name="expire_date" id="expire" placeholder="<?php echo lang('Expire Date'); ?>"
                                           class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                                    
                                    <input type="text" name="cvv_number" id="cvv" placeholder="<?php echo lang('CVV'); ?>" maxlength="3"
                                           class="w-full px-4 py-3 bg-white/5 border border-white/10 rounded-xl text-white placeholder-gray-400 focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500">
                </div>
              <?php } ?>
            </div>

                        <div class="flex items-center gap-3 trial_version_div_div">
                            <input type="checkbox" name="trial_version" value="1" class="trial_version w-5 h-5 bg-white/5 border border-white/10 rounded text-indigo-500 focus:ring-indigo-500">
                            <span class="text-white"><?php echo lang('do_you_want_trial_version'); ?></span>
            </div>

            <input type="hidden" name="request" value=''>
            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">

                        <button type="submit" id="submit-btn"
                                class="w-full py-4 bg-gradient-to-r from-indigo-500 to-purple-500 text-white text-xl font-bold rounded-xl hover:from-indigo-600 hover:to-purple-600 transition-all duration-300 transform hover:scale-105">
              <?php echo lang('register'); ?> <?php echo lang('hospital'); ?>
            </button>
          </form>
                </div>
        </div>
      </div>
    </section>

    <!-- Reviews Section -->
    <section class="relative py-32 bg-gradient-to-b from-white to-gray-50" id="review">
        <!-- Background Elements -->
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 -left-64 w-96 h-96 bg-indigo-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
            <div class="absolute top-0 -right-64 w-96 h-96 bg-purple-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-64 left-64 w-96 h-96 bg-pink-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="max-w-3xl mx-auto text-center mb-20">
                <span class="text-sm font-bold tracking-wider text-indigo-600 uppercase mb-4 block">
            <?php echo lang('review'); ?>
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold mb-6 text-gray-900">
            <?php echo lang('What did our costomer say?'); ?>
          </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 mx-auto rounded-full mb-6"></div>
                <p class="text-xl text-gray-600 leading-relaxed">
            <?php echo $settings->service_block__text_under_title ?>
          </p>
        </div>

            <!-- Reviews Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-16">
          <?php foreach ($services as $service) { ?>
                    <div class="group relative bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1">
                        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-indigo-500 to-purple-500 rounded-t-2xl"></div>
                        
                        <!-- Review Header -->
                        <div class="flex items-center gap-6 mb-8">
                            <img src="<?php echo $service->img_url ?>" 
                                 class="w-20 h-20 rounded-2xl object-cover border-4 border-white shadow-xl group-hover:scale-110 transition-transform duration-300" 
                                 alt="Reviewer">
                            <div>
                                <h3 class="text-2xl font-bold text-gray-900 group-hover:text-indigo-600 transition-colors duration-300">
                                    <?php echo $service->title ?>
                                </h3>
                                <div class="flex items-center gap-1 mt-2">
                    <?php for ($i = 0; $i < 5; $i++) { ?>
                                        <svg class="w-6 h-6 text-yellow-400 transition-colors duration-300" fill="currentColor" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                      </svg>
                    <?php } ?>
                  </div>
                </div>
              </div>

                        <!-- Review Content -->
                        <p class="text-gray-600 text-lg leading-relaxed">
                            <?php echo $service->description ?>
                        </p>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>

    <!-- FAQ Section -->
    <section class="relative py-32 bg-gradient-to-br from-indigo-50 to-purple-100" id="faq">
        <!-- Background Elements -->
        <div class="absolute inset-0 z-0">
            <div class="absolute top-0 -left-64 w-96 h-96 bg-indigo-200 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
            <div class="absolute top-0 -right-64 w-96 h-96 bg-purple-200 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>
            <div class="absolute -bottom-64 left-64 w-96 h-96 bg-pink-200 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-4000"></div>
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="max-w-3xl mx-auto text-center mb-20">
                <span class="text-sm font-bold tracking-wider text-indigo-600 uppercase mb-4 block">
            <?php echo lang('unravel_your_queries'); ?>
          </span>
                <h2 class="text-4xl md:text-5xl font-extrabold mb-6 text-gray-900">
            <?php echo lang('frequently_asked_questions'); ?>
          </h2>
                <div class="w-24 h-1 bg-gradient-to-r from-indigo-500 to-purple-500 mx-auto rounded-full mb-6"></div>
        </div>

            <div class="flex flex-col lg:flex-row items-start justify-between gap-16">
                <!-- FAQ List -->
                <div class="w-full lg:w-2/3 space-y-6">
            <?php foreach ($faqs as $index => $faq) { ?>
                        <div class="group bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300">
    <div class="parent cursor-pointer p-6" onclick="toggleChild(this)">
                                <div class="flex justify-between items-center">
                                    <h3 class="text-xl font-bold text-gray-900 group-hover:text-indigo-600 transition-colors duration-300">
                                        <?php echo $faq->title; ?>
                                    </h3>
                                    <div class="toggle-icon transform transition-transform duration-300">
                                        <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                  </div>
                                </div>
        <div class="cc hidden mt-4">
                                    <p class="text-gray-600 text-lg leading-relaxed">
                                        <?php echo $faq->description; ?>
                                    </p>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>

                <!-- FAQ Illustration -->
                <div class="w-full lg:w-1/3">
                    <div class="relative">
                        <div class="absolute -top-8 -left-8 w-32 h-32 bg-purple-300/50 rounded-full"></div>
                        <img src="new-fnt/assets/images/Vector (1).svg" 
                             alt="FAQ Illustration" 
                             class="relative z-10 w-full max-w-md mx-auto transform -rotate-6 hover:rotate-0 transition-transform duration-500">
                        <div class="mt-12 text-center">
                            <p class="text-xl font-semibold text-indigo-900 mb-6">
                                <?php echo lang('still_puzzled'); ?>
                            </p>
                            <a href="#contact" 
                               class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-indigo-600 to-purple-600 text-white rounded-xl font-bold hover:from-indigo-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                                <?php echo lang('reach_out_to_us'); ?>
                                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                                </svg>
                            </a>
                        </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="bg-gradient-to-br from-indigo-950 to-purple-900 py-24 sm:py-24 md:py-32">
      <div class="container mx-auto px-4 sm:px-6 md:px-8">
        <div class="text-center mb-12 sm:mb-16 md:mb-20">
          <span class="text-xs sm:text-sm uppercase tracking-widest text-indigo-300 mb-2 sm:mb-3 block font-bold">
            <?php echo lang('get_in_touch'); ?>
          </span>
          <h2 class="text-3xl sm:text-5xl md:text-6xl font-black text-white mb-4 sm:mb-6 leading-tight">
            <?php echo lang('Contact Us'); ?>
          </h2>
          <div class="w-24 sm:w-32 h-1 sm:h-2 bg-gradient-to-r from-white to-purple-300 mx-auto rounded-full"></div>
          <p class="text-lg sm:text-xl md:text-2xl text-indigo-200 max-w-2xl mx-auto mt-4 sm:mt-6 leading-relaxed">
            <?php echo lang('We\'re here to address your inquiries and provide professional assistance'); ?>
          </p>
        </div>

        <div class="flex flex-col lg:flex-row items-stretch justify-between space-y-8 lg:space-y-0 lg:space-x-8 xl:space-x-12">
          <div class="w-full lg:w-1/2 bg-white rounded-2xl shadow-xl p-6 sm:p-8 md:p-10">
            <h3 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-indigo-900 mb-4 sm:mb-6 md:mb-8">
              <?php echo lang('contact_information'); ?>
            </h3>

            <p class="text-base sm:text-lg md:text-xl text-gray-700 mb-6 sm:mb-8 md:mb-10 leading-relaxed">
              <?php echo lang('For inquiries regarding:'); ?>
              <span class="font-bold text-indigo-600 block mt-2 text-lg sm:text-xl md:text-2xl">
                <?php echo lang('Extended licenses or custom projects'); ?>
              </span>
            </p>

            <div class="space-y-4 sm:space-y-6">
              <div class="flex items-center bg-indigo-100 p-4 rounded-xl">
                <svg class="w-8 h-8 sm:w-10 sm:h-10 text-indigo-600 mr-4 sm:mr-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                <span class="text-base sm:text-lg md:text-xl font-bold text-indigo-800"><?php echo $settings->email; ?></span>
              </div>
              <div class="flex items-center bg-purple-100 p-4 rounded-xl">
                <svg class="w-8 h-8 sm:w-10 sm:h-10 text-purple-600 mr-4 sm:mr-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                </svg>
                <span class="text-base sm:text-lg md:text-xl font-bold text-purple-800"><?php echo $settings->phone; ?></span>
              </div>
              <div class="flex items-center bg-blue-100 p-4 rounded-xl">
                <svg class="w-8 h-8 sm:w-10 sm:h-10 text-blue-600 mr-4 sm:mr-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path>
                </svg>
                <span class="text-base sm:text-lg md:text-xl font-bold text-blue-800"><?php echo lang('address'); ?>: <?php echo $settings->address; ?></span>
              </div>
            </div>
          </div>

          <div class="w-full lg:w-1/2 flex flex-col justify-center">
            <div class="bg-indigo-800 rounded-2xl p-6 sm:p-8 md:p-10 shadow-xl">
              <h4 class="text-2xl sm:text-3xl font-black text-white mb-4 sm:mb-6"><?php echo lang('ready_to_proceed'); ?></h4>
              <p class="text-base sm:text-lg md:text-xl text-indigo-200 mb-6 sm:mb-8"><?php echo lang('let_s_discuss_your_project_requirements_and_explore_how_we_can_assist_you_in_achieving_your_objectives'); ?></p>
              <a href="mailto:<?php echo $settings->email; ?>" class="inline-block bg-white text-indigo-900 py-3 px-6 rounded-full text-base sm:text-lg md:text-xl font-bold hover:bg-indigo-100 transition-all duration-300">
                <?php echo lang('request_a_consultation'); ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-secondary-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                <div>
                    <div class="flex items-center space-x-3 mb-6">
                        <div class="relative w-10 h-10">
                            <div class="absolute inset-0 bg-gradient-to-r from-primary-600 to-primary-500 rounded-lg transform rotate-6">
                            </div>
                            <div class="absolute inset-0 bg-white rounded-lg shadow-sm flex items-center justify-center">
                                <span class="text-xl font-bold text-primary-600">
                                    <?php echo substr($settings->title, 0, 1); ?>
                                </span>
                            </div>
                        </div>
                        <div>
                            <span class="text-2xl font-extrabold">
                                <span class="text-white"><?php echo $title[0]; ?></span>
                                <span class="text-primary-600"><?php echo isset($title[1]) ? $title[1] : ''; ?></span>
                            </span>
                        </div>
                    </div>
                    <p class="text-gray-400 leading-relaxed">
                        Transforming healthcare through innovative management solutions.
                    </p>
                </div>

                <div>
                    <h4 class="text-xl font-bold mb-6">Quick Links</h4>
                    <ul class="space-y-4">
                        <li><a href="#features" class="text-gray-400 hover:text-white transition-colors duration-200"><?php echo lang('service'); ?></a></li>
                        <li><a href="#package" class="text-gray-400 hover:text-white transition-colors duration-200"><?php echo lang('package'); ?></a></li>
                        <li><a href="#review" class="text-gray-400 hover:text-white transition-colors duration-200"><?php echo lang('review'); ?></a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors duration-200"><?php echo lang('contact'); ?></a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="text-xl font-bold mb-6">Language</h4>
                    <div class="space-y-4">
                        <?php
                        $languages = $this->db->get('language')->result();
                        foreach ($languages as $language) {
                        ?>
                            <a href="frontend/chooseLanguage?lang=<?php echo $language->language ?>" 
                               class="flex items-center text-gray-400 hover:text-white transition-colors duration-200 <?php if ($this->language == $language->language) echo 'text-white'; ?>">
                                <i class="flag-icon flag-icon-<?php echo $language->flag_icon; ?> mr-2 shadow-sm"></i>
                                <?php echo $language->language; ?>
                            </a>
                        <?php } ?>
                    </div>
                </div>

                <div>
                    <h4 class="text-xl font-bold mb-6">Newsletter</h4>
                    <p class="text-gray-400 mb-6">Subscribe to our newsletter for updates</p>
                    <form class="flex">
                        <input type="email" 
                               placeholder="Enter your email" 
                               class="px-4 py-3 rounded-l-lg w-full focus:outline-none text-gray-900">
                        <button class="bg-primary-600 px-6 py-3 rounded-r-lg hover:bg-primary-700 transition-colors duration-200">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-12 pt-8 text-center">
                <p class="text-gray-400">&copy; <?php echo date('Y'); ?> <?php echo $settings->title; ?>. <?php echo lang('all_rights_reserved'); ?></p>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button id="scrollToTopBtn" class="fixed bottom-8 right-8 bg-primary-600 text-white p-3 rounded-full shadow-lg transition-opacity duration-300 opacity-0 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
      </svg>
    </button>

    <!-- Scripts -->
    <script src="https://kit.fontawesome.com/0257e3c208.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="new-fnt/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/country-select-js@2.1.0/build/js/countrySelect.min.js"></script>
    <script type="text/javascript" src="common/assets/ckeditor/ckeditor.js"></script>
    <script src="common/js/codearistos.min.js"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    
 
<script src="common/extranal/js/frontend/front_end.js"></script>
    <script type="text/javascript">
        // Initialize Swiper
        const swiper = new Swiper('.hero-slider', {
            // Optional parameters
            loop: true,
            effect: 'fade',
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            
            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            
            // Pagination
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });

        var payment_gateway = "<?php echo $settings1->payment_gateway; ?>";
        var publish = "<?php echo $gateway->publish; ?>";

      // Scroll to Top functionality
      const scrollToTopBtn = document.getElementById('scrollToTopBtn');

      window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
          scrollToTopBtn.style.opacity = '1';
        } else {
          scrollToTopBtn.style.opacity = '0';
        }
      });

      scrollToTopBtn.addEventListener('click', () => {
        window.scrollTo({
          top: 0,
          behavior: 'smooth'
        });
      });

        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking menu items
        const mobileMenuItems = mobileMenu.querySelectorAll('a');
        mobileMenuItems.forEach(item => {
            item.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
            });
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (event) => {
            if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
                mobileMenu.classList.add('hidden');
            }
        });

        // Language Dropdown
  document.getElementById('dropdownButton').addEventListener('click', function() {
    var dropdownMenu = document.getElementById('dropdownMenu');
    dropdownMenu.classList.toggle('hidden');
  });

  document.addEventListener('click', function(event) {
    var isClickInside = document.getElementById('dropdownButton').contains(event.target);
    if (!isClickInside) {
      var dropdownMenu = document.getElementById('dropdownMenu');
      if (!dropdownMenu.classList.contains('hidden')) {
        dropdownMenu.classList.add('hidden');
      }
    }
  });

        // Country Select
  $("#country").countrySelect();

        // Package Toggle
        // $(document).ready(function() {
           
        //     $("#yearly").click(function() {
                
        //     });
        //     $("#monthly").click(function() {
                
        //     });
        // });

        // Add this to your existing JavaScript
        document.addEventListener('DOMContentLoaded', function() {
            // FAQ Toggle functionality
            // const faqItems = document.querySelectorAll('.parent');
            // faqItems.forEach(item => {
            //     item.addEventListener('click', function() {
            //         const content = this.querySelector('.child');
            //         const icon = this.querySelector('.toggle-icon svg');
                    
            //         // Toggle content
            //         content.classList.toggle('hidden');
                    
            //         // Rotate icon
            //         if (content.classList.contains('hidden')) {
            //             icon.style.transform = 'rotate(0deg)';
            //         } else {
            //             icon.style.transform = 'rotate(45deg)';
            //         }
            //     });
            // });

            // // Pricing Toggle functionality
            // const yearlyBtn = document.getElementById('yearly');
            // const monthlyBtn = document.getElementById('monthly');
            // const yearlyPrices = document.querySelectorAll('.text2');
            // const monthlyPrices = document.querySelectorAll('.text1');

            // function togglePricing(showYearly) {
            //     if (showYearly) {
            //         yearlyBtn.classList.add('bg-indigo-600', 'text-white');
            //         monthlyBtn.classList.remove('bg-indigo-600', 'text-white');
            //         yearlyPrices.forEach(price => price.style.display = 'block');
            //         monthlyPrices.forEach(price => price.style.display = 'none');
            //     } else {
            //         monthlyBtn.classList.add('bg-indigo-600', 'text-white');
            //         yearlyBtn.classList.remove('bg-indigo-600', 'text-white');
            //         monthlyPrices.forEach(price => price.style.display = 'block');
            //         yearlyPrices.forEach(price => price.style.display = 'none');
            //     }
            // }

            // yearlyBtn.addEventListener('click', () => togglePricing(true));
            // monthlyBtn.addEventListener('click', () => togglePricing(false));

            // // Initialize with yearly prices
            // togglePricing(true);
        });

        // Style all select dropdowns
        document.querySelectorAll('select').forEach(select => {
            select.addEventListener('mousedown', (e) => {
                e.preventDefault();
                const select = e.target;
                const scroll = select.scrollTop;
                e.target.blur();
                setTimeout(() => {
                    select.focus();
                    select.scrollTop = scroll;
                }, 0);
            });
        });
</script>
   <script>
function toggleChild(element) {
    const child = element.querySelector('.cc');
    child.classList.toggle('hidden');
}
</script>
    <script>
function switchPlan(plan) {
    $(".text1").hide();
    const yearlyButton = document.getElementById('yearly');
    const monthlyButton = document.getElementById('monthly');
   
    if (plan === 'yearly') {
        $(".text1").hide();
                $(".text2").show();
        yearlyButton.classList.add('bg-indigo-600', 'text-white');
        yearlyButton.classList.remove('text-gray-700', 'hover:bg-indigo-50');
        monthlyButton.classList.add('text-gray-700', 'hover:bg-indigo-50');
        monthlyButton.classList.remove('bg-indigo-600', 'text-white');
    } else {
        $(".text1").show();
                $(".text2").hide();
        monthlyButton.classList.add('bg-indigo-600', 'text-white');
        monthlyButton.classList.remove('text-gray-700', 'hover:bg-indigo-50');
        yearlyButton.classList.add('text-gray-700', 'hover:bg-indigo-50');
        yearlyButton.classList.remove('bg-indigo-600', 'text-white');
    }
}
</script>

    <?php if (!empty($settings->chat_js)) { 
        $this->db->where('hospital_id', 'superadmin');
        // $settings1 = $this->db->get('settings')->row()->show_tawkto_in_website;
        if ($settings->tawk_to_status == 'yes') {
        ?>
    <!-- Chat Widget -->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        var chat_js = <?php echo json_encode($settings->chat_js, JSON_UNESCAPED_SLASHES); ?>;
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = chat_js;
            s1.charset = "UTF-8";
            s1.setAttribute("crossorigin", "*");
            s1.onerror = function() {
                console.error("Failed to load chat script from:", chat_js);
            };
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <?php } }?>
    
    <script src="https://www.google.com/recaptcha/api.js?render=<?php echo $googleReCaptchaSiteKey; ?>"></script>
        <script>
            grecaptcha.ready(function() {
                // document.getElementById('addNewHospital').addEventListener('submit', function(event) {
                document.getElementById('recap').addEventListener('input', function(event) {
                    event.preventDefault();
                    var form = this;
                    grecaptcha.execute('<?php echo $googleReCaptchaSiteKey; ?>', {
                        action: 'submit'
                    }).then(function(token) {
                        document.getElementById('recaptchaResponse').value = token;
                        // form.submit(); // Submit the form after setting the token
                    });
                });
            });
           
        </script>
            <script>
  $(document).ready(function() {
    // Ensure base_url is defined
    const base_url  = "<?php echo base_url(); ?>";

    // Function to update the web link
    function updateWebLink() {
        const val = $("#username").val();
       
            const url = base_url + 'site/' + val;
            const final_url = '<a style="color:#0cb8b6;" target="_blank" href="' + url + '">' + url + '</a>';
            $("#web_link").html(final_url);
      
    }

    // Initial update on page load
    updateWebLink();

    // Update on keyup event
    $("#username").on("keyup", function() {
        updateWebLink();
    });
});
    </script>
    <script>
         $("#username").keyup(function() {
        $("#web_link").html("");
        var val = $("#username").val();
        $.ajax({
            url: "frontend/checkIfUsernameAvailable?username=" + val,
            method: "GET",
            data: "",
            dataType: "json"

        }).done(function(response) {
            if (response.check == 1) {
                var url = base_url + 'site/' + val;
                var final_url = '<a style="color:#0cb8b6;" target="_blank" href="' + url + '">' + url + '</a>';
                $("#web_link").html(final_url);
            } else {
                $("#web_link").html("<span style='color: #0cb8b6;'>This link is not available!</span>");
            }
        });
    });
    

    </script>
</body>
</html>