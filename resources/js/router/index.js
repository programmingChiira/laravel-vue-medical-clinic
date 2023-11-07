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
    path: '/login',
    name: 'login',
    component: () => import('../views/auth/login.vue'),
  },

  {
    path: '/register',
    name: 'register',
    component: () => import('../views/auth/register.vue'),
  },

  {
    path: '/adminDash',
    name: 'adminDash',
    component: () => import('../views/adminPortal/adminDashboard.vue'),
  },

  {
    path: '/admin',
    name: 'admin',
    component: () => import('../views/adminPortal/ui/index.vue'),
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
