<template>
<div class="knowledge_base">
  <div class="text-center">
    <div class="btn-group" role="group">
      <button
        type="button"
        @click="onClick('knowledge-base-platform')"
        class="btn"
        :class="currentView === 'knowledge-base-platform' ? 'btn-primary' : 'btn-default'"
        >
        job Plaform
      </button>
      <button
        type="button"
        @click="onClick('knowledge-base-keyword')"
        class="btn btn-default"
        :class="currentView === 'knowledge-base-keyword' ? 'btn-primary' : 'btn-default'"
        >
        Skills Keyword
      </button>
    </div>
  </div>
  <component :is="currentView"></component>
</div>
</template>
<script>
  export default {
    data () {
      return {
        currentView: 'knowledge-base-platform'
      }
    },
    methods: {
      onClick (keyword) {
        this.currentView = keyword;
      },
    }
  }
</script>
