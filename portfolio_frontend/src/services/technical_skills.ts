import { type TechnicalSkill } from '../types/technical_skill';
import { type Error } from '../types/error';

import lang from "../i18n/languageService";

import { API_URL } from '../utils/constants';
import { saveError } from '../utils/save_error';

export const getTechnicalSkills = async (): Promise<TechnicalSkill[]> => {
    try{
        const response = await fetch(`${API_URL}/technical-skills`);
        const data = await response.json();
        const technicalSkills = data.data as Array<TechnicalSkill>;
        return technicalSkills;
    }catch(e){
        const error: Error = {
            title: lang.error.tech_skills,
            message: e.message,
            date: new Date()
        }
        
        saveError(error);

        throw e;
    }

}