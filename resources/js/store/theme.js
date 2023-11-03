import axios from 'axios'
import router from '@/router'

export default {
    namespaced: true,

    state:{
        theme: {},
        shouldShowSidebarEditorStage1: false,
        shouldShowSidebarEditorStage2: false,
        shouldShowSidebarEditorStage3: false,
    },

    getters:{
        theme(state) {
            return state.theme
        }
    },

    mutations:{
        SET_THEME(state, value) {
            state.theme = value
        },

        SET_SHOULD_SHOW_SIDEBAR_EDITOR(state, value) {
            if (value === 'stage1') {
                state.shouldShowSidebarEditorStage1 = true;
                state.shouldShowSidebarEditorStage2 = false;
                state.shouldShowSidebarEditorStage3 = false;
            } else if (value === 'stage2') {
                state.shouldShowSidebarEditorStage1 = false;
                state.shouldShowSidebarEditorStage2 = true;
                state.shouldShowSidebarEditorStage3 = false;
            } else if (value === 'stage3') {
                state.shouldShowSidebarEditorStage1 = false;
                state.shouldShowSidebarEditorStage2 = false;
                state.shouldShowSidebarEditorStage3 = true;
            }
        }
    },

    actions:{
        async get({commit}, {store}) {
            try {
                const { data } = await axios.get(`/stores/${store}/theme`);
                commit('SET_THEME', data.theme);
            } catch (error) {
                commit('SET_THEME', {});
            }
        },

        showSidebarEditor({commit}, stage) {
            commit('SET_SHOULD_SHOW_SIDEBAR_EDITOR', stage);
        }
    }
}