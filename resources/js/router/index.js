import { createRouter, createWebHistory } from 'vue-router';

const routes = [
  {
    path: '/',
    name: 'home',
    component: () => import('../views/Home.vue'),
  },

  {
    path: '/about',
    name: 'about',
    component: () => import('../views/About.vue'),
  },

  {
    path: '/events',
    name: 'events',
    component: () => import('../views/Event.vue'),
  },

  {
    path: '/viewEvent',
    name: 'viewEvent',
    component: () => import('../views/ViewEvent.vue'),
  },

  {
    path: '/courses',
    name: 'courses',
    component: () => import('../views/Course.vue'),
  },

  {
    path: '/viewCourse',
    name: 'viewCourse',
    component: () => import('../views/ViewCourse.vue'),
  },

  {
    path: '/enrollment',
    name: 'enrollment',
    component: () => import('../views/Enrollment.vue'),
  },

  {
    path: '/articles',
    name: 'articles',
    component: () => import('../views/Article.vue'),
  },

  {
    path: '/viewArticle',
    name: 'viewArticle',
    component: () => import('../views/ViewArticle.vue'),
  },

  {
    path: '/gallery',
    name: 'gallery',
    component: () => import('../views/Gallery.vue'),
  },

  {
    path: '/viewImage',
    name: 'viewImage',
    component: () => import('../views/ViewGallery.vue'),
  },

  {
    path: '/contact',
    name: 'contact',
    component: () => import('../views/Contact.vue'),
  },

  {
    path: '/studentLogin',
    name: 'studentLogin',
    component: () => import('../views/auth/StudentLogin.vue'),
  },

  {
    path: '/parentLogin',
    name: 'parentLogin',
    component: () => import('../views/auth/ParentLogin.vue'),
  },

  {
    path: '/staffLogin',
    name: 'staffLogin',
    component: () => import('../views/auth/StaffLogin.vue'),
  },

  {
    path: '/forgotPassword',
    name: 'forgotPassword',
    component: () => import('../views/auth/ForgotPwd.vue'),
  },

  {
    path: '/ui/welcome',
    name: 'welcome',
    component: () => import('../views/ui/Admin/welcome.vue'),
  },

  {
    path: '/:pathMatch(.*)*', // Catch-all route should be at the bottom
    name: 'not-found',
    component: () => import('../views/oneTimeUseComponents/NotFound.vue'),
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
