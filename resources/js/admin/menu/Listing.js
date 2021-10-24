import AppListing from '../app-components/Listing/AppListing';

Vue.component('menu-listing', {
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
        }
    }
});
