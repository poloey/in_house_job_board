<template>
  <div class="text-left">
    <div class="form-group">
      <h2 class="title">Update  profile picture</h2>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <div id="croppie"></div>
        </div>
      </div>
      <div>
        <input type="file" name="avatar" @change="setupFileUploader">
      </div>
      <div class="on_submit_wrapper">
        <button @click="onSubmit" class="btn btn-primary">Update Avatar</button>
      </div>
    </div>
  </div>
</template>
<script>
import Croppie from 'croppie';
import Noty from 'noty';
  export default {
    mounted () {
      this.image = this.avatar_url;
      this.setupCroppie();
      this.$on('imageUploaded', imageData => {
        this.image = imageData
        this.croppie.destroy()
        this.setupCroppie()
      })
    },
    props: ['avatar_url'],
    data () {
      return {
        response: false,
        croppie: null,
        image: null,
        userAddedImage: false,
      }
    },
    methods: {
      onSubmit() {
        self = this;
        this.croppie.result({
          type: 'canvas',
          size: 'viewport',
        }).then(response => {
          axios.post('/upload_user_avatar', {avatar: response}).then(response => {
            new Noty({
              type: 'success',
              layout: 'topRight',
              text: 'Avatar update successfully',
              callbacks: {
                afterShow: function () {
                  setTimeout(function () {
                    location.reload();
                  }, 300)
                }
              }
            }).show();
          })
        })
      },
    setupCroppie () {
      var el = document.getElementById('croppie');
      this.croppie = new Croppie ( el, {
        viewport: { width: 220, height: 220 },
        boundary: { width: 300, height: 300 },
        showZoomer: true,
        enableOrientation: false
      })
      this.croppie.bind({
        url: this.image,
        orientation: 4
      });
    },
    setupFileUploader (e) {
      let files = e.target.files || e.dataTransfer.files;
      if (!files.length) {
        return ;
      }
      this.createImage(files[0]);
    },
    createImage (file) {
      var image = new Image();
      var reader = new FileReader();
      this.userAddedImage = true;
      var vm = this;
      reader.onload = e => {
        vm.image = e.target.result
        vm.$emit('imageUploaded', e.target.result)
      }
      reader.readAsDataURL(file);
    },
  },
  }
</script>
<style>
  .on_submit_wrapper {
    margin: 10px 0;
  }
</style>
