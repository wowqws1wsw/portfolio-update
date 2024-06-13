
function scrollToElement(id) {
    const element = document.getElementById(id);
    if (element) {
      element.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  }
  

  function opentab(tabName) {
    const tabs = document.querySelectorAll('.tab-contents');
    tabs.forEach(tab => {
      if (tab.id === tabName) {
        tab.classList.add('active-tab');
      } else {
        tab.classList.remove('active-tab');
      }
    });
  }