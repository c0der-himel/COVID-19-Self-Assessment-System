$(document).ready(function () {
  // First Form Open Button
  $('#form-1').click(function () {
    $('#form1').modal('show');
  });

  // Second Form Open Next Button
  $('#form-2').click(function () {
    $('#form1').modal('hide');
    $('#form2').modal('show');
  });

  // Third Form Open Next Button
  $('#form-3').click(function () {
    $('#form2').modal('hide');
    $('#form3').modal('show');
  });

  // Forth Form Open
  $('#form-4').click(function () {
    $('#form3').modal('hide');
    $('#form4').modal('show');
  });

  // Previous Button
  $('#prev-2').click(function () {
    $('#form2').modal('hide');
    $('#form1').modal('show');
  });

  // Previous Button
  $('#prev-3').click(function () {
    $('#form3').modal('hide');
    $('#form2').modal('show');
  });

  // Active Menu
  $('li').on('click', function () {
    $(this).addClass('active');
    $(this).siblings().removeClass('active');
  });

  // Navbar Shadow Scroll
  $(window).on('scroll', function () {
    if ($(window).scrollTop()) {
      $('nav').addClass('shadow-lg rounded-lg');
    } else {
      $('nav').removeClass('shadow-lg rounded-lg');
    }
  });

  // CounterUp Plugin
  $('.counter').counterUp({
    delay: 10,
    time: 1000
  });

  let agree = document.querySelector('.agree');
  let agreeBtn = document.querySelector('#form-1');
  let next = document.querySelector('.next');
  let age = document.querySelector('#inputState1');
  let sex = document.querySelector('#inputState2');
  let temp = document.querySelector('#inputState');

  agreeBtn.disabled = true;

  // Disable Enable Agree Button
  agree.addEventListener('click', function () {
    if (agree.checked) {
      agreeBtn.disabled = false;
    } else {
      agreeBtn.disabled = true;
    }
  });

  next.disabled = true;

  // Disable Enable First Button
  age.addEventListener('click', function () {
    if (
      age.value === 'Choose...' ||
      sex.value === 'Choose...' ||
      temp.value === 'Choose...'
    ) {
      next.disabled = true;
    } else {
      next.disabled = false;
    }
  });

  sex.addEventListener('click', function () {
    if (
      age.value === 'Choose...' ||
      sex.value === 'Choose...' ||
      temp.value === 'Choose...'
    ) {
      next.disabled = true;
    } else {
      next.disabled = false;
    }
  });

  temp.addEventListener('click', function () {
    if (
      age.value === 'Choose...' ||
      sex.value === 'Choose...' ||
      temp.value === 'Choose...'
    ) {
      next.disabled = true;
    } else {
      next.disabled = false;
    }
  });
});
