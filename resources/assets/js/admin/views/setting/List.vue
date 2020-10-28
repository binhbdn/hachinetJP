<template>
	<div>
    <div class="card card-block">
    	<div class="card-head">
		  <router-link :to="{ path: '/setting/add' }" class="btn btn-success pull-right">Thêm mới <i class="fa fa-plus"></i></router-link>
	    </div>
		<div class="table-responsive">
		  <table class="table">
		    <thead>
		      <tr>
		        <th>STT</th>
		        <th>ID</th>
		        <th>Logo</th>
		        <th>Tiêu đề công ty</th>
		        <th>Email công ty</th>
		        <th>Phone công ty</th>
		        <th>Date Create</th>
		        <th>Status</th>
		        <th>Hoạt động</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr v-for="(item,index) in listSetting">
		        <th>{{index + 1}}</th>
		        <td>{{ item.id }}</td>
		        <td>
                    <div v-if="item.logo !== ''">
                       <img :src="'/upload/setting/' + item.logo" class="img-circle" width="35" height="35" />
                    </div>
                    <div v-else>
                      <img :src="'../upload/setting/1531908563.devworkvn-png-beta.png'" class="img-circle" width="25" height="20" />
                    </div>
                </td>
		        <td>{{ item.from_name }}</td>
                <td>{{ item.from_email }}</td>
                <td>{{ item.company_phone }}</td>
                <td>{{ item.created_at }}</td>
                <td>
                  <label v-if="item.status == 1" class="label label-table label-success">Đã kích hoạt</label>
                  <label v-if="item.status == 0" class="label label-table label-danger">Chưa kích hoạt</label>
                </td>
                <td>
                	<div class="text-center">
                    <router-link :to="{ path: '/setting/edit', query: { edit: item.id} }" class="btn btn-success"><i class="fa fa-edit"></i></router-link>
                    <a href="#" @click="delete_item(item.id,item.logo)" class="btn btn-warning"><i class="fa fa-trash"></i></a>
                  </div>
                </td>
		      </tr>
		    </tbody>
		  </table>
		</div>
	</div>
	</div>
</template>
<script>
	import swal from 'sweetalert2/dist/sweetalert2.js'
    import 'sweetalert2/src/sweetalert2.scss'
	export default{
    data(){
      return {
      	listSetting: [],
      }
    },
    methods:{
    	fetchData() {
    		axios.get('api/settings/index').then(response => {
	            this.listSetting = response.data.data.listSetting;
	        });
    	},
    	delete_item(id, logo){
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
          axios.post('api/settings/delete', {'id': id, 'logo': logo}).then(response => {
            $this.fetchData();
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
          })
        }
      }, function(dismiss) {
        if (dismiss === 'cancel') {
          swal(
            'Cancelled',
            'Your post is safe :)',
            'error'
          );
        }
      });
      },
    },
    mounted(){
      this.fetchData();
    },
  }
</script>