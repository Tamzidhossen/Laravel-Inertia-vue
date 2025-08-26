import './bootstrap';

import { createApp, h } from 'vue'
import { createInertiaApp, Head, Link, router } from '@inertiajs/vue3'
import NProgress from 'nprogress';

createInertiaApp({
  title: (title) => `My App ${title}`,
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .component("Head", Head)
      .component("Link", Link)
      .mount(el)
  },
})

// Appear @ Route Start
router.on('start', () => {
    NProgress.start()
})


// Appear @ Route Finish
router.on('finish', () =>{
    NProgress.done()
})