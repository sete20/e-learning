import AppForm from '../app-components/Form/AppForm';

Vue.component('homeworks-solf-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                test_id:  '' ,
                user_id:  '' ,
                solve:  '' ,
                
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
