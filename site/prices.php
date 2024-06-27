<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon Icon -->
    <link rel="icon" type="image/x-icon" href="/assets/brand-icon.svg">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Links To All Style Files -->
    <link rel="stylesheet" href="./main.css">

    <title>Every Sunday | Prices</title>

    <style>
        /* Add your CSS here(optional) */
        .pricing{
            padding-block: 5rem;
            display:grid;
            grid-template-columns: repeat(3,1fr);
            gap:2rem;
            grid-template-areas: 
            "h1 h1 h1"
            "basic premium luxury";
        } 

        .pricing h1{
            grid-area: h1;
        }
        .pricing h1 span{
            color:var(--highlight);
        }
        .pricing .card{
            background-color: var(--background-dark);
            transition: transform 0.2s ease-out;
            cursor:pointer;
        }

        .pricing .card:hover{
            transform: scale(1.01);
        }
        .pricing .card:nth-of-type(1){
            grid-area: basic;
        }
        .pricing .card:nth-of-type(2){
            grid-area: premium;
        }
        .pricing .card:nth-of-type(3){
            grid-area: luxury;
        }

        .pricing .card img{
            width: 100%;
            object-fit: cover;
            height:250px;
            border-radius: 1rem 1rem 0 0;
            margin-bottom: 1rem;
        }
        .pricing .card h3{
            margin-bottom: 1rem;
        }

        .pricing .card p:last-of-type{
            margin-bottom: 1rem;
        }
        .pricing .fa-check{
            color:var(--success);
        }
        .pricing .fa-xmark{
            color:var(--failure);
        }
        .modal{
            max-height: 50vh;
            position: absolute;
            top:50%;
            left:50%;
            transform: translate(-50%,-50%);
            background-color: var(--background-dark);
            padding:2rem;
            border-radius: 2rem;
            border:none;
            border:2px solid var(--background-light);
            /* overflow-y: hidden; */
        }

        .modal::backdrop{
            background:#0008;
        }
        .modal::-webkit-scrollbar{
            width:0.5em;
        }
        .modal::-webkit-scrollbar-track{
            background-color: transparent !important;
            margin-block: 3em;
            /* border: 20px solid transparent; */
            background-clip: content-box;
        }
        .modal::-webkit-scrollbar-thumb{
            background-color: var(--background-light);
            border-radius: 50px;
            border:4px solid transparent !important;
        }

        .modal h3{
            margin-bottom: 2rem;
        }
        .modal h3 span{
            font-size: 1rem;
            color:var(--highlight);
            text-transform: normalize;
        }
        .modal h5{
            color:var(--primary);
            margin-bottom: 0.5rem;
            letter-spacing: 1px;
        }
        .modal p{
            margin-bottom: 2rem;
            font-size: var(--nav-link);
        }

        /* Media queries for Pricing Page */
        @media screen and (max-width:1020px){
            /* medium screen */
            .pricing{
           
            grid-template-columns: repeat(2,1fr);  
            grid-template-areas: 
            "h1 h1"
            "basic premium "
            "luxury 0";

        } 
        
        }

        @media screen and (max-width: 600px){
            /* smaller screen */
            .pricing{
            grid-template-columns: repeat(1,1fr);
            grid-template-areas: 
            "h1"
            "basic"
            "premium"
            "luxury"
            ;
           
               
        }  
      
        }
    </style>
</head>
<body>
    <header>
        <nav class="container">
            <img src="./assets/brand-logo.svg" alt="Every Sunday Logo">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="destination.html">Destination</a></li>
                <li><a href="feedback.html">Feedback</a></li>
                <li><a href="">Pricing</a></li>
            </ul>
            <!-- <div id="toggle">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div> -->
            <div id="login-container">
                <a href="./login.html" id="loginBtn"><i class="fa-solid fa-user" id="login-btn"></i></a>
                <div style="display: none;">
                    <a href='./checkout.html'><i class="fa-solid fa-cart-shopping" style="margin-right:1rem"></i></a>
                    <a href="/" id="logout-btn" class='btn-small' style='border-radius:50px;color:var(--white)'>Log Out</a>
                </div>       
            </div>
            <div class="responsive-nav">
                <i class="fa-solid fa-bars" style="color:var(--white-light)"></i>
                <div class="responsive-nav-content">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="/destination.html">Destination</a></li>
                        <li><a href="/feedback.html">Feedback</a></li>
                        <li><a href="/prices.html">Pricing</a></li>
                    </ul>
                    <div id="login-container">
                        <a href="./login.html" id="loginBtn"><i class="fa-solid fa-user" id="login-btn"></i></a>
                        <div style="display: none;">
                            <a href='./checkout.html'><i class="fa-solid fa-cart-shopping" style="margin-right:1rem"></i></a>
                            <a href="/" id="logout-btn" class='btn-small' style='border-radius:50px;color:var(--white)'>Log Out</a>
                        </div>       
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <main>
        
        <section class="container pricing fade-in" id="media">
            <h1><span>Plans</span> we offer</h1>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1532089957061-ceb61a40b6be?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=686&q=80" alt="Basic Tier Image">
                <h3>Basic</h3>
                <p><i class="fa-solid fa-check"></i> Accomodation</p>      
                <p><i class="fa-solid fa-check"></i> Booking Services</p>
                <p><i class="fa-solid fa-check"></i> Customer Services</p>
                <p><i class="fa-solid fa-check"></i> Travel Insurance</p>
                <p><i class="fa-solid fa-xmark"></i> Visa And Passport Services</p>
                <p><i class="fa-solid fa-xmark"></i> Personal AC Vehicle</p>
                <p><i class="fa-solid fa-xmark"></i> Multilingual Travel Guide</p>
                <p><i class="fa-solid fa-xmark"></i> Portable Wi-Fi</p>
                 <button class="btn open-button">Read Details</button>
                <dialog class="modal">
                    <h3>Basic Tier <span>Base Price</span></h3>
                    <h5>Accomodation</h5>
                    <p>In our Every Sunday's Basic Tier, we offer comfortable and budget-friendly accommodation options that cater to various preferences. Whether you're a solo traveler or on a tight budget, we have a selection of cozy and clean lodgings that will ensure a pleasant stay during your journey. Rest assured that all accommodations have been carefully chosen to meet our quality standards and provide you with a relaxing experience.</p>
                    <h5>
                        Booking Service
                    </h5>
                    <p>With our Basic Tier, you can take advantage of our efficient booking service that simplifies the travel planning process. Our user-friendly platform allows you to easily book flights, accommodations, and other essential services. We value your time and ensure that the booking process is hassle-free, so you can focus on enjoying your trip rather than dealing with logistics.</p>
                    <h5>Customer Service</h5>
                    <p>
                        At Every Sunday, we believe that exceptional customer service is the foundation of a memorable travel experience. Our Basic Tier offers responsive and friendly customer support to address your inquiries and concerns promptly. Our team is here to assist you at every step of your journey, ensuring that you have a smooth and enjoyable travel experience.
                    </p>
                    <button class="btn-small close-modal"><i class="fa-solid fa-arrow-left"></i> Back</button>
                </dialog>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1561501900-3701fa6a0864?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8bHV4dXJ5JTIwaG90ZWx8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="Premium Tier Image">
                <h3>Premium</h3>
                <p><i class="fa-solid fa-check"></i> Accomodation</p>  
                <p><i class="fa-solid fa-check"></i> Booking Services</p>
                <p><i class="fa-solid fa-check"></i> Customer Services</p>
                <p><i class="fa-solid fa-check"></i> Travel Insurance</p>
                <p><i class="fa-solid fa-check"></i> Visa And Passport Services</p>
                <p><i class="fa-solid fa-xmark"></i> Personal AC Vehicle</p>
                <p><i class="fa-solid fa-xmark"></i> Multilingual Travel Guide</p>
                <p><i class="fa-solid fa-xmark"></i> Portable Wi-Fi</p>
                <button class="btn open-button">Read Details</button>
                <dialog class="modal">
                    <h3>Premium Tier <span>2x Base Price</span></h3>
                    <h5>Accomodation</h5>
                    <p>At Every Sunday, we understand that where you stay plays a crucial role in your travel experience. Whether you choose our Basic, Premium, or Luxury Tier, we ensure a wide range of accommodation options to suit your preferences and budget. From cozy budget hotels in the Basic Tier to luxurious resorts and boutique properties in the Luxury Tier, we prioritize comfort, safety, and quality to make your stay memorable.
                    </p>
                    <h5>
                        Booking Service
                    </h5>
                    <p>No matter which tier you opt for, our efficient booking service remains a core feature of Every Sunday. We pride ourselves on simplifying the travel planning process, allowing you to book flights, accommodations, and other essential services with ease. Our user-friendly platform ensures a seamless experience, whether you're a budget-conscious traveler or seeking premium travel arrangements.

                    </p>
                    <h5>Customer Service</h5>
                    <p>
                        Every Sunday is committed to delivering exceptional customer service across all tiers. Our dedicated and friendly support team is available to assist you throughout your journey, ensuring your queries are promptly addressed and any issues resolved. We believe that excellent customer service is the key to a delightful travel experience, and we strive to make every interaction a positive one.l experience.
                    </p>
                    <h5>Travel Insurance</h5>
                    <p>In our Premium Tier, we understand the importance of peace of mind while traveling. That's why we provide comprehensive travel insurance options to safeguard you against unexpected situations. Our insurance plans cover medical emergencies, trip cancellations, and other unforeseen events, allowing you to explore new destinations with confidence and assurance.</p>
                    <h5>
                       Visa And Passport 
                    </h5>
                    <p>
                        Obtaining visas and handling passport formalities can be a daunting task. In our Premium Tier, we offer dedicated visa and passport services to make the process seamless for you. Our experienced team will guide you through the application process, ensuring all necessary documents are in order, so you can embark on your journey stress-free.
                    </p>
                    <button class="btn-small close-modal"><i class="fa-solid fa-arrow-left"></i> Back</button>
                </dialog>
            </div>
            <div class="card">
                <img src="https://images.unsplash.com/photo-1571003123894-1f0594d2b5d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8bHV4dXJ5JTIwaG90ZWx8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="Luxury Tier Image">
                <h3>Luxury</h3>
                <p><i class="fa-solid fa-check"></i> Accomodation</p> 
                <p><i class="fa-solid fa-check"></i> Booking Services</p>
                <p><i class="fa-solid fa-check"></i> Customer Services</p>
                <p><i class="fa-solid fa-check"></i> Travel Insurance</p>
                <p><i class="fa-solid fa-check"></i> Visa And Passport Services</p>
                <p><i class="fa-solid fa-check"></i> Personal AC Vehicle</p>
                <p><i class="fa-solid fa-check"></i> Multilingual Travel Guide</p>
                <p><i class="fa-solid fa-check"></i> Portable Wi-Fi</p>
                <button class="btn open-button">Read Details</button>
                <dialog class="modal">
                    <h3>Luxury Tier <span>3x Base Price</span></h3>
                    <h5>Accomodation</h5>
                    <p>At Every Sunday, we understand that where you stay plays a crucial role in your travel experience. Whether you choose our Basic, Premium, or Luxury Tier, we ensure a wide range of accommodation options to suit your preferences and budget. From cozy budget hotels in the Basic Tier to luxurious resorts and boutique properties in the Luxury Tier, we prioritize comfort, safety, and quality to make your stay memorable.
                    </p>
                    <h5>
                        Booking Service
                    </h5>
                    <p>No matter which tier you opt for, our efficient booking service remains a core feature of Every Sunday. We pride ourselves on simplifying the travel planning process, allowing you to book flights, accommodations, and other essential services with ease. Our user-friendly platform ensures a seamless experience, whether you're a budget-conscious traveler or seeking premium travel arrangements.

                    </p>
                    <h5>Customer Service</h5>
                    <p>
                        Every Sunday is committed to delivering exceptional customer service across all tiers. Our dedicated and friendly support team is available to assist you throughout your journey, ensuring your queries are promptly addressed and any issues resolved. We believe that excellent customer service is the key to a delightful travel experience, and we strive to make every interaction a positive one.l experience.
                    </p>
                    <h5>Travel Insurance</h5>
                    <p>In our Luxury Tier, we understand the importance of peace of mind while traveling. That's why we provide comprehensive travel insurance options to safeguard you against unexpected situations. Our insurance plans cover medical emergencies, trip cancellations, and other unforeseen events, allowing you to explore new destinations with confidence and assurance.</p>
                    <h5>
                       Visa And Passport 
                    </h5>
                    <p>
                        Obtaining visas and handling passport formalities can be a daunting task. In our Luxury Tier, we offer dedicated visa and passport services to make the process seamless for you. Our experienced team will guide you through the application process, ensuring all necessary documents are in order, so you can embark on your journey stress-free.
                    </p>
                    <h5>
                        Peronsal AC Vechile
                    </h5>
                    <p>
                        Experience the comfort of private transportation with our Premium Tier. You'll have access to a personal air-conditioned vehicle throughout your trip, providing you with flexibility and convenience while exploring your chosen destination. Enjoy the freedom to explore at your own pace with this added luxury.
                    </p>
                    <h5>
                        Mulitlingual Travel Guide
                    </h5>
                    <p>
                        n our Luxury Tier, we provide you with a highly knowledgeable and multilingual travel guide to enhance your travel experience. Our guides are experts in the regions you visit, offering insightful information about local culture, history, and hidden gems. Immerse yourself in the richness of each destination with the guidance of these passionate professionals.
                    </p>
                    <h5>
                        Portable Wifi
                    </h5>
                    <p>
                        Stay connected wherever you go with our Luxury Tier's portable Wifi service. Enjoy uninterrupted internet access on your devices, enabling you to stay in touch with loved ones, share your experiences on social media, and access essential travel information on the go. Our reliable and fast Wifi will keep you connected throughout your journey.
                    </p>
                    <button class="btn-small close-modal"><i class="fa-solid fa-arrow-left"></i> Back</button>
                </dialog>
            </div>
        </section>
    </main>
    <footer>
        <section class="articles"></section>
        <div class="container">
            <h1>Get started and early <span>Update</span> about our package</h1>
            <!-- Copy this searchbox If you want to use it somewhere else -->
            <div class="searchbox">
                <input  type="text" placeholder="Enter your email">
                <button class="btn" id="cta">Get Started</button>
            </input>
            </div>
            <hr>
            <div class="footer">
                <img src="./assets/brand-logo.svg" alt="Every Sunday Logo">
                <ul>
                    <li><a href="/index.html">Home</a></li>
                    <li><a href="/destination.html">Destination</a></li>
                    <li><a href="/feedback.html">Feedback</a></li>
                    <li><a href="/">Pricing</a></li>
                </ul>
                <p><i class="fa-regular fa-copyright"></i> 2023 Every Sunday</p>
            </div>
            <div class="socials">
                <div class="social">
                    <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="social">
                    <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                </div>
                <div class="social">
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<script src="main.js"></script>
<script>
    // Write all you JS code below
    let openButtons= Array.from(document.querySelectorAll('.open-button'));
    let closeButtons= Array.from(document.querySelectorAll('.close-modal'));
    let modals=Array.from(document.querySelectorAll('.modal'));

    for(let i=0;i<openButtons.length;i++){
        openButtons[i].addEventListener('click',()=>{
            modals[i].showModal();
        })
    }
    for(let i=0;i<closeButtons.length;i++){
        closeButtons[i].addEventListener('click',()=>{
            modals[i].close();
        })
    }
    
</script>