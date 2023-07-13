fetch('api/data-for-chart')
  .then(response => response.json())
  .then(data => {
    // ทำการแปลงข้อมูลที่ได้รับเป็นรูปแบบที่เหมาะสำหรับใช้งานกับ Chart.js
    const labels = Object.keys(data);
    const values = Object.values(data);
    const backgroundColors = ['rgba(75, 192, 192, 0.6)', 'rgba(255, 99, 132, 0.6)', 'rgba(54, 162, 235, 0.6)'];
    const borderColors = ['rgba(75, 192, 192, 1)', 'rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)'];

    // สร้างกราฟโดนัท
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: labels,
        datasets: [{
          label: 'จำนวน',
          data: values,
          backgroundColor: backgroundColors,
          borderColor: borderColors,
          borderWidth: 1
        }]
      },
      options: {
        responsive: true,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  })
  .catch(error => {
    console.error('เกิดข้อผิดพลาดในการร้องขอ API:', error);
  });
