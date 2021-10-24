import AppListing from '../app-components/Listing/AppListing';

Vue.component('course-listing', {
    mixins: [AppListing],
    data(){
        return {
            view: '',
            editItem: {},
            formData: {},
            formAction: this.$props.url,
            room: {
                meetingID: '',
                attendeePW: '',
                moderatorPW: '',
                meetingName: '',
                id: '',
                username: ''
            }
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
        showLive(item){
            this.room.meetingID = item.slug;
            this.room.meetingName = item.name;
            this.room.username = item.teacher_id.name;
            this.room.id = item.id;
            this.$modal.show('room');
        },
        goLive(){
            axios.post(this.$attrs.live, this.room).then(res => {
                this.$swal.fire({
                    icon: 'success',
                    text: res.data.message
                })
                this.$modal.hide('room');
            })
        },
        joinLive(item){
            axios.post(this.$attrs.join, item.live).then(res => {
                window.open(res.data.url);
                this.$modal.hide('join');
            })
        },
        endLive(item){
            axios.post(this.$attrs.end, {
                meetingID: item.live.meetingID,
                moderatorPW: item.live.password,
                id: item.id
            }).then(res => {
                this.loadData();
                this.$swal.fire({
                    icon: 'success',
                    text: res.data.message
                })
            })
        }
    }
});
