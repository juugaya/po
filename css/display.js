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
