<template>
    <div>
        <vue-drop
            id="fileUpload"
            ref="file"
            :options="setImageUpload"
            @vdropzone-complete="uploadSuccess">
        </vue-drop>
    </div>
</template>

<script>
    //@vdropzone-removed-file="getCancel"
    export default {
        name: "Media",
        props: {
            files: {}
        },
        data(){
            return {
                setImageUpload: {
                    url: "/admin/upload",
                    thumbnailWidth: 150,
                    thumbnailHeight: 150,
                    maxFilesize: 1,
                    acceptedFiles: "image/*",
                    addRemoveLinks: true,
                    dictDefaultMessage: "<i class='icon-cloud-upload' style='font-size: 40px'></i> <h6>Put Your File Here</h6>",
                    headers: {"X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')}
                }
            }
        },
        mounted() {
            if(this.$props.files){
                var file = this.$props.files.file;
                var url = this.$props.files.url;
                this.$refs.file.manuallyAddFile(file, url);
            }
        },
        methods: {
            uploadSuccess(response) {
                this.$emit('upload', response.xhr.response);
            },
        }
    }
</script>

<style scoped>

</style>
