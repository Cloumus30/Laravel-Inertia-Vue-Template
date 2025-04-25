import type { AxiosInstance } from "axios";

declare global {
    interface Window{
        axios: AxiosInstance,
        history: History
    }
}

declare module 'vue' {
    interface ComponentCustomProperties {
        
    }
}

declare module '@inertiajs/core' {
    interface PageProps extends InertiaPageProps, AppPageProps {}
}