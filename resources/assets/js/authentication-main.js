(function () {
    'use strict';
    if (localStorage.getItem("velvetdarktheme")) {
        document.querySelector("html").setAttribute("data-theme-mode", "dark")
    }
    if (localStorage.velvetrtl) {
        let html = document.querySelector('html');
        html.setAttribute("dir", "rtl");
        document.querySelector("#style")?.setAttribute("href", "http://127.0.0.1:8000/build/assets/libs/bootstrap/css/bootstrap.rtl.min.css");
    }
    function localStorageBackup() {

        // if there is a value stored, update color picker and background color
        // Used to retrive the data from local storage
        if (localStorage.primaryRGB) {
            if (document.querySelector('.theme-container-primary')) {
                document.querySelector('.theme-container-primary').value = localStorage.primaryRGB;
            }
            document.querySelector('html').style.setProperty('--primary-rgb', localStorage.primaryRGB);
        }
        if (localStorage.bodyBgRGB && localStorage.bodylightRGB) {
            if (document.querySelector('.theme-container-background')) {
                document.querySelector('.theme-container-background').value = localStorage.bodyBgRGB;
            }
            document.querySelector('html').style.setProperty('--body-bg-rgb', localStorage.bodyBgRGB);
            document.querySelector('html').style.setProperty('--light-rgb', localStorage.bodylightRGB);
            document.querySelector('html').style.setProperty('--form-control-bg', `rgb(${localStorage.bodylightRGB})`);
            document.querySelector('html').style.setProperty('--input-border', "rgba(255,255,255,0.1)");
            let html = document.querySelector('html');
            html.setAttribute('data-theme-mode', 'dark');

        }
        if (localStorage.velvetdarktheme) {
            let html = document.querySelector('html');
            html.setAttribute('data-theme-mode', 'dark');
        }
        if (localStorage.velvetrtl) {
            let html = document.querySelector('html');
            html.setAttribute('dir', 'rtl');
            setTimeout(() => {
                
            }, 2000);
        }
    }
    localStorageBackup()

})();