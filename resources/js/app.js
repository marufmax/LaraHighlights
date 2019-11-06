require('./bootstrap')
import 'es6-promise/auto'
import LoginForm from './components/shared/LoginForm.vue'
import RegisterForm from './components/shared/RegisterForm.vue'

window.Vue = require('vue')
Vue.use(Buefy, {
    defaultIconPack: 'fas'
});

Vue.component('login-form', LoginForm);
Vue.component('register-form', RegisterForm);

const app = new Vue({
    el: '#app',

    data() {
        return {
            userIsLoggedIn: false,
            mobileMenuOpen: false
        }
    },

    methods: {
        toggleMobileMenu() {
            this.mobileMenuOpen = !this.mobileMenuOpen
        },

        openLoginModal() {
            this.$modal.open({
                parent: this,
                component: LoginForm,
                hasModalCard: true
            })
        },

        openRegisterModal() {
            this.$modal.open({
                parent: this,
                component: RegisterForm,
                hasModalCard: true
            })
        },
    }
});
