import '../css/app.css';
import './bootstrap';

// Import plugin CSS
import '../../public/assets/plugins/simplebar/css/simplebar.css';
import '../../public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css';

// Initialize plugins
import SimpleBar from 'simplebar';
import PerfectScrollbar from 'perfect-scrollbar';

// Initialize SimpleBar
document.addEventListener('DOMContentLoaded', () => {
    new SimpleBar(document.querySelector('.sidebar-wrapper'));
});

// Initialize PerfectScrollbar for .best-barang if exists
document.addEventListener('DOMContentLoaded', () => {
    const bestBarang = document.querySelector('.best-barang');
    if (bestBarang) {
        new PerfectScrollbar(bestBarang);
    }
});