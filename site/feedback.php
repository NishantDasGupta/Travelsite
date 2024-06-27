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

    <title>Every Sunday | Feedback</title>

    <style>
         
        .menu-btn{
            position:absolute;
            top: 30px;
            right: 0px;
            width: 30px;
            cursor: pointer;
            display: none;
            
        }
        .feedback{
            padding-block: 5rem;
        }

        .feedback h1 span{
            color:var(--highlight);
        }

        #testimonials-main{
            padding-block: 3rem;
            position:relative;
            margin-bottom: 20em;
            min-height: 100vh;
        }
        .feedback-form{
            position:absolute;
            bottom:-12%;
            left:50%;
            transform: translateX(-50%);
            z-index: 100;
            width:min(95%,30rem);
            margin-inline: auto;
            background-color: var(--background-dark);
            padding:2rem;
            color:var(--background-dark);
            border-radius: 2rem;
            display:flex;
            flex-direction: column;
            align-items: center;
            border:8px solid var(--white);
        }
        .feedback-form h3{
            text-align: center;
        }
        .feedback-form h3 span{
            color:var(--highlight);
        }
        .feedback-form>input,.feedback-form>select,.feedback-form>textarea{
            align-self: stretch;
            border-radius: 0.5rem;
            border:none;
            margin-bottom: 1rem;
            padding: 0.5rem 1rem;
        }
        .feedback-form>textarea{
            margin-bottom: 2rem;
        }
        .feedback-form label{
            text-transform: uppercase;
            letter-spacing: 2px;
            align-self: flex-start;
            margin-bottom: 0.5rem;
            color:var(--white-light);
            font-size:var(--nav-link);
        }
        #testimonial-grid{
            display:grid;
            grid-template-columns: 1fr 1fr 1fr;
            gap:1rem;
            background-color: transparent;
            border:8px solid var(--white);
            border-radius: 4rem;
            padding:2rem;
            padding-bottom: 10rem;
            position: relative;
        }
        #loader {
            display: none;
            width: 150px;
            height: 150px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 10000;
        }
        #testimonial-grid .card{
            background-color: var(--background-dark);
            box-shadow: 0 2px 5px 0 rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
            text-align: right;
            padding-bottom: 1rem;
            transition: box-shadow 0.2s ease-out;
        }
        #testimonial-grid .card:hover{
            box-shadow: 2px 4px 10px 5px rgba(255, 255,255, 0.1);
        }

        #testimonial-grid .card i{
            position: absolute;
            font-size: 6rem;
            color:var(--background-light);
            opacity: 0.3;
            top:-2%;
            left:5%;
        }
        #testimonial-grid .card img{
            width: 6rem;
            margin-left: auto;
            margin-bottom: 0.5rem;
            border-radius: 50%;
            border:2px solid var(--background-light);
        }
        #testimonial-grid .card p{
            font-size: var(--nav-link);
            width: 100%;
            letter-spacing: 1px;
            line-height: 1.3;
            margin-bottom: 1rem;
        }
        .responsive_char{
            font-size: var(--h1);
        }
        #testimonial-grid .card h3{
            margin-bottom: 0.75rem;
        }

        @media screen and (max-width:1020px){
            /* medium screen */
            .feedback{
            padding-block: 5rem;
        }

        .feedback h1 span{
            color:var(--highlight);
        }

        #testimonials-main{
            padding-block: 3rem;
            position:relative;
            margin-bottom: 20em;
        }
        .feedback-form{
            position:absolute;
            bottom:-8%;
            left:50%;
            transform: translateX(-50%);
            z-index: 100;
            width:min(95%,30rem);
            margin-inline: auto;
            background-color: var(--background-dark);
            padding:2rem;
            color:var(--background-dark);
            border-radius: 2rem;
            display:flex;
            flex-direction: column;
            align-items: center;
            border:8px solid var(--white);
        }
        .feedback-form h3{
            text-align: center;
        }
        .feedback-form h3 span{
            color:var(--highlight);
        }
        .feedback-form>input,.feedback-form>select,.feedback-form>textarea{
            align-self: stretch;
            border-radius: 0.5rem;
            border:none;
            margin-bottom: 1rem;
            padding: 0.5rem 1rem;
        }
        .feedback-form>textarea{
            margin-bottom: 2rem;
        }
        .feedback-form label{
            text-transform: uppercase;
            letter-spacing: 2px;
            align-self: flex-start;
            margin-bottom: 0.5rem;
            color:var(--white-light);
            font-size:var(--nav-link);
        }
        #testimonial-grid{
            display:grid;
            grid-template-columns: 1fr 1fr ;
            gap:1rem;
            background-color: transparent;
            border:8px solid var(--white);
            border-radius: 4rem;
            padding:2rem;
            padding-bottom: 10rem;
        }
        #testimonial-grid .card{
            background-color: var(--background-dark);
            box-shadow: 0 2px 5px 0 rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
            text-align: right;
            padding-bottom: 1rem;
            transition: box-shadow 0.2s ease-out;
        }
        #testimonial-grid .card:hover{
            box-shadow: 2px 4px 10px 5px rgba(255, 255,255, 0.1);
        }

        #testimonial-grid .card i{
            position: absolute;
            font-size: 6rem;
            color:var(--background-light);
            opacity: 0.3;
            top:-2%;
            left:5%;
        }
        #testimonial-grid .card img{
            width: 6rem;
            margin-left: auto;
            margin-bottom: 0.5rem;
            border-radius: 50%;
            border:2px solid var(--background-light);
        }
        #testimonial-grid .card p{
            font-size: var(--nav-link);
            width: 100%;
            letter-spacing: 1px;
            line-height: 1.3;
            margin-bottom: 1rem;
        }
        .responsive_char{
            font-size: 10vh;
        }
        #testimonial-grid .card h3{
            margin-bottom: 0.75rem;
        }

        }

        @media screen and (max-width: 700px){
            /* smaller screen */
            .feedback{
            padding-block: 5rem;
        }

        .feedback h1 span{
            color:var(--highlight);
        }

        #testimonials-main{
            padding-block: 3rem;
            position:relative;
            margin-bottom: 20em;
        }
        .feedback-form{
            bottom:-5%;
            left:50%;
            transform: translateX(-50%);
            z-index: 100;
            width:min(70%,30rem);
            margin-inline: auto;
            background-color: var(--background-dark);
            padding:2rem;
            color:var(--background-dark);
            border-radius: 2rem;
            display:flex;
            flex-direction: column;
            align-items: center;
            border:8px solid var(--white);
        }
        .feedback-form h3{
            text-align: center;
        }
        .feedback-form h3 span{
            color:var(--highlight);
        }
        .feedback-form>input,.feedback-form>select,.feedback-form>textarea{
            align-self: stretch;
            border-radius: 0.5rem;
            border:none;
            margin-bottom: 1rem;
            padding: 0.5rem 1rem;
        }
        .feedback-form>textarea{
            margin-bottom: 2rem;
        }
        .feedback-form label{
            text-transform: uppercase;
            letter-spacing: 2px;
            align-self: flex-start;
            margin-bottom: 0.5rem;
            color:var(--white-light);
            font-size:var(--nav-link);
        }
        #testimonial-grid{
            display:grid;
            grid-template-columns: repeat(1,1fr);
            gap:1rem;
            background-color: transparent;
            border:8px solid var(--white);
            border-radius: 4rem;
            padding:2rem;
            padding-bottom: 10rem;
        }
        #testimonial-grid .card{
            background-color: var(--background-dark);
            box-shadow: 0 2px 5px 0 rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
            text-align: right;
            padding-bottom: 1rem;
            transition: box-shadow 0.2s ease-out;
        }
        #testimonial-grid .card:hover{
            box-shadow: 2px 4px 10px 5px rgba(255, 255,255, 0.1);
        }

        #testimonial-grid .card i{
            position: absolute;
            font-size: 6rem;
            color:var(--background-light);
            opacity: 0.3;
            top:-2%;
            left:5%;
        }
        #testimonial-grid .card img{
            width: 6rem;
            margin-left: auto;
            margin-bottom: 0.5rem;
            border-radius: 50%;
            border:2px solid var(--background-light);
        }
        #testimonial-grid .card p{
            font-size: var(--nav-link);
            width: 100%;
            letter-spacing: 1px;
            line-height: 1.3;
            margin-bottom: 1rem;
        }
        .responsive_char{
            font-size: 8vh;
        }
        .dobottom{
            margin-top: 30px;
        }
        #testimonial-grid .card h3{
            margin-bottom: 0.75rem;
        }
        /* hamburger css */
        .navbarham{
            padding: 0;
        }
        .navbarhamlinks{
            flex-direction: column;
            width: 100%;
            height: 100vh;
            margin-top: -900px;
            justify-content: center;
            transition: all ease;
        }
        .navbarhamlinks li{
            margin: 10px auto;
        }
        .hamlogo{
            position: absolute;
            top: 30px;
            left: 0px;

        }
        .menu-btn{
            display: block;
        }
        .mobile-menu{
            margin-top: 0px;
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
                <li><a href="">Feedback</a></li>
                <li><a href="prices.html">Pricing</a></li>
            </ul>
            <!-- <div id="toggle">
                <label class="switch">
                    <input type="checkbox">
                    <span class="slider round"></span>
                </label>
            </div> -->
            <div id="login-container">
                <a href="./login.php" id="loginBtn"><i class="fa-solid fa-user" id="login-btn"></i></a>
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
                        <li><a href="/destination.php">Destination</a></li>
                        <li><a href="/feedback.php">Feedback</a></li>
                        <li><a href="/prices.php">Pricing</a></li>
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
        <section class="container feedback fade-in">
           
            <h1 class="responsive_char">What <span>Our Customers</span> say about us  </h1>
            
            <!-- -->
            <div id="testimonials-main">
                <div id="testimonial-grid">
                     <img src="./assets/Loader.svg" alt="loader" id="loader" />
                </div>
                <div class="feedback-form">
                    <h3>Give Your <span>Feedback</span> Here!</h3>
                    <label for="name">Name</label>
                    <input type="text" id="name" placeholder="Enter Your Name" required>
                    <label for="rating">Rating</label>
                    <input type="number" id="rating" min="1" max="5" placeholder="Enter Your Rating" required>
                    
                    <label for="review">Feedback</label>
                    <textarea name="review" id="review"  placeholder="Enter your Feedback"></textarea>
                    <button class="btn">Submit Feedback</button>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <section class="articles"></section>
        <div class="container">
            <h1>Get started and early <span>Update</span> about our package</h1>
           
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
                    <li><a href="/">Feedback</a></li>
                    <li><a href="/prices.html">Pricing</a></li>
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
    let obj={
        '1': './assets/Avatar1.png',
        '2': './assets/Avatar2.png',
        '3': './assets/Avatar3.png',
        '4': './assets/Avatar4.png',
        '5': './assets/Avatar5.png',
        '6': './assets/Avatar6.png',
        '7': './assets/Avatar7.png',
        '8': './assets/Avatar8.png',
        '9': './assets/Avatar9.png',
        '10': './assets/Avatar10.png',
    }
    
    let url = `https://mock-every-sunday-server.onrender.com/testimonials`;
    let testimonials_main = document.querySelector('#testimonial-grid');
    let name = document.getElementById('name');
    let rating = document.getElementById('rating');
    let textarea = document.getElementById('review');
    let postBtn = document.querySelector('.btn');
    let loader=document.getElementById('loader');

    let user;

    window.addEventListener('load',()=>{
        loader.style.display='block';
        fetchtestimonials(url);
        getUser();
    })
    postBtn.addEventListener('click',postData);

    async function postData(){
        try{
            let userdata = {
                name:name.value,
                rating:rating.value,
                review:textarea.value,
                imgAvatar:user.imgAvatar
            }
            let response = await fetch(url,{
                method:'POST',
                headers:{
                    "Content-type":"application/json",
                },
                body:JSON.stringify(userdata)
            });
            let data = await response.json();
            name.value="";
            rating.value="";
            review.value="";
            displayMessage('Feedback Submission Successfull','success');
            fetchtestimonials(url);
            // console.log(data); 
        }
        catch(error){
            console.log(error);
            displayMessage('Try Again Later! :/','warning');
        }
    }

    async function getUser() {
    let id=JSON.parse(localStorage.getItem('userId'));
    let url = `https://mock-every-sunday-server.onrender.com/users?id=${id}`;
    try {
        let res = await fetch(url);
        let data= await res.json();
        // console.log(data);
        // console.log(data[0].cart);
        user=data[0];
        name.value=user.name;
    } catch (e) {
        console.log(e);
    }
    }

    async function fetchtestimonials(url){
        try{
            let response = await fetch(url);
            let testimonialsData = await response.json();
            // console.log(testimonialsData)
            displaytestimonials(testimonialsData)
        }
        catch(error){
            console.log(error);
        }
    }
    function displaytestimonials(data){
            loader.style.display='none';
            testimonials_main.innerHTML=null;
            data.forEach(item => {
                let card = createTestimonialsCard(item);
                testimonials_main.append(card);
            });
    }
    function createTestimonialsCard(item){
        // console.log(item);
        let card = document.createElement('div');
        card.className = 'card';

        let quote =document.createElement('i');

        let img = document.createElement('img');
        if(obj[item.imgAvatar]){
            img.setAttribute('src', obj[item.imgAvatar]);
        }else{
            img.style.display = 'none';
        }
        
        quote.classList.add('fa-solid','fa-quote-left');

        let headName = document.createElement('div');
        headName.className = 'headName';

        let name = document.createElement('h4');
        name.className = 'name';
        name.textContent = item.name;

        let rating = document.createElement('h3');
        rating.className = 'rating';
        rating.textContent = item.rating+'⭐';

        let review = document.createElement('p');
        review.className = 'review';
        review.textContent = item.review;

        headName.append(name,rating);
        card.append(quote,img,headName,review);
        return card;
    }
    
</script>