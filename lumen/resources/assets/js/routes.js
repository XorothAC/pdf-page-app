import VueRouter from 'vue-router';

import Home from './views/Home.vue';
import PageOne from './views/PageOne.vue';
import PageTwo from './views/PageTwo.vue';

let routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },

    {
        path: '/page-1',
        name: 'pageOne',
        component: PageOne
    },

    {
        path: '/page-2',
        name: 'pageTwo',
        component: PageTwo
    },


];

const router = new VueRouter({
    routes: routes,
    mode: 'history'
});

export default router;