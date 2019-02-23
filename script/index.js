Vue.component('navbar', {
    template:
    `
        <nav class="topnav">
            <a 
            v-for="(item,index) in items" 
            :key="index" 
            :href="item.link"  
            @click=changeTab(index)
            :class="{ active : item.isActive }"            
            >
                {{ item.name }}
            </a>
        </nav>
    `,
    data(){
        return{
            items:
            [
                {
                    name:"Home",
                    link:"#",  
                    isActive:true                  
                },
                {
                    name:"About us",
                    link:"#",   
                    isActive:false                                  
                },
                {
                    name:"Getting Started",
                    link:"#", 
                    isActive:false                                     
                }
                
            ],                
            currentTab:0
        }
    },
    methods: {
        changeTab(index){
            this.currentTab = index;
            this.items[this.currentTab].isActive = !this.items[this.currentTab].isActive
        }
    },
    computed: {
       
    },
})

new Vue({
    el:'#app',
    data:{
        
    }
});