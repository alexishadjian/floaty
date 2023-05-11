document.addEventListener('DOMContentLoaded', () => {

    /*--------------------------------------------------------------
    Header nav fix scroll
    --------------------------------------------------------------*/
    
    var header = document.querySelector('header');

    window.addEventListener('scroll', function()  {

        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            header.classList.add('scroll');
        } else {
            header.classList.remove('scroll');
        }

    });

});