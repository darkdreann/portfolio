import { type Error } from '../types/error';

import lang from "../i18n/languageService";

import { API_URL } from '../utils/constants';

export const saveError = async (error: Error): Promise<any> => {
    const request = fetch(`${API_URL}/errors`, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(error)
    }).catch(() => {
        console.log(lang.error.error_saving);
    });

    return request;
}