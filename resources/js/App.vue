<template>
    <div :class="[$store.state.layout_style, $store.state.menu_style]">
      <component :is="layout"></component>
    </div>
  </template>
  
  <script>
  // layouts
  import appLayout from './layouts/app-layout.vue';
  import uiLayout from './layouts/ui-layout.vue';
  import authLayout from './layouts/auth-layout.vue';
  
  import '@/assets/sass/app.scss';
  
  export default {
    components: {
      app: appLayout,
      ui: uiLayout,
      auth: authLayout,
    },
    computed: {
      layout() {
        if (!this.$route.path.startsWith('/ui/')) { // Check if route path starts with '/ui/'
          return 'ui'; // Use the uiLayout component for components in the ui folder
        } else {
          return 'app'; // Use the appLayout component for other components
        }
      },
    },
    data() {
      return {};
    },
    mounted() {},
    methods: {},
  };
  </script>
  