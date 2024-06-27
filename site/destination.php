
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Destinations</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/x-icon" href="/assets/brand-icon.svg">

     <!-- Font Awesome CDN -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 
     <!-- Links To All Style Files -->
     <link rel="stylesheet" href="./main.css">
</head>
<style>
    main{
        position: relative;
    }
    .btn-small{
        background-image: none;
        background-color: var(--primary);
    }

    .destinations{
        padding-block: 2rem;
        display: grid;
        grid-template-columns:1fr 1fr 1fr 1fr;
        grid-template-areas: 
        "toolbar toolbar toolbar toolbar"
        "sidebar maincontent maincontent maincontent";
        gap:3rem 2rem;
    }
    .toolbar{
        width:100%;
        grid-area: toolbar;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding-bottom: 2rem;
        border-bottom: 1px solid var(--background-light);
    }
    
    .col-btns{
        display: flex;
    }
    .col-btn{
        margin-left: 0.5rem;
        color:var(--background-light);
        background-color: transparent;
        border:2px solid var(--background-light);
    }
    .col-active{
        color:var(--white);
        background-color: var(--primary);
        border-color: var(--primary);
    }
    /* Sidebar CSS */
    .sidebar{
        display: flex;
        flex-direction: column;
        border: 4px solid var(--white);
        border-radius: 1rem;
        padding-block: 2rem;
        padding-inline: 1rem;
        align-self: flex-start;
    }

    .sidebar hr{
        margin-block: 1rem;
    }

    .sidebar>div>h4{
        margin-bottom: 0.75rem;
    }
    .sidebar .btn-small{
        font-size: 0.75rem;
        display: inline;
    }
    .sidebar .btn-small:first-of-type{
        margin-right: 0.5rem;
    }
    .sidebar .btn-small:last-of-type{
        margin: 0;
    }
    .sidebar .filter-country > select{
        padding:0.25rem 0.5rem;
        background-color: transparent !important;
        border: 2px solid var(--white-light);
        color: var(--white-light);
        cursor: pointer;
        border-radius: 8px;
    }
    .sidebar .filter-country > select >option{
        background-color: var(--background-light);
        color:var(--white);
        cursor: pointer;
    }

    .filter-rating i{
        color: var(--highlight);
    }
    .filter-rating>div{
        cursor: pointer;
    }

    .filter-price>.filter-price-option{
        cursor: pointer;
        transition: color 0.25s ease-out;
        color: var(--white-light);
    }
    .filter-price>.filter-price-option:hover{
        color:var(--primary);
    }
    /* Styling for Cards */
    .main-content{
        grid-area: maincontent;
        position: relative;
        min-height: 50vh;
        padding: 2rem;
        /* background-color: var(--background-light); */
        border-radius: 2rem;
        border: 8px solid var(--white);
    }
    #blank{
        display: grid;
        grid-template-columns: repeat(2,1fr);
        gap: 2rem 1rem;
        margin-bottom: 2rem;
        padding-bottom: 1rem;
    }
    #loader{
        display:none;
        width: 150px;
        height: 150px;
        position: absolute;
        top: 50%;
        left:50%;
        transform: translate(-50%,-50%);
        z-index: 10000;
    }
    .destination-card{
        background-color: var(--background-dark);
        overflow: hidden;
        border-radius: 2rem;
        border:2px solid var(--background-light)
    }
    
    .destination-card img{
        object-fit: cover;
        max-height: 250px;
        height: 200px;
        width: 100%;
    }
    .destination-card> div{
        padding:1rem;
        position: relative;
    }
    .destination-card>div .fa-plane-departure{
        position: absolute;
        bottom: -25%;
        right: -2%;
        font-size: 6rem;
        color:var(--background-light);
        opacity: 0.2;
    }
    .destination-card> div h4{
        display: inline;
        margin-right: 0.5rem;
        margin-bottom: 0.5rem;
    }
    .destination-rating{
        display:inline;
        color:var(--highlight);
        font-size: 0.75rem;
    }
    .destination-card> div p{
        color:var(--white-light);
        margin-bottom: 1rem;
    }
    .destination-card>div p span{
        font-size: 2rem;
        font-weight: bolder;
        color:var(--highlight);
    }

    .view-details{
        color:var(--primary);
        background-color: transparent;
        border:1px solid var(--primary);
        margin-right: 0.5rem;
        margin-bottom: 0.5rem;
    }

    /* Destination Modal Styling */

    #destination-dialog{
        max-height: 80vh;
        width:min(60rem,100%);
        position: fixed;
        top:50%;
        left:50%;
        transform: translate(-50%,-50%);
        background-color: var(--background-dark);
        padding:2rem;
        border-radius: 2rem;
        border:none;
        border:2px solid var(--background-light);
        display:none;/* toggling on off using js*/
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-template-areas: 
        "back back back back"
        "mainImage mainImage mainImage mainImage"
        "imgRow imgRow imgRow imgRow"
        "Desc Desc Desc Desc"
        "Act Act Act Act"
        "Att Att Att Att"
        "back2 back2 back2 back2";
        gap:1rem;
        overflow-x: hidden;
    }
    #destination-dialog::backdrop{
       background:#0008; 
    }
    #destination-dialog::-webkit-scrollbar{
        width:0.5em;
    }
    #destination-dialog::-webkit-scrollbar-track{
        background-color: transparent !important;
        margin-block: 3em;
        /* border: 20px solid transparent; */
        background-clip: content-box;
    }
    #destination-dialog::-webkit-scrollbar-thumb{
        background-color: var(--background-light);
        border-radius: 50px;
        border:4px solid transparent !important;
    }
    .close-destination:first-of-type{
        grid-area: back;
        grid-column: span 1;
    }
    .close-destination:last-of-type{
        grid-area: back2;
        grid-column: span 1;
    }

    #destination-img-container{
        width:100%;
        grid-area: mainImage;
        height: 30rem;
        border:1rem;
        overflow: hidden !important;
    }
    #destination-img-container img{
        height: 30rem;
        width: 100%;
    }
    #destination-img-container img,
    #destination-img-row img{
        object-fit: cover;
        border-radius: 2rem;
    }
    #destination-img-row{
        grid-area:imgRow;
        display:flex;
        align-items: center;
        justify-content: space-between;
        gap:1rem;
        margin-bottom: 2rem;
    }
    #destination-img-row img{
        height: 200px;
        width: 24%;
        border-radius: 1rem;
    }
    #destination-description{
        grid-area: Desc;
        margin-bottom: 1rem;
    }
    #destination-description>*{
        margin-block:0.5rem;
    }
    #destination-activity{
        grid-area: Act;
        margin-bottom: 1rem;
    }
    #destination-attractions{
        grid-area: Att;
        margin-bottom: 1rem;
    }
    #destination-activity>h4,
    #destination-attractions>h4{
        margin-bottom: 1rem;
    }
    #destination-activity>div,
    #destination-attractions>div{
        width: 100%;
        display: flex;
        align-items: center;
        gap:1rem;
    }
    
    #destination-activity>div>*,
    #destination-attractions>div>*{
        margin-right: 0.5rem;
    }
    #destination-activity>div:last-child,
    #destination-attractions>div:last-child{
        margin:0;
    }
    .dest-card{
        width:33%;
        height: 200px;
        overflow: hidden;
        position: relative;
    }
    .dest-card h5{
        opacity: 0;
        cursor: pointer;
        transition:opacity 1s ease-out;
    }
    .dest-card:hover h5{
        opacity: 1;
        position: absolute;
        top: 50%;
        left:50%;
        transform:translate(-50%, -50%) !important;
        z-index: 1;
        color:var(--white);
        background-color: #0009;
        display:grid;
        place-items: center;
        overflow: hidden !important;
        padding:1rem;
        border-radius: 1rem;
    }

    #destination-activity>div img,
    #destination-attractions>div img{
        width: 100%;
        height: 100%;
        border-radius: 1rem;
        object-fit: cover;
    }
    
    
    /* Pagination Buttons Styling */
    #pagination-container{
        display:flex;
        align-items: center;
        justify-content: center;
        border-top: 1px solid var(--background-light);
        padding-top: 2rem;
    }
    #pagination-container .btn-small{
        color:var(--background-light);
        background-color: transparent;
        border:2px solid var(--background-light);
        width: 4rem;
        background-image:none;
        /* border:1px solid var(--primary); */
    }
    #pagination-container>*{
        margin-inline: 0.25rem;
    }
    #pagination-container .btn-small.page-active{
        color:var(--white);
        background-color: var(--primary);
        border-color: var(--primary);
    }
</style>
<body>
    <header>
        <nav class="container">
            <img src="./assets/brand-logo.svg" alt="Every Sunday Logo">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="">Destination</a></li>
                <li><a href="feedback.html">Feedback</a></li>
                <li><a href="prices.html">Pricing</a></li>
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
        </nav>
    </header>
    <main>
        <dialog id="destination-dialog">
            <button id="close-destination" class="btn-small view-details "><i class="fa-solid fa-arrow-left" ></i> Back</button>
            <div id="destination-img-container">
                <!-- Main Image of City goes here -->
            </div>
            <id id="destination-img-row">
                <!-- Row of 4 images of city -->
            </id>
            <div id="destination-description">
                <!-- All Description of the city goes here -->
            </div>
            <div id="destination-activity">
                <!-- All the activity Images goes here -->
            </div>
            <div id="destination-attractions"></div>
        </dialog>
        <section class="container destinations">
            <!-- Copy this searchbox If you want to use it somewhere else -->
            <div class="toolbar">
                <div class="searchbox" id="mainsearch">
                    <input  type="text" placeholder="Enter your destination">
                    <button class="btn-small">Search</button>
                </div>
                <div class="col-btns">
                    <button class="col-btn btn-small col-active" id="2-col">2</button>
                    <button class="col-btn btn-small" id="3-col">3</button>
                </div>
            </div>
            <div class="sidebar">
                <div class="filter-rating">
                    <h4>filter by rating</h4>
                    <div class="five" title="> 4/5 Stars" data="5">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>                    
                    <div class="four" title="> 3/5 Stars" data="4">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="three" title="> 2/5 Stars" data="3">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="two" title="> 1/5 Stars" data="2">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                </div>
                <hr>
                <div class="filter-price">
                    <h4>filter by price</h4>
                    <div class="filter-price-option" data-value="above 7500">
                        More Than ₹7500
                    </div>
                    <div class="filter-price-option" data-value="6000-7500">
                        ₹6000 - ₹7500
                    </div>
                    <div class="filter-price-option" data-value="4000-6000">
                        ₹4000 - ₹6000
                    </div>
                    <div class="filter-price-option" data-value="below 4000">
                        less than 4000
                    </div>
                </div>
                <hr>
                <div class="filter-country">
                    <h4>filter by country</h4>
                    <select id="country">
                        <option value="">Select Country</option>
                        <option value="India">India</option>
                        <option value="United States">USA</option>
                        <option value="Turkey">Turkey</option>
                        <option value="France">France</option>
                        <option value="Canada">Canada</option>
                    </select>
                </div>
                <hr>
                <div>
                    <h4>Sort By Price</h4>
                    <button id="lowToHigh" class="btn-small">Low To High</button>
                    <button id="highToLow" class="btn-small">High To Low</button>
                </div>
            </div>
            <div class="main-content">
                <img src="./assets/Loader.svg" alt="loader" id="loader">
                <div id="blank">
                    <!-- all destination deta append here -->
                </div>
                <div id="pagination-container"></div>
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
                    <li><a href="/">Home</a></li>
                    <li><a href="/">Destination</a></li>
                    <li><a href="/">Feedback</a></li>
                    <li><a href="/">Pricing</a></li>
                </ul>
                <p><i class="fa-regular fa-copyright"></i> 2024 Every Sunday</p>
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
<script src="main.js"></script>
<script src="./script/destination.js"></script>
</html>
