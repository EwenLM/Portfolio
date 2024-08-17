window.addEventListener('scroll', function() {
            let scrollPosition = window.scrollY;
            let contentInner = document.getElementById('scrollable-content');
            contentInner.style.transform = 'translate3d(0px, ' + (-scrollPosition) + 'px, 0px)';
        });
