// Sidebar toggle functionality
document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebar');
    const toggleBtn = document.getElementById('sidebar-toggle');
    const toggleIcon = toggleBtn.querySelector('svg path');
    const mainContent = document.querySelector('main');
    
    let isCollapsed = false;

    toggleBtn.addEventListener('click', function() {
        isCollapsed = !isCollapsed;
        
        if (isCollapsed) {
            // Add transition to text elements
            const textElements = sidebar.querySelectorAll('h1, div.font-semibold, div.text-\\[16px\\]');
            textElements.forEach(el => {
                el.style.transition = 'opacity 150ms ease-out';
                el.style.opacity = '0';
            });
            
            // Wait for text to fade out before collapsing
            setTimeout(() => {
                textElements.forEach(el => {
                    el.style.visibility = 'hidden';
                    el.style.position = 'absolute';
                });
                sidebar.style.maxWidth = '80px';
                
                // Adjust main content padding
                if (mainContent) {
                    mainContent.style.paddingLeft = '120px';
                }
                
                // Rotate icon 180 degrees
                toggleIcon.setAttribute('d', 'M8.75 22.5L16.25 15L8.75 7.5M21.25 7.5V22.5');
            }, 150);
            
        } else {
            // Expand sidebar first
            sidebar.style.maxWidth = '250px';
            
            // Adjust main content padding back
            if (mainContent) {
                mainContent.style.paddingLeft = '290px';
            }
            
            // Rotate icon back
            toggleIcon.setAttribute('d', 'M21.25 22.5L13.75 15L21.25 7.5M8.75 7.5V22.5');
            
            // Wait for sidebar to expand before showing text
            setTimeout(() => {
                const textElements = sidebar.querySelectorAll('h1, div.font-semibold, div.text-\\[16px\\]');
                textElements.forEach(el => {
                    el.style.position = 'static';
                    el.style.visibility = 'visible';
                    el.style.transition = 'opacity 150ms ease-in';
                    el.style.opacity = '1';
                });
            }, 200);
        }
    });
});

// mobile sidebar functionality
document.addEventListener('DOMContentLoaded', function() {
    const mobileSidebar = document.getElementById('mobileSidebar');
    const openMenuBtn = document.getElementById('openMenuBtn');
    const closeMenuBtn = document.getElementById('closeMenuBtn');

    openMenuBtn.addEventListener('click', function() {
         mobileSidebar.classList.remove('-translate-x-full');
         mobileSidebar.classList.add('translate-x-0');
    });

    closeMenuBtn.addEventListener('click', function() {
        mobileSidebar.classList.remove('translate-x-0');
        mobileSidebar.classList.add('-translate-x-full');
    })

});