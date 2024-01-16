<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

</html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script defer src="theme.js"></script>
    <link rel="stylesheet" href="index.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>

<body>
    <nav class="navbar">
        <ul class="navbar-nav">
            <li class="logo">
                <a href="./d-index.php" class="nav-link logo-link">
                    <svg fill="#000000" viewBox="0 0 24 24" id="thunder-sign" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color logos">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path id="primary" d="M21.41,10.59l-8-8a2,2,0,0,0-2.82,0l-8,8a2,2,0,0,0,0,2.82l8,8a2,2,0,0,0,2.82,0l8-8A2,2,0,0,0,21.41,10.59Z" style="fill: #df49a6;"></path>
                            <path id="secondary" d="M12,16a.93.93,0,0,1-.45-.11,1,1,0,0,1-.44-1.34L11.88,13H10.5a1,1,0,0,1-.89-1.45l1.5-3a1,1,0,0,1,1.78.9L12.12,11H13.5a1,1,0,0,1,.89,1.45l-1.5,3A1,1,0,0,1,12,16Z" style="fill: 
                            #e17eee;"></path>
                        </g>
                    </svg> <span class="link-text logo-text">StreamZ</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="./d-index.php" class="nav-link">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.5315 11.5857L20.75 10.9605V21.25H22C22.4142 21.25 22.75 21.5858 22.75 22C22.75 22.4143 22.4142 22.75 22 22.75H2.00003C1.58581 22.75 1.25003 22.4143 1.25003 22C1.25003 21.5858 1.58581 21.25 2.00003 21.25H3.25003V10.9605L2.46855 11.5857C2.1451 11.8445 1.67313 11.792 1.41438 11.4686C1.15562 11.1451 1.20806 10.6731 1.53151 10.4144L9.65742 3.91366C11.027 2.818 12.9731 2.818 14.3426 3.91366L22.4685 10.4144C22.792 10.6731 22.8444 11.1451 22.5857 11.4686C22.3269 11.792 21.855 11.8445 21.5315 11.5857ZM12 6.75004C10.4812 6.75004 9.25003 7.98126 9.25003 9.50004C9.25003 11.0188 10.4812 12.25 12 12.25C13.5188 12.25 14.75 11.0188 14.75 9.50004C14.75 7.98126 13.5188 6.75004 12 6.75004ZM13.7459 13.3116C13.2871 13.25 12.7143 13.25 12.0494 13.25H11.9507C11.2858 13.25 10.7129 13.25 10.2542 13.3116C9.76255 13.3777 9.29128 13.5268 8.90904 13.9091C8.52679 14.2913 8.37773 14.7626 8.31163 15.2542C8.24996 15.7129 8.24999 16.2858 8.25003 16.9507L8.25003 21.25H9.75003H14.25H15.75L15.75 16.9507L15.75 16.8271C15.7498 16.2146 15.7462 15.6843 15.6884 15.2542C15.6223 14.7626 15.4733 14.2913 15.091 13.9091C14.7088 13.5268 14.2375 13.3777 13.7459 13.3116Z" fill="#e17eee"></path>
                            <g opacity="0.5">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.75 9.5C10.75 8.80964 11.3096 8.25 12 8.25C12.6904 8.25 13.25 8.80964 13.25 9.5C13.25 10.1904 12.6904 10.75 12 10.75C11.3096 10.75 10.75 10.1904 10.75 9.5Z" fill="#e17eee"></path>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.75 9.5C10.75 8.80964 11.3096 8.25 12 8.25C12.6904 8.25 13.25 8.80964 13.25 9.5C13.25 10.1904 12.6904 10.75 12 10.75C11.3096 10.75 10.75 10.1904 10.75 9.5Z" fill="#e17eee"></path>
                            </g>
                            <path opacity="0.5" d="M12.0494 13.25C12.7142 13.25 13.2871 13.2499 13.7458 13.3116C14.2375 13.3777 14.7087 13.5268 15.091 13.909C15.4732 14.2913 15.6223 14.7625 15.6884 15.2542C15.7462 15.6842 15.7498 16.2146 15.75 16.827L15.75 21.25H8.25L8.25 16.9506C8.24997 16.2858 8.24993 15.7129 8.31161 15.2542C8.37771 14.7625 8.52677 14.2913 8.90901 13.909C9.29126 13.5268 9.76252 13.3777 10.2542 13.3116C10.7129 13.2499 11.2858 13.25 11.9506 13.25H12.0494Z" fill="#e17eee"></path>
                            <path opacity="0.5" d="M16 3H18.5C18.7761 3 19 3.22386 19 3.5L19 7.63955L15.5 4.83955V3.5C15.5 3.22386 15.7239 3 16 3Z" fill="#e17eee"></path>
                        </g>
                    </svg>
                    <span class="link-text">Home</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="./d-page-two.php" class="nav-link">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16 6H13.4163H10.5837H8C5.17157 6 3.75736 6 2.87868 6.87868C2 7.75736 2 9.17157 2 12V16C2 18.8284 2 20.2426 2.87868 21.1213C3.75736 22 5.17157 22 8 22L16 22V6Z" fill="#e17eee"></path>
                            <path opacity="0.5" d="M22 11.9998V15.9998C22 18.8282 22 20.2424 21.1213 21.1211C20.296 21.9464 18.9983 21.9966 16.5 21.9996H16V6H16.5C18.9983 6.00305 20.296 6.05318 21.1213 6.87848C22 7.75716 22 9.17138 22 11.9998Z" fill="#e17eee"></path>
                            <path opacity="0.5" d="M13.4163 6.00011L15.5695 3.48811C15.839 3.17361 15.8026 2.70014 15.4881 2.43057C15.1736 2.161 14.7001 2.19743 14.4306 2.51192L12 5.34757L9.56946 2.51192C9.29989 2.19743 8.82641 2.16101 8.51192 2.43057C8.19743 2.70014 8.161 3.17361 8.43057 3.48811L10.5837 6.00011H13.4163Z" fill="#e17eee"></path>
                            <path d="M19 11C19.5523 11 20 11.4477 20 12C20 12.5523 19.5523 13 19 13C18.4477 13 18 12.5523 18 12C18 11.4477 18.4477 11 19 11Z" fill="#e17eee"></path>
                            <path d="M19 15C19.5523 15 20 15.4477 20 16C20 16.5523 19.5523 17 19 17C18.4477 17 18 16.5523 18 16C18 15.4477 18.4477 15 19 15Z" fill="#e17eee"></path>
                        </g>
                    </svg>
                    <span class="link-text">Watch Stream</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="./watch.php" class="nav-link">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g opacity="0.5">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.46689 4.39207C5.75949 4.68526 5.75902 5.16013 5.46583 5.45273C3.78722 7.128 2.75 9.44218 2.75 12C2.75 14.5878 3.81163 16.9262 5.52503 18.6059C5.82082 18.8959 5.82554 19.3707 5.53557 19.6665C5.24561 19.9623 4.77076 19.967 4.47497 19.677C2.48564 17.7269 1.25 15.0071 1.25 12C1.25 9.02783 2.45721 6.33616 4.40623 4.39102C4.69941 4.09842 5.17429 4.09889 5.46689 4.39207ZM18.6164 4.46446C18.9122 4.17449 19.387 4.17921 19.677 4.475C21.5771 6.41326 22.75 9.07043 22.75 12C22.75 14.9645 21.5491 17.6499 19.609 19.5938C19.3164 19.887 18.8415 19.8875 18.5484 19.5949C18.2552 19.3023 18.2547 18.8274 18.5473 18.5342C20.2182 16.86 21.25 14.5512 21.25 12C21.25 9.47873 20.2422 7.1943 18.6059 5.52507C18.3159 5.22928 18.3206 4.75443 18.6164 4.46446ZM8.30923 7.48757C8.59226 7.79001 8.57652 8.26462 8.27408 8.54765C7.32517 9.43564 6.75 10.6502 6.75 11.9822C6.75 13.3297 7.33869 14.5573 8.30756 15.4479C8.61251 15.7282 8.63248 16.2026 8.35216 16.5076C8.07185 16.8125 7.59739 16.8325 7.29244 16.5522C6.03967 15.4006 5.25 13.7824 5.25 11.9822C5.25 10.203 6.02148 8.60128 7.24916 7.45242C7.5516 7.16939 8.02621 7.18513 8.30923 7.48757ZM15.7429 7.52559C16.0292 7.22626 16.5039 7.21571 16.8033 7.50202C18.0005 8.64714 18.75 10.2286 18.75 11.9822C18.75 13.7568 17.9825 15.3548 16.7604 16.503C16.4586 16.7867 15.9839 16.7719 15.7003 16.47C15.4167 16.1681 15.4315 15.6935 15.7333 15.4099C16.6778 14.5225 17.25 13.3108 17.25 11.9822C17.25 10.6692 16.6911 9.47046 15.7664 8.58599C15.4671 8.29968 15.4566 7.82492 15.7429 7.52559Z" fill="#df49a6"></path>
                            </g>
                            <path d="M13.6563 10.4511C14.5521 11.1088 15 11.4376 15 12C15 12.5624 14.5521 12.8912 13.6563 13.5489C13.4091 13.7304 13.1638 13.9014 12.9384 14.0438C12.7407 14.1688 12.5168 14.298 12.2849 14.4249C11.3913 14.914 10.9444 15.1586 10.5437 14.8878C10.1429 14.617 10.1065 14.0502 10.0337 12.9166C10.0131 12.596 10 12.2817 10 12C10 11.7183 10.0131 11.404 10.0337 11.0834C10.1065 9.94977 10.1429 9.38296 10.5437 9.1122C10.9444 8.84144 11.3913 9.08599 12.2849 9.57509C12.5168 9.70198 12.7407 9.83123 12.9384 9.95619C13.1638 10.0986 13.4091 10.2696 13.6563 10.4511Z" fill="#df49a6"></path>
                        </g>
                    </svg>
                    <span class="link-text">Start Stream</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="/streamz/logout.php" class="nav-link">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path opacity="0.5" d="M12 20C7.58172 20 4 16.4183 4 12C4 7.58172 7.58172 4 12 4V20Z" fill="#df49a6"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.4697 8.46967C16.1768 8.76256 16.1768 9.23744 16.4697 9.53033L18.1893 11.25H10C9.58579 11.25 9.25 11.5858 9.25 12C9.25 12.4142 9.58579 12.75 10 12.75H18.1893L16.4697 14.4697C16.1768 14.7626 16.1768 15.2374 16.4697 15.5303C16.7626 15.8232 17.2374 15.8232 17.5303 15.5303L20.5303 12.5303C20.8232 12.2374 20.8232 11.7626 20.5303 11.4697L17.5303 8.46967C17.2374 8.17678 16.7626 8.17678 16.4697 8.46967Z" fill="#df49a6"></path>
                        </g>
                    </svg>
                    <span class="link-text">Logout</span>
                </a>
            </li>

        </ul>
    </nav>

    <main>
        <header>
            <div class="slider-container">
                <div class="slide active" style="background-image: url('./img/fortnite.jpg');">
                    <div class="overlay">

                        <div class="hero head-left">
                            <span class="high-rated">High Rated</span>
                            <h1>NINJA</h1>
                            <div class="ranking">
                                <button>9th</button>
                                <button>Rating / 8.9</button>
                            </div>
                            <p>Richard Tyler Blevins, better known as Ninja ,<br> is an American Twitch streamer,
                                YouTuber and
                                <br>professional gamer.
                            </p>
                            <div class="stream-details">
                                <span>Followers</span>
                                <p>89.6K</p>
                            </div>
                            <div class="stream-details">
                                <span>Categories</span>
                                <p>games,chat,events</p>
                            </div>
                            <div class="stream-details">
                                <span>Tags</span>
                                <p>4K,gaming,</p>
                            </div>
                        </div>

                        <div class="hero head-right">
                            <div class="streamer-img-one">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="slide" style="background-image: url('./img/cs.jpg');">
                    <div class="overlay">

                        <div class="hero head-left">
                            <span class="high-rated">High Rated</span>
                            <h1>SHROUD</h1>
                            <div class="ranking">
                                <button>4th</button>
                                <button>Rating / 9</button>
                            </div>
                            <p>Michael Grzesiek, better known as Shroud, is a streamer former
                                professional
                                Valorant player and professional Counter-Strike: Global Offensive player. </p>
                            <div class="stream-details">
                                <span>Followers</span>
                                <p>120.9K</p>
                            </div>
                            <div class="stream-details">
                                <span>Categories</span>
                                <p>games,pro,events</p>
                            </div>
                            <div class="stream-details">
                                <span>Tags</span>
                                <p>4K,gaming,CS</p>
                            </div>
                        </div>

                        <div class="hero head-right">
                            <div class="streamer-img-two">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="slide" style="background-image: url('./img/overwatch.jpg');">
                    <div class="overlay">

                        <div class="hero head-left">
                            <span class="high-rated">High Rated</span>
                            <h1>xQc</h1>
                            <div class="ranking">
                                <button>19th</button>
                                <button>Rating / 8.1</button>
                            </div>
                            <p>Félix Lengyel, better known as xQc, is a Canadian streamer and former professional
                                Overwatch player.
                            </p>
                            <div class="stream-details">
                                <span>Followers</span>
                                <p>777.8K</p>
                            </div>
                            <div class="stream-details">
                                <span>Categories</span>
                                <p>games,chat,events</p>
                            </div>
                            <div class="stream-details">
                                <span>Tags</span>
                                <p>4K,gaming,overwatch</p>
                            </div>
                        </div>

                        <div class="hero head-right">
                            <div class="streamer-img-three">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>

        <div class="user">
            <i class='fas fa-user-circle'></i>
            <p>
                <?php echo $_SESSION['username'] ?>
            </p>
        </div>
        <div class="component-one">
            <div class="stats">
                <div class="stats-detail">
                    <h2>778.8K</h2>
                    <p>Daily Viewers</p>
                </div>
                <div class="stats-detail">
                    <h2>11K</h2>
                    <p>Steamers</p>
                </div>
                <div class="stats-detail">
                    <h2>1K</h2>
                    <p>Categories</p>
                </div>
            </div>
        </div>
        <h1 class="main-headings">Treadning Streamers
        </h1>
        <div class="card-container">
            <div class="card card-1">
                <div class="card-1-img card-image"></div>
                <p>Kai Cenat</p>
            </div>
            <div class="card card-2">
                <div class="card-2-img card-image"></div>
                <p>Dr DisRespect</p>
            </div>
            <div class="card card-3">
                <div class="card-3-img card-image"></div>
                <p>Pokimane</p>
            </div>
            <div class="card card-4">
                <div class="card-4-img card-image"></div>
                <p>Cr1TiKaL</p>
            </div>
        </div>

        <div class="banner">
            <div class="banner-image-left"></div>
            <div class="banner-content">
                <h1> FORTNITE BATTLE </h1>
                <h2>Comming Soon</h2>
                <p id="demo"></p>
            </div>
            <div class="banner-image-right"></div>
        </div>


        <footer>
            <div class="footer-item footer-text">
                <p><span>StreamZ </span>is a unique platform where not you can enjoy streams of famous streamers but
                    also stream for
                    your self.
                    we use extream measure to please our audience and also our precious streamers.
                </p>
            </div>
            <div class="footer-item logo-C">
                <svg fill="#000000" viewBox="0 0 24 24" id="thunder-sign" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color logos">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path id="primary" d="M21.41,10.59l-8-8a2,2,0,0,0-2.82,0l-8,8a2,2,0,0,0,0,2.82l8,8a2,2,0,0,0,2.82,0l8-8A2,2,0,0,0,21.41,10.59Z" style="fill: #df49a6;"></path>
                        <path id="secondary" d="M12,16a.93.93,0,0,1-.45-.11,1,1,0,0,1-.44-1.34L11.88,13H10.5a1,1,0,0,1-.89-1.45l1.5-3a1,1,0,0,1,1.78.9L12.12,11H13.5a1,1,0,0,1,.89,1.45l-1.5,3A1,1,0,0,1,12,16Z" style="fill: 
                            #e17eee;"></path>
                    </g>
                </svg>
                <p>© 2023 StreamerZ. All right reserved.</p>
                <p>Site Design by Dot Coders</p>
            </div>
            <div class="footer-item footer-socials">
                <a><i class='fab fa-twitter'></i> </a>
                <a><i class='fab fa-reddit'></i> </a>
                <a><i class='fab fa-discord'></i></a>
                <a><i class='fab fa-youtube'></i></a>
            </div>
        </footer>
    </main>

    <script>
        var countDownDate = new Date("Aug 27, 2023 15:37:25").getTime();

        var x = setInterval(function() {

            var now = new Date().getTime();

            var distance = countDownDate - now;

            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
                minutes + "m " + seconds + "s ";

            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);
    </script>

    <script>
        const slides = document.querySelectorAll('.slide');
        let currentSlide = 0;

        function showSlide(index) {
            slides[currentSlide].classList.remove('active');
            slides[index].classList.add('active');
            currentSlide = index;
        }

        function nextSlide() {
            const nextIndex = (currentSlide + 1) % slides.length;
            showSlide(nextIndex);
        }

        showSlide(currentSlide); // Show the initial slide
        setInterval(nextSlide, 7000); // Change slide every 5 seconds
    </script>

</body>