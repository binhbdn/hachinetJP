<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Add Blog
                    </div>
                    <div class="card-body">

                        <form novalidate="novalidate">
                            <div class="form-group">
                                <label for="title">Tiêu đề tin</label>
                                <input type="text" v-model="blog.title" class="form-control" placeholder="Title" />
                                <small style="color:red;">{{ validation.firstError('blog.title') }}</small>
                            </div>
                            <div class="form-group">
                                <label for="description">Mô tả gắn về bài viết</label>
                                <textarea rows="5" v-model="blog.description" class="form-control"></textarea>
                                <small style="color:red;">{{ validation.firstError('blog.description') }}</small>
                            </div>
                            <div class="form-group">
                                <label for="content">Nội dung bài viết</label>
                                <vue-editor v-model="blog.content"></vue-editor>
                                <small style="color:red;">{{ validation.firstError('blog.content') }}</small>
                            </div>
                            <div class="form-group">
                                <label for="images">Ảnh hiển thị</label>
                                <div class="file-upload">
                                <template v-if="image == ''">
                                  <div class="image-upload-wrap">
                                    <input class="file-upload-input" @change="onFilechange" type='file' accept="image/*" />
                                    <div class="drag-text">
                                      <h3>Click vào đây để upload ảnh hiển thị</h3>
                                    </div>
                                  </div>
                                  </template>  
                                  <template v-else="image != ''">
                                  <div class="file-upload-content">
                                    <img class="file-upload-image" v-if="image != ''" :src="image" alt="your image" />
                                    <div class="image-title-wrap">
                                      <button type="button" @click="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                    </div>
                                  </div>
                                  </template>
                                </div>
                                <small style="color:red;">{{ validation.firstError('image_req') }}</small>
                            </div>
                             <p v-if="errors.length">
                                <label for="description">Mô tả gắn về bài viết</label> 
                                <b>Please correct the following error(s):</b>
                                <div class="alert alert-danger" v-for="error in errors">{{ error }}</div>
                            </p>
                            <button type="button" class="btn btn-default" @click="addBlog()">Thêm mới</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import { Photoshop } from 'vue-color';
import axios from 'axios';
var SimpleVueValidation = require('simple-vue-validator');
var Validator = SimpleVueValidation.Validator;
Vue.use(SimpleVueValidation);
// require styles
export default {
    data() {
        return {
            errors : [],
            category : [],
            editorOption: '',
            image:'',
            image_req:'',
            blog : {
                title: '',
                description: '',
                content: '',
                images:'',
            }
        }
    },
    name: 'AddProducts',
    validators:{
        'blog.title': function(title){
            return Validator.value(title).required('Bắt buộc nhập').minLength(4, 'Ít nhất 4 ký tự');
        },
        'blog.description': function(description){
            return Validator.value(description).required('Bắt buộc nhập').minLength(4, 'Ít nhất 4 ký tự');
        },
        'blog.content': function(content){
            return Validator.value(content).required('Bắt buộc nhập');
        },
        'image_req': function(image_req){
            return Validator.value(image_req).required('Bắt buộc nhập');
        },
    },
    mounted() {
        this.getCategory();


        $('.image-upload-wrap').bind('dragover', function () {
                $('.image-upload-wrap').addClass('image-dropping');
            });
            $('.image-upload-wrap').bind('dragleave', function () {
                $('.image-upload-wrap').removeClass('image-dropping');
        });
    },
    components: {
        'photoshop-picker': Photoshop
    },
    methods : {
    'onFilechange': function(e){
        var image_s = $('.file-upload-input')[0].files[0];
        this.image_req = image_s;
        var files = e.target.files || e.dataTransfer.files;
        if (!files.length)
            return;
        this.createImage(files[0]);
      },
      'createImage': function(file){
        var image = new Image();
          var reader = new FileReader();
          var vm = this;
          reader.onload = (e) => {
            vm.image = e.target.result;
          };
          reader.readAsDataURL(file);
        },
        removeUpload(){
          this.image = '';
        },
        addBlog() {
            let $this = this;
        this.$validate()
          .then(function (success) {
            if(success == true)
            {
                var sendingForm = [];
                sendingForm.push($this.blog);
                var fileData = new FormData();
                fileData.append('storePost', JSON.stringify(sendingForm));
                fileData.append('image', $this.image_req);
                axios.post('/api/blog/store', fileData).then(response => {
                    let data = response.data;
                    if(data.msg.success)
                    {
                      swal(
                        'Add blog!',
                        data.msg.success,
                        'success'
                      );
                        $this.$router.push('/blog/index');
                    }
                    else if(data.msg.error)
                    {
                      swal(
                        'Add blog!',
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
        getCategory() {
            let self = this;
            // axios.get('/api/category/get')
            //     .then((response) => {
            //         self.category = response.data;
            //     });
        }
    }
}
</script>
<!-- <script>
function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
});
</script> -->
<style>
.file-upload {
  background-color: #ffffff;
  width: 600px;
  margin: 0 auto;
  padding: 20px;
}

.file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #1FB264;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.file-upload-btn:hover {
  background: #1AA059;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #1FB264;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #1FB264;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: #15824B;
  padding: 60px 0;
}

.file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 200px;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}

</style>