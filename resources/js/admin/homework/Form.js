import AppForm from '../app-components/Form/AppForm';

Vue.component('homework-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                course_id:  '' ,
                teacher_id:  '' ,
                name:  '' ,
                description:  '' ,
                homework:  '' ,
                
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
