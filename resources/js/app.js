import '../css/app.css';
import './bootstrap';

// Import plugin CSS
import '../../public/assets/plugins/simplebar/css/simplebar.css';
import '../../public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css';

// Initialize plugins
import SimpleBar from 'simplebar';
import PerfectScrollbar from 'perfect-scrollbar';

// Initialize SimpleBar if sidebar-wrapper exists
document.addEventListener('DOMContentLoaded', () => {
    const sidebar = document.querySelector('.sidebar-wrapper');
    if (sidebar) {
        new SimpleBar(sidebar);
    }
});

// Initialize PerfectScrollbar for .best-barang if exists
document.addEventListener('DOMContentLoaded', () => {
    const bestBarang = document.querySelector('.best-barang');
    if (bestBarang) {
        new PerfectScrollbar(bestBarang);
    }
});