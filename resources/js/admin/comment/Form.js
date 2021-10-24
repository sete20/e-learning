import AppForm from '../app-components/Form/AppForm';

Vue.component('comment-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                user_id:  '' ,
                post_id:  '' ,
                body:  '' ,
                is_published:  false ,
                
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
