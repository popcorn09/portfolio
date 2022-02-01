<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" type="text/css" href="{{url('css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    
</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">BS<span>IT</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
                <li><a href="#gallery" class="menu-btn">Gallery</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Gericko Maandig</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="/images/myface.jpeg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Gericko and I'm a <span class="typing-2"></span></div>
                    <p>I am a college student that is under the Bachelor of Science in Information Technology course. I chose this course mainly becuase of my love for technology. I spend my free time playing games and watching video related to technolgy.</p>
                    <div class="text">My Educational Background</div>
                    <p>Anthony and Mark Cavanis Elementary School</p>
                    <p>2007 - 2013</p><br>
                    <p>Philippines Nikkei Jin Kai International School</p>
                    <p>20013 - 2017</p><br>
                    <p>Philippines Nikkei Jin Kai International School</p>
                    <p>20017 - 2019</p>
                </div>
            </div>
        </div>
    </section>

    <!-- gallery section start -->
    <section class="gallery" id="gallery">
        <div class="max-width">
            <h2 class="title">My Gallery</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <a href="/images/gallery-1.jpeg"><image src="/images/gallery-1.jpeg" /></a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <a href="/images/gallery-2.jpeg"><image src="/images/gallery-2.jpeg" /></a>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                    <a href="/images/gallery-3.jpeg"><image src="/images/gallery-3.jpeg" /></a>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My skills & experiences.</div>
                    <p>The follow ratings are my own speculation on how skilled I am on the following. This might not be accurate as they are just as estimated by my self alone. Also, my skills java is higher because have been doing mostly android studio projects.</p>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>50%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>50%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>50%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>60%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>60%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Java</span>
                            <span>80%</span>
                        </div>
                        <div class="line java"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>C#</span>
                            <span>60%</span>
                        </div>
                        <div class="line csharp"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">My Contact</h2>
            <div class="contact-content">
                <div class="column">
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Gericko S. Maandig</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Purok 10-A Tibungco, Davao City</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">maandiggericko2000@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="https://www.facebook.com/gericko.sasaki/">Gericko Maandig</a>
    </footer>

    <script src="{{url('js/main.js')}}"></script>
</body>
</html>
