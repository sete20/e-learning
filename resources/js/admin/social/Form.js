import AppForm from '../app-components/Form/AppForm';

Vue.component('social-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                url:  '' ,
                
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
