<template>
	<div class="modal" :class='openmodal'>
	  <div class="modal-background"></div>
	  <div class="modal-card">
	    <header class="modal-card-head">
	      <p class="modal-card-title">Update {{ list.name }}'s Details</p>
	      <button class="delete" aria-label="close" @click="close"></button>
	    </header>
	    <section class="modal-card-body">
	      <div class="field">
	      	<label for="" class="label">Name</label>
	      	<div class="control">
	      		<input type="text" class="input" :class="{'is-danger':errors.name}" placeholder="Name" v-model="list.name">
	      	</div>
	      	<small v-if="errors.name" class="has-text-danger">{{ errors.name[0] }}</small>
	      </div>

	      <div class="field">
	      	<label for="" class="label">Phone</label>
	      	<div class="control">
	      		<input type="number" class="input" :class="{'is-danger':errors.phone}" placeholder="Phone" v-model="list.phone">
	      		<small v-if="errors.phone" class="has-text-danger">{{ errors.phone[0] }}</small>
	      	</div>
	      </div>

	      <div class="field">
	      	<label for="" class="label">Email</label>
	      	<div class="control">
	      		<input type="email" class="input" :class="{'is-danger':errors.email}" placeholder="Email" v-model="list.email">
	      		<small v-if="errors.email" class="has-text-danger">{{ errors.email[0] }}</small>
	      	</div>
	      </div>

	    </section>
	    <footer class="modal-card-foot">
	      <button class="button is-success" @click='update'>Update</button>
	      <button class="button" @click='close'>Cancel</button>
	    </footer>
	  </div>
	</div>
</template>

<script>
	export default{
		props:['openmodal'],
		data(){
			return {
				list:{},
				errors:{

				}
			}
		},
		methods:{
			close(){
				this.$emit('closeRequest')
			},
			update(){
				axios.patch(`/phonebook/${this.list.id}`,this.$data.list).then((response)=> {
					this.close()
					// this.$parent.lists.push(this.$data.list)
				})
				.catch((error) => this.errors = error.response.data.errors)
			}
		}
	}
</script>