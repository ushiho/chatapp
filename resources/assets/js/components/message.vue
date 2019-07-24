<template>
    <div>
        <li class="list-group-item col-6 rounded-lg" v-bind:class="className"><slot></slot></li>
        <small class="badge offset-5" :class="classBadge">You</small>
    </div>
</template>

<script>
    export default {
        props: [
            'color',
        ],
        computed:{
            className: function(){
                return 'list-group-item-'+this.color;
            },
            classBadge(){
                return 'badge-'+this.color;
            },
        },
        mounted() {
            console.log('Component mounted.');
        }
    }
</script>
