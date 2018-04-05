import Vue from 'vue';
import Vuex from 'vuex';
Vue.use(Vuex);
export const store = new Vuex.Store({
  state: {
    keywords: [],
    hello: "world"
  },
  getters: {
    keywords (state) {
      return state.keywords;
    }
  },
  mutations: {
    keywords(state, keywords) {
      return state.keywords = keywords;
    }
  },
  actions: {

  }

});
