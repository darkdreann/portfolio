import { type Experience } from '../types/experience';
import { type ErrorRegister } from '../types/error_register';
import lang from "../i18n/languageService";
import { API_URL } from '../utils/constants';
import { saveError } from '../utils/save_error';

/**
 * Function to get all experiences from the API
 * @returns {Promise<Experience[]>} - Return a promise with an array of experiences
 */
export const getExperiences = async (): Promise<Experience[]> => {
    try{
        // Fetch data from the API and return it
        const response = await fetch(`${API_URL}/experiences`);
        const data = await response.json();
        // Map the data to the Experience type
        const experiences: Experience[] = data.data.map((exp: any) => ({
            ...exp,
            start_date: new Date(exp.start_date),
            end_date: exp.end_date ? new Date(exp.end_date) : undefined,
        }));
        return experiences;

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