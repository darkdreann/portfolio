import { type ErrorRegister } from '../types/error_register';
import lang from "../i18n/languageService";
import { API_URL } from '../utils/constants';

/**
 * Function to save an error in the API
 * @param error {ErrorRegister} - Error to save
 * @returns {Promise<any>} - Return a promise with the request response
 */
export const saveError = async (error: ErrorRegister): Promise<any> => {

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