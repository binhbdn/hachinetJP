<template>
    <div class="card">
        <div class="card-block">
                <div class="form-group">
                    <div class="card col-md-3 pull-left">
                        <div class="card-block">
                            <center class="m-t-30">
                            <label class="col-md-12">Logo</label>
                            <img v-if="logo != ''" :src="logo" class="img-circle" width="150" height="150" />
                            <div class="image-upload">
                                <label for="logoinput">
                                    <i style="cursor:pointer;font-size: 50px;" class="fa fa-image"></i>
                                </label>

                                <input id="logoinput" style="display:none" type="file" @change="onFilelogochange"/>
                            </div>
                            <small class="form-control-feedback">{{ this.messageImage }}</small>
                            </center>
                        </div>
                    </div>
                    <div class="card col-md-3 pull-left">
                        <div class="card-block">
                            <center class="m-t-30">
                            <label class="col-md-12">Logo header</label>
                            <img v-if="logoheader != ''" :src="logoheader" class="img-circle" width="150" height="150" />
                            <div class="image-upload">
                                <label for="logoheaderinput">
                                    <i style="cursor:pointer;font-size: 50px;" class="fa fa-image"></i>
                                </label>

                                <input id="logoheaderinput" style="display:none" type="file" @change="onFilelogoheaderchange"/>
                            </div>
                            <small class="form-control-feedback">{{ this.messageImage }}</small>
                            </center>
                        </div>
                    </div>
                    <div class="card col-md-3 pull-left">
                        <div class="card-block">
                            <center class="m-t-30">
                            <label class="col-md-12">Logo footer</label>
                            <img v-if="logofooter != ''" :src="logofooter" class="img-circle" width="150" height="150" />
                            <div class="image-upload">
                                <label for="logofooter-input">
                                    <i style="cursor:pointer;font-size: 50px;" class="fa fa-image"></i>
                                </label>

                                <input id="logofooter-input" style="display:none" type="file" @change="onFilelogofooterchange"/>
                            </div>
                            <small class="form-control-feedback">{{ this.messageImage }}</small>
                            </center>
                        </div>
                    </div>
                    <div class="card col-md-3 pull-left">
                        <div class="card-block">
                            <center class="m-t-30">
                            <label class="col-md-12">Favicon</label>
                            <img v-if="favicon != ''" :src="favicon" class="img-circle" width="150" height="150" />
                            <div class="image-upload">
                                <label for="favicon-input">
                                    <i style="cursor:pointer;font-size: 50px;" class="fa fa-image"></i>
                                </label>

                                <input id="favicon-input" style="display:none" type="file" @change="onFilefaviconchange"/>
                            </div>
                            <small class="form-control-feedback">{{ this.messageImage }}</small>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 pull-left">
                        <label class="col-md-12">Tiêu đề Website</label>
                        <input type="text" v-model="info_setting.seo_title" class="form-control form-control-line">
                        <small style="color:red;">{{ validation.firstError('info_setting.seo_title') }}</small>
                    </div>
                    <div class="col-md-4 pull-left">
                        <label class="col-md-12">Company Contact</label>
                        <input type="text" v-model="info_setting.company_contact" class="form-control form-control-line">
                        <small style="color:red;">{{ validation.firstError('info_setting.company_contact') }}</small>
                    </div>
                    <div class="col-md-4 pull-left">
                        <label class="col-md-12">Company Address</label>
                        <input type="text" v-model="info_setting.company_address" class="form-control form-control-line">
                        <small style="color:red;">{{ validation.firstError('info_setting.company_address') }}</small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 pull-left">
                        <label class="col-md-12">Company phone</label>
                        <input type="text" v-model="info_setting.company_phone" class="form-control form-control-line">
                        <small style="color:red;">{{ validation.firstError('info_setting.company_phone') }}</small>
                    </div>
                    <div class="col-md-4 pull-left">
                        <label class="col-md-12">Company Name</label>
                        <input type="text" v-model="info_setting.from_name" class="form-control form-control-line">
                        <small style="color:red;">{{ validation.firstError('info_setting.from_name') }}</small>
                    </div>
                    <div class="col-md-4 pull-left">
                        <label class="col-md-12">Company Email</label>
                        <input type="text" v-model="info_setting.from_email" class="form-control form-control-line">
                        <small style="color:red;">{{ validation.firstError('info_setting.from_email') }}</small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6 pull-left">
                        <label for="example-email" class="col-md-12">Seo Key Word</label>
                        <textarea v-model="info_setting.seo_keyword" style="width: 100%" rows="3"></textarea>
                        <small style="color:red;">{{ validation.firstError('info_setting.seo_keyword') }}</small>
                    </div>
                    <div class="col-md-6 pull-left">
                        <label for="example-email" class="col-md-12">Seo Description</label>
                        <textarea v-model="info_setting.seo_description" style="width: 100%" rows="3"></textarea>
                        <small style="color:red;">{{ validation.firstError('info_setting.seo_description') }}</small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 pull-left">
                        <label class="col-md-12">Link Facebook</label>
                        <input type="text" v-model="info_setting.facebook" class="form-control form-control-line">
                        <small style="color:red;">{{ validation.firstError('info_setting.facebook') }}</small>
                    </div>
                    <div class="col-md-4 pull-left">
                        <label class="col-md-12">Link Intragam</label>
                        <input type="text" v-model="info_setting.intragam" class="form-control form-control-line">
                        <small style="color:red;">{{ validation.firstError('info_setting.intragam') }}</small>
                    </div>
                    <div class="col-md-4 pull-left">
                        <label class="col-md-12">Link Twitter</label>
                        <input type="text" v-model="info_setting.twitter" class="form-control form-control-line">
                        <small style="color:red;">{{ validation.firstError('info_setting.twitter') }}</small>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4 pull-left">
                        <label class="col-md-12">google</label>
                        <input type="text" v-model="info_setting.google" class="form-control form-control-line">
                        <small style="color:red;">{{ validation.firstError('info_setting.google') }}</small>
                    </div>
                    <div class="col-md-4 pull-left">
                        <label class="col-md-12">Copyright Web</label>
                        <input type="text" v-model="info_setting.copyright_text" class="form-control form-control-line">
                        <small style="color:red;">{{ validation.firstError('info_setting.copyright_text') }}</small>
                    </div>
                    <div class="col-md-4 pull-left">
                        <label class="col-md-12">Footer text Web</label>
                        <input type="text" v-model="info_setting.footer_text" class="form-control form-control-line">
                        <small style="color:red;">{{ validation.firstError('info_setting.footer_text') }}</small>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-12">Google Analytics</label>
                    <div class="col-md-12">
                        <textarea id="blog_content" v-model="info_setting.google_analytics" style="width: 100%"></textarea>
                    </div>
                    <small style="color:red;">{{ validation.firstError('info_setting.google_analytics') }}</small>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <button class="btn btn-success"  @click="create">Tạo mới</button>
                    </div>
                </div>
        </div>
    </div>
</template>
<style>
    #edit_image{
        position: relative;
        color: #fff;
        left: -90px;
        bottom: -60px;
        z-index: 9999999;
        font-size: 25px;
        cursor: pointer;

    }
.form-group {
    margin-bottom: 15px;
    width: 100%;
    float: left;
}
</style>
<script>
    var Vue = require('vue');
    var SimpleVueValidation = require('simple-vue-validator');
    var Validator = SimpleVueValidation.Validator;
    Vue.use(SimpleVueValidation);
	import Cleave from 'vue-cleave'
    import swal from 'sweetalert2/dist/sweetalert2.js'
    import 'sweetalert2/src/sweetalert2.scss'
	export default {
		data(){
			return{
				info_setting: '',
                messageImage: '',
              	logo: '',
                logo_req: '',
                logoheader: '',
                logoheader_req: '',
                logofooter: '',
                logofooter_req: '',
                favicon: '',
                favicon_req: '',
                info_setting:{
                    seo_title: '',
                    seo_keyword: '',
                    seo_description: '',
                    company_contact: '',
                    company_address: '',
                    company_phone: '',
                    from_name: '',
                    from_email: '',
                    facebook: '',
                    twitter: '',
                    google: '',
                    copyright_text: '',
                    footer_text: '', 
                    google_analytics: '', 
                },
			}
		},
		components:{
			Cleave,
		},
        validators:{
            'info_setting.seo_title': function(seo_title){
                return Validator.value(seo_title).required('Bắt buộc nhập').minLength(4, 'Ít nhất 4 ký tự');
            },
            'info_setting.seo_keyword': function(seo_keyword){
                return Validator.value(seo_keyword).required('Bắt buộc nhập').minLength(4, 'Ít nhất 4 ký tự');
            },
            'info_setting.seo_description': function(seo_description){
                return Validator.value(seo_description).required('Bắt buộc nhập');
            },
            'info_setting.company_contact': function(company_contact){
                return Validator.value(company_contact).required('Bắt buộc nhập');
            },
            'info_setting.company_address': function(company_address){
                return Validator.value(company_address).required('Bắt buộc nhập');
            },
            'info_setting.company_phone': function(company_phone){
                return Validator.value(company_phone).required('Bắt buộc nhập');
            },
            'info_setting.from_name': function(from_name){
                return Validator.value(from_name).required('Bắt buộc nhập');
            },
            'info_setting.from_email': function(from_email){
                return Validator.value(from_email).required('Bắt buộc nhập');
            },
        },
		methods:{
            create:function(){
                let $this = this;
                this.$validate()
                  .then(function (success) {
                    if(success == true)
                    {
                        var sendingForm = [];
                        sendingForm.push($this.info_setting);
                        var fileData = new FormData();
                        fileData.append('storePost', JSON.stringify(sendingForm));
                        fileData.append('logo', $this.logo_req);
                        fileData.append('logoheader', $this.logoheader_req);
                        fileData.append('logofooter', $this.logofooter_req);
                        fileData.append('favicon', $this.favicon_req);
                        axios.post('api/settings/addSetting', fileData).then(response => {
                            let data = response.data;
                            if(data.msg.success)
                            {
                              $this.$router.push('/setting/list');
                              swal(
                                'Add setting!',
                                data.msg.success,
                                'success'
                              );
                            }
                            else if(data.msg.error)
                            {
                              swal(
                                'Add setting!',
                                data.msg.error,
                                'error'
                              );
                            }
                        });
                    }
                    else
                    {
                      swal(
                        'Add setting!',
                        'Bạn chưa nhập đủ các trường yêu cầu',
                        'error'
                      );
                    }
                  });

            },
            'onFilelogochange': function(e){
                var logo_s = $('#logoinput')[0].files[0];
                this.logo_req = logo_s;
                var files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createlogo(files[0]);
              },
              'createlogo': function(file){
                var logo = new Image();
                  var reader = new FileReader();
                  var vm = this;
                  reader.onload = (e) => {
                    vm.logo = e.target.result;
                  };
                  reader.readAsDataURL(file);
                },
            'onFilelogoheaderchange': function(e){
                var logoheader_s = $('#logoheaderinput')[0].files[0];
                this.logoheader_req = logoheader_s;
                var files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createlogoheader(files[0]);
              },
              'createlogoheader': function(file){
                var logoheader = new Image();
                  var reader = new FileReader();
                  var vm = this;
                  reader.onload = (e) => {
                    vm.logoheader = e.target.result;
                  };
                  reader.readAsDataURL(file);
                },
            'onFilelogofooterchange': function(e){
                var logofooter_s = $('#logofooter-input')[0].files[0];
                this.logofooter_req = logofooter_s;
                var files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createlogofooter(files[0]);
              },
              'createlogofooter': function(file){
                var logofooter = new Image();
                  var reader = new FileReader();
                  var vm = this;
                  reader.onload = (e) => {
                    vm.logofooter = e.target.result;
                  };
                  reader.readAsDataURL(file);
                },
            'onFilefaviconchange': function(e){
                var favicon_s = $('#favicon-input')[0].files[0];
                this.favicon_req = favicon_s;
                var files = e.target.files || e.dataTransfer.files;
                if (!files.length)
                    return;
                this.createfavicon(files[0]);
              },
              'createfavicon': function(file){
                var favicon = new Image();
                  var reader = new FileReader();
                  var vm = this;
                  reader.onload = (e) => {
                    vm.favicon = e.target.result;
                  };
                  reader.readAsDataURL(file);
                },
		},
	}
</script>