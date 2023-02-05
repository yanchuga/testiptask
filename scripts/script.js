
// Wait for document to load
document.addEventListener('DOMContentLoaded', function (event) {
  //for button dark theme state
  let isChecked = localStorage.getItem("dark-checkedbox");
  console.log(isChecked);
  if (isChecked == 'true') {
    $(".dark-chkbox").prop("checked", true);
  }
  if (isChecked == 'false') {
    $(".dark-chkbox").prop("checked", false);
  }
  //for dark theme
  let theme = localStorage.getItem('data-theme'); // Retrieve saved them from local storage
  document.documentElement.setAttribute('data-theme', theme)

  // Get our button switcher
  // var themeSwitcher = document.getElementById('theme-switcher')
  var themeSwitcher = document.querySelector('.dark-chkbox');


  themeSwitcher.addEventListener('change', function () {
    // var currentTheme = document.documentElement.getAttribute('data-theme')
    // var switchToTheme = currentTheme === 'dark' ? 'light' : 'dark'
    if (themeSwitcher.checked) {
      localStorage.setItem("dark-checkedbox", 'true');
      document.documentElement.setAttribute('data-theme', 'dark')
      localStorage.setItem("data-theme", 'dark') // save theme to local storage
    } else {
      localStorage.setItem("dark-checkedbox", 'false');
      document.documentElement.setAttribute('data-theme', 'light')
      localStorage.setItem("data-theme", 'light') // save theme to local storage
    }

  })
})

// toggleBurger
function toggleBurger(x) {
  console.log('hello');
  x.classList.toggle("change");
}
