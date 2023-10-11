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
    <!-- NAVBAR -->
    <div class="container-fluid header p-0">
        <script src="./assets/js/nav.js"></script>
    </div>
    <!-- 專案簡介部分 -->
    <div class="page-container">
        <div class="project-intro">
            <section id="project-introduction">
                <h1>專案簡介</h1>
                <p>
                    我們專案是尋找中興鵝的位置後，在地圖上標記出來。除此之外，我們還提供相應的LIVE直播供使用者觀賞鵝的美好。
                    透過本專案，我們向使用者介紹興大吉祥物 - 鵝，包括其生活習性、品種介紹等與鵝相關的資訊。
                </p>
            </section>
            <hr>
            <!-- 專案製作緣由說明 -->
            <section id="project-reason">
                <h1>專案製作緣由說明</h1>
                <p>
                    我們在面對期中、期末考試或各類專案期限時，壓力常常讓我們難以入睡。因此，我們會在中興湖畔漫步、聊天以尋求舒壓。
                    在一次的湖畔散步中，「如果鵝能夠一直陪著我們就好了」這句話啟發了我們，也讓專案主題得以確立。
                </p>
            </section>
            <hr>
            <!-- 未來展望 -->
            <section id="future-prospect">
                <h1>未來展望</h1>
                <p>
                    我們計劃透過架設攝影機獲取鵝群的實時畫面，並利用電腦視覺技術框出鵝的位置。
                    這不僅讓我們可以即時追踪鵝群的動態，也方便我們進行習性分析、受傷應變等管理措施。
                    如果有鵝許久未被標記，我們會發送警告至相關管理單位。透過網頁的推廣，我們希望能將中興鵝的名聲傳播至全台甚至全球。
                </p>
            </section>
        </div>
        <div class="contexFooter">
            <div class="is-center">興程式競賽🦆中興大學鵝訊實況</div>
            <!--
        <div class="non-import-page">
            <a href="https://aggielab.github.io/">中興大學資訊安全實驗室</a>
            <a href="https://site.nchuit.cc/">中興大學資訊社</a>
        </div>
        -->
        </div>
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
            color: 0x003C59,
            shininess: 34.00,
            waveHeight: 14.50,
            waveSpeed: 0.80,
            zoom: 0.82
        })
    </script>
</body>