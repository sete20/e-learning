import AppForm from '../app-components/Form/AppForm';

Vue.component('tag-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                
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
