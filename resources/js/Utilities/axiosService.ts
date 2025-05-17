import axios, { Axios, AxiosError } from "axios";
import Swal from "sweetalert2";
import { ApiResponseInterface } from "@/Interface/ApiInterface";


export class AxiosHandler{
    static errorResponseHandler(error: AxiosError<ApiResponseInterface>){
        const data = error.response?.data;
        if(data?.message){
            const msg = data.message?.split("|");
            let msgHtml = "";
            msg?.forEach(ms => {
                msgHtml += ms + "<br>" ;
            });
            console.log(msgHtml);
            Swal.fire({
                title: "Error",
                html: msgHtml,
                icon: "error",
            })
        }else{
            Swal.fire({
                title: "Error",
                text: error.message,
                icon: "error",
            })
        }
        
    }
}

const axiosService = axios.create();

export default axiosService;