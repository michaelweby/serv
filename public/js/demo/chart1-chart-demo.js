new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: ['يناير',"فبراير","مارس","ابريل","مايو","يونيو","يوليو","اغسطس","سبتمبر","اكتوبر","نوفمبر","ديسمبر"],
    datasets: [{ 
        data: [0,0,1,4,5,6,7,8,9,5,6,8],
        label: "حضور القداس",
        borderColor: "#3e95cd",
        fill: false
      }, { 
        data: [1,2,4,5,6,7,9,8,9,8,9,7],
        label: "حضور مدارس الاحد",
        borderColor: "#8e5ea2",
        fill: false
      }, { 
        data: [1,1,2,3,2,3,4,5,3,5,3,5],
        label: "حضور الاجتماع",
        borderColor: "#3cba9f",
        fill: false
      }, { 
        data: [1,1,1,3,5,6,7,8,9,6,7,4],
        label: "حصة الالحان",
        borderColor: "#e8c3b9",
        fill: false
      }, { 
        data: [3,5,8,6,5,3,2,5,5,3,5,7],
        label: "الكورال",
        borderColor: "#c45850",
        fill: false
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'World population per region (in millions)'
    }
  }
});