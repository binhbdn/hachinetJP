<template>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        List Cateogry
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</td>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Status</td>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-if="blog.length" v-for="blogs in blog" v-bind:key="blogs.id">
                                        <td>{{ blogs.id }}</td>
                                        <td>{{ blogs.images }}<img class="table-image" :src="'./upload/blog/' + blogs.images"></td>
                                        <td>{{ blogs.title }}</td>
                                        <td>
                                            <label class="switch switch-3d switch-success" v-if="blogs.status == 1" @click="updateds_status(blogs.id)">
                                              <input type="checkbox" class="switch-input" value="true" checked="checked"> 
                                              <span class="switch-label"></span> <span class="switch-handle"></span>
                                            </label>
                                            <label class="switch switch-3d switch-success" v-if="blogs.status == 0" @click="updateds_status(blogs.id)">
                                              <input type="checkbox" class="switch-input" value="true"> 
                                              <span class="switch-label" ></span> <span class="switch-handle"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <router-link :task="'123123'" :to="{ path: '/blog/edit', query: { edit: blogs.id} }" tag="button" class="btn btn-primary">Chỉnh sửa</router-link>
                                                <button type="button" @click="deleteCategory(blogs.id,blogs.images)" class="btn btn-danger">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr v-if=" ! blog.length">
                                        <td colspan="5" class="text-center">
                                            Records not found !
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>

import axios from 'axios';
export default {
    name: 'ListCateogry',
    data() {
        return {
            blog : []
        }
    },
    mounted() {
        this.getdataindex();
    },
    methods : {
        getdataindex() {
            let self = this;
            axios.get('/api/blog/index')
                .then((response) => {
                    self.blog = response.data.list_blog;
                    console.log(response.data.list_blog);
                });
        },
        updateds_status(id) {
          // confirm
          let $this = this;
          swal({
            title: 'Are you sure update?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, update it!'
          }).then((result) => {
            if (result.value) {
                axios.post('/api/blog/update_status',{'id': id}).then(response => {
                  this.getdataindex();
                  if(response.data.msg.success)
                  {
                     swal({
                      type: 'success',
                      title: 'Success',
                      text: response.data.msg.success,
                    })
                  }
                  else 
                  {
                     swal({
                      type: 'error',
                      title: 'Error',
                      text: response.data.msg.error,
                    })
                  }
                });
            }
            else {
              $this.getdataindex();
              swal(
              'Cancelled',
              'Your post is safe :)',
              'error'
              );
              }
          })
        },
        deleteCategory(id,images) {
                let $this = this;
                  swal({
                    title: 'Are you sure?',
                    text: 'You will not be able to recover this post!',
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'No, keep it',
                  }).then(function(result) {
                    if (result.value)
                    {
                      axios.post('/api/blog/delete', {'id': id, 'images': images}).then(response => {
                        $this.getdataindex();
                        let data = response.data;
                        if(data.msg.success)
                        {
                          swal(
                            'Deleted!',
                            data.msg.success,
                            'success'
                          );
                        }
                        else if(data.msg.error)
                        {
                          swal(
                            'Deleted!',
                            data.msg.error,
                            'error'
                          );
                        }
                      });
                    }
            });
        }
    }
}
</script>
<style>
 .table-image {
    width: 50px;
    height: 50px;
    float: left;
    padding: 5px;
 }
</style>
