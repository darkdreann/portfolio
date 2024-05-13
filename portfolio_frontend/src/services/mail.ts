import { type Mail } from '../types/mail';
import { type ErrorRegister } from '../types/error_register';
import lang from "../i18n/languageService";
import { API_URL } from '../utils/constants';
import { saveError } from '../utils/save_error';

/**
 * Function to send an email to the API
 * @param mail email information to send
 * @returns {Promise<boolean>} - Return a promise with a boolean for the result of the operation
 */
export const sendMail = async (mail: Mail): Promise<boolean> => {
    try{
        // Send the email to the API
        const response = await fetch(`${API_URL}/contact-mail`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(mail)
        });

        // If the response is not ok, save the error
        if(!response.ok){
            const error: ErrorRegister = {
                title: lang.error.mail,
                message: await response.text(),
                date: new Date()
            }
            
            saveError(error);
        }

        return response.ok;

    }catch(e: any){
        // If an error occurs, save it before throwing it
        const error: ErrorRegister = {
            title: lang.error.mail,
            message: e.message,
            date: new Date()
        }
        
        saveError(error);

        throw e;
    }

}