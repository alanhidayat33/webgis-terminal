// Set loading time (in milliseconds)
var loadingTime = 600;

// Show content and hide loading screen after loading time
setTimeout(function() {
  document.getElementById('map').style.display = 'block';
  document.body.classList.add('loaded');
}, loadingTime);
