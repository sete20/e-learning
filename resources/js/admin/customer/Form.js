import AppForm from '../app-components/Form/AppForm';

Vue.component('customer-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                first_name:  '' ,
                last_name:  '' ,
                phone:  '' ,
                email:  '' ,
                address:  '' ,
                county_id:  '' ,
                gov_id:  '' ,
                city_id:  '' ,
                info:  '' ,
                password:  '' ,
                login:  false ,
                
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
