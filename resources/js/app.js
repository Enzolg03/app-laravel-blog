//import 'bootstrap';
import {createApp} from 'vue'
import MyComponent from './components/MyComponent.vue'
var el = document.getElementById('app');
createApp({
    components: {
        MyComponent
    }
})
.mount(el)