import { createInertiaApp } from '@inertiajs/vue3'
import createServer from '@inertiajs/vue3/server'
import { renderToString } from '@vue/server-renderer'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers'
import { createSSRApp, h, type DefineComponent } from 'vue'
import PrimeVue from 'primevue/config';
import Aura from '@primeuix/themes/aura';

createServer(page =>
    createInertiaApp({page,
        render: renderToString,
        resolve: name => 
          resolvePageComponent(
              `./Pages/${name}.vue`,
              import.meta.glob<DefineComponent>('./Pages/**/*.vue'),
          ),
        setup({ el, App, props, plugin }) {
          const app = createSSRApp({ render: () => h(App, props) });
          app.use(plugin);
          app.use(PrimeVue, {theme:{preset: Aura}});
          // app.mount(el);
          return app;
        },
    })
)