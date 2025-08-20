<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Benar | Learn Tailwind Arya!!</title>
        @vite('resources/css/app.css')

        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Edu+NSW+ACT+Cursive:wght@400..700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
            rel="stylesheet"
        />
    </head>
    <body class="font-poppins transition-all duration-500 ease-in-out ">
        <!-- Header Section -->

        <header class="mb-10 p-10">
            <nav class = 'flex justify-between items-center'>
              <a href='#'>  <img src="{{ asset('images/logo.png') }}" alt="benar" class="logo" /></a>
                 
                <ul class ='hidden lg:block lg:animate-fadein  '>    
                    <li class = '  flex gap-3'>
                        <a href = '#' class =' hover:font-bold'>Home</a>
                        <a href = '#' class =' hover:font-bold'>Features</a>
                         <a href = '#' class =' hover:font-bold'>Showcase</a>
                         <a href = '#' class =' hover:font-bold'>Pricing</a>
                        <a href = '#' class =' hover:font-bold'>Testimonials</a>
                    </li>
                </ul>
                
                <button
                    class="flex hidden items-center md:block gap-2 rounded-xl bg-black px-5 py-2 font-semibold text-white cursor-pointer hover:bg-primary hover:text-white"
                >Sign In</button>


            </nav>
        </header>

        <!-- Hero Section -->
<div class ='xl:flex xl:flex-row xl:justify-evenly xl:items-center lg:animate-fadein xl:text-left  '>
        <div class="p-10 flex flex-col  items-center md:text-center xl:text-left">
        
            <div class="mt-2 mb-5 w-max text-[10px] md:text-[15px]  xl:justify-start ">
                <p
                    class="bg-abu xl:mb-10 flex items-center xl:items-left justify-center xl:justify-start gap-2 rounded-xl px-2 py-2 font-bold"
                >
                    <img src="{{ asset('images/cup.png') }} " alt="cup" class="h-max" />
                    <span class="text-primary font-bold">12.000</span>
                    top freelancers signed up last week
                </p>
            </div>
            <h1 class="text-4xl font-bold lg:text-[40px] xl-text-[100px] hover:text-primary ">Clients Analytics<br class ='hidden xl:block'> for Freelancer</h1>
            <p class="mt-4 text-gray-500 text-center">
                Learn how to track the hot prospects to bring more <br class ='hidden lg:block'>fortune while freelancing from
                home or your favorite cafes.
            </p>
            <div class="mt-5 flex gap-5 text-sm ">
                <button class="bg-primary rounded-xl px-5 py-2 font-semibold text-white hover:bg-black cursor-pointer ">
                    Explore Features
                </button>
                <button
                    class="flex items-center gap-2 rounded-xl bg-black px-5 py-2 font-semibold text-white hover:bg-primary cursor-pointer"
                >
                    <img src="{{ asset('images/video-circle.png') }}" alt="video" class="play" />
                    Watch Demo
                </button>

               
            </div>

             
        </div>

        <img src ="{{asset('images/hero_illustration.png')}}" class ='hidden xl:block '>

    </div>

            <div class="mt-9 text-[20px] md:text-[15px] lg:text-[25px] font-bold lg:animate-fadein ">
                <p class="text-center ">
                    Over
                    <span class="text-primary ">280,000</span>
                    big companies trust<br class = 'hidden md:block'> Benarrr for their
                    <span class="text-primary">businesses.</span>
                </p>
            </div>

            <div class="mt-20 mb-10 flex flex-wrap items-center justify-center lg:animate-fadein xl:justify-evenly  gap-3">
                <img src="{{ asset('images/logo-2.png') }}" alt="hero" />
                <img src="{{ asset('images/logo-3.png') }}" alt="hero" />
                <img src="{{ asset('images/logo-4.png') }}" alt="hero" />
                <img src="{{ asset('images/logo-5.png') }}" alt="hero" />
                <img src="{{ asset('images/logo-6.png') }}" alt="hero" />
            </div>
        </div>
        <div class="bg-abu2 ">
            <div class=" flex flex-col p-4">
                <button
                    class="bg-primary ml-5 mt-3 rounded-4xl px-3 py-2 text-sm font-semibold text-white w-max"
                >
                    Top Features
                </button>
                <p class="mt-5 text-4xl font-bold p-4">Built-in Robust Features Versatile Purposes</p>
            </div>

            <div class="flex flex-col gap-4 p-4 lg:flex-row lg:gap-0 lg:justify-center ">
                <div class="px-5 ">
                    <div class="w-full w-1/3 rounded-2xl bg-white p-5">
                        <img
                            src="{{ asset('images/global-search.png') }}"
                            alt="feature"
                            width="70px"
                            height="70px"
                        />
                        <h3 class="mt-20 text-2xl font-bold">Real Tracking</h3>
                        <p class="text-abu3 mt-3 text-[18px]">
                            Get the clients behavior faster and accurate by a few of clicks.
                        </p>
                    </div>
                </div>
                <div class="px-5 cursor-pointer ">
                    <div class="w-full w-1/3 rounded-2xl bg-white p-5">
                        <img
                            src="{{ asset('images/device-message.png') }}"
                            alt="feature"
                            width="70px"
                            height="70px"
                        />
                        <h3 class="mt-20 text-2xl font-bold">Email Marketing</h3>
                        <p class="text-abu3 mt-3 text-[18px]">
                            Send a couple of templates A/B testing to encourage clients
                        </p>
                    </div>
                </div>
                <div class="px-5 cursor-pointer ">
                    <div class="w-full w-1/3 rounded-2xl bg-white p-5">
                        <img
                            src="{{ asset('images/device-message.png') }}"
                            alt="feature"
                            width="70px"
                            height="70px"
                        />
                        <h3 class="mt-20 text-2xl font-bold">Payment Gateway</h3>
                        <p class="text-abu3 mt-3 text-[18px]">
                            Clients would send the money to your bank account, secured.
                        </p>
                    </div>
                </div>
            </div>

            <div class=" flex flex-col gap-3 p-4 lg:flex-row lg:gap-0">
                <div class="px-5 cursor-pointer">
                    <div class="w-full w-1/2 rounded-2xl bg-white p-5">
                        <img
                            src="{{ asset('images/bill.png') }}"
                            alt="feature"
                            width="70px"
                            height="70px"
                        />
                        <h3 class="mt-20 text-2xl font-bold">Avoid Client Fraud</h3>
                        <p class="text-abu3 mt-3 text-[18px]">
                            Our AI technologies can prevent client to steal your final income from
                            each project you worked.
                        </p>
                    </div>
                </div>

                <div class="px-5 cursor-pointer ">
                    <div class="w-full w-1/2 rounded-2xl bg-white p-5">
                        <img
                            src="{{ asset('images/bezier.png') }}"
                            alt="feature"
                            width="70px"
                            height="70px"
                        />
                        <h3 class="mt-20 text-2xl font-bold">More Automations</h3>
                        <p class="text-abu3 mt-3 text-[18px]">
                            Our system will notify clients regarding deadline payment, repetition
                            orders, and many more.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Showcase Section -->

        <div class="p-6 flex flex-col lg:flex-row lg:gap-5 lg:items-center xl:justify-evenly xl:gap-10">
            <div class="mt-5">
                <img src="{{ asset('images/preview.png') }}" alt="showcase" class='md:mx-auto'  />
            </div>
            <div>
                <button class="bg-oren mt-7 rounded-4xl px-3 py-2 text-sm font-semibold text-white">
                    Built For Winners
                </button>
                <p class="mt-5 text-[36px] font-bold md:text-center">Watch How It Works</p>
                <p class ='md:text-center'>
                    We designed a lot of features that can<br class='hidden md:block '> applied automatically so you do not have
                    to run.
                </p>

                <div class="mt-5 flex flex-col gap-3 text-[14px] font-semibold">
                    <span class="flex items-center gap-3">
                        <img
                            src="{{ asset('images/icon-check.png') }}"
                            alt="showcase"
                            class="h-max"
                        />
                        Auto running when reaches certain number
                    </span>
                    <span class="flex items-center gap-3">
                        <img
                            src="{{ asset('images/icon-check.png') }}"
                            alt="showcase"
                            class="h-max"
                        />
                        Calling backup when you overwhelmed
                    </span>
                    <span class="flex items-center gap-3">
                        <img
                            src="{{ asset('images/icon-check.png') }}"
                            alt="showcase"
                            class="h-max"
                        />
                        Sending invoices to client completed projects
                    </span>
                    <span class="flex items-center gap-3">
                        <img
                            src="{{ asset('images/icon-check.png') }}"
                            alt="showcase"
                            class="h-max"
                        />
                        Turn off tracker when the client not agree
                    </span>
                    <span class="flex items-center gap-3">
                        <img
                            src="{{ asset('images/icon-check.png') }}"
                            alt="showcase"
                            class="h-max"
                        />
                        More great features coming soon
                    </span>
                </div>

                <div class="mt-2 flex gap-3 lg:flex-row xl:mt-18 xl:px-15">
                    <button
                        class="bg-primary md:px-10 lg:px-10 mt-2 rounded-2xl px-3 py-3 text-[10px] xl:text-[15px] font-semibold text-white hover:bg-black cursor-pointer"
                    >
                        Get Free Trial
                    </button>

                    <span class="mt-3 flex items-center md:ml-75  lg:ml-0 gap-1 text-[13px]">
                        <img
                            src="{{ asset('images/Frame-16.png') }}"
                            alt="showcase"
                            class="h-max"
                        />
                        <span class="font-bold">992</span>
                        <span class="text-thin">people just signed up</span>
                    </span>
                </div>
            </div>
        </div>

        <!-- Pricing Section -->
        <div class="bg-abu2 p-6">
           

<div class ='xl:flex xl:flex-row xl:items-center lg:justify-center xl:gap-5'>
    <div>
         <button class="bg-nila mt-7 rounded-4xl px-3 py-2 text-sm font-semibold xl:ml-45">
                Good Investment
            </button>
            <p class="mt-5 text-4xl font-bold md:text-center">Most Friendly Pricing<br class ='hidden xl:block'> Plans For Everyone</p>
            <p class="mt-5 md:text-center">
                We designed a lot of features that can <br class ='hidden xl:block'> applied automatically so you do not have to
                run.
            </p>
            <div class="mt-8 flex flex-wrap items-center gap-3 md:justify-center ">
                <img src="{{ asset('images/logo-2.png') }}" alt="hero" />
                <img src="{{ asset('images/logo-3.png') }}" alt="hero" />
                <img src="{{ asset('images/logo-4.png') }}" alt="hero" />
                <img src="{{ asset('images/logo-5.png') }}" alt="hero" />
            </div>
    </div>
    

    <div>
            <div class = 'flex flex-col lg:flex-row'>
            <div class =' p-4 lg:w-1/2'>
                <div class="mt-10 rounded rounded-2xl bg-white p-4 ">
                    <h1 class="text-[20px] font-bold">Proffesional</h1>
                    <span>
                        <span class="text-[36px] font-bold">$4,999</span>
                        /month
                    </span>

                    <p class="text-abu3 mt-3">
                        Good for freelancer having 5-15 clients per month about twice.
                    </p>

                    <div class="mt-5 flex flex-col gap-3 text-[17px] font-semibold">
                        <span class="flex items-center gap-3">
                            <img
                                src="{{ asset('images/icon-check.png') }}"
                                alt="showcase"
                                class="h-max"
                            />
                            Real tracking behavior
                        </span>
                        <span class="flex items-center gap-3">
                            <img
                                src="{{ asset('images/icon-check.png') }}"
                                alt="showcase"
                                class="h-max"
                            />
                            100 GB file-size documents
                        </span>
                        <span class="flex items-center gap-3">
                            <img
                                src="{{ asset('images/icon-check.png') }}"
                                alt="showcase"
                                class="h-max"
                            />
                            24/7 customer support
                        </span>
                        <span class="flex items-center gap-3">
                            <img
                                src="{{ asset('images/icon-check.png') }}"
                                alt="showcase"
                                class="h-max"
                            />
                            Quick invoicing modules
                        </span>
                    </div>

                    <div class="flex flex-col justify-center">
                        <button
                            class="mt-5 rounded-xl bg-black px-5 py-2 text-[16px] font-semibold text-white cursor-pointer hover:bg-primary"
                        >
                            Get Package
                        </button>
                    </div>
                </div>
            </div>
            
            <div class = 'p-4 lg:w-1/2 lg:mt-7'>
                <div class="mt-3 rounded rounded-2xl bg-white p-4">
                    <h1 class="text-[20px] font-bold">For Team</h1>
                    <span>
                        <span class="text-[36px] font-bold">$18,500</span>
                        /month
                    </span>

                    <p class="text-abu3 mt-3">
                        Good for teams having 30 clients per month about twice.
                    </p>

                    <div class="mt-5 flex flex-col gap-3 text-[17px] font-semibold">
                        <span class="flex items-center gap-3">
                            <img
                                src="{{ asset('images/icon-check.png') }}"
                                alt="showcase"
                                class="h-max"
                            />
                            Real tracking behavior
                        </span>
                        <span class="flex items-center gap-3">
                            <img
                                src="{{ asset('images/icon-check.png') }}"
                                alt="showcase"
                                class="h-max"
                            />
                            100 GB file-size documents
                        </span>
                        <span class="flex items-center gap-3">
                            <img
                                src="{{ asset('images/icon-check.png') }}"
                                alt="showcase"
                                class="h-max"
                            />
                            24/7 customer support
                        </span>
                        <span class="flex items-center gap-3">
                            <img
                                src="{{ asset('images/icon-check.png') }}"
                                alt="showcase"
                                class="h-max"
                            />
                            Quick invoicing modules
                        </span>

                        <span class="flex items-center gap-3">
                            <img
                                src="{{ asset('images/icon-purple.png') }}"
                                alt="showcase"
                                class="h-max"
                            />
                            Anti fraud payments
                        </span>

                        <span class="flex items-center gap-3">
                            <img
                                src="{{ asset('images/icon-purple.png') }}"
                                alt="showcase"
                                class="h-max"
                            />
                            Legal support backed
                        </span>

                        <span class="flex items-center gap-3">
                            <img
                                src="{{ asset('images/icon-purple.png') }}"
                                alt="showcase"
                                class="h-max"
                            />
                            LMS for demo features
                        </span>

                        <span class="flex items-center gap-3">
                            <img
                                src="{{ asset('images/icon-purple.png') }}"
                                alt="showcase"
                                class="h-max"
                            />
                            More coming soon
                        </span>
                    </div>

                    <div class="flex flex-col justify-center">
                        <button
                            class="bg-primary mt-5 rounded-xl px-5 py-2 text-[16px] font-semibold text-white cursor-pointer hover:bg-black"
                        >
                            Get Package
                        </button>
                    </div>
                </div>
            </div>
        </div> </div>
        </div>
</div>

        <div class="p-6">

            <div class = 'flex flex-col items-center'>
            <button
                class="bg-primary mt-7 w-max rounded-4xl px-5 py-2 text-sm font-bold text-white"
            >
                Succes Customers
            </button>
            <p class="mt-5 text-3xl font-bold text-center">Listen What They’re <br class = 'hidden md:block ' >Saying About Benarrr</p>
        </div>
        <div class = 'p-6 flex flex-col gap-5  md:flex-col md:items-center  md:justify-center lg:flex-row lg:justify-first '> 
           
                <div class="w-full md:w-1/2 lg:w-1/3 bg-wite mt-3 rounded rounded-2xl p-4 hover:shadow-lg transition-all">
                    <img src="{{ asset('images/photo1.png') }}" />
                    <p class="mt-5 md:text-[13px] xl:text-[20px]">
                        Benarrr helped us boosting our clients prospective to get more high quality
                        projects ever.
                    </p>
                    <h1 class="mt-5 text-xl font-bold">Sammy</h1>
                    <p class="text-abu3 mb-3 md:text-[13px]">CMO, Akuna Pixela Team</p>
                </div>
            

            <div class="w-full md:w-1/2 lg:w-1/3 bg-wite mt-3 rounded rounded-2xl hover:shadow-lg transition-all p-4">
                <img src="{{ asset('images/photo2.png') }}" />
                <p class="mt-5 md:text-[13px] xl:text-[20px]">
                    With great ecosystem Benarrr we were able secure top notch projects from
                    companies
                </p>
                <h1 class="mt-5 text-xl font-bold">Rama Jaya</h1>
                <p class="text-abu3 mb-3 md:text-[13px] ">CEO, Pastikelarboss</p>
            </div>

            <div class="w-full md:w-1/2 lg:w-1/3 bg-wite mt-3 rounded rounded-2xl hover:shadow-lg transition-all p-4">
                <img src="{{ asset('images/photo3.png') }}" />
                <p class="mt-5 md:text-[13px] xl:text-[20px]">
                    Benarrr helped us boosting our clients prospective to get more high quality
                    projects ever.
                </p>
                <h1 class="mt-5 text-xl font-bold">Istimaidina</h1>
                <p class="text-abu3 mb-3 md:text-[13px]">Marketing, Hujan Abadi</p>
            </div>
        </div>

        <div class="p-6">
            <div class = 'flex items-center flex-col gap-5 md:flex-row md:item-center md:justify-evenly xl:justify-between '>
                <img src="{{ asset('images/logo.png') }}" alt="benar" class="w-max" />
                <p class="text-abu3 text-[9px] md:text-[10px]">
                    All rights reserved Benarrr by BuildWithAngga 2023
                </p>
            </div>
        </div>
    </body>
</html>
