new Chart(document.getElementById("doughnut-chart"), {
    type: 'doughnut',
   data: {
      labels: ["ابتدائي", "اعدادى", "ثانوي", "جامعه", "خرديين", "حضانة"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#a3e1d4", "#dedede", "#b5b8cf","#e8c3b9","#999", "#0ce0ce"],
        data: [2000, 1500, 1000, 1000, 500, 900]
      }]
    },
    options: {
      title: {
        display: true,
      }
    }
});