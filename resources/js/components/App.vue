 <template>
    <div class="h-screen bg-white">
        <div class="flex">
            <div class="bg-gray-200 pl-6 h-screen border-r-2 border-gray-400 w-48">
                <nav class="pt-4">
                    <router-link to="/">
                        <svg class="fill-current text-blue-600 w-12 h-12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M3.9 4.2c-.5 0-.8.3-.8.8s.4.8.8.8c.5 0 .8-.4.8-.8.1-.5-.3-.8-.8-.8zM3.3 18.6c0 1.4-.2 2.1-1.5 2.1-.3 0-.7 0-.9-.1l-.3 1.1c.3.1.7.2 1.1.2 1.9 0 2.7-1.2 2.7-3.2V8.1H3.3v10.5zM9.4 17.5c1.4 0 2.3-.4 3-1.2.8-1 1.1-2.1 1.1-3.8 0-1.4-.2-2.7-1-3.5-.6-.7-1.5-1.1-2.9-1.1s-2.3.4-3 1.2c-.8 1-1.1 2.2-1.1 3.8 0 1.5.2 2.6 1 3.5.6.7 1.5 1.1 2.9 1.1zM7.5 9.7c.3-.4.9-.8 2-.8 1 0 1.6.3 1.9.7.5.6.7 1.7.7 2.9s-.2 2.4-.7 3.1c-.3.4-.9.8-2 .8-1 0-1.6-.3-1.9-.7-.5-.6-.7-1.6-.7-2.9 0-1.2.2-2.4.7-3.1zM15 14.4c0 2.1.4 3.1 2.5 3.1.6 0 1.3-.1 1.8-.2l-.1-1c-.5.1-1 .2-1.5.2-1.4 0-1.5-.6-1.5-2.1v-5h3V8.3h-3v-3l-1.2.2v2.7h-1.8v1.1H15v5.1zM6 18h17v1H6z"/>
                        </svg>
                    </router-link>

                    <p class="text-gray-500 uppercase text-xs pt-12 font-bold">Create</p>

                    <router-link class="flex items-center py-2 hover:text-blue-600 text-sm" to="/contacts/create">
                        <svg viewBox="0 0 24 24" class="fill-current text-blue-600 w-5 h-5"><path d="M23.3 11.9c0 .9-.6 1.4-1.4 1.4h-8.5v8.5c0 .9-.6 1.4-1.4 1.4s-1.4-.6-1.4-1.4v-8.5H2c-.9 0-1.4-.6-1.4-1.4 0-.9.6-1.4 1.4-1.4h8.5V1.9c0-.9.6-1.4 1.4-1.4s1.4.6 1.4 1.4v8.5h8.5c.9 0 1.5.6 1.5 1.5z"/></svg>
                        <div class="tracking-wide pl-3">Add New</div>
                    </router-link>

                    <p class="text-gray-500 uppercase text-xs pt-12 font-bold">General</p>
                        <router-link class="flex items-center py-2 hover:text-blue-600 text-sm" to="/contacts">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="fill-current text-blue-600 w-5 h-5"><path class="st0" d="M20 2h-1V1c0-.6-.4-1-1-1s-1 .4-1 1v1h-4V1c0-.6-.4-1-1-1s-1 .4-1 1v1H7V1c0-.6-.4-1-1-1S5 .4 5 1v1H4C1.8 2 0 3.8 0 6v14c0 2.2 1.8 4 4 4h16c2.2 0 4-1.8 4-4V6c0-2.2-1.8-4-4-4zM4 4h1v1c0 .6.4 1 1 1s1-.4 1-1V4h4v1c0 .6.4 1 1 1s1-.4 1-1V4h4v1c0 .6.4 1 1 1s1-.4 1-1V4h1c1.1 0 2 .9 2 2v2H2V6c0-1.1.9-2 2-2zm16 18H4c-1.1 0-2-.9-2-2V10h20v10c0 1.1-.9 2-2 2zM8 14c0 .6-.4 1-1 1H5c-.6 0-1-.4-1-1s.4-1 1-1h2c.6 0 1 .4 1 1zm6 0c0 .6-.4 1-1 1h-2c-.6 0-1-.4-1-1s.4-1 1-1h2c.6 0 1 .4 1 1zm6 0c0 .6-.4 1-1 1h-2c-.6 0-1-.4-1-1s.4-1 1-1h2c.6 0 1 .4 1 1zM8 18c0 .6-.4 1-1 1H5c-.6 0-1-.4-1-1s.4-1 1-1h2c.6 0 1 .4 1 1zm6 0c0 .6-.4 1-1 1h-2c-.6 0-1-.4-1-1s.4-1 1-1h2c.6 0 1 .4 1 1zm6 0c0 .6-.4 1-1 1h-2c-.6 0-1-.4-1-1s.4-1 1-1h2c.6 0 1 .4 1 1z"/></svg>
                            <div class="tracking-wide pl-3">Contacts</div>
                        </router-link>
                        <router-link class="flex items-center py-2 hover:text-blue-600 text-sm" to="/birthdays">
                            <svg viewBox="0 0 24 24" class="fill-current text-blue-600 w-5 h-5"><path fill-rule="evenodd" d="M12.1 6.8c1.2 0 2.1-1 2.1-2.1 0-.4-.1-.8-.3-1.1L12.1.5l-1.8 3.1c-.2.3-.3.6-.3 1 0 1.2 1 2.2 2.1 2.2zm6.4 3.1h-5.3V7.8h-2.1v2.1H5.8c-1.8 0-3.2 1.4-3.2 3.2v9.5c0 .6.5 1.1 1.1 1.1h16.9c.6 0 1.1-.5 1.1-1.1v-9.5c0-1.8-1.5-3.2-3.2-3.2zm1 11.7H4.7v-3.2c1 0 1.9-.4 2.5-1.1l1.2-1.1 1.1 1.1c1.4 1.4 3.8 1.4 5.2 0l1.1-1.1 1.1 1.1c.7.7 1.6 1.1 2.5 1.1v3.2h.1zm0-4.8c-.5 0-1-.2-1.4-.6l-2.3-2.3-2.3 2.3c-.8.8-2.1.8-2.9 0l-2.3-2.3L6 16.2c-.4.4-.9.6-1.4.6v-3.7c0-.6.5-1.1 1.1-1.1h12.7c.6 0 1.1.5 1.1 1.1v3.7z" clip-rule="evenodd"/></svg>
                            <div class="tracking-wide pl-3">Birthday</div>
                        </router-link>
                    <p class="text-gray-500 uppercase text-xs pt-12 font-bold">Settings</p>
                        <router-link class="flex items-center py-2 hover:text-blue-600 text-sm" to="/">
                            <svg viewBox="0 0 24 24" class="fill-current text-blue-600 w-5 h-5"><path d="M21 3h-3.8c-.7 0-1.3-.6-1.3-1.3S16.5.4 17.2.4h5.1c.7 0 1.3.6 1.3 1.3v20.5c0 .7-.6 1.3-1.3 1.3h-5.1c-.7 0-1.3-.6-1.3-1.3 0-.7.6-1.3 1.3-1.3H21V3zm-6.9 7.7L8.6 5.2c-.5-.5-.6-1.3-.1-1.8s1.3-.5 1.8 0l7.7 7.7c.8.8.2 2.2-.9 2.2H1.8c-.7 0-1.3-.6-1.3-1.3 0-.7.6-1.3 1.3-1.3h12.3zm-1.6 4.8c.5-.5 1.3-.4 1.8.1s.4 1.3-.1 1.8l-3.8 3.2c-.5.5-1.3.4-1.8-.1-.6-.5-.5-1.3 0-1.7l3.9-3.3z"/></svg>
                            <div class="tracking-wide pl-3">Logout</div>
                        </router-link>
                </nav>
            </div>
            <div class="flex flex-col flex-1 h-screen overflow-y-hidden">
                <div class="h-16 px-6 border-b border-gray-400 flex items-center justify-between">
                    <div>
                        {{ title }}
                    </div>
                    <div class="flex items-center">
                        <SearchBar/>
                        <UserCircle :name="user.name"/>
                    </div>
                </div>
                <div class="flex flex-col overflow-y-hidden flex-1">
                    <router-view class="p-6 overflow-x-hidden"></router-view>
                </div>  
            </div>
        </div>
    </div>
</template>

<script>
    import UserCircle from './UserCircle';
    import SearchBar from '../components/SearchBar';

    export default {
        name: "App",

        props: [
            'user'
        ],

        components: {
            UserCircle, 
            SearchBar
        },

        created() {

            this.title = this.$route.meta.title;

            window.axios.interceptors.request.use(
                (config) => {
                    if(config.method === 'get') {
                        config.url= config.url + '?api_token=' + this.user.api_token;
                    } else {
                        config.data = {
                            ...config.data,
                            api_token: this.user.api_token
                        };
                    }
                    return config;
                }
            )
        },

        data: function() {
            return {
                title: '',
            }
        },

        watch: {
            $route(to,from) {
                this.title = to.meta.title;
            },

            title() {
                document.title = this.title + ' | Jot'
            }
        }
    }
</script>