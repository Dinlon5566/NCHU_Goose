let activeTab = 'nothing'; // 將這個變數設為全局變數

$(document).ready(function () {
  $(".tab-item").click(function () {
    // 更新資訊區塊的內容
    /*$(".info").html("click " + $(this).text() + " !");*/
    $(".info").html("");
    const oldTab = activeTab;
    activeTab = this.innerText.trim();
    console.log('Active Tab:', activeTab);

    //點擊呱呱呱
    if (activeTab === '電腦視覺介面') {
      const audioElement = document.getElementById('duckSound');
      audioElement.play();
      activeTab = oldTab;
    }
    //  點擊圖示說明
    if (activeTab === '圖示說明') {
      $(".info").html(`
    <h1>圖示說明</h1>
    <div style="display: flex; justify-content: space-between;">
      <div style="flex: 1; text-align: center; margin-right: 20px;">
        <img src='./assets/images/goose.png' class='goose-icon' />
        <p>鵝</p>
      </div>
      <div style="flex: 1; text-align: center; margin-left: 20px;">
        <img src='./assets/images/skygoose.png' class='goose-icon' />
        <p>天鵝</p>
      </div>
    </div>
  `);
    }

  });

});

function mapCoordinates(x, y) {
  const startLat = 24.12;
  const startLon = 120.6736111;
  const endLat = 24.1211111;
  const endLon = 120.6747222;

  const mappedLat = (x / 100) * (endLat - startLat) + startLat;
  const mappedLon = (y / 100) * (endLon - startLon) + startLon;

  return { latitude: mappedLat, longitude: mappedLon };
}

document.addEventListener("DOMContentLoaded", function () {
  const map = document.querySelector('.map');
  const coordinatesDiv = document.querySelector('.coordinates');

  map.addEventListener('mousemove', function (event) {
    const rect = map.getBoundingClientRect();
    const x = event.clientX - rect.left;
    const y = event.clientY - rect.top;

    // 轉換為0~100的座標
    const xScaled = ((x / rect.width) * 100).toFixed(2);
    const yScaled = ((y / rect.height) * 100).toFixed(2);

    coordinatesDiv.textContent = `x: ${xScaled}, y: ${yScaled}`;
  });
});

document.addEventListener("DOMContentLoaded", function () {
  const map = document.querySelector('.map');
  const gooseContainer = document.querySelector('.goose-container');

  // 顯示鵝或天鵝的小圖
  function showGoose(data) {
    const gooseIcon = document.createElement('div');

    //選擇用來顯示鵝礦信息
    const infoDiv = document.querySelector('.info');
    const tabs = document.querySelectorAll('.tab-item');


    // 監聽標籤的點擊事件 skip



    gooseIcon.className = 'goose-icon';

    // 根據種類設定背景圖片
    const imageUrl = data.type === 'goose' ? './assets/images/goose.png' : './assets/images/skygoose.png';
    gooseIcon.style.backgroundImage = `url('${imageUrl}')`;

    gooseIcon.style.left = `${data.x}%`;
    gooseIcon.style.top = `${data.y}%`;

    gooseContainer.appendChild(gooseIcon);
    const newInfo = document.createElement('div');
    // 顯示信息    


    if (activeTab === '鵝況') {
      const now = new Date();
      const timeString = now.toLocaleTimeString();
      const newInfo = document.createElement('div');
      /*
      newInfo.textContent = `${timeString} 在 (${data.x},${data.y}) 有一隻 ${data.type === 'goose' ? '鵝' : '天鵝'}!`;
      infoDiv.appendChild(newInfo);*/

      const mappedCoordinates = mapCoordinates(data.x, data.y);

      newInfo.textContent = `${timeString} 在 (${mappedCoordinates.latitude.toFixed(6)}E, ${mappedCoordinates.longitude.toFixed(6)}N) 有一隻 ${data.type === 'goose' ? '鵝' : '天鵝'}!`;
      infoDiv.appendChild(newInfo);


      // 檢查訊息數量，移除多餘的訊息
      while (infoDiv.childNodes.length > 5) {
        infoDiv.removeChild(infoDiv.firstChild);
      }
    }


    // 10秒後移除小圖
    setTimeout(() => {
      gooseContainer.removeChild(gooseIcon);
    }, 20000);
  }

  // 模擬接收API信息
  function simulateApiData() {
    // 生成隨機座標和名稱
    const randomX = Math.floor(Math.random() * 61) + 20; // 生成20到80之間的隨機X座標
    const randomY = Math.floor(Math.random() * 61) + 20; // 生成20到80之間的隨機Y座標
    const randomName = `Name_${Math.floor(Math.random() * 1000)}`;


    // 隨機選擇鵝或天鵝
    const randomType = Math.random() > 0.1 ? 'goose' : 'skygoose';

    const apiData = {
      cam: "cam1",
      type: randomType,
      name: randomName,
      x: randomX,
      y: randomY
    };

    // 調用showGoose函數來顯示小圖
    showGoose(apiData);
  }

  // 每2秒模擬接收一次API信息
  const randomNum = Math.floor(Math.random() * (5001 - 1000) + 2000);
  setInterval(simulateApiData, randomNum);
});
