document.addEventListener("DOMContentLoaded", function () {
    // handle mobile menu
    const container = document.getElementById("Mobile-menu");
    document.getElementById("openMobile").addEventListener("click", function () {
        container.style.transform = "translate(0px)";
    });
    document.getElementById("closeMobile").addEventListener("click", function () {
        container.style.transform = "translate(-200%)";
    });

    // handle navbar
    const header = document.querySelector("#Mynav");
    const sections = document.querySelectorAll("section");
    const navLi = Array.from(document.querySelectorAll(".navigation a"));

    //for navbar animation
    window.addEventListener("scroll", () => {
        if (window.innerWidth > 991) {
            if (window.scrollY > 110) {
                header.classList.add("sticky-top", "navAnimation");
            } else {
                header.classList.remove("sticky-top", "navAnimation");
            }
        }
        else {
            header.classList.add("sticky-top");
        }
    });

    //apply only for index page
    if (window.location.pathname !== "/get-a-quote") {

        window.addEventListener("scroll", () => {

            let current = "";

            // getting the cuurent section
            sections.forEach((section) => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= sectionTop - sectionHeight / 3) {
                    current = section.getAttribute("id");
                }
            });

            // check current section and apply active class to it
            navLi.forEach((li) => {
                li.classList.remove("active");
                if (li.getAttribute("href") === `/#${current}`) {
                    li.classList.add("active");
                }
            });

        });
    }
    else {
        navLi.forEach((li) => {
            li.classList.remove("active");
        });
        const quote = navLi.find(li => li.getAttribute("href") == "/get-a-quote");
        if (quote)
            quote.classList.add("active");
    }

    // Handle form validation
    //functions
    function isNumber(event) {
        if (
            !(
                (parseInt(event.key) >= 0 && parseInt(event.key) <= 9) ||
                event.key === "Backspace"
            )
        ) {
            event.preventDefault();
        }
    }
    function addBlurEvent(inputs, form) {
        inputs.forEach((input) => {
            input.addEventListener("blur", () => {
                checkNull(inputs);
                validateEmailAndPhone(form);
            });
        });
    }
    function checkNull(inputs) {
        let f = 0;
        inputs.forEach((input) => {
            if (input.value === "") {
                input.nextElementSibling.classList.remove("d-none");
                f = 1;
            } else {
                input.nextElementSibling.classList.add("d-none");
            }
        });

        return f;
    }
    function validateEmailAndPhone(form) {
        const emailField = form.querySelector("input[name=email]");
        const phoneField = form.querySelector("input[name=phone]");
        let f = 0;
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!regex.test(emailField.value) && emailField.value !== "") {
            emailField.nextElementSibling.classList.remove("d-none");
            emailField.nextElementSibling.textContent = "Please enter valid email";
            f = 1;
        } else if (emailField.value !== "") {
            emailField.nextElementSibling.classList.add("d-none");
            emailField.nextElementSibling.textContent = "This field is required";

        }

        if (phoneField.value.length !== 10 && phoneField.value !== "") {
            phoneField.nextElementSibling.classList.remove("d-none");
            phoneField.nextElementSibling.textContent =
                "Please enter valid phone number";
            f = 1;
        } else if (phoneField.value !== "") {
            phoneField.nextElementSibling.classList.add("d-none");
            phoneField.nextElementSibling.textContent = "This field is required";

        }

        return f;
    }
    function validateForm(event) {
        const errorCon = document.querySelector("#errorMessage");
        const inputFields = this.querySelectorAll("input[type=text]");
        let f = 1;
        let nullFlag = 0;
        let emailFlag = 0;
        nullFlag = checkNull(inputFields);
        emailFlag = validateEmailAndPhone(this);
        inputFields.forEach((input) => {
            if (!input.nextElementSibling.classList.contains("d-none")) {
                errorCon.classList.remove("d-none");
                f = 0;
            }
        });
        if (f === 1) {
            errorCon.classList.add("d-none");
        }
        if (nullFlag == 1 || emailFlag == 1 || f == 0) {
            event.preventDefault();
        }
    }

    const currentPage = window.location.pathname;
    console.log(currentPage);
    if (currentPage === "/") {

        /* Sliders  */
        //client slider

        $("#Client-slider").owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            center: false,
            responsive: {
                0: {
                    items: 2,
                },
                600: {
                    items: 3,
                },
                1000: {
                    items: 5,
                },
            },
        });

        //hero slider

        $("#Heroslider").owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            items: 1,
            autoplay: true,
            autoplayTimeout: 5000,
            animateOut: "fadeOut",
            dots: false,
            navText: ["<", ">"],
            smartSpeed: 1000,
            responsive: {
                0: {
                    nav: false,
                },
                600: {},
                1000: {},
            },
        });

        /* form validation */
        const careerForm = document.querySelector("#careerForm");
        const inputFields = careerForm.querySelectorAll("input[type=text]");
        const phoneField = careerForm.querySelector(
            "input[aria-label='Phone number']"
        );
        // adding blur event to every input tag
        addBlurEvent(inputFields, careerForm);

        // adding submit event to form
        careerForm.addEventListener("submit", validateForm);

        // adding keydown event for phone number
        phoneField.addEventListener("keydown", isNumber);

        /* handle work gallary */

        const workLinks = document.querySelector(".our-works-links");
        const workItem = document.querySelectorAll(".work-item");

        workLinks.addEventListener("click", (event) => {
            if (event.target.tagName === "SPAN") {
                // workLinks.querySelectorAll("span").forEach(span=>{
                //     span.style.color = "rgb(152, 152, 152)";
                // });
                workLinks
                    .querySelector(".active-our-works-links")
                    .classList.remove("active-our-works-links");
                event.target.classList.add("active-our-works-links");
                // event.target.style.color = "black";
                let workLinkName = event.target.getAttribute("data-name");
                workItem.forEach((item) => {
                    if (
                        item.getAttribute("data-name").includes(workLinkName) ||
                        workLinkName == "all"
                    ) {
                        item.classList.remove("d-none");
                    } else {
                        item.classList.add("d-none");
                    }
                });
            }
        });

    }
    else if (currentPage === "/get-a-quote") {

        /* form validation */
        const quoteForm = document.querySelector("#quoteForm");
        const inputFields = quoteForm.querySelectorAll("input[type=text]");
        const phoneField = quoteForm.querySelector("input[aria-label='Phone number']");
        // adding blur event for input tags
        addBlurEvent(inputFields, quoteForm);

        // adding submit event tp form
        quoteForm.addEventListener("submit", validateForm);

        // adding keydown event for phone number
        phoneField.addEventListener("keydown", isNumber);
    }

});
