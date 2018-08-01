/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#vehicle',
    data: {
        p0a: {text: 'X', color: 'btn btn-danger', name: ''},
        p0b: {text: 'X', color: 'btn btn-danger', name: ''},
        p1a: {text: 'X', color: 'btn btn-danger', name: ''},
        p1b: {text: 'X', color: 'btn btn-danger', name: ''},
        p1c: {text: 'X', color: 'btn btn-danger', name: ''},
        p1d: {text: 'X', color: 'btn btn-danger', name: ''},
        p2a: {text: 'X', color: 'btn btn-danger', name: ''},
        p2b: {text: 'X', color: 'btn btn-danger', name: ''},
        p2c: {text: 'X', color: 'btn btn-danger', name: ''},
        p2d: {text: 'X', color: 'btn btn-danger', name: ''},
        p3a: {text: 'X', color: 'btn btn-danger', name: ''},
        p3b: {text: 'X', color: 'btn btn-danger', name: ''},
        p3c: {text: 'X', color: 'btn btn-danger', name: ''},
        p3d: {text: 'X', color: 'btn btn-danger', name: ''},
        p4a: {text: 'X', color: 'btn btn-danger', name: ''},
        p4b: {text: 'X', color: 'btn btn-danger', name: ''},
        p4c: {text: 'X', color: 'btn btn-danger', name: ''},
        p4d: {text: 'X', color: 'btn btn-danger', name: ''},
        inVehicle: 0,
    },
    methods: {
        changeSeatStatus: function (event, model) {
            switch (model.text) {
                case 'O':
                    model.text = 'X';
                    model.color = "btn btn-danger";
                    break;
                case 'X':
                    if (this.inVehicle) {
                        model.text = 'O';
                        model.color = "btn btn-success";
                    }
                    else {
                        model.text = 'me';
                        model.color = "btn btn-primary";
                        this.inVehicle = 1;
                    }
                    break;
                case 'me':
                    model.text = 'O';
                    model.color = "btn btn-success";
                    this.inVehicle = 0;
                    break;
            }
        }
    }
});

$(function () {

});