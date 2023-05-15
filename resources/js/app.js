require('./bootstrap');

// Import modules...
import Vue from 'vue';
import { App as InertiaApp, plugin as InertiaPlugin } from '@inertiajs/inertia-vue';
import PortalVue from 'portal-vue';
import '@/Plugins/mixins'
import CKEditor from '@ckeditor/ckeditor5-vue2';

Vue.mixin({ methods: { route } });
// Vue.prototype.$route = route
Vue.use(InertiaPlugin);
Vue.use(PortalVue);
Vue.use(CKEditor);

const app = document.getElementById('app');

new Vue({
    render: (h) =>
        h(InertiaApp, {
            props: {
                initialPage: JSON.parse(app.dataset.page),
                resolveComponent: (name) => require(`./Pages/${name}`).default,
            },
        }),
}).$mount(app);
