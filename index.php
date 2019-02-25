<?php
    include('components/header.php');    
?>

<div id="app">
    <?php include('components/navbar.php');  ?>    
    <section class="hero-section">
        
            <div class="hero__content">
                <h1>Web Builder</h1>
                <p>Build your website for free.</p> 
                <svg viewBox="0 0 72 72" fill="#f62459" xmlns="http://www.w3.org/2000/svg">
                    <rect fill="#f62459"/>
                    <path d="M67.7023 19.3116C66.8093 18.4186 65.3581 18.4186 64.4651 19.3116L36 47.8326L7.47906 19.3116C6.58604 18.4186 5.13487 18.4186 4.24185 19.3116C3.34883 20.2047 3.34883 21.6558 4.24185 22.5488L34.3256 52.6326C34.7721 53.0791 35.3302 53.3023 35.9442 53.3023C36.5023 53.3023 37.1163 53.0791 37.5628 52.6326L67.6465 22.5488C68.5953 21.6558 68.5953 20.2047 67.7023 19.3116V19.3116Z" fill="#f62459"/>
                </svg>               
            </div>
            <div class="hero__content">
                <img src="images/laptop.png" style="max-width:800px;width:100%;max-height:400px;object-fit:cover;"/>
            </div>
        
    </section>               

        <section class="intro-section" id="intro">
            <div class="container">
                <div class="intro-content">
                    <h1><span class="text-secondary">What</span> is Web Builder ?</h1>
                    <p>Web Builder is a website that can help you to build yourself a website without the needs of coding.</p>                
                </div>
                <video autoplay muted loop>
                        <source src="videos/sample.mp4" type="video/mp4">
                </video>
            </div>
        </section>   

        <section class="describe-section" id="describe">
            
            <div class="container">
                <h1>Why Web Builder ?</h1>
                <div class="describe-page-content">

                    <span class="col">
                        <img src="images/teamwork.svg" />
                        <h2 class="text-secondary">User friendly</h2>
                        <p>Build your website easily with our system.</p>
                    </span>

                    <span class="col">
                        <img src="images/budget.svg"/>
                        <h2 class="text-secondary">Free</h2>
                        <p>Build a beautiful website without costing.</p>
                    </span>

                    <span class="col">
                        <img src="images/advancement.svg" />
                        <h2 class="text-secondary">Professional</h2>
                        <p>You can ask for help from our professional designer.</p>
                    </span>

                </div>

                <button class="btn">Start for free now !</button>

                <div class="tutorial-section">
                    <h1 style="color: #2e3131;padding-bottom:3vh" id="tutorial-title">
                        <span class="text-secondary">How</span> to start ?
                    </h1>
                    <div class="tutorial__content">                    
                        <img src="images/lock.svg"/>                    
                        <div class="tutorial__paragraph">
                            <h1>1. Click on <span class="text-secondary">Login</span> or <span class="text-secondary">Sign Up</span> button.</h1>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>

                    <div class="tutorial__content" style="flex-flow:row-reverse wrap">                    
                        <img src="images/tick-inside-circle.svg"/>                    
                        <div class="tutorial__paragraph">
                            <h1>2. <span class="text-secondary">Verify</span> account</h1>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        </div>
                    </div>

                </div>
            </div>
        </section> 
    
        <!-- <div style="height:1000px"></div> -->
    </div>
</div>

<?php
    include('components/footer.php');    
?>
