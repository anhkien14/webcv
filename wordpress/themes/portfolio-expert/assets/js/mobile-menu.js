/**
 * Simple and effective mobile menu script
 */

(function() {
    'use strict';
    
    // Wait for DOM to be ready
    document.addEventListener('DOMContentLoaded', function() {
        
        const menuButton = document.getElementById('mmenu-btn');
        const mobileNav = document.getElementById('mobile-navigation');
        const menuContainer = document.getElementById('wsm-menu');
        
        if (!menuButton || !mobileNav) {
            return;
        }

        // Initialize menu state
        function initMenu() {
            mobileNav.classList.remove('menu-active');
            menuButton.setAttribute('aria-expanded', 'false');
            updateButtonText();
        }

        // Update button text based on state
        function updateButtonText() {
            const isOpen = mobileNav.classList.contains('menu-active');
            const openText = menuButton.querySelector('.mopen');
            const closeText = menuButton.querySelector('.mclose');
            
            if (openText && closeText) {
                if (isOpen) {
                    openText.style.display = 'none';
                    closeText.style.display = 'inline';
                } else {
                    openText.style.display = 'inline';
                    closeText.style.display = 'none';
                }
            }
        }

        // Toggle menu
        function toggleMenu() {
            const isOpen = mobileNav.classList.contains('menu-active');
            
            if (isOpen) {
                closeMenu();
            } else {
                openMenu();
            }
        }

        function openMenu() {
            mobileNav.classList.add('menu-active');
            menuButton.setAttribute('aria-expanded', 'true');
            document.body.classList.add('mobile-menu-open');
            updateButtonText();
        }

        function closeMenu() {
            mobileNav.classList.remove('menu-active');
            menuButton.setAttribute('aria-expanded', 'false');
            document.body.classList.remove('mobile-menu-open');
            updateButtonText();
        }

        // Event listeners
        menuButton.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            toggleMenu();
        });

        // Close menu when clicking outside
        document.addEventListener('click', function(e) {
            if (menuContainer && !menuContainer.contains(e.target) && mobileNav.classList.contains('menu-active')) {
                closeMenu();
            }
        });

        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileNav.classList.contains('menu-active')) {
                closeMenu();
                menuButton.focus();
            }
        });

        // Handle submenu toggles
        const subMenuToggles = document.querySelectorAll('.menu-item-has-children > a, .page_item_has_children > a');
        
        subMenuToggles.forEach(function(toggle) {
            toggle.addEventListener('click', function(e) {
                e.preventDefault();
                const parent = this.parentElement;
                const submenu = parent.querySelector('.sub-menu, .children');
                
                if (submenu) {
                    parent.classList.toggle('submenu-open');
                }
            });
        });

        // Initialize menu on load
        initMenu();
    });

})();