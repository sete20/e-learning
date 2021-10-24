import AppForm from '../app-components/Form/AppForm';

Vue.component('teacher-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                phone:  '' ,
                email:  '' ,
                image: '',
                password:  '' ,
                enabled:  false ,
                email_verified_at:  '' ,
                material_id:  '' ,
                holder: null
            }
        }
    },
    mounted() {

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
