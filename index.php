<?php
$first_name = 'Яков';
$last_name = 'Крылов';
$name = $first_name . ' ' . $last_name;

$developer = 'Full Stack Developer';

$email = 'yakovkrilov@gmail.com';

$tel = '+7(911)795-06-90';

$social = [
    'vk.com/jaydas',
    'github.com/yahont88',
    'facebook.com/yakov.krilov'
];

$aboutme = 'обо мне';
$aboutme_information = [
    'Приветствую вас на моей персональной странице. Давайте знакомиться!',
    'Меня зовут Крылов Яков, я web-разработчик из Санкт-Петербурга.',
    'Я занимаюсь написанием сайтов, версткой, устранением неисправностей на уже готовых ресурсах, а так же их усовершенствованием, используя современные средства оптимизации.',
    'Владею: HTML, CSS, JavaScript, WordPress, PHP, MySQL',
    'try php синтаксис, материалы уроков',
     'Кроме того, являясь инженером ВОЛС, я имею понимание не только  логического построения сетей, но и прекрасно ориентируюсь в их физике, это позволяет мне иметь полную картину передачи данных от серверов до конечного пользователя, тем самым,  расширяя возможность помощи при обращении ко мне в случае необходимости'
    
    
    ];

    $experience = [
            'HTML',
            'CSS',
            'JavaScript',
            'WordPress',
            'PHP',
            'MySQL' 
        ];

?>



<!DOCTYPE html>
<html lang="ru">
 <head>
   <title>php</title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="./style.css">
 </head>
 <body>
     <section class="all">
        <header>
            <div class="header-img">
                <img src="./u993WVgNnww.jpg" alt="myphoto" width="250px" height="250px">
            </div>

            <div class="header-info">
                <div class="header-personal">
                    <div class="header-name">
                        <h1><?php echo $name; ?></h1>
                        <!--,<button class="btn">КЛИКНИ МЕНЯ</button>-->
                    </div>

                    <div class="header-position"><?php echo $developer; ?></div>

                    <div class="header-contacts">
                        <a href="mailto:yakovkrilov@gmail.com"><?php echo $email; ?></a>
                        <a href="tel:+79117950690"><?php echo $tel; ?></a>
                    </div>
                </div>
                <div class="header-social">
                    <a href="https://vk.com/jaydas" target="blank"><?php echo $social[0]; ?></a>
                    <a href="https://github.com/yahont88" target="blank"><?php echo $social[1]; ?></a>
                    <a href="https://web.facebook.com/yakov.krilov" target="blank"><?php echo $social[2]; ?></a>
                </div>
            </div>
        </header>

        <main>
            <div class="aboutme">
                <div class="aboutme-headline">
                    <h2><?php echo $aboutme; ?></h2>
                </div>
                <div class="aboutme-information">
                    <p> <?php echo $aboutme_information[0]; ?></p>
                   <p> <?php echo $aboutme_information[1]; ?></p>
                    <p> <?php echo $aboutme_information[2]; ?></p>
                    <p> <?php echo $aboutme_information[3];?></p>
                    <p><a href="./try.php" target="_blank"><?php echo $aboutme_information[4]; ?></a></p>
                    <p> <?php echo $aboutme_information[5]; ?></p>
                </div>
            </div>

            <div class="experience">
                <div class="experience-headline">
                    <h2>Опыт работы</h2>
                </div>
                <div class="experience-information">
                    <div class="experience-text">
                    Разработчик в on-line школе Zen Code School: Shinobi
                    </div>
                    <div class="li">
                        <span><?php echo $experience[0]; ?></span>
                        <span><?php echo $experience[1]; ?></span>
                        <span><?php echo $experience[2]; ?></span>
                        <span><?php echo $experience[3]; ?></span>
                        <span><?php echo $experience[4]; ?></span>
                        <span><?php echo $experience[5]; ?></span>
                    </div>
                </div>
            </div>
        </main>
    </div>
   <!-- <svg xmlns:svg="http://www.w3.org/2000/svg" xmlns="http://www.w3.org/2000/svg" version="1.0" x="0.00000000" y="0.00000000" width="466.00000" height="466.00000" id="svg2">
        <defs id="defs4"/>
        <g id="layer1">
          <g transform="translate(-14.31153,-9.654345)" id="g2100">

            <path d="M 574.28571 350.93362 A 230.00000 230.00000 0 1 1  114.28571,350.93362 A 230.00000 230.00000 0 1 1  574.28571 350.93362 z" transform="translate(-95.71429,-108.5714)" style="fill-opacity:1.0000000;stroke:none;stroke-width:2.0000000;stroke-linecap:butt;stroke-linejoin:round;stroke-miterlimit:4.0000000;stroke-dasharray:none;stroke-opacity:1.0000000" id="path1366"/>

            <path d="M 231.48189,473.26283 C 131.83469,468.06658 42.098062,390.44395 21.653942,292.99899 C 2.8527423,211.64305 32.299602,121.62080 96.083632,67.582430 C 141.33822,28.222080 202.15620,7.4760400 262.06397,11.991470 C 356.93917,15.843450 443.80335,86.158270 469.35800,177.35283 C 479.83354,210.86634 479.80411,246.84493 475.57362,281.36221 C 461.15785,369.25654 392.02150,445.16887 305.33917,466.41185 C 281.37157,472.30240 256.12409,475.36915 231.48189,473.26283 z M 195.98189,459.07832 C 153.70976,438.32840 127.57657,390.25793 133.57107,343.48796 C 138.36082,288.35497 188.51696,242.79478 243.64749,241.80851 C 289.80353,243.23178 335.32348,214.53137 352.09275,171.21770 C 372.17245,123.85997 354.81639,64.420260 312.15547,35.497910 C 277.18597,9.7192000 230.39701,15.186720 190.59735,24.146350 C 98.599342,46.695330 27.467842,132.85978 22.328202,227.37156 C 15.617372,312.66393 62.578582,398.76397 137.71937,439.58565 C 156.53626,449.74840 183.25724,461.62547 200.86096,461.86871 L 198.91377,460.67719 L 195.98190,459.07832 L 195.98189,459.07832 z M 240.98189,156.44487 C 217.68690,151.96726 210.63785,117.76008 230.72475,104.79451 C 251.31111,88.759900 283.63841,110.57202 275.52356,135.98196 C 271.79700,150.60792 255.61257,159.83414 240.98189,156.44487 z M 252.66158,383.23027 C 281.22410,379.65834 281.98701,333.88297 253.46715,329.56000 C 230.89663,323.64667 211.28225,351.85522 224.59048,371.08172 C 230.24130,379.64095 242.27756,386.42957 252.66158,383.23027 z " style="fill:#000000" id="path1351"/>

          </g>
        </g>
      </svg>-->

    <footer id="copyright">copyright by Yakov Krylov</footer>
 </body>
