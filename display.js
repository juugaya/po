import { createApp } from "https://unpkg.com/vue@3.2.4/dist/vue.esm-browser.prod.js";
const Sample = {
    data() {
        return {
            viewFlag: true,
        };
    },
    methods: {
        on() {
            this.viewFlag = true;
        },
        off() {
            this.viewFlag = false;
        },
    },
};

Vue.createApp(Sample).mount("#app");
