import { type Education } from '../types/education';
import { type Error } from '../types/error';

import lang from "../i18n/languageService";

import { API_URL } from '../utils/constants';
import { saveError } from '../utils/save_error';

export const getEducations = async (): Promise<Education[]> => {
    try{
        const response = await fetch(`${API_URL}/educations`);
        const data = await response.json();
        const education = data.data as Array<Education>;
        return education;

    }catch(e){
        const error: Error = {
            title: lang.error.education,
            message: e.message,
            date: new Date()
        }
        
        saveError(error);

        throw e;
    }

}