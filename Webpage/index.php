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

    <!-- vanta -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js"></script>

</head>

<body>
    <!-- Script -->

    <!--
    <script>
        VANTA.NET({
            el: ".footer",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 200.00,
            minWidth: 200.00,
            scale: 1.00,
            scaleMobile: 1.00,
            color: 0xaaa2a3,
            backgroundColor: 0xeeeef2,
            showDots: false
        })
    </script>
    -->

    <!-- 內容 -->
    <div class="container-fluid header p-0">
        <nav class="navbar">
            <div class="navbar-left">
                中興大學鵝訊實況
            </div>
            <div class="navbar-right">
                <a href="./index.php">首頁</a>
                <a href="#link2">連結2</a>
                <a href="#link3">連結3</a>
                <a href="#link4">連結4</a>
                <a href="#link5">連結5</a>
            </div>
        </nav>

        <div class="map">
            <img src="./assets/images/realMap2.png" alt="中興湖地圖" class="img-fluid rounded">
            <div class="coordinates"></div>
            <div class="goose-container"></div>
        </div>
        <div class="youtube">
            <!-- 嵌入YouTube直播 -->
            <iframe
                src="https://www.youtube.com/embed/jfKfPfyJRdk?rel=0&modestbranding=1&autohide=1&mute=1&showinfo=0&controls=0&autoplay=1"
                frameborder="0" allowfullscreen></iframe>

            <!-- Auto play script
           <iframe  src="https://www.youtube.com/embed/D9S7er_nCNs?rel=0&modestbranding=1&autohide=1&mute=1&showinfo=0&controls=0&autoplay=1"
                width="10" height="10"  frameborder="0" allowfullscreen></iframe>

            -->
        </div>
    </div>

    <div class="footer rounded-top">
        <div class="tabs">
            <button class="btn tab-item"><i class="fas fa-one"></i> 鵝況</button>
            <button class="btn tab-item"><i class="fas fa-two"></i> 圖示說明</button>
            <button class="btn tab-item"><i class="fas fa-three"></i> 呱呱呱</button>
            
        </div>
        <div class="info ">
            <!-- 資訊內容 -->
        </div>
    </div>

    <!-- 引入jQuery和Bootstrap的JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./assets/js/scripts.js"></script>


</body>

</html>