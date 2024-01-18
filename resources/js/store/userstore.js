import axios from 'axios'
import router from '@/router'

export default {
    namespaced: true,

    state:{
        store: {}
    },

    getters:{
        store(state){
            return state.store
        }
    },

    mutations:{
        SET_STORE(state, value) {
            state.store = value
        }
    },

    actions:{
        async get({commit}, {store}) {
            try {
                const { data } = await axios.get(`/stores/single/${store}`);
                commit('SET_STORE', data.store);
            } catch (error) {
                commit('SET_STORE', []);
            }
        }
    }
}