let login = require('./components/auth/login.vue').default;
let register = require('./components/auth/register.vue').default;
let forget = require('./components/auth/forget.vue').default;
let logout = require('./components/auth/logout.vue').default;
let home = require('./components/home.vue').default;
let newpassword = require('./components/auth/newpassword.vue').default;
let resetsuccess = require('./components/auth/resetsuccess.vue').default;


export const routes = [
    {path: '/' , component: login, name: '/'},
    {path: '/register' , component: register, name: 'register'},
    {path: '/forget' , component: forget, name: 'forget'},
    {path: '/logout' , component: logout, name: 'logout'},
    {path: '/home' , component: home, name: 'home'},
    {path: '/newpassword' , component: newpassword, name: 'newpassword'},
    {path: '/resetsuccess' , component: resetsuccess, name: 'resetsuccess'},

]