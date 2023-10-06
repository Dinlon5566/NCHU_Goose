$(document).ready(function () {
  $(".tab-item").click(function () {
    // 更新資訊區塊的內容
    $(".info").html("click " + $(this).text() + " !");
  });
});

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

document.addEventListener("DOMContentLoaded", function() {
  const map = document.querySelector('.map');
  const gooseContainer = document.querySelector('.goose-container');

  // 顯示鵝或天鵝的小圖
  function showGoose(data) {
    const gooseIcon = document.createElement('div');
    gooseIcon.className = 'goose-icon';

    // 根據種類設定背景圖片
    const imageUrl = data.type === 'goose' ? 'goose.png' : 'skygoose.png';
    gooseIcon.style.backgroundImage = `url('${imageUrl}')`;

    gooseIcon.style.left = `${data.x}%`;
    gooseIcon.style.top = `${data.y}%`;

    gooseContainer.appendChild(gooseIcon);

    // 5秒後移除小圖
    setTimeout(() => {
      gooseContainer.removeChild(gooseIcon);
    }, 5000);
  }

  // 模擬接收API信息
  function simulateApiData() {
    // 生成隨機座標和名稱
    const randomX = Math.floor(Math.random() * 101);
    const randomY = Math.floor(Math.random() * 101);
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
  setInterval(simulateApiData, 200);
});
