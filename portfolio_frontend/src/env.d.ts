// @ts-ignore
/// <reference types="astro/client" />

interface ImportMetaEnv {
    readonly LANG: string;
    readonly RESOURCE_URL: string;
    readonly API_URL: string;
}

interface ImportMeta {
    readonly env: ImportMetaEnv;
}