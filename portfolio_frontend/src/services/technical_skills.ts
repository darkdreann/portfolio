import { type TechnicalSkill } from '../types/technical_skill';
import { type ErrorRegister } from '../types/error_register';
import lang from "../i18n/languageService";
import { API_URL } from '../utils/constants';
import { saveError } from '../utils/save_error';

/**
 * Function to get all technical skills from the API
 * @returns {Promise<TechnicalSkill[]>} - Return a promise with an array of technical skills
 */
export const getTechnicalSkills = async (): Promise<TechnicalSkill[]> => {
    try{
        // Fetch data from the API and return it
        const response = await fetch(`${API_URL}/technical-skills`);
        const data = await response.json();
        const technicalSkills = data.data as Array<TechnicalSkill>;
        return technicalSkills;
    }catch(e: any){
        // If an error occurs, save it before throwing it
        const error: ErrorRegister = {
            title: lang.error.tech_skills,
            message: e.message,
            date: new Date()
        }
        
        saveError(error);

        throw e;
    }

}