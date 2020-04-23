const btnClose = document.getElementsByClassName("btn-cls")[0];
btnClose.addEventListener("click", () =>{
    document.getElementById("sidenav").style.width = '0px';
    document.getElementById("sidenav-nav").style.display = 'none';
});

const collapse = document.getElementsByClassName("collapse")[0];
collapse.addEventListener("click", () =>{
    document.getElementById("sidenav").style.width = '100%';
    window.setTimeout(() => document.getElementById("sidenav-nav").style.display = 'block', 300);
});

