<template>
        <div class="row">
            <div class="col-md-8">
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
                                        <th>Name</th>
                                        <th>Status</td>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-if="category.length" v-for="item in category" v-bind:key="item.id">
                                        <td>{{ item.id }}</td>
                                        <td>{{ item.name }}</td>
                                        <td>
                                            <label class="switch switch-3d switch-success" v-if="item.status == 1" @click="updateds_status(item.id)">
                                              <input type="checkbox" class="switch-input" value="true" checked="checked"> 
                                              <span class="switch-label"></span> <span class="switch-handle"></span>
                                            </label>
                                            <label class="switch switch-3d switch-success" v-if="item.status == 0" @click="updateds_status(item.id)">
                                              <input type="checkbox" class="switch-input" value="true"> 
                                              <span class="switch-label" ></span> <span class="switch-handle"></span>
                                            </label>
                                        </td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-edit" @click="getedit(item.id)">Chỉnh sửa</button>
                                                <button type="button" @click="deleteCategory(item.id,item.images)" class="btn btn-danger">Delete</button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr v-if=" ! category.length">
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
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Add new category
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                          <form novalidate="novalidate">
                              <div class="form-group">
                                  <label for="title">Tên danh mục</label>
                                  <input type="text" v-model="addcategory.title" class="form-control" placeholder="Title" />
                                  <small style="color:red;">{{ validation.firstError('addcategory.title') }}</small>
                              </div>
                              <button type="button" class="btn btn-default" @click="addcategorys()">Thêm mới</button>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div id="modal-edit" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Edit category</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form novalidate="novalidate">
                        <div class="form-group">
                            <label for="title">Tên danh mục</label>
                            <input type="text" v-model="editcategory.name" class="form-control" placeholder="Title" />
                        </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default clock-edit-modal" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" @click="updatecategorys()">Chỉnh sửa</button>
                  </div>
                </div>

              </div>
            </div>
        </div>

</template>

<script>

import axios from 'axios';
var SimpleVueValidation = require('simple-vue-validator');
var Validator = SimpleVueValidation.Validator;
Vue.use(SimpleVueValidation);
export default {
    name: 'ListCateogry',
    data() {
        return {
            category : [],
            addcategory: {title:''},
            editcategory:{},
        }
    },
    validators:{
        'addcategory.title': function(title){
            return Validator.value(title).required('Bắt buộc nhập').minLength(4, 'Ít nhất 4 ký tự');
        },
    },
    mounted() {
        this.getdataindex();
    },
    methods : {
        getdataindex() {
            let self = this;
            axios.get('/api/category-project/index')
                .then((response) => {
                    self.category = response.data.list_category;
                });
        },
        getedit(id) {
            let self = this;
            axios.post('/api/category-project/edit',{'id':id})
                .then((response) => {
                    self.editcategory = response.data.edit_category;
                });
        },
        addcategorys() {
            let $this = this;
        this.$validate()
          .then(function (success) {
            if(success == true)
            {
                var sendingForm = [];
                sendingForm.push($this.addcategory);
                var fileData = new FormData();
                fileData.append('storePost', JSON.stringify(sendingForm));
                axios.post('/api/category-project/store', fileData).then(response => {
                    let data = response.data;
                    $this.addcategory.title = '';
                    $this.getdataindex();
                    if(data.msg.success)
                    {
                      swal(
                        'Add Cateogry!',
                        data.msg.success,
                        'success'
                      );
                    }
                    else if(data.msg.error)
                    {
                      swal(
                        'Add Cateogry!',
                        data.msg.error,
                        'error'
                      );
                    }
                });
            }
            else
            {
              swal(
                'Add job!',
                'Bạn chưa nhập đủ các trường yêu cầu',
                'error'
              );
            }
          });
        },
        updatecategorys() {
            let $this = this;
                var sendingForm = [];
                sendingForm.push($this.editcategory);
                var fileData = new FormData();
                fileData.append('storePost', JSON.stringify(sendingForm));
                axios.post('/api/category-project/update', fileData).then(response => {
                    let data = response.data;
                    $('.clock-edit-modal').click();
                    $this.getdataindex();
                    if(data.msg.success)
                    {
                      swal(
                        'Add Cateogry!',
                        data.msg.success,
                        'success'
                      );
                    }
                    else if(data.msg.error)
                    {
                      swal(
                        'Add Cateogry!',
                        data.msg.error,
                        'error'
                      );
                    }
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
                axios.post('/api/category-project/update_status',{'id': id}).then(response => {
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
                      axios.post('/api/category-project/delete', {'id': id, 'images': images}).then(response => {
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
