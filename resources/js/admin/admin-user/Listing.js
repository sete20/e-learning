import AppListing from '../app-components/Listing/AppListing';

Vue.component('admin-user-listing', {
    mixins: [AppListing],
    data(){
        return {
            view: '',
            editItem: {},
            formData: {},
            formAction: this.$props.url
        }
    },
    methods: {
        editId(item){
            this.editItem = item;
        },
        edit(id){
            this.formData = this.editItem;
            this.formAction = this.editItem.resource_url;
            this.$modal.show('view');
        },
        addNew(){
            this.editItem = {};
            this.formData = {};
            this.formAction = this.$props.url;
            this.$modal.show('view');
        },
        resendActivation(url) {
            axios.get(url).then(
                response => {
                    if(response.data.message) {
                        this.$notify({ type: 'success', title: 'Success', text: response.data.message});
                    } else if (response.data.redirect) {
                        window.location.replace(response.data.redirect);
                    }
                }
            ).catch(errors => {
                    if(errors.response.data.message) {
                        this.$notify({ type: 'error', title: 'Error!', text: errors.response.data.message})
                    }
                }
            );
        },
        impersonalLogin(url) {
            axios.get(url).then(
                response => {
                    if(response.data.message) {
                        this.$notify({ type: 'success', title: 'Success', text: response.data.message});
                    } else if (response.data.data.path) {
                        window.location.replace(response.data.data.path);
                    }
                }
            ).catch(errors => {
                    if(errors.response.data.message) {
                        this.$notify({ type: 'error', title: 'Error!', text: errors.response.data.message})
                    }
                }
            );
        },
    },
    props: {
        'activation': {
            type: Boolean,
            required: true
        },
    }
});
