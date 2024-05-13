import { type SoftSkill } from '../types/soft_skill';
import { type ErrorRegister } from '../types/error_register';
import lang from "../i18n/languageService";
import { API_URL } from '../utils/constants';
import { saveError } from '../utils/save_error';

/**
 * Function to get all soft skills from the API
 * @returns {Promise<SoftSkill[]>} - Return a promise with an array of soft skills
 */
export const getSoftSkills = async (): Promise<SoftSkill[]> => {
    try{
        // Fetch data from the API and return it
        const response = await fetch(`${API_URL}/soft-skills`);
        const data = await response.json();
        const softSkills = data.data as Array<SoftSkill>;
        return softSkills;
    }catch(e: any){
        // If an error occurs, save it before throwing it
        const error: ErrorRegister = {
            title: lang.error.soft_skills,
            message: e.message,
            date: new Date()
        }
        
        saveError(error);

        throw e;
    }

}