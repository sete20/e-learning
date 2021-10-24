import AppForm from '../app-components/Form/AppForm';

Vue.component('categore-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                name:  '' ,
                slug:  '' ,
                is_published:  false ,
                seo_description:  '' ,
                seo_keywords:  '' ,
                seo_title:  '' ,
                
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
