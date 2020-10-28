// import VueRouter from 'vue-router';
import Vue from 'vue'
import VueRouter from 'vue-router'

// Containers
import Full from './containers/Full'
// Views
import Dashboard from './views/Dashboard'
import Charts from './views/Charts'
import Widgets from './views/Widgets'

// Views - Components
import Buttons from './views/components/Buttons'
import SocialButtons from './views/components/SocialButtons'
import Cards from './views/components/Cards'
import Forms from './views/components/Forms'
import Modals from './views/components/Modals'
import Switches from './views/components/Switches'
import Tables from './views/components/Tables'

// Views - Icons
import FontAwesome from './views/icons/FontAwesome'
import SimpleLineIcons from './views/icons/SimpleLineIcons'

// Views - Pages
import Page404 from './views/pages/Page404'
import Page500 from './views/pages/Page500'
import Login from './views/pages/Login'
import Register from './views/pages/Register'
  
// Views - Products
import AddProducts from './views/products/Add';
import ListProducts from './views/products/List';
import EditProducts from './views/products/Edit';

// Views - Category
import ListCategory from './views/category/List';
import EditCategory from './views/category/Edit';
 
// Order 
import ListOrders from './views/order/List';
 
// Langs
import ListLangs from './views/langs/list';  

import listBlog from './views/blog/List';
import AddBlog from './views/blog/Add';
import EditBlog from './views/blog/Edit';

import ListCategoryProject from './views/category-project/List';

import listProject from './views/project/List';
import AddProject from './views/project/Add';
import EditProject from './views/project/Edit';

//setting
import AddSetting from './views/setting/Add';
import ListSetting from './views/setting/List';
import EditSetting from './views/setting/Edit';
Vue.use(VueRouter)
 
let routes = [ 
    {
      path: '/login', 
      name: 'login', 
      component: Login,
      meta: { auth: false }
    },
    {
      path: '/', 
      redirect: 'dashboard', 
      name: 'Home',
      component: Full,
      meta: { auth : true },
      children: [
        {
          path: 'dashboard',
          name: 'Dashboard',
          component: Dashboard
        },
        // {
        //   path : 'blog/index',
        //   name : 'List Blog',
        //   component : listBlog
        // },
        {
          path: '/blog',
          redirect: '/blog/index',
          name: 'Blog',
          component: {
            render (c) { return c('router-view') }
          },
          children: [
            {
              path : 'add',
              name : 'Add Blog',
              component : AddBlog
            },
            {
              path : 'index',
              name : 'List Blog',
              component : listBlog
            },
            {
              path : 'edit',
              name : 'Edit Blog',
              component : EditBlog
            }
          ]
        },
        {
          path : 'category-project',
          name : 'category project',
          component : ListCategoryProject
        },
        {
          path: '/project',
          redirect: '/project/index',
          name: 'Project',
          component: {
            render (c) { return c('router-view') }
          },
          children: [
            {
              path : 'add',
              name : 'Add Blog',
              component : AddProject
            },
            {
              path : 'index',
              name : 'List Blog',
              component : listProject
            },
            {
              path : 'edit',
              name : 'Edit Blog',
              component : EditProject
            }
          ]
        },
        {
          path: '/products',
          redirect: '/products/list',
          name: 'Products',
          component: {
            render (c) { return c('router-view') }
          },
          children: [
            {
              path : 'add',
              name : 'Add Products',
              component : AddProducts
            },
            {
              path : 'list',
              name : 'List Products',
              component : ListProducts
            },
            {
              path : 'edit/:id',
              name : 'Edit Products',
              component : EditProducts
            }
          ]
        },
        {
          path: '/category',
          redirect: '/category/list',
          name: 'Category',
          component: {
            render (c) { return c('router-view') }
          },
          children: [
            {
              path : 'list',
              name : 'Show Category',
              component : ListCategory
            },
            {
              path : 'edit/:id',
              name : 'Edit Category',
              component : EditCategory
            }
          ]
        },
        {
          path: '/order',
          redirect: '/order/list',
          name: 'Order',
          component: {
            render (c) { return c('router-view') }
          },
          children: [
            {
              path : 'list',
              name : 'List orders',
              component : ListOrders
            }
          ]
        },
        {
          path: '/langs',
          redirect: '/langs/list',
          name: 'Langs',
          component: {
            render (c) { return c('router-view') }
          },
          children: [
            {
              path : 'list',
              name : 'List langs',
              component : ListLangs
            }
          ]
        },
        {
          path: '/setting',
          redirect: '/setting/List',
          name: 'Setting Web',
          component: {
            render (c) { return c('router-view') }
          },
          children: [
            {
              path : '/setting/add',
              name : 'Setting New',
              component : AddSetting
            },
            {
              path : '/setting/list',
              name : 'Show Setting',
              component : ListSetting
            },
            {
              path : '/setting/edit',
              name : 'Edit Setting',
              component : EditSetting
            },
          ]
        }

      ]
    },
    { 
      path: '/pages',
      redirect: '/pages/404',
      name: 'Pages',
      component: {
        render (c) { return c('router-view') }
      },
      children: [
        {
          path: '404',
          name: 'Page404',
          component: Page404
        },
        {
          path: '500',
          name: 'Page500',
          component: Page500
        },
        {
          path: 'login',
          name: 'Login',
          component: Login
        },
        {
          path: 'register',
          name: 'Register',
          component: Register
        }
      ]
    },
  ];

export default new VueRouter({
    mode: 'hash', // Demo is living in GitHub.io, so required!
    //mode: 'history', // Demo is living in GitHub.io, so required!
    linkActiveClass: 'open active',
    scrollBehavior: () => ({ y: 0 }),
    routes: routes
});