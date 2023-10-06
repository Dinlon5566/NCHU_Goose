<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <title>直播鵝與電腦視覺辨識</title>
    <!-- 引入Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- 引入FontAwesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="container-fluid header p-0">
        <div class="map">
            <img src="realMap2.png" alt="中興湖地圖" class="img-fluid rounded">
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
        <div class="tabs bg-light">
            <button class="btn tab-item"><i class="fas fa-one"></i> 呱</button>
            <button class="btn tab-item"><i class="fas fa-two"></i> 呱呱</button>
            <button class="btn tab-item"><i class="fas fa-three"></i> 呱呱呱</button>
        </div>
        <div class="info bg-white">
            <!-- 資訊內容 -->
        </div>
    </div>

    <!-- 引入jQuery和Bootstrap的JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="scripts.js"></script>
    <script src="three.r134.min.js"></script>

</body>

</html>