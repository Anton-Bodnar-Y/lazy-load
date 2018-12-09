<template>
    <div class="container">
        <button v-on:click="onEnlargeText">{{ qwert }}</button>
		
		
		<ul>
			<div class="containerList">
				<li class="art-block" v-for="result in results">{{ result.title }}</li>
			</div>
		</ul>
		
		<div id="qwerty">6d5fg4d6f5g</div>
		
    </div>
</template>

<script>
    export default {
        mounted() {
            this.onEnlargeText(this.defaultOffset, this.defaultLimit);
        },
		
		created () {
			window.addEventListener('scroll', this.scrollFunction);
		},
		destroyed () {
			window.removeEventListener('scroll', this.scrollFunction);
		},
		
		data: function () {
			return {
				qwert: 'qwert',
				results: [],
				defaultOffset: 0,
				defaultLimit: 5,
				current: true,
				countRowTotal: 0,
				countRowThis: 0,
			}
		},
		methods: {
			onEnlargeText: function (defaultOffset, defaultLimit) {
				axios.get('/public/get-article/' + defaultOffset + '/' + defaultLimit).then(response => {
					//console.log(response.data[0]);
					console.log(response.data[1]);
					
					this.countRowTotal = response.data[0];
					this.countRowThis = response.data[1].length;
					
					//console.log(response.data[1].length);
					
					this.results = response.data[1];
					
					this.current = true;
				})
			},
			scrollFunction: function() {
				var windowHeight = window.innerHeight;
				var positionElement = document.getElementById('qwerty').getBoundingClientRect().top;
				
				if ((windowHeight > (positionElement+30)) && (this.current === true) && (this.countRowThis < this.countRowTotal)) {
					this.current = false;
					
					this.defaultLimit += 2;
					
					this.onEnlargeText(this.defaultOffset, this.defaultLimit);
				}
			},
		},
    }
</script>

<style>
.art-block {
	height: 150px;
	background: #7e7e7e;
	color: #fff;
	width: 300px;
	margin: 5px auto;
}
</style>