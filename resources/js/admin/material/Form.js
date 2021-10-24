import AppForm from '../app-components/Form/AppForm';

Vue.component('material-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                image: '',
                holder: ''
            }
        }
    },
    methods: {
        onSuccess(data){
            this.$swal.fire({
                icon: 'success',
                text: data.message
            })
            this.$modal.hide('view');
        }
    }

});
