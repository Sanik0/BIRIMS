// Notification Actions Toggle Handler
document.addEventListener('DOMContentLoaded', function() {
    // Get all notification items
    const notifications = document.querySelectorAll('.group');
    
    notifications.forEach((notification) => {
        const threeDotsBtn = notification.querySelector('.cursor-pointer');
        const actionsMenu = notification.querySelector('.absolute');
        
        // Initially hide the actions menu
        if (actionsMenu) {
            actionsMenu.style.display = 'none';
        }
        
        // Toggle menu on three-dots click
        threeDotsBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            
            // Close all other open menus first
            document.querySelectorAll('.absolute').forEach((menu) => {
                if (menu !== actionsMenu) {
                    menu.style.display = 'none';
                }
            });
            
            // Toggle current menu
            if (actionsMenu.style.display === 'none') {
                actionsMenu.style.display = 'flex';
            } else {
                actionsMenu.style.display = 'none';
            }
        });
        
        // Handle "Mark as Read" action
        const markAsReadBtn = actionsMenu.querySelector('.flex.items-center:first-child');
        markAsReadBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            const blueDot = notification.querySelector('.bg-blue-600');
            if (blueDot) {
                blueDot.style.display = 'none';
            }
            actionsMenu.style.display = 'none';
        });
        
        // Handle "Delete Notification" action
        const deleteBtn = actionsMenu.querySelector('.flex.items-center:last-child');
        deleteBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            notification.style.opacity = '0';
            notification.style.transition = 'opacity 0.3s ease';
            setTimeout(() => {
                notification.remove();
            }, 300);
        });
    });
    
    // Close menus when clicking outside
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.cursor-pointer') && !e.target.closest('.absolute')) {
            document.querySelectorAll('.absolute').forEach((menu) => {
                menu.style.display = 'none';
            });
        }
    });
});