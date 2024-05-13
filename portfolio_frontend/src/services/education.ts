import { type Education } from '../types/education';
import { type ErrorRegister } from '../types/error_register';
import lang from "../i18n/languageService";
import { API_URL } from '../utils/constants';
import { saveError } from '../utils/save_error';

/**
 * Function to get all educations from the API
 * @returns {Promise<Education[]>} educations - Return a promise with an array of educations
 */
export const getEducations = async (): Promise<Education[]> => {
    try{
        // Fetch data from the API and return it
        const response = await fetch(`${API_URL}/educations`);
        const data = await response.json();
        const education = data.data as Array<Education>;
        return education;

    }catch(e: any){
        // If an error occurs, save it before throwing it
        const error: ErrorRegister = {
            title: lang.error.education,
            message: e.message,
            date: new Date()
        }
        
        saveError(error);

        throw e;
    }

}