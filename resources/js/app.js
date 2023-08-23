require("./bootstrap");

import Vuetify from "vuetify";
import "vuetify/dist/vuetify.min.css";
import Vue from "vue";

window.Vue = require("vue").default;

Vue.use(Vuetify);

Vue.component("welcome", require("./components/WelcomePage.vue").default);

Vue.component(
    "destinacije",
    require("./components/Guest/Destinacije.vue").default
);

Vue.component("kontakt", require("./components/Guest/Kontakt.vue").default);

Vue.component("blog", require("./components/Guest/Blog.vue").default);

Vue.component(
    "naslovnica",
    require("./components/Guest/Naslovnica.vue").default
);

Vue.component("galerija", require("./components/Guest/Galerija.vue").default);

Vue.component(
    "dodaj-clanak",
    require("./components/User/DodajClanak.vue").default
);

Vue.component("clanak", require("./components/Guest/Clanak.vue").default);

Vue.component("my-footer", require("./components/Footer.vue").default);

const app = new Vue({
    vuetify: new Vuetify(),
    el: "#app",
});
