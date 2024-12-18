<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CricTibute - viratkohli</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../CSS/ind.css">
    <style>
        body{
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)) ,url('../utils/img/lords.webp');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
</head>
<body>
    <?php
        // Player info
        $player_info = [
            'name' => 'Virat Kohli',
            'role' => 'Right-Hand Indian Batsman',
            'dob' => 'Nov 05, 1988',
            'birth_place' => 'Delhi, India',
            'age' => 35,
            'playing_role' => 'Top Order Batsman',
        ];

        // Teams
        $teams = [
            ['name' => 'India', 'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/1200px-Flag_of_India.svg.png'],
            ['name' => 'Delhi', 'image' => 'https://img1.hscicdn.com/image/upload/f_auto,t_ds_square_w_1280,q_80/lsci/db/PICTURES/CMS/313300/313301.logo.png'],
            ['name' => 'RCB', 'image' => 'https://pbs.twimg.com/media/GJBQUvHW4AAlMhA.jpg'],
            ['name' => 'India U-19', 'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/4/41/Flag_of_India.svg/1200px-Flag_of_India.svg.png']
        ];

        // Achievements
        $achievements = [
            ['title' => 'ICC Male Cricketer Of The Decade', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSC9mIqAlCKOZvEuZ-FPVAOcdba1sOwjNaKvpi9YUTz6Q&s'],
            ['title' => 'Arjuna Award - 2013', 'image' => 'https://www.samanyagyan.com/images/post/arjuna-award-year-1961-to-2.jpg'],
        ];
    ?>

    <div class="container-fluid row">
        <div class="col">
            <img class="ind-image" src="https://i.pinimg.com/564x/d3/16/70/d316706bc4e6c2eed3e6f1ce2a8ae29c.jpg" alt="">
        </div>
        <div class="ind-info col">
            <h1><?php echo $player_info['name']; ?></h1>
            <p><?php echo $player_info['role']; ?></p>
            <hr>
            <div class="row">
                <div class="col">
                    <h6 class="text-warning">DOB</h6>
                    <h5><?php echo $player_info['dob']; ?></h5>
                </div>
                <div class="col">
                    <h6 class="text-warning">BIRTH PLACE</h6>
                    <h5><?php echo $player_info['birth_place']; ?></h5>
                </div>
                <div class="col">
                    <h6 class="text-warning">AGE</h6>
                    <h5><?php echo $player_info['age']; ?> years</h5>
                </div>
                <div class="col">
                    <h6 class="text-warning">PLAYING ROLE</h6>
                    <h5><?php echo $player_info['playing_role']; ?></h5>
                </div>
            </div>

            <!-- Teams Section -->
            <div class="row">
                <div class="col">
                    <h6 class="text-warning">TEAMS</h6>
                    <div class="row">
                        <?php foreach ($teams as $team): ?>
                        <div class="col">
                            <img class="team-img" src="<?php echo $team['image']; ?>" width="50" height="30" alt="">
                            <h5><?php echo $team['name']; ?></h5>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Achievements Section -->
            <div class="row">
                <div class="col">
                    <h6 class="text-warning">MAJOR ACHIEVEMENTS</h6>
                    <div class="row">
                        <?php foreach ($achievements as $achievement): ?>
                        <div class="col">
                            <img class="team-img" src="<?php echo $achievement['image']; ?>" width="50" height="30" alt="">
                            <h5><?php echo $achievement['title']; ?></h5>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>


    <div class="container">
        <div class="tab" id="profileBtn"><h5>Profile</h5></div>
        <div class="tab" id="statsBtn"><h5>Stats</h5></div>
        <div class="tab" id="recordsBtn"><h5>Top Records</h5></div>
    </div>
      
    <div class="content">
        <div id="profileContent" style="display: none; color: white;">
            India has given to the world many a great cricketer but perhaps none as ambitious as 
            Virat Kohli. To meet his ambition, Kohli employed the technical assiduousness of Sachin 
            Tendulkar and fitness that was in the league of top athletes in the world, not just 
            cricketers. As a result, Kohli became the most consistent all-format accumulator of his 
            time, making jaw-dropping chases look easy, and finding, in his own words, the safest 
            possible way to score runs. Plenty of them.<br><br>

            This ambition transferred seamlessly to his captaincy: he demanded more than ever of his 
            bowlers especially the quick ones, often sacrificed a batsman for bowling depth, and led 
            India to a long stay at No. 1 in Test rankings and a first-ever series win in Australia. 
            He is well on his way to end up as India's most successful Test captain.<br><br>

            Barring one in Bangladesh, Kohli scored Test hundreds in and against every country he 
            played. He absolutely smashed records for number of matches taken to reach eight, nine, 
            ten and eleven thousand ODI runs, and became the first batter to score 50 hundreds in 
            one-day internationals.<br><br>

            An Under-19 world Cup-winning captain, when he burst onto the scene, Kohli was a 
            precocious talent with a cover drive to kill for. He was destined to be India's next 
            big batsman as the Tendulkar era began to retire, but Kohli wanted to be more: a 
            cricketer whom the opposition would be in awe of, a cricketer whose presence would raise 
            the intensity of the contest. He lived every ball, competed each moment, and made sure he 
            had the fitness and strength to do so. He was widely credited for changing the fitness 
            culture in Indian cricket, introducing endurance tests as a criterion for selection.<br><br>

            Kohli was quite simply India's most powerful captain. Centre of every marketing campaign 
            for Indian cricket, he also happened to lead at a time when the BCCI was run by interim 
            administrators who knew better than to draw the ire of Indian cricket's biggest star. 
            There was never any cause to doubt his intent: to do things that will win matches for India, 
            which they did plenty under him.<br><br>
        </div>
        <div id="statsContent" style="display: none;">
            <div class="panel">
                <div class="panel-body table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>FORMAT</th>
                                <th>M</th>
                                <th>RUNS</th>
                                <th>HS</th>
                                <th>AVG</th>
                                <th>SR</th>
                                <th>100s</th>
                                <th>200s</th>
                                <th>50s</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="color: black;">TEST</td>
                                <td>113</td>
                                <td>8848</td>
                                <td>254</td>
                                <td>49.16</td>
                                <td>55.56</td>
                                <td>29</td>
                                <td>7</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td style="color: black;">ODI</td>
                                <td>292</td>
                                <td>13848</td>
                                <td>183</td>
                                <td>58.68</td>
                                <td>93.59</td>
                                <td>50</td>
                                <td>--</td>
                                <td>72</td>
                            </tr>
                            <tr>
                                <td style="color: black;">T20I</td>
                                <td>117</td>
                                <td>4037</td>
                                <td>122</td>
                                <td>51.76</td>
                                <td>138.16</td>
                                <td>1</td>
                                <td>--</td>
                                <td>37</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div id="recordsContent" style="display: none; color: white">
            <div class="record-grid">
                <p>Most ODI hundreds(50)</p>
                <p>Fastest to 13000 ODI runs(267)</p>
                <p>Most T20I runs(4037)</p>
                <p>Most T20I fifties(38)</p>
                <p>Fastest to 3500 T20I runs(96)</p>
                <p>Most successful Indian test captain(40)</p>
            </div>
        </div>

    </div>
    <hr>
    <h3 class="text-warning">Top knocks of virat kohli</h3>
    <div id="carouselExampleInterval" class="carousel slide custom-carousel carousel-fade" data-bs-ride="carousel">
        
        <div class="carousel-inner">
            <div class="carousel-item active carousel-container" data-bs-interval="2000">
                <img src="https://static.theprint.in/wp-content/uploads/2018/11/virat-kohli-test.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption bottom-left d-none d-md-block bg-dark">
                    <h6>149 v ENGLAND</h6>
                    <p>1st Test(2018), Edgbaston</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://static.cricbuzz.com/a/img/v1/1080x608/i1/c181491/kohlis-254-is-his-highest-individual-score-in-test-cricket.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption bottom-left d-none d-md-block bg-dark">
                    <h6>254* v SA</h6>
                    <p>2nd Test(2019), Pune</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://www.100mbsports.com/wp-content/uploads/2023/09/kohli-183-pakistan-asia-cup.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption bottom-left d-none d-md-block bg-dark">
                    <h6>183 v PAKISTAN</h6>
                    <p>Asia cup 2012, Dhaka</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://images.hindustantimes.com/rf/image_size_960x540/HT/p2/2018/12/16/Pictures/century-scoring-captain-stadium-between-reacts-australia_0f05f1f4-00fb-11e9-8449-e5c2aa861415.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption bottom-left d-none d-md-block bg-dark">
                    <h6>123 v AUSTRALIA</h6>
                    <p>2nd Test(2018), Perth</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://images.hindustantimes.com/rf/image_size_960x540/HT/p2/2018/02/02/Pictures/cricket-south-africa-durban-india-2018-odi_fd659f74-077e-11e8-90ea-37dc70df54a3.JPG" class="d-block w-100" alt="...">
                <div class="carousel-caption bottom-left d-none d-md-block bg-dark">
                    <h6>160 v SA</h6>
                    <p>3rd ODI(2018), Cape Town</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://d3lzcn6mbbadaf.cloudfront.net/media/details/viratkohli82august19pakistan.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption bottom-left d-none d-md-block bg-dark">
                    <h6>82* v PAKISTAN</h6>
                    <p>ICC WT20 Cup(2022), Melbourne</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://images.moneycontrol.com/static-mcnews/2022/09/3-IND-VS-AFG-KOHLI-CENTURY.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption bottom-left d-none d-md-block bg-dark">
                    <h6>122* v AFGANISTAN</h6>
                    <p>Asia Cup(2022), Dubai</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202102/viratkohlihobart1332012_1200x768.jpeg?size=690:388" class="d-block w-100" alt="...">
                <div class="carousel-caption bottom-left d-none d-md-block bg-dark">
                    <h6>133* v SRILANKA</h6>
                    <p>CWB series, Hobart</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://images.hindustantimes.com/img/2023/01/15/550x309/PTI01-15-2023-000266A-0_1673786668783_1673786668783_1673786682796_1673786682796.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption bottom-left d-none d-md-block bg-dark">
                    <h6>166* v SRILANKA</h6>
                    <p>3rd ODI(2023), Thiruvananthapuram</p>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="https://images.mykhel.com/img/2023/10/virat-kohli-india-vs-bangladesh-600-1697733638.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption bottom-left d-none d-md-block bg-dark">
                    <h6>117 v NEW ZEALAND</h6>
                    <p>ICC CWC(2023), Mumbai</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        
    </div>
    <br><br>
    <hr>


    <h3 class="text-warning">Image Gallery</h3>
    <div class="gallery-container">
        <div class="gallery">
            <div class="image">
                <img src="https://www.hindustantimes.com/ht-img/img/2024/03/19/1600x900/Virat_Kohli_1710834417025_1710834417182.jpg" alt="">
            </div>
            <div class="image">
                <img src="https://st1.latestly.com/wp-content/uploads/2022/11/Virat-11.jpg" alt="">
            </div>
            <div class="image">
                <img src="https://wallpapercave.com/wp/wp8177993.jpg" alt="">
            </div>
            <div class="image">
                <img src="https://akm-img-a-in.tosshub.com/indiatoday/images/story/202401/virat-kohli-253947176-16x9_0.jpg?VersionId=c24rJLZDOYt4jkUcOqrKmcdvdIvkbN1c&size=690:388" alt="">
            </div>
            <div class="image">
                <img src="https://e0.365dm.com/23/11/2048x1152/skysports-virat-kohli-odi-cricket_6363815.jpg?20231117145059" alt="">
            </div>
            <div class="image">
                <img src="https://bsmedia.business-standard.com/_media/bs/img/article/2023-04/18/full/1681792849-9002.jpg?im=FeatureCrop,size=(826,465)" alt="">
            </div>
            <div class="image">
                <img src="https://wallpapers.com/images/hd/cute-virat-kohli-jofl0v6grajz01jl.jpg" alt="">
            </div>
            <div class="image">
                <img src="https://images.indianexpress.com/2024/01/virushka-10012024.jpg" alt="">
            </div>
        </div>
        
        <div class="popup-image">
            <span>&times;</span>
            <img src="https://www.hindustantimes.com/ht-img/img/2024/03/19/1600x900/Virat_Kohli_1710834417025_1710834417182.jpg" alt="">
        </div>
    </div>
    <br><br>

    <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>

    <script>
        const profileBtn = document.getElementById("profileBtn");
        const statsBtn = document.getElementById("statsBtn");
        const recordsBtn = document.getElementById("recordsBtn");

        const profileContent = document.getElementById("profileContent");
        const statsContent = document.getElementById("statsContent");
        const recordsContent = document.getElementById("recordsContent");


        function showContent(content) {
            profileContent.style.display = "none";
            statsContent.style.display = "none";
            recordsContent.style.display = "none";
            content.style.display = "block";
        }

        profileBtn.addEventListener("click", () => showContent(profileContent));
        statsBtn.addEventListener("click", () => showContent(statsContent));
        recordsBtn.addEventListener("click", () => showContent(recordsContent));

        // Set profile as active by default
        profileBtn.classList.add("active");


        // Image gallery
        document.querySelectorAll('.gallery-container img').forEach(image => {
            image.onclick = () => {
                document.querySelector('.popup-image').style.display = 'block';
                document.querySelector('.popup-image img').src = image.getAttribute('src');
            }
        });
        document.querySelector('.popup-image span').onclick = () => {
            document.querySelector('.popup-image').style.display = 'none';
        }

        // Scroll to top
        $(document).ready(function(){
	        $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
            });
            $('#back-to-top').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 400);
                return false;
            });
        });

    </script>
</body>
</html>