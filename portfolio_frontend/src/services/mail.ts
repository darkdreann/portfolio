import { type Mail } from '../types/mail';
import { type Error } from '../types/error';

import lang from "../i18n/languageService";

import { API_URL } from '../utils/constants';
import { saveError } from '../utils/save_error';

export const sendMail = async (mail: Mail): Promise<boolean> => {
    try{
        const response = await fetch(`${API_URL}/contact-mail`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(mail)
        });

        if(!response.ok){
            const error: Error = {
                title: lang.error.mail,
                message: await response.text(),
                date: new Date()
            }
            
            saveError(error);
        }

        return response.ok;

    }catch(e){
        const error: Error = {
            title: lang.error.mail,
            message: e.message,
            date: new Date()
        }
        
        saveError(error);

        throw e;
    }

}