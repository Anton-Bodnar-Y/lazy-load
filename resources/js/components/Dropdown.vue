<template>
	<ul>
		<li @click="current = !current" class="dr-parent">
			987987987
			
			<ul class="dr-menu" v-if="current">
				<li>
					<a href="">
						123123
					</a>
				</li>
				<li>
					<a href="">
						787878
					</a>
				</li>
			</ul>
			
		</li>
	</ul>
</template>

<script>
    export default {
        data() {
            return {
				current: false,
            }
        },
    }
</script>

<style>

.dr-parent {
  position: relative;
  width: 200px;
}
.dr-parent:hover {
  background: #e1e1e1;
  cursor: pointer;
}




.dr-menu {
  position: absolute;
  top: 30px;
  left: -50px;
  z-index: 100000;
}

.dr-menu > li > a {
  padding: 10px 30px;
  display: block;
  clear: both;
  font-weight: normal;
  line-height: 1.6;
  color: #333333;
  white-space: nowrap;
  text-decoration: none;
}

.dr-menu > li {
  // overflow: hidden;
  width: 100%;
  position: relative;
  margin: 0;
}

li {
    list-style: none;
}





.myMenuAccount {
	width: 150px;
	background: #456;
}
</style>
