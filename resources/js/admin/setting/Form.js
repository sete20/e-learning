import AppForm from '../app-components/Form/AppForm';

Vue.component('setting-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                key:  '' ,
                group:  '' ,
                value:  '' ,
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
