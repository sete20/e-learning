import AppForm from '../app-components/Form/AppForm';

Vue.component('payment-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                user_id:  '' ,
                order_id:  '' ,
                teacher_id:  '' ,
                name:  '' ,
                phone:  '' ,
                total:  '' ,
                discount:  '' ,
                payment:  '' ,
                provider:  '' ,
                provider_id:  '' ,
                
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
