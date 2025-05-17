import type { AxiosError, AxiosResponse } from "axios";

class ApiResponseInterface{
    data?: object | null;
    message?: string | null;
}

export {
    ApiResponseInterface,
}