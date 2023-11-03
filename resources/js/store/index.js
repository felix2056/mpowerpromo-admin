import { createStore } from 'vuex';
import createPersistedState from 'vuex-persistedstate';

import auth from '@/store/auth';
import userstore from '@/store/userstore';
import theme from '@/store/theme';
import components from '@/store/components';

const debug = process.env.NODE_ENV !== 'production'

const store = createStore({
    strict: debug,

    plugins:[
        createPersistedState(),
        // debug ? createLogger() : null
    ],

    modules:{
        auth,
        userstore,
        theme,
        components
    }
})

export default store