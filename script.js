
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('mobile-menu');
        const menu = document.querySelector('.menu');
        const overlay = document.createElement('div');
        overlay.className = 'overlay';
        document.body.appendChild(overlay);
        
        menuToggle.addEventListener('click', function() {
            menu.classList.toggle('active');
            overlay.classList.toggle('active');
            // Change icon between bars and times
            const icon = this.querySelector('i');
            if (menu.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
        
        // Close menu when clicking on overlay
        overlay.addEventListener('click', function() {
            menu.classList.remove('active');
            this.classList.remove('active');
            const icon = menuToggle.querySelector('i');
            icon.classList.remove('fa-times');
            icon.classList.add('fa-bars');
        });
        
        // Close menu when clicking on a menu item
        document.querySelectorAll('.menu a').forEach(item => {
            item.addEventListener('click', function() {
                if (window.innerWidth <= 768) {
                    menu.classList.remove('active');
                    overlay.classList.remove('active');
                    const icon = menuToggle.querySelector('i');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                }
            });
        });
    });
