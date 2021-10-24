import AppForm from '../app-components/Form/AppForm';

Vue.component('user-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                email:  '' ,
                email_verified_at:  '' ,
                password:  '' ,
                phone:  '' ,
                other_phone:  '' ,
                image:  '' ,
                type:  '' ,
                class_id:  '' ,
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
