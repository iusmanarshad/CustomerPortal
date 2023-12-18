import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy';
import vue from '@vitejs/plugin-vue'

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/app.css',
                'resources/js/app.js',

                // Resources assets js file paths
                'resources/assets/js/accordion',
                'resources/assets/js/add-product',
                'resources/assets/js/advanced-form-elements',
                'resources/assets/js/apexchart-custom',
                'resources/assets/js/apexcharts',
                'resources/assets/js/app-calendar-events',
                'resources/assets/js/app-calendar',
                'resources/assets/js/calendar-events',
                'resources/assets/js/calendar',
                'resources/assets/js/carousel',
                'resources/assets/js/chart-circle',
                'resources/assets/js/chart.chartjs',
                'resources/assets/js/chart.flot',
                'resources/assets/js/chart.morris',
                'resources/assets/js/chart.peity',
                'resources/assets/js/chart.sparkline',
                'resources/assets/js/chat',
                'resources/assets/js/check-all-mail',
                'resources/assets/js/checkout-jquery-steps',
                'resources/assets/js/colorpicker',
                'resources/assets/js/contact',
                'resources/assets/js/echarts',
                'resources/assets/js/edit-datatable',
                'resources/assets/js/file-manager-sidebar',
                'resources/assets/js/file-manager',
                'resources/assets/js/flatpickr',
                'resources/assets/js/form-editor-2',
                'resources/assets/js/form-editor',
                'resources/assets/js/form-elements',
                'resources/assets/js/form-layouts',
                'resources/assets/js/form-validation',
                'resources/assets/js/form-wizard',
                'resources/assets/js/formelementadvnced',
                'resources/assets/js/fullcalendar',
                'resources/assets/js/gallery',
                'resources/assets/js/generate-otp',
                'resources/assets/js/handleCounter',
                'resources/assets/js/image-comparision',
                'resources/assets/js/index-1',
                'resources/assets/js/index-2',
                'resources/assets/js/index-3',
                'resources/assets/js/index-4',
                'resources/assets/js/index-6',
                'resources/assets/js/index-7',
                'resources/assets/js/index-dark',
                'resources/assets/js/index-map',
                'resources/assets/js/index',
                'resources/assets/js/index-charts',
                'resources/assets/js/invoice',
                'resources/assets/js/jquery-sticky',
                'resources/assets/js/landing-page',
                'resources/assets/js/left-menu',
                'resources/assets/js/mail-two',
                'resources/assets/js/map-leafleft',
                'resources/assets/js/map.apple',
                'resources/assets/js/map.bluewater',
                'resources/assets/js/map.mapbox',
                'resources/assets/js/map.shiftworker',
                'resources/assets/js/modal-popup',
                'resources/assets/js/modal',
                'resources/assets/js/navigation',
                'resources/assets/js/newsticker',
                'resources/assets/js/owl-carousel',
                'resources/assets/js/owl.carousel',
                'resources/assets/js/popover',
                'resources/assets/js/popover',
                'resources/assets/js/profile',
                'resources/assets/js/rangeslider',
                'resources/assets/js/select2',
                'resources/assets/js/settings',
                'resources/assets/js/sidemenu',
                'resources/assets/js/sticky',
                'resources/assets/js/summernote',
                'resources/assets/js/sweet-alert',
                'resources/assets/js/table-data',
                'resources/assets/js/tabs',
                'resources/assets/js/tags',
                'resources/assets/js/timline',
                'resources/assets/js/toast',
                'resources/assets/js/todotask',
                'resources/assets/js/tooltip',
                'resources/assets/js/user-list',
                'resources/assets/js/vector-map',
                'resources/assets/switcher/js/switcher',
            ],
            refresh: true,
        }),


        viteStaticCopy({
            targets: [
              {
                src: ([
                'resources/assets/img/',
                'resources/assets/plugins/',
                'resources/assets/js/sticky.js',
                'resources/assets/js/chart.flot.sampledata.js',
                'resources/assets/js/cookie.js',
                'resources/assets/js/dashboard.sampledata.js',
                'resources/assets/js/jquery.vmap.sampledata.js',
            ]),
                dest: 'assets/'
              }
            ]
          }),
        {
        name: 'blade',
        handleHotUpdate({ file, server }) {
            if (file.endsWith('.blade.php')) {
                server.ws.send({
                    type: 'full-reload',
                    path: '*',
                });
            }
        },
        }

    ],
    build: {
        chunkSizeWarningLimit: 1600,
    },
});
