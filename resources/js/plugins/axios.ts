import axios from "axios"

export default {
    install: (app, options) => {
      // inject a globally available $translate() method
      const axiosInstance = axios.create({
            // headers:{
            //     'Accept' : 'application/json',
            //     // 'X-Requested-With': 'XMLHttpRequest',
            // }
        }) 
        console.log('plugin', options);
      
        app.config.globalProperties.$axios = axiosInstance;
    }
  }