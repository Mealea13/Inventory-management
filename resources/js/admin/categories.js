// public/js/categories.js

document.addEventListener('DOMContentLoaded', function() {
    initializeCategories();
});

function initializeCategories() {
    initializeSearch();
    initializeButtons();
}

// Search functionality
function initializeSearch() {
    const searchInput = document.getElementById('searchInput');
    const categoryRows = document.querySelectorAll('.category-row');

    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase().trim();

            categoryRows.forEach(row => {
                const categoryName = row.querySelector('.category-name').textContent.toLowerCase();
                const categoryId = row.querySelector('.category-id').textContent.toLowerCase();
                const categoryDate = row.querySelector('.category-date').textContent.toLowerCase();
                const categoryStatus = row.querySelector('.category-status').textContent.toLowerCase();

                const matchesSearch =
                    categoryName.includes(searchTerm) ||
                    categoryId.includes(searchTerm) ||
                    categoryDate.includes(searchTerm) ||
                    categoryStatus.includes(searchTerm);

                if (matchesSearch) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Clear search on escape key
        searchInput.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                e.target.value = '';
                e.target.dispatchEvent(new Event('input'));
            }
        });
    }
}

// Button event handlers
function initializeButtons() {
    // Add Category Button
    const addButton = document.getElementById('addCategoryBtn');
    if (addButton) {
        addButton.addEventListener('click', function() {
            alert('Add Category functionality - This would redirect to add form or open modal');
            // In real Laravel app: window.location.href = '/admin/categories/create';
        });
    }

    // Edit Buttons
    document.querySelectorAll('.btn-edit').forEach(button => {
        button.addEventListener('click', function() {
            const categoryId = this.getAttribute('data-id');
            const row = this.closest('.category-row');
            const categoryName = row.querySelector('.category-name').textContent;

            if (confirm(`Edit Category: ${categoryName}?`)) {
                alert(`Editing Category ID: ${categoryId} - ${categoryName}`);
                // In real Laravel app: window.location.href = `/admin/categories/${categoryId}/edit`;
            }
        });
    });

    // Delete Buttons
    document.querySelectorAll('.btn-delete').forEach(button => {
        button.addEventListener('click', function() {
            const categoryId = this.getAttribute('data-id');
            const row = this.closest('.category-row');
            const categoryName = row.querySelector('.category-name').textContent;

            if (confirm(`Are you sure you want to delete "${categoryName}"?\n\nThis action cannot be undone.`)) {
                // Animate removal
                row.style.transition = 'all 0.3s ease-out';
                row.style.transform = 'translateX(-100%)';
                row.style.opacity = '0';

                setTimeout(() => {
                    row.remove();
                    showNotification(`Category "${categoryName}" has been deleted successfully!`, 'success');
                }, 300);

                // In real Laravel app, you would send AJAX request:
                // deleteCategory(categoryId);
            }
        });
    });
}

// Show notification function
function showNotification(message, type = 'info') {
    // Remove existing notification
    const existingNotification = document.getElementById('notification');
    if (existingNotification) {
        existingNotification.remove();
    }

    // Create notification
    const notification = document.createElement('div');
    notification.id = 'notification';
    notification.className = `notification ${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            ${message}
            <button class="notification-close" onclick="this.parentElement.parentElement.remove()">×</button>
        </div>
    `;

    // Add notification styles if not exist
    if (!document.getElementById('notificationStyles')) {
        const styles = document.createElement('style');
        styles.id = 'notificationStyles';
        styles.textContent = `
            .notification {
                position: fixed;
                top: 20px;
                right: 20px;
                z-index: 1000;
                min-width: 300px;
                max-width: 500px;
                padding: 15px 20px;
                border-radius: 5px;
                box-shadow: 0 4px 12px rgba(0,0,0,0.2);
                animation: slideIn 0.3s ease-out;
            }
            .notification.success {
                background-color: #d4edda;
                color: #155724;
                border-left: 4px solid #28a745;
            }
            .notification.info {
                background-color: #d1ecf1;
                color: #0c5460;
                border-left: 4px solid #17a2b8;
            }
            .notification.error {
                background-color: #f8d7da;
                color: #721c24;
                border-left: 4px solid #dc3545;
            }
            .notification-content {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }
            .notification-close {
                background: none;
                border: none;
                font-size: 18px;
                cursor: pointer;
                padding: 0 0 0 10px;
                color: inherit;
            }
            @keyframes slideIn {
                from {
                    transform: translateX(100%);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
        `;
        document.head.appendChild(styles);
    }

    document.body.appendChild(notification);

    // Auto remove after 5 seconds
    setTimeout(() => {
        if (notification && notification.parentNode) {
            notification.remove();
        }
    }, 5000);
}

// AJAX function for real Laravel implementation (commented for reference)
/*
function deleteCategory(categoryId) {
    fetch(`/admin/categories/${categoryId}`, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showNotification(data.message, 'success');
            // Remove row from DOM
            document.querySelector(`[data-id="${categoryId}"]`).closest('.category-row').remove();
        } else {
            showNotification(data.message || 'Error deleting category', 'error');
        }
    })
    .catch(error => {
        console.// Categories Management JavaScript

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all functionality
    initializeSearch();
    initializeActionButtons();
    initializeTableInteractions();
});

/**
 * Initialize search functionality
 */
function initializeSearch() {
    const searchInput = document.getElementById('searchInput');
    const categoryRows = document.querySelectorAll('.category-row');

    if (searchInput) {
        searchInput.addEventListener('input', function(e) {
            const searchTerm = e.target.value.toLowerCase().trim();

            categoryRows.forEach(row => {
                const categoryName = row.querySelector('.category-name').textContent.toLowerCase();
                const categoryId = row.querySelector('.category-id').textContent.toLowerCase();
                const categoryDate = row.querySelector('.category-date').textContent.toLowerCase();
                const categoryStatus = row.querySelector('.category-status').textContent.toLowerCase();

                const matchesSearch =
                    categoryName.includes(searchTerm) ||
                    categoryId.includes(searchTerm) ||
                    categoryDate.includes(searchTerm) ||
                    categoryStatus.includes(searchTerm);

                if (matchesSearch) {
                    row.classList.remove('hidden');
                    row.style.display = '';
                } else {
                    row.classList.add('hidden');
                    row.style.display = 'none';
                }
            });

            // Update table visibility message if no results
            updateNoResultsMessage(searchTerm);
        });

        // Clear search on escape key
        searchInput.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                e.target.value = '';
                e.target.dispatchEvent(new Event('input'));
                e.target.blur();
            }
        });
    }
}

/**
 * Update no results message
 */
function updateNoResultsMessage(searchTerm) {
    const visibleRows = document.querySelectorAll('.category-row:not(.hidden)');
    const tableContainer = document.querySelector('.categories-table-container');
    let noResultsMessage = document.getElementById('noResultsMessage');

    if (visibleRows.length === 0 && searchTerm.length > 0) {
        if (!noResultsMessage) {
            noResultsMessage = document.createElement('div');
            noResultsMessage.id = 'noResultsMessage';
            noResultsMessage.className = 'no-results-message';
            noResultsMessage.innerHTML = `
                <div class="no-results-content">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.35-4.35"></path>
                    </svg>
                    <h3>No categories found</h3>
                    <p>Try adjusting your search terms</p>
                </div>
            `;

            // Add styles for no results message
            const style = document.createElement('style');
            style.textContent = `
                .no-results-message {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    padding: 60px 20px;
                    background: #fff;
                    border-radius: 12px;
                    margin-top: 20px;
                }
                .no-results-content {
                    text-align: center;
                    color: #6c757d;
                }
                .no-results-content svg {
                    margin-bottom: 16px;
                    opacity: 0.5;
                }
                .no-results-content h3 {
                    margin: 0 0 8px 0;
                    font-size: 18px;
                    font-weight: 600;
                }
                .no-results-content p {
                    margin: 0;
                    font-size: 14px;
                }
            `;
            document.head.appendChild(style);

            tableContainer.parentNode.appendChild(noResultsMessage);
        }
        noResultsMessage.style.display = 'block';
    } else if (noResultsMessage) {
        noResultsMessage.style.display = 'none';
    }
}

/**
 * Initialize action buttons (Add, Edit, Delete)
 */
function initializeActionButtons() {
    // Add Category Button
    const addButton = document.getElementById('addCategoryBtn');
    if (addButton) {
        addButton.addEventListener('click', handleAddCategory);
    }

    // Edit Buttons
    document.querySelectorAll('.btn-edit').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const categoryId = this.getAttribute('data-id');
            handleEditCategory(categoryId);
        });
    });

    // Delete Buttons
    document.querySelectorAll('.btn-delete').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const categoryId = this.getAttribute('data-id');
            handleDeleteCategory(categoryId, this);
        });
    });
}

/**
 * Handle Add Category
 */
function handleAddCategory() {
    showNotification('Add Category functionality would open a modal or redirect to add page', 'info');

    // In a real application, this would:
    // - Open a modal with a form
    // - Or redirect to an add category page
    // - Or show an inline form

    console.log('Add Category clicked');
}

/**
 * Handle Edit Category
 */
function handleEditCategory(categoryId) {
    const row = document.querySelector(`[data-id="${categoryId}"]`).closest('.category-row');
    const categoryName = row.querySelector('.category-name').textContent;

    showNotification(`Edit Category: ${categoryName} (ID: ${categoryId})`, 'info');

    // In a real application, this would:
    // - Open an edit modal with pre-filled data
    // - Or redirect to an edit page with the category data
    // - Or enable inline editing

    console.log('Edit Category:', categoryId, categoryName);
}

/**
 * Handle Delete Category
 */
function handleDeleteCategory(categoryId, buttonElement) {
    const row = buttonElement.closest('.category-row');
    const categoryName = row.querySelector('.category-name').textContent;

    // Show confirmation dialog
    if (confirm(`Are you sure you want to delete "${categoryName}"?\n\nThis action cannot be undone.`)) {
        // Add deletion animation
        row.style.transition = 'all 0.3s ease-out';
        row.style.transform = 'translateX(-100%)';
        row.style.opacity = '0';

        // Remove row after animation
        setTimeout(() => {
            row.remove();
            showNotification(`Category "${categoryName}" has been deleted`, 'success');

            // Update search if active
            const searchInput = document.getElementById('searchInput');
            if (searchInput && searchInput.value.trim()) {
                searchInput.dispatchEvent(new Event('input'));
            }
        }, 300);

        // In a real application, this would also:
        // - Send an AJAX request to delete from the database
        // - Handle any server-side validation
        // - Show appropriate error messages if deletion fails

        console.log('Delete Category:', categoryId, categoryName);
    }
}

/**
 * Initialize table interactions
 */
function initializeTableInteractions() {
    const rows = document.querySelectorAll('.category-row');

    rows.forEach(row => {
        // Add click handling for row selection (optional)
        row.addEventListener('click', function(e) {
            // Don't select row if clicking on action buttons
            if (e.target.closest('.category-actions')) {
                return;
            }

            // Remove previous selection
            document.querySelectorAll('.category-row.selected').forEach(r => {
                r.classList.remove('selected');
            });

            // Add selection to current row
            this.classList.add('selected');
        });
    });

    // Add styles for selected rows
    const style = document.createElement('style');
    style.textContent = `
        .category-row.selected {
            background-color: #e3f2fd !important;
            border-left: 4px solid #2196f3;
        }
        .category-row.selected:hover {
            background-color: #e3f2fd !important;
        }
    `;
    document.head.appendChild(style);
}

/**
 * Show notification messages
 */
function showNotification(message, type = 'info') {
    // Remove existing notifications
    const existingNotification = document.getElementById('notification');
    if (existingNotification) {
        existingNotification.remove();
    }

    // Create notification element
    const notification = document.createElement('div');
    notification.id = 'notification';
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            <span class="notification-icon">${getNotificationIcon(type)}</span>
            <span class="notification-message">${message}</span>
            <button class="notification-close" onclick="this.parentElement.parentElement.remove()">×</button>
        </div>
    `;

    // Add notification styles
    if (!document.getElementById('notificationStyles')) {
        const styles = document.createElement('style');
        styles.id = 'notificationStyles';
        styles.textContent = `
            .notification {
                position: fixed;
                top: 20px;
                right: 20px;
                z-index: 1000;
                min-width: 300px;
                max-width: 500px;
                border-radius: 8px;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
                animation: slideInRight 0.3s ease-out;
            }
            .notification-content {
                display: flex;
                align-items: center;
                padding: 16px;
                gap: 12px;
            }
            .notification-icon {
                flex-shrink: 0;
                font-size: 20px;
            }
            .notification-message {
                flex: 1;
                font-size: 14px;
                font-weight: 500;
            }
            .notification-close {
                background: none;
                border: none;
                font-size: 20px;
                cursor: pointer;
                padding: 0;
                width: 24px;
                height: 24px;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                transition: background-color 0.2s;
            }
            .notification-close:hover {
                background-color: rgba(0, 0, 0, 0.1);
            }
            .notification-info {
                background-color: #e3f2fd;
                color: #1976d2;
                border-left: 4px solid #2196f3;
            }
            .notification-success {
                background-color: #e8f5e8;
                color: #2e7d32;
                border-left: 4px solid #4caf50;
            }
            .notification-warning {
                background-color: #fff8e1;
                color: #f57c00;
                border-left: 4px solid #ff9800;
            }
            .notification-error {
                background-color: #ffebee;
                color: #c62828;
                border-left: 4px solid #f44336;
            }
            @keyframes slideInRight {
                from {
                    transform: translateX(100%);
                    opacity: 0;
                }
                to {
                    transform: translateX(0);
                    opacity: 1;
                }
            }
        `;
        document.head.appendChild(styles);
    }

    // Add to page
    document.body.appendChild(notification);

    // Auto-remove after 5 seconds
    setTimeout(() => {
        if (notification.parentNode) {
            notification.remove();
        }
    }, 5000);
}

/**
 * Get notification icon based on type
 */
function getNotificationIcon(type) {
    const icons = {
        info: 'ℹ️',
        success: '✅',
        warning: '⚠️',
        error: '❌'
    };
    return icons[type] || icons.info;
}

/**
 * Utility function to format dates
 */
function formatDate(dateString) {
    try {
        const date = new Date(dateString);
        return date.toLocaleDateString('en-US', {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        });
    } catch (error) {
        return dateString;
    }
}

/**
 * Utility function to debounce search input
 */
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}
