import AppForm from '../app-components/Form/AppForm';

Vue.component('test-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                course_id:  '' ,
                teacher_id:  '' ,
                name:  '' ,
                description:  '' ,
                test:  '' ,
                grade:  '' ,
                
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
