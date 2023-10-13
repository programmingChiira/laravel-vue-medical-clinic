import { createRouter, createWebHistory } from 'vue-router';

const routes = [
  {
    path: '/',
    name: 'home',
    component: () => import('../views/authenticated/index.vue'),
  },

  {
    path: '/about',
    name: 'about',
    component: () => import('../views/authenticated/about.vue'),
  },

  {
    path: '/departments',
    name: 'departments',
    component: () => import('../views/authenticated/departments.vue'),
  },

  {
    path: '/doctors',
    name: 'doctors',
    component: () => import('../views/authenticated/doctors.vue'),
  },

  {
    path: '/appointments',
    name: 'appointments',
    component: () => import('../views/authenticated/appointments.vue'),
  },

  {
    path: '/contact',
    name: 'contact',
    component: () => import('../views/authenticated/contact.vue'),
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
