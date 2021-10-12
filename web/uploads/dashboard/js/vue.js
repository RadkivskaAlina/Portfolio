const Dashbord = {
    template: '<div>Dashbord</div>',
    data: function(){
        return {
            title: 'Dashbord'
        };
    },
    methods: {
        
    }
};
const Profile = {template: '<div>Profile</div>'};
const Write = {template: '<div>Write</div>'};
const Calendar = {template: '<div>Calendar</div>'};
const Notes = {template: '<div>Notes</div>'};
const Comments = {template: '<div>Comments</div>'};
const Graphs = {template: '<div>Graphs</div>'};
const routes = [
    {path: '/profile', component: Profile},
    {path: '/write', component: Write},
    {path: '/calendar', component: Calendar},
    {path: '/notes', component: Notes},
    {path: '/comments', component: Comments},
    {path: '/graphs', component: Graphs},
    {path: '/', component: Dashbord},
];
const router = new VueRouter({
    routes
});
const app = new Vue({
   router,
   el: '#app', 
});