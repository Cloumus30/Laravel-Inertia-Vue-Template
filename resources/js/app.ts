import '@/bootstrap';
import.meta.glob([
  '../../images/**',
  '../../fonts/**',
]);
import { createApp, h, type DefineComponent } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers'
import PrimeVue from 'primevue/config';
import Aura from '@primeuix/themes/aura';

createInertiaApp({
  resolve: name => 
    resolvePageComponent(
        `./Pages/${name}.vue`,
        import.meta.glob<DefineComponent>('./Pages/**/*.vue'),
    ),
  setup({ el, App, props, plugin }) {
    const app = createApp({ render: () => h(App, props) })
      .use(plugin);
    app.use(PrimeVue, {theme:{preset: Aura}});
    app.mount(el);
  },
})