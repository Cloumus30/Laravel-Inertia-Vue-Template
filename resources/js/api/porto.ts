import axiosService, { AxiosHandler } from "@/Utilities/axiosService";
import { AxiosError, type AxiosResponse } from "axios";
import Swal from "sweetalert2";
import type { GenericObject } from "vee-validate";

class PortoApi {
    static async addPorto(formValues:GenericObject){
        try {
            const res = await axiosService.post('/api/project/add', formValues);
            return res;
        } catch (error) {
            if(error instanceof AxiosError){
                AxiosHandler.errorResponseHandler(error);
            }else{
                Swal.fire()
            }
        }        
    }
}

export default PortoApi
