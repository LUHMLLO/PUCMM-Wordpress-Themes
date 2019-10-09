$(document).ready(function(){







    

    const sidebar = document.querySelectorAll('.custom-mobile-sidebar')[0];

    const sidebarunderlay = document.querySelectorAll('.custom-mobile-sidebar-close-underlay')[0];



    const opensidebar = document.querySelectorAll('.navbar-toggler')[0];

    const closesidebar = document.querySelectorAll('.custom-mobile-sidebar-close-underlay')[0];





    opensidebar.addEventListener("click", ShowSidebar)

        function ShowSidebar() { 

            //alert('ShowSidebar is working');



            sidebar.classList.add('enable-animation');

            sidebar.classList.add('slideInLeft');

            sidebarunderlay.classList.add('enable-animation');

            sidebarunderlay.classList.add('fadeIn');

        }    





    closesidebar.addEventListener("click", Hidesidebar)

        function Hidesidebar() { 

            //alert('Hidesidebar is working');

            sidebar.classList.add('slideOutLeft');

            sidebarunderlay.classList.add('fadeOut');

            

            setTimeout(function(){ 

                 sidebar.classList.remove('enable-animation');

                 sidebar.classList.remove('slideOutLeft');

                 sidebarunderlay.classList.remove('enable-animation');

                 sidebarunderlay.classList.remove('fadeOut');

                 console.log('done');

            }, 800);

        } 













        

        const header = document.querySelectorAll(".henry-header")[0];

        let prevScrollpos = window.pageYOffset;

        var sticky = header.offsetTop;



        window.onscroll = function() {

            if (window.pageYOffset >= (sticky + 1)) {

                    header.classList.add("top-fixed-navbar");



                    let currentScrollPos = window.pageYOffset;

                    if (prevScrollpos > currentScrollPos) {

                        header.classList.remove('slideOutUp');

                        header.classList.add('slideInDown');

                        header.style.top = "0";

                    } else {

                        header.classList.remove('slideInDown');

                        header.classList.add('slideOutUp');

                        header.style.top = "-200%";

                    }

                    prevScrollpos = currentScrollPos;

              } else {

                    header.classList.remove("top-fixed-navbar");

              }

        }



        





});