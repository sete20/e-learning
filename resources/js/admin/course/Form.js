import AppForm from '../app-components/Form/AppForm';

Vue.component('course-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                teacher_id:  '' ,
                name:  '' ,
                slug:  '' ,
                description:  '' ,
                price:  '' ,
                discount:  '' ,
                image:  '' ,
                material_id:  '' ,
                times:  '' ,
                live:  '' ,
                activated:  false ,
                holder: null
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
