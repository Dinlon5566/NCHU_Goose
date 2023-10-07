<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <title>中興大學鵝訊實況🦆</title>
    <link rel="icon" type="image/png" href="./assets/images/goose.png">
    <!-- 引入Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- 引入FontAwesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <link rel="stylesheet" href="./assets/css/styles.css">
    <link rel="stylesheet" href="./assets/css/contextStyles.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@300;400;500&display=swap" rel="stylesheet">
</head>


<body>
    <!-- 內容 -->
    <div class="container-fluid header p-0">
        <script src="./assets/js/nav.js"></script>
    </div>
    <!-- 專案簡介部分 -->
    <div class="project-intro">
        <section id="project-introduction">
            <h1>興大生態</h1>
            <p>
                在中興大學裡，鵝是每位興大學生必須認識的校園動物。無論是趕忙去上課的途中，亦或是踏著輕快的步伐在校園中漫步，只要經過中興湖幾乎都可以看到鵝在樹下乘涼或在湖中快樂的游泳。
            </p>
            <p>
                在中興湖畔常見的鵝是家鵝，家鵝是鴨子和天鵝的近親，屬於雁形目。野生的鵝會飛，甚至透過飛行橫跨大陸，但多數被飼養的家鵝已經失去飛行能力。
            </p>
            <p>
                它們常常聚在一起生活，其中最大一隻白鵝叫做「瓜瓜」，它曾經是家養鵝，後來才放養至中興湖。
            </p>
        </section>
        <hr>
        <section id="project-introduction">
            <h1>中興湖</h1>
            <p>
                中興湖是中興學子以工讀或義務的方式努力挖出的一座湖，以中國大陸「秋海棠」的形狀打造，旁邊陪襯著台灣和海南島形狀的小水池，中央的小島則利用鵝卵石被堆砌稱作蘭州島，島上有白鷺與夜鷺棲息。湖畔遍植花木，景色優美，生態豐富有趣。三十多年來，中興湖已成為中興人夢想和創意的泉源。

            </p>
        </section>

    </div>
    <!-- Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.waves.min.js"></script>
    <script>
        VANTA.WAVES({
            el: "html",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0x357aae,
            shininess: 34.00,
            waveHeight: 14.50,
            waveSpeed: 0.80,
            zoom: 0.82
        })
    </script>
</body>