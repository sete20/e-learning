import AppForm from '../app-components/Form/AppForm';

Vue.component('review-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                job:  '' ,
                review:  '' ,
                image:  '' ,
                
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
