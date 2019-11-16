const openTab = (tabBlock, tabId) => {
    var tabNavs = (document.querySelectorAll('.'+tabBlock + ' .tabsbar .tab-item'));
    for (var i = 0; i < tabNavs.length; i++) {
        tabNavs[i].classList.remove('active-tab-item');
    }
    document.getElementById('tab-nav-'+tabId).classList.add('active-tab-item');
    var tabs = (document.querySelectorAll('.'+tabBlock + ' .tab-block'));
    for (var i = 0; i < tabs.length; i++) {
        tabs[i].classList.remove('active-tab');
    }
    document.getElementById(tabId).classList.add('active-tab');
}

export {
    openTab
}
