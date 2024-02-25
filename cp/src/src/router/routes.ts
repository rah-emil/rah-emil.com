import DefaultLayout from '@/layouts/DefaultLayout.vue';
import AuthLayout from '@/layouts/AuthLayout.vue';

const routes = [
  {
    path: '/',
    component: DefaultLayout,
    children: [
      {
        path: '',
        name: 'index',
        component: () => import('@/views/IndexView.vue'),
      },
      {
        path: 'example',
        name: 'index-example',
        component: () => import('@/views/ExampleView.vue'),
      },
      // Добавьте другие маршруты, которые должны использовать DefaultLayout
    ],
  },
  {
    path: '/auth',
    component: AuthLayout,
    children: [
      {
        path: 'login',
        name: 'auth-login',
        component: () => import('@/views/auth/LoginView.vue'),
      },
      {
        path: 'register',
        name: 'auth-register',
        component: () => import('@/views/auth/RegisterView.vue'),
      },
      // Добавьте другие маршруты, которые должны использовать AuthLayout
    ],
  },
  // Добавьте другие маршруты, как необходимо
];

export default routes;
