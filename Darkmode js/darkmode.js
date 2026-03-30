function changeMode() {
  if (localStorage.getItem('darkMode') !== null) {
      localStorage.removeItem('darkMode');
      document.documentElement.dataset.theme = 'light';
  } else {
      localStorage.setItem('darkMode', 'on');
      document.documentElement.dataset.theme = 'dark';
  }
}

if (localStorage.getItem('darkMode') !== null) {
    document.documentElement.dataset.theme = 'dark';
} else {
    document.documentElement.dataset.theme = 'light';
}