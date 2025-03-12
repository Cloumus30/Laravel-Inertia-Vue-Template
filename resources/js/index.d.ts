import type { AxiosInstance } from "axios";

declare global {
    interface Window{
        axios: AxiosInstance
    }
}

declare module 'vue' {
    interface ComponentCustomProperties {
        
    }
}

declare module '@inertiajs/core' {
    interface PageProps extends InertiaPageProps, AppPageProps {}
}