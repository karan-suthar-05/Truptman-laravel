<x-layout>
    <main role="main">
        @session('success')
            <x-forms.notification>
                {{ session('success') }}
            </x-forms.notification>
        @endsession
        <section class="banner" role="banner" id="Home">
            <div class="container-fluid p-0 owl-carousel owl-theme" id="Heroslider">
                <div class="slide text-center">
                    <img src="https://truptman.com/wp-content/uploads/2021/11/banner.jpg" class="img-fluid" alt="slide">
                    <p class="display-1 fw-semibold"><b>Enterprise</b> <br> mobile and web development <br> company</p>
                </div>
                <div class="slide text-center">
                    <img src="https://truptman.com/wp-content/uploads/2021/11/banner.jpg" class="img-fluid"
                        alt="slide">
                    <p class="display-1 fw-semibold">Converting ideas into reality</p>
                </div>
            </div>
        </section>
        <section class="about-us" id="About">
            <div class="container">
                <div class="row py-5">
                    <div class="col-lg-6">
                        <div class="about">
                            <h1 class="display-1">ABOUT US</h1>
                            <div class="about-content">
                                <h2 class="h3 fw-bold mb-2">Values</h2>
                                <p class="fs-5"><b>B</b>e Passionate in providing service excellence </p>
                                <p class="fs-5"><b>E</b>mbrace </p>
                                <p class="fs-5"><b>T</b>ake Ownership and Accountability</p>
                                <p class="fs-5"><b>T</b>hinking creative </p>
                                <p class="fs-5"><b>E</b>stablish Trust with Communication </p>
                                <p class="fs-5"><b>R</b>evitalize through Learning and Growth </p>
                            </div>
                            <div class="about-content">
                                <h2 class="h3 fw-bold mb-2">Vision</h2>
                                <p class="fs-5">To grow as a leading Web/Mobile applications solutions provider to
                                    every
                                    business idea.</p>
                            </div>
                            <div class="about-content">
                                <h2 class="h3 fw-bold mb-2">Mission</h2>
                                <p class="fs-5">Our mission is to satisfy the ideas of our customers with creative
                                    design and development and
                                    deliver quality solutions that create value in our customers' business.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="culture">
                            <h1 class="display-1">OUR CULTURE</h1>
                            <div class="cilture-content d-flex align-items-start gap-3">
                                <span class="material-symbols-outlined">
                                    check_circle
                                </span>
                                <p class="fs-5"><b>Start-up mindset:</b> We maintain a start-up culture where every
                                    employee's opinion is valued
                                    & appreciated. So, at Truptman, we like to challenge ourselves by analyzing any
                                    idea's gains &
                                    backs.</p>
                            </div>
                            <div class="cilture-content d-flex align-items-start gap-3">
                                <span class="material-symbols-outlined">
                                    check_circle
                                </span>
                                <p class="fs-5"><b>Start-up mindset:</b> We maintain a start-up culture where every
                                    employee's opinion is valued
                                    & appreciated. So, at Truptman, we like to challenge ourselves by analyzing any
                                    idea's gains &
                                    backs.</p>
                            </div>
                            <div class="cilture-content d-flex align-items-start gap-3">
                                <span class="material-symbols-outlined">
                                    check_circle
                                </span>
                                <p class="fs-5"><b>Start-up mindset:</b> We maintain a start-up culture where every
                                    employee's opinion is valued
                                    & appreciated. So, at Truptman, we like to challenge ourselves by analyzing any
                                    idea's gains &
                                    backs.</p>
                            </div>
                            <div class="cilture-content d-flex align-items-start gap-3">
                                <span class="material-symbols-outlined">
                                    check_circle
                                </span>
                                <p class="fs-5"><b>Start-up mindset:</b> We maintain a start-up culture where every
                                    employee's opinion is valued
                                    & appreciated. So, at Truptman, we like to challenge ourselves by analyzing any
                                    idea's gains &
                                    backs.</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </section>
        <section class="services" id="Services">
            <div class="container py-5">
                <div class="row">
                    <div class="col-12">
                        <h1 class="display-2 fw-medium">WHAT WE ARE OFFERING</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="service-card mt-3 d-flex flex-column align-items-start gap-3 bg-white shadow rounded-3 p-5">
                            <img src="https://truptman.com/wp-content/uploads/2021/11/app-development.png"
                                alt="mobile app development" class="img-fluid">
                            <h2 class="h4 fw-semibold">Mobile App Development</h2>
                            <ul class="fs-5">
                                <li>Native iPhone App</li>
                                <li>Native Android App</li>
                                <li>Flutter App</li>
                                <li>React Native App</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="service-card mt-3 d-flex flex-column align-items-start gap-3 bg-white shadow rounded-3 p-5">
                            <img src="https://truptman.com/wp-content/uploads/2021/11/app-development.png"
                                alt="mobile app development" class="img-fluid">
                            <h2 class="h4 fw-semibold">Mobile App Development</h2>
                            <ul class="fs-5">
                                <li>Native iPhone App</li>
                                <li>Native Android App</li>
                                <li>Flutter App</li>
                                <li>React Native App</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="service-card mt-3 d-flex flex-column align-items-start gap-3 bg-white shadow rounded-3 p-5">
                            <img src="https://truptman.com/wp-content/uploads/2021/11/app-development.png"
                                alt="mobile app development" class="img-fluid">
                            <h2 class="h4 fw-semibold">Mobile App Development</h2>
                            <ul class="fs-5">
                                <li>Native iPhone App</li>
                                <li>Native Android App</li>
                                <li>Flutter App</li>
                                <li>React Native App</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="service-card mt-3 d-flex flex-column align-items-start gap-3 bg-white shadow rounded-3 p-5">
                            <img src="https://truptman.com/wp-content/uploads/2021/11/app-development.png"
                                alt="mobile app development" class="img-fluid">
                            <h2 class="h4 fw-semibold">Mobile App Development</h2>
                            <ul class="fs-5">
                                <li>Native iPhone App</li>
                                <li>Native Android App</li>
                                <li>Flutter App</li>
                                <li>React Native App</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="service-card mt-3 d-flex flex-column align-items-start gap-3 bg-white shadow rounded-3 p-5">
                            <img src="https://truptman.com/wp-content/uploads/2021/11/app-development.png"
                                alt="mobile app development" class="img-fluid">
                            <h2 class="h4 fw-semibold">Mobile App Development</h2>
                            <ul class="fs-5">
                                <li>Native iPhone App</li>
                                <li>Native Android App</li>
                                <li>Flutter App</li>
                                <li>React Native App</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div
                            class="service-card mt-3 d-flex flex-column align-items-start gap-3 bg-white shadow rounded-3 p-5">
                            <img src="https://truptman.com/wp-content/uploads/2021/11/app-development.png"
                                alt="mobile app development" class="img-fluid">
                            <h2 class="h4 fw-semibold">Mobile App Development</h2>
                            <ul class="fs-5">
                                <li>Native iPhone App</li>
                                <li>Native Android App</li>
                                <li>Flutter App</li>
                                <li>React Native App</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="our-work py-5" id="Our-work">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-6 d-lg-flex justify-content-start">
                        <h1 class="display-2 fw-medium">
                            Work Showcase
                        </h1>
                    </div>
                    <div class="col-lg-6 fs-5 d-lg-flex align-items-center fw-semibold justify-content-end">
                        <div class="our-works-links">
                            <span class="active-our-works-links" data-name="all">All<sup>[4]</sup></span>
                            <span data-name="iot">IOT</span>
                            <span data-name="mobile">Mobile app</span>
                            <span data-name="web">Web</span>
                        </div>

                    </div>
                </div>
                <div class="row my-3 text-center">
                    <div class="work-item col-lg-4 col-md-6 mt-4" data-name="web">
                        <div class="our-work-card">
                            <img src="https://truptman.com/wp-content/uploads/2021/01/08.jpg" alt="web site">
                            <div class="our-work-info">
                                <p>Web</p>
                                <p>ADHMN</p>
                            </div>
                        </div>
                    </div>
                    <div class="work-item col-lg-4 col-md-6 mt-4" data-name="web">
                        <div class="our-work-card">
                            <img src="https://truptman.com/wp-content/uploads/2021/01/04.jpg" alt="web site">
                            <div class="our-work-info">
                                <p>Web</p>
                                <p>ADHMN</p>
                            </div>
                        </div>
                    </div>
                    <div class="work-item col-lg-4 col-md-6 mt-4" data-name="web">
                        <div class="our-work-card">
                            <img src="https://truptman.com/wp-content/uploads/2021/11/09.jpg" alt="web site">
                            <div class="our-work-info">
                                <p>Web</p>
                                <p>ADHMN</p>
                            </div>
                        </div>
                    </div>
                    <div class="work-item col-lg-4 col-md-6 mt-4" data-name="web">
                        <div class="our-work-card">
                            <img src="https://truptman.com/wp-content/uploads/2021/01/03.jpg" alt="web site">
                            <div class="our-work-info">
                                <p>Web</p>
                                <p>ADHMN</p>
                            </div>
                        </div>
                    </div>
                    <div class="work-item col-lg-4 col-md-6 mt-4" data-name="web">
                        <div class="our-work-card">
                            <img src="https://truptman.com/wp-content/uploads/2021/01/05.jpg" alt="web site">
                            <div class="our-work-info">
                                <p>Web</p>
                                <p>ADHMN</p>
                            </div>
                        </div>
                    </div>
                    <div class="work-item col-lg-4 col-md-6 mt-4" data-name="iot-mobile-web">
                        <div class="our-work-card ">
                            <img src="https://truptman.com/wp-content/uploads/2021/01/02.jpg" alt="web site">
                            <div class="our-work-info">
                                <p>Web</p>
                                <p>ADHMN</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <section class="career" id="Career">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="display-1 fw-medium">Career</h1>
                    </div>
                </div>
                <div class="row d-flex align-items-start">
                    <div class="col-lg-6">
                        <div class="career-questions">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item shadow mt-3">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fs-5" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                            aria-expanded="false" aria-controls="flush-collapseOne">
                                            1. PHP Web Developer (0.6 - 3 Years)
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="content">
                                                <p><b>Job Title:</b> PHP web developer</p>
                                                <p><b>Experience:</b> 0.6-3 years</p>
                                                <p><b>Education:</b> Bachelor's/Masters in computer/IT
                                                    Engineering/Computer Applications</p>
                                                <p><b>Job Location:</b> Ahmedabad</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item shadow mt-3">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fs-5" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            2. Sr. Web Developer (Laravel/CodeIgniter)
                                        </button>
                                    </h2>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="content">
                                                <p><b>Job Title:</b> PHP web developer</p>
                                                <p><b>Experience:</b> 0.6-3 years</p>
                                                <p><b>Education:</b> Bachelor's/Masters in computer/IT
                                                    Engineering/Computer Applications</p>
                                                <p><b>Job Location:</b> Ahmedabad</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item shadow mt-3">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fs-5" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                            aria-expanded="false" aria-controls="flush-collapseThree">
                                            3. Android Developer (1-4 Years)
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="content">
                                                <p><b>Job Title:</b> PHP web developer</p>
                                                <p><b>Experience:</b> 0.6-3 years</p>
                                                <p><b>Education:</b> Bachelor's/Masters in computer/IT
                                                    Engineering/Computer Applications</p>
                                                <p><b>Job Location:</b> Ahmedabad</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item shadow mt-3">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fs-5" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                            aria-expanded="false" aria-controls="flush-collapseFour">
                                            4. PHP Web Developer (0.6 - 3 Years)
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="content">
                                                <p><b>Job Title:</b> PHP web developer</p>
                                                <p><b>Experience:</b> 0.6-3 years</p>
                                                <p><b>Education:</b> Bachelor's/Masters in computer/IT
                                                    Engineering/Computer Applications</p>
                                                <p><b>Job Location:</b> Ahmedabad</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item shadow mt-3">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fs-5" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                            aria-expanded="false" aria-controls="flush-collapseFive">
                                            5. Sr. Web Developer (Laravel/CodeIgniter)
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFive" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="content">
                                                <p><b>Job Title:</b> PHP web developer</p>
                                                <p><b>Experience:</b> 0.6-3 years</p>
                                                <p><b>Education:</b> Bachelor's/Masters in computer/IT
                                                    Engineering/Computer Applications</p>
                                                <p><b>Job Location:</b> Ahmedabad</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item shadow mt-3">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fs-5" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                            aria-expanded="false" aria-controls="flush-collapseSix">
                                            6. Android Developer (1-4 Years)
                                        </button>
                                    </h2>
                                    <div id="flush-collapseSix" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <div class="content">
                                                <p><b>Job Title:</b> PHP web developer</p>
                                                <p><b>Experience:</b> 0.6-3 years</p>
                                                <p><b>Education:</b> Bachelor's/Masters in computer/IT
                                                    Engineering/Computer Applications</p>
                                                <p><b>Job Location:</b> Ahmedabad</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form mt-5 mt-lg-3">
                            <form action="/career" method="post" id="careerForm" enctype="multipart/form-data">
                                @csrf
                                <div class="row mb-5 d-flex gap-5 gap-lg-0">
                                    <div class="col-lg-6">
                                        <x-forms.input name="name" placeholder="Your name"
                                            aria-label="Your name" />
                                    </div>
                                    <div class="col-lg-6">
                                        <x-forms.input name="email" placeholder="Email Address"
                                            aria-label="Email" />
                                    </div>
                                </div>
                                <div class="row mb-5 d-flex gap-5 gap-lg-0">
                                    <div class="col-lg-6">
                                        <x-forms.input name="phone" placeholder="Phone number"
                                            aria-label="Phone number" />
                                    </div>
                                    <div class="col-lg-6">
                                        <x-forms.select class="form-select" name="job">
                                            <option selected value="">-- Select Job --</option>
                                            <option value="Php Developer">Php Developer</option>
                                            <option value="Android Developer">Android Developer</option>
                                            <option value="Graphics Designer">Graphics Designer</option>
                                            <option value="Fullstack Developer">Fullstack Developer</option>
                                        </x-forms.select>

                                    </div>
                                </div>
                                <div class="row mb-5 d-flex gap-5 gap-lg-0">
                                    <div class="col-lg-6">
                                        <x-forms.input name="current_comp" placeholder="Current comapny"
                                            aria-label="Current comapny" />
                                    </div>
                                    <div class="col-lg-6">
                                        <x-forms.input name="ctc" placeholder="CTC" aria-label="CTC" />
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-lg-12">
                                        <x-forms.select class="form-select" name="experiance">
                                            <option selected value="">-- Select Experiance --</option>
                                            <option value="freshar">Freshar</option>
                                            <option value="0 - 1 Years">0 - 1 Years</option>
                                            <option value="2 - 5 Years">2 - 5 Years</option>
                                            <option value="5+ Years">5+ Years</option>
                                        </x-forms.select>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div class="col-lg-12">
                                        <x-forms.input type="file" name="filepath" />
                                    </div>
                                </div>
                                <div class="row mb-5 text-center">
                                    <div class="col-lg-12">
                                        <button type="submit" class="submit-btn fs-3 fw-normal" name="submit"
                                            id="career-btn">Submit</button>
                                    </div>
                                </div>
                                <div class="row mb-5 d-none" id="errorMessage">
                                    <div class="col-lg-12">
                                        <div class="errorMessage">
                                            <p class="m-0 fs-4 text-secondary text-center">One or more fields have an
                                                error. Please check and try again.</p>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="slogn-container">
                <div class="container">


                    <div class="row text-center d-flex gap-4">
                        <div class="col-12">
                            <span class="material-symbols-outlined">
                                developer_mode
                                <span class="slogn-circle"></span>
                            </span>
                        </div>
                        <div class="col-12">
                            <h1 class="slogn display-1 fw-semibold">GREAT THINGS IN BUSINESS ARE NEVER DONE BY ONE
                                PERSON. <span>THEY’RE DONE
                                    BY A TEAM OF
                                    PEOPLE</span>
                            </h1>
                        </div>
                    </div>
                </div>



            </div>

            <div class="client-content container">
                <div class="client-logo py-4 owl-carousel owl-theme d-flex align-items-center" id="Client-slider">
                    <img src="https://truptman.com/wp-content/uploads/2021/11/Tania_arabic_logo.0472f626.png"
                        alt="Tania_arabic_logo" class="item">
                    <img src="https://truptman.com/wp-content/uploads/2021/11/1618907228-607e905c45e06.png"
                        alt="offispace" class="item">
                    <img src="https://truptman.com/wp-content/uploads/2021/11/mainlogo.png" alt="seek logo"
                        class="item">
                </div>
            </div>
        </section>
        <section class="contact-us" id="Contact-us">
            <div class="contact-details py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contact-info">
                                <h1 class="display-2 text-white fw-normal">WE ARE ALWAYS HERE TO HELP YOU</h1>
                                <div class="contact-card d-flex gap-4 align-items-start">
                                    <span class="material-symbols-outlined">
                                        location_on
                                    </span>
                                    <div class="contact-data">
                                        <p class="fs-3 text-white">visit us</p>
                                        <p class="fs-5">512, I The Address, Nr. Sola Overbridge, Sola, Ahmedabad,
                                            India
                                        </p>
                                    </div>
                                </div>
                                <div class="contact-card d-flex gap-4 align-items-start">
                                    <span class="material-symbols-outlined">
                                        mail
                                    </span>
                                    <div class="contact-data">
                                        <p class="fs-3 text-white">EMAIL ADDRESS</p>
                                        <p class="fs-5">manish@truptman.com</p>
                                    </div>
                                </div>
                                <div class="contact-card d-flex gap-4 align-items-start">
                                    <span class="material-symbols-outlined">
                                        phone_in_talk
                                    </span>
                                    <div class="contact-data">
                                        <p class="fs-3 text-white">CALL NOW</p>
                                        <p class="fs-5">+91-999-822-1513</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mt-5 mt-lg-0">
                            <div class="form contact-form">
                                <form action="" id="contactusForm">
                                    <div class="row">
                                        <div class="col-lg-6 mb-5">
                                            <input class="form-control" type="text" placeholder="Your name"
                                                aria-label="Your name">
                                            <span class="form-msg d-none">This field is required</span>
                                        </div>
                                        <div class="col-lg-6 mb-5">
                                            <input class="form-control" type="text" placeholder="Email address"
                                                aria-label="Email">
                                            <span class="form-msg d-none">This field is required</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 mb-5">
                                            <input class="form-control" type="text" placeholder="Phone number"
                                                aria-label="Phone">
                                            <span class="form-msg d-none">This field is required</span>
                                        </div>
                                        <div class="col-lg-6 mb-5">
                                            <input class="form-control" type="text" placeholder="Subject"
                                                aria-label="Subject">
                                            <span class="form-msg d-none">This field is required</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                            <span class="form-msg d-none">This field is required</span>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="submit" class="submit-btn fs-4 mt-5" name="submit"
                                                id="send-btm">send message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="map">
                <div class="container-fluid p-0">
                    <div class="row m-0">
                        <div class="col-12 p-0">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14683.037579156153!2d72.522543!3d23.069281!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e830e6549a36b%3A0xf8d8e141ffe489da!2sTruptMan%20Solutions%20LLP!5e0!3m2!1sen!2sus!4v1719818473804!5m2!1sen!2sus"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-label-container">
                <div class="container">
                    <div class="contact-label p-5 rounded-3">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 d-lg-flex justify-content-start">
                                <h1 class="display-3 fw-normal">LET'S GET YOUR PROJECT
                                    STARTED!</h1>
                            </div>
                            <div class="col-lg-6 d-lg-flex justify-content-end">
                                <a href="#">CONNECT WITH US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout>
