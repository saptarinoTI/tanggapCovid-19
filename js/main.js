// SCROLL EFFECT
$('.page-scroll').on('click', function (e) {
  // AMBIL HREF
  let tujuan = $(this).attr('href');
  // TANGKAP ELEMENT  
  let elemenTujuan = $(tujuan);

  $('html, body').animate({
    scrollTop: elemenTujuan.offset().top - 90
  }, 1250, 'easeInOutExpo');

  // MATIKAN FUNGSI HREF
  e.preventDefault();
});
// END SCROLL EFFECT

// SCROLL NAVBAR
$(window).on('scroll', function () {
  if ($(this).scrollTop() > 0) {
    $('nav').addClass('sticky');
    $('nav .navbar-brand img').attr('src', 'assets/img/covid-19.png');
    $('nav .navbar-toggler img').attr('src', 'assets/img/menu.png');
  } else {
    $('nav').removeClass('sticky');
    $('nav .navbar-brand img').attr('src', 'assets/img/covid-19-white.png');
    $('nav .navbar-toggler img').attr('src', 'assets/img/menu-white.png');
  }
});
// END SCROLL NAVBAR

// SCROLL ACTIVE
$("body").scrollspy({
  target: "#mainNav",
  offset: 100,
});

$('.navbar-nav .page-scroll').click(function () {
  $('.navbar-nav .page-scroll').removeClass('active');
  $(this).addClass('active');
})
// END SCROLL ACTIVE

// OPACITY COVID19
$(window).on('scroll', function () {
  var wScroll = $(this).scrollTop();

  if (wScroll > $('#covid19').offset().top - 100) {
    // $('.covid19 .card-covid19 .card-img-top').addClass('muncul');
    $('.covid19 .card-covid19 .card-covid19-isi').addClass('muncul');
  } else {
    // $('.covid19 .card-covid19 .card-img-top').removeClass('muncul');
    $('.covid19 .card-covid19 .card-covid19-isi').removeClass('muncul');
  }

  if (wScroll > $('#covid19-indo').offset().top - 100) {
    $('.covid19-indo .card-covid19-indo-positif').addClass('muncul');
    $('.covid19-indo .card-covid19-indo-dirawat').addClass('muncul');
    $('.covid19-indo .card-covid19-indo-sembuh').addClass('muncul');
    $('.covid19-indo .card-covid19-indo-meninggal').addClass('muncul');
  } else {
    $('.covid19-indo .card-covid19-indo-positif').removeClass('muncul');
    $('.covid19-indo .card-covid19-indo-dirawat').removeClass('muncul');
    $('.covid19-indo .card-covid19-indo-sembuh').removeClass('muncul');
    $('.covid19-indo .card-covid19-indo-meninggal').removeClass('muncul');
  }

  if (wScroll > $('#covid19-indo').offset().top + 100) {
    $('.covid19-indo .covid-chart').addClass('muncul');
  } else {
    $('.covid19-indo .covid-chart').removeClass('muncul');
  }

  if (wScroll > $('#covid19-prov').offset().top - 100) {
    $('.covid19-prov .table-covid19-prov tbody tr td').addClass('muncul');
  } else {
    $('.covid19-prov .table-covid19-prov tbody tr td').removeClass('muncul');
  }

  if (wScroll > $('#covid19-btg').offset().top - 100) {
    $('.covid19-btg .card-covid19-btg-positif').addClass('muncul');
    $('.covid19-btg .card-covid19-btg-dirawat').addClass('muncul');
    $('.covid19-btg .card-covid19-btg-sembuh').addClass('muncul');
    $('.covid19-btg .card-covid19-btg-meninggal').addClass('muncul');
  } else {
    $('.covid19-btg .card-covid19-btg-positif').removeClass('muncul');
    $('.covid19-btg .card-covid19-btg-dirawat').removeClass('muncul');
    $('.covid19-btg .card-covid19-btg-sembuh').removeClass('muncul');
    $('.covid19-btg .card-covid19-btg-meninggal').removeClass('muncul');
  }

  if (wScroll > $('#informasi').offset().top - 100) {
    $('.informasi .card-informasi .card-body').addClass('muncul');
  } else {
    $('.informasi .card-informasi .card-body').removeClass('muncul');
  }

});
// END OPACITY COVID19

// CHARTJS POSITIF HARIAN
// Data Positif Harian
$.getJSON('https://apicovid19indonesia-v2.vercel.app/api/indonesia/harian', function (data) {
  var label = [];
  var value = [];
  $.each(data, function (i, data) {
    var tanggal = new Date(data.tanggal);
    var month = new Array();
    month[0] = "January";
    month[1] = "February";
    month[2] = "March";
    month[3] = "April";
    month[4] = "May";
    month[5] = "June";
    month[6] = "July";
    month[7] = "August";
    month[8] = "September";
    month[9] = "October";
    month[10] = "November";
    month[11] = "December";
    var tgl = (tanggal.getDate() + ' ' + month[tanggal.getMonth()]) + ' ' + tanggal.getFullYear();
    label.push(tgl);
    value.push(data.positif);
  });
  var ctx = document.getElementById('positif').getContext('2d');
  var chart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: label,
      datasets: [{
        label: 'Positif Covid-19 Bertambah',
        backgroundColor: 'rgba(255, 0, 0, 0.5)',
        borderColor: 'rgb(255, 255, 255)',
        data: value
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Positif - Covid-19 di Indonesia PerHari'
      }, scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
});

// END CHARTJS POSITIF HARIAN
