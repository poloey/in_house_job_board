<template>
  <span>
    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal">Delete</button>
    <div id="deleteModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content text-left">
          <div class="modal-header">
            <h4 class="modal-title">Are you sure You want to delete?</h4>
          </div>
          <div class="modal-body">
            <button type="button" data-dismiss="modal" class="btn btn-primary">Cancel</button>
            <button type="button" data-dismiss="modal" class="btn btn-danger" @click="onDelete">Delete</button>
          </div>
        </div>
      </div>
    </div>
  </span>
</template>
<script>
import Noty from 'noty'
  export default {
    data () {
      return {
      }
    },
    props: {
      action_url: {
        type: String,
        required: true
      },
      is_reload: {
        type: Boolean,
        default: true
      }
    },
    methods: {
      onDelete () {
        axios.delete(`${this.action_url}/`).then((response) => {
          new Noty({
              type: 'warning',
              layout: 'topRight',
              text: 'Deleted successfully',
              callbacks: {
                afterShow: () => {
                  if (this.is_reload) {
                    setTimeout(() => {
                      return location.reload();
                    }, 300)
                  }
                }
              }
          }).show();
        }).catch((error) => {
          console.log('error', error);
        })

      }
    }
  }
</script>
