import Home from '../views/Home'
import About from '../views/About'

export default {
    mode: 'history',

    routes: [
        {
            path: '/',
            name: 'home',
            component: Home

        },
        {
            path: '/about',
            name: 'pages.about',
            component: About

        },
    ]
}