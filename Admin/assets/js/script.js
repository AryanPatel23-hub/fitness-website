/**
 * Admin Panel — jQuery functionality
 * Sidebar collapse, active page highlight, profile dropdown, users table search
 */
(function($) {
    'use strict';

    var $sidebar = $('#sidebar');
    var $profileTrigger = $('#profileTrigger');
    var $profileDropdown = $('#profileDropdown');

    /**
     * Sidebar collapse toggle
     */
    function initSidebarCollapse() {
        var $toggle = $('#sidebarToggle');
        if (!$toggle.length) return;

        $toggle.on('click', function() {
            $sidebar.toggleClass('collapsed');
        });
    }

    /**
     * Highlight current page in sidebar (from body data-page)
     */
    function initActivePage() {
        var page = $('body').attr('data-page');
        if (!page) return;

        $('.sidebar-nav .nav-item').each(function() {
            var $item = $(this);
            if ($item.attr('data-page') === page) {
                $item.addClass('active');
            } else {
                $item.removeClass('active');
            }
        });
    }

    /**
     * Active menu on click (for in-page nav)
     */
    function initActiveMenuClick() {
        $('.sidebar-nav .nav-item').on('click', function() {
            $('.sidebar-nav .nav-item').removeClass('active');
            $(this).addClass('active');
        });
    }

    /**
     * Profile dropdown toggle
     */
    function initProfileDropdown() {
        $profileTrigger.on('click', function(e) {
            e.stopPropagation();
            var isExpanded = $profileTrigger.attr('aria-expanded') === 'true';
            if (isExpanded) {
                closeDropdown();
            } else {
                openDropdown();
            }
        });
    }

    function openDropdown() {
        $profileTrigger.attr('aria-expanded', 'true');
        $profileDropdown.attr('aria-hidden', 'false').addClass('is-open');
    }

    function closeDropdown() {
        $profileTrigger.attr('aria-expanded', 'false');
        $profileDropdown.attr('aria-hidden', 'true').removeClass('is-open');
    }

    /**
     * Close dropdown when clicking outside
     */
    function initOutsideClick() {
        $(document).on('click', function(e) {
            if ($profileDropdown.hasClass('is-open') &&
                !$(e.target).closest('.profile-trigger-wrap').length) {
                closeDropdown();
            }
        });
    }

    $profileDropdown.on('click', function(e) {
        e.stopPropagation();
    });

    /**
     * Simple search filter in Users table
     */
    function initUsersSearch() {
        var $search = $('#usersSearch');
        var $table = $('#usersTable');
        if (!$search.length || !$table.length) return;

        $search.on('keyup', function() {
            var query = $(this).val().toLowerCase().trim();
            $table.find('tbody tr').each(function() {
                var $row = $(this);
                var text = $row.text().toLowerCase();
                if (query === '' || text.indexOf(query) !== -1) {
                    $row.removeClass('row-hidden');
                } else {
                    $row.addClass('row-hidden');
                }
            });
        });
    }

    /**
     * Settings form submit (prevent default, show feedback)
     */
    function initSettingsForm() {
        $('#settingsForm').on('submit', function(e) {
            e.preventDefault();
            /* Placeholder: could show success message via jQuery */
        });
    }

    function init() {
        initSidebarCollapse();
        initActivePage();
        initActiveMenuClick();
        initProfileDropdown();
        initOutsideClick();
        initUsersSearch();
        initSettingsForm();
    }

    $(document).ready(init);

})(jQuery);
